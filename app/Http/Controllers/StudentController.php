<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        // Get all students
        // $students = Student::get();

        // get single student with id
        // $students = Student::find(2);
        // $students = Student::findOrFail(2);

        // Get profile's data with with() method
        //Lazy loading
        // $students = Student::findOrFail(2);
        // $profile = $students->profile;
        // $profile = $students->profile();

        // lazy eager loading
        //
        // get profile's data with with() method
        // $studentsProfile = Student::with('profile')->findOrFail(2);
        $students = Student::with('profile')->get();

        dd($students);
    }
}
