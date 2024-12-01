<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view('LogRegist.loginpage');   
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);
    
        // Correctly pass the $credentials array
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        return back()->with('loginError', 'Login failed!');
    }
    

    public function regis(){
        return view('LogRegist.registrationpage');   
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'email' => 'required|email:dns|unique:users,email',
            'name' => 'required',
            'password' => 'required', 
            'phone' => 'required',
        ]);
        User::create($validatedData);

        session()->flash('status', 'Task was successful!');

        // $request->session()->flash('Success', 'Registrasi berhasil!');
        
        return redirect('/');   
    }

    public function logout(Request $request){
        // dd('Logout reached!');
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function showProfile()
    {
        $user = Auth::user();

        // Check if user data exists before passing it to the view
        if (!$user) {
            abort(403, 'Unauthorized access');
        }

        // Pass the user data to the view
        return view('LogRegist.profilepage', compact('user'));
    }

    public function showEdit($id){
        $item = User::find($id);
        return view('LogRegist.editpage',compact("item"));
    }
    public function postEdit(Request $request, $id){
        $user= User::find($id);
        $request->validate([
            'email' => 'required|email:dns',
            'name' => 'required',
            'password' => 'required', 
            'phone' => 'required',
        ]);
        $user->name = $request->name;
        $user->password = $request->password;
        $user->email = $request->email;
        if(!$user->phone){
            $user->phone = $request->phone;
            $user->save();
        }
        else{
            $user->phone = $request->phone;
            $user->update();
        }
        return view('LogRegist.profilepage',compact('user'));

    }

    public function deleteUser($id){
        
        $user = User::find($id);  
        $user->delete();
        return redirect('/vision');
    }
}
