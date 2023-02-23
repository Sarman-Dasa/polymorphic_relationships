<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\Request;

class OnetooneController extends Controller
{
    public function getDoctorData($id)
    {
        $data = Doctor::with('image')->find($id);
        return $data;
    }

    public function getPatientData($id)
    {
        $data = Patient::with('image')->find($id);
        return $data;
    }
}
