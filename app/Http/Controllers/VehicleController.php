<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\View\View as ViewView;
use Illuminate\Support\Facades\Log;


class VehicleController extends Controller
{
    public function loadAllVehicle(){
        $all_vehicle = Vehicle::all();
        return view('vehicle.viewvehicle',compact('all_vehicle'));
    }

    public function addVehicle(Request $request){
        $request->validate([
            'manufacturer' => 'required|string',
            'type' => 'required|string',
            'category' => 'required|string',
            'cc' => 'required|integer',
            'year' => 'required|integer'
        ]);
        try {
            $new_vehicle = new Vehicle;
            $new_vehicle->manufacturer = $request->manufacturer;
            $new_vehicle->vehicle_type = $request->type;
            $new_vehicle->vehicle_category = $request->category;
            $new_vehicle->engine_capacity = $request->cc;
            $new_vehicle->vehicle_year = $request->year;
            $new_vehicle->save();

        return redirect('/ve')->with('success','Vehicle added successfully');
        } catch (\Exception $e) {
            \Illuminate\Support\Facades\Log::error("Vehicle add error: ".$e->getMessage());
            return back()->withErrors(['error' => 'Failed to add vehicle.']);
        }  
    }
   
    public function loadEditVehicle(Request $request, $id){
        $item = Vehicle::find($id);
        return view('vehicle.editVehicle',compact("item"));
    }

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
}
