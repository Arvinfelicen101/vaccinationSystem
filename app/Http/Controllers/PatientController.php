<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\PatientInfo;

class PatientController extends Controller
{
    public function index(){

        return Inertia::render('PatientProfile/Patient', [
            'patientProfile' => PatientInfo::all()
        ]);
    }

    public function create(){

        return Inertia::render('Create');
    }

    
}
