<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;

class ManytomanyController extends Controller
{
    public function getTeacherData($id){
        $data = Subject::find($id);
        return $data->teacher;
    }


    public function getStudentData($id){
        $data = Subject::find($id);
        return $data->student;
    }
}
