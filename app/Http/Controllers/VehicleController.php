<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View as ViewView;
use Illuminate\Support\Facades\Log;


class VehicleController extends Controller
{

    // read vehicle
    public function loadAllVehicle(){
        // $user = Auth::user();
        // dd($user);
        $all_vehicle = Vehicle::where('user_id', Auth::id())->get();
        // dd($all_vehicle);
        return view('vehicle.viewvehicle', compact('all_vehicle'));
        // $all_vehicle = Vehicle::all();
        // return view('vehicle.viewvehicle',compact('all_vehicle'));
    }


    // create vehicle
    public function addVehicle(Request $request){
        $request->validate([
            'manufacturer' => 'required|string',
            'type' => 'required|string',
            'category' => 'required|string',
            'cc' => 'required|integer',
            'year' => 'required|integer'
        ]);
        $request_ = Auth::user();
        try {
            $new_vehicle = new Vehicle;
            $new_vehicle->manufacturer = $request->manufacturer;
            $new_vehicle->vehicle_type = $request->type;
            $new_vehicle->vehicle_category = $request->category;
            $new_vehicle->engine_capacity = $request->cc;
            $new_vehicle->vehicle_year = $request->year;
            $new_vehicle->user_id = $request_->id;
            $new_vehicle->save();

        return redirect('/ve')->with('success','Vehicle added successfully');
        } catch (\Exception $e) {
            \Illuminate\Support\Facades\Log::error("Vehicle add error: ".$e->getMessage());
            return back()->withErrors(['error' => 'Failed to add vehicle.']);
        }  
    }
   

    //edit vehicle
    public function loadEditVehicle(Request $request, $id){
        $item = Vehicle::find($id);
        return view('vehicle.editVehicle',compact("item"));
    }

    //update vehicle
    public function updateVehicle(Request $request, $id){
        $vehicle= Vehicle::find($id);
        
        $vehicle->manufacturer = $request->manufacturer;
        $vehicle->vehicle_type = $request->type;
        $vehicle->vehicle_category = $request->category;
        $vehicle->engine_capacity = $request->cc;
        $vehicle->vehicle_year = $request->year;
        $vehicle->update();

        return redirect('/ve')->with('success','Vehicle updated successfully');

    }    
    

    public function deleteVehicle($id){
        $vehicle= Vehicle::find($id);
        $vehicle->delete();
        return redirect('/ve')->with('success','Vehicle updated successfully');
    }


    //emisi
    public function calculate(){
        return view('vehicle.calculatevehicleemission');
    }

    public function calculateEmission(Request $request){
        $request->validate([
            'distance' => 'required|numeric',
            'FuelConsumption' => 'required|numeric',
            'radio' => 'required',
        ]);

        $distance = $request->input('distance');
        $fuelConsumption = $request->input('FuelConsumption');
        $engineType = $request->input('radio');

        $mesinMu = ['Diesel' => 2.68, 'Gasoline' => 2.31,];
        $emission = ($distance / 100) * $fuelConsumption * $mesinMu[$engineType];
        

        return view('vehicle.calculatevehicleemission',['emission' => $emission, 'roundedEmission' => round($emission),]);
    }
}
