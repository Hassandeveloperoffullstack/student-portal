<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Grade;
use App\Models\Session;
use App\Models\Student;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $student = Student::count();
        $session = Session::count();
        $subject = Subject::count();
        $department = Department::count();
        $grade = Grade::count();
        // dd($student);
        return view('admin.Admindashboard',compact(['student','department','grade','session','subject']));
    }
}
