<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use App\Models\PatientInfo;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;

class PatientController extends Controller
{
    public function index(){

        return Inertia::render('PatientProfile/Patient', [
            'patientProfile' => PatientInfo::all()->map(function($patient) {
                return [
                    'id'=> $patient->id,
                    'first_name'=> $patient->first_name,
                    'last_name'=> $patient->last_name,
                    'address'=> $patient->address,
                    'first_vaxx'=> $patient->first_vaxx,
                    'date_firstdose'=> $patient->date_firstdose,
                    'second_vaxx'=> $patient->second_vaxx,
                    'date_seconddose'=> $patient->date_seconddose,
                 
                ];
            })
        ]);
    }

    public function create(){

        return Inertia::render('Create');
    }

    public function store(){

        PatientInfo::create([
            'first_name'=> request::input('fName'),
            'last_name'=> request::input('lastName'),
            'address'=> request::input('address'),
            'first_vaxx'=> request::input('firstVaxx'),
            'date_firstdose'=> request::input('dateFirstDose'),
            'second_vaxx'=> request::input('secondVaxx'),
            'date_seconddose'=> request::input('dateSecondDose'),
          
        ]);

        return Redirect::route('patientProfile.index');
    }

    public function edit(PatientInfo $patientInfo){

       return Inertia::render('PatientProfile/Edit', [
        'patientInfo' => $patientInfo
       ]);
    }
    // public function edit(PatientInfo $patientInfo){

    //     $patientInfo = new PostResource($patientInfo);

    //     return inertia('PatientProfile/Edit', compact(patientInfo));
    //  }

    public function update(PatientInfo $patientInfo){

        $patientInfo->update([
            'first_name'=> request::input('fName'),
            'last_name'=> request::input('lastName'),
            'address'=> request::input('address'),
            'first_vaxx'=> request::input('firstVaxx'),
            'date_firstdose'=> request::input('dateFirstDose'),
            'second_vaxx'=> request::input('secondVaxx'),
            'date_seconddose'=> request::input('dateSecondDose')
        ]);
        return Redirect::route('patientProfile.index');
     }

     public function destroy(PatientInfo $patientInfo){

       $patientInfo->delete();
       return Redirect::route('patientProfile.index');
     }
    
}
