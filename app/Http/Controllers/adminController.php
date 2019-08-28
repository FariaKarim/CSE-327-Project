<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\{Food,Doctor,Ambulance,Medicine};
use Carbon\Carbon;
class adminController extends Controller
{
    public function viewHome(){
        $foods = Food::all();
       return view('admin.home',compact('foods'));
    }

     public function viewFormFood(){

          
       return view('admin.formFood');

    }

  
     public function submitFood(Request $request){
        $this->validate($request, [
         // as vehicle and driver will be taken as input
            "foodName" => "required",
            "calorie" => "required",
            "fat" => "required",
            "protein" => "required",
            "carbohydrate" => "required"
            //problem
            //"fit" => "required"
        ]);
       $foods=Food::create([
            'foodName' =>  $request->foodName,
            'calorie' =>  $request->calorie,
            'fat' =>  $request->fat,
            'protein' =>  $request->protein,
            'carbohydrate' =>  $request->carbohydrate
            
        ]);

        return back()->with(['success' => 'Saved Successfully']);
    }

    //doctor

    public function viewDoctor(){
        $doctors = Doctor::all();
       return view('admin.doctor',compact('doctors'));
    }

     public function viewFormDoctor(){

          
       return view('admin.formDoctor');

    }

  
     public function submitDoctor(Request $request){
        $this->validate($request, [
         // as vehicle and driver will be taken as input
            "doctorName" => "required",
            "doctorEmail" => "required",
            "chamAdd" => "required",
            "hospAdd" => "required",
            "contact" => "required",
            "specialized" => "required",
            "qualification" => "required",
            "gender" => "required",
            "age" => "required",
            "bloodGroup" => "required"
            //problem
            //"fit" => "required"
        ]);
       $foods=Doctor::create([
            'doctorName' => $request->doctorName,
            'doctorEmail' => $request->doctorEmail,
            'chamAdd' => $request->chamAdd,
            'hospAdd' => $request->hospAdd,
            'contact' => $request->contact,
            'specialized' => $request->specialized,
            'qualification' => $request->qualification,
            'gender' => $request->gender,
            'age' => $request->age,
            'bloodGroup' => $request->bloodGroup
            
            
        ]);

        return back()->with(['success' => 'Saved Successfully']);
    }

    //ambulance
    public function viewAmbulance(){
        $ambulances = Ambulance::all();
       return view('admin.ambulance',compact('ambulances'));
    }

     public function viewFormAmbulance(){

          
       return view('admin.formAmbulance');

    }

  
     public function submitAmbulance(Request $request){
        $this->validate($request, [
         // as vehicle and driver will be taken as input
            "ambulanceName" => "required",
            "contact" => "required",
            "weblink" => "required"
            //problem
            //"fit" => "required"
        ]);
       $ambulances=Ambulance::create([
            'ambulanceName' => $request->ambulanceName,
            'contact' => $request->contact,
            'weblink' => $request->weblink
            
            
            
        ]);

        return back()->with(['success' => 'Saved Successfully']);
    }


    //medicine
    public function viewMedicine(){
        $medicines = Medicine::all();
       return view('admin.medicine',compact('medicines'));
    }

     public function viewFormMedicine(){

          
       return view('admin.formMedicine');

    }

  
     public function submitMedicine(Request $request){
        $this->validate($request, [
         // as vehicle and driver will be taken as input
            "medicineName" => "required",
            "disease" => "required",
            "sideEffect" => "required",
            "group" => "required",
            "element" => "required",
            "barcode" => "required"
            
            //problem
            //"fit" => "required"
        ]);
       $medicines=Medicine::create([
            'medicineName' => $request->medicineName,
            'disease' => $request->disease,
            'sideEffect' => $request->sideEffect,
            'group' => $request->group,
            'element' => $request->element,
            'barcode' => $request->barcode
            
            
            
        ]);

        return back()->with(['success' => 'Saved Successfully']);
    }
}
