<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    public function index()
    {
        $student = Student::with(['department', 'class', 'session', 'subject', 'user'])->get();
        return view('admin/students/index', compact('student'));
    }
    public function create()
    {
        $subject = Subject::get();
        return view('admin/students/create', compact('subject'));
    }
    public function store(StudentRequest $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|unique:users,email',
            'cnic' => 'required|unique:students,cnic',
            'f_cnic' => 'required|unique:students,f_cnic'
        ]);
        if ($validator->passes()) {
            if ($request->createData()) {
                return redirect()->route('student.show')->with('success', 'Student Created Successfully !');
            }
        }
    }
    public function show(string $id)
    {
        $students = Student::with(['department', 'class', 'session', 'subject', 'user'])->find($id);
        return view('admin/students/single', compact('students'));
    }
    public function edit(string $id)
    {
        $students = Student::with(['department', 'class', 'session', 'subject', 'user'])->find($id);
        $subject = Subject::get();
        $studentSubjectIds = $students->subject->pluck('id')->toArray();
        return view('admin/students/edit', compact(['students', 'subject', 'studentSubjectIds']));
    }
    public function update(StudentRequest $request, string $id)
    {
        if ($request->updatedData($id)) {
            return redirect()->route('student.show')->with('success', 'Student Updated Successfully !');
        }
    }
    public function destroy(string $id)
    {
        $student = Student::find($id);
        $image_path = public_path('storage/' . $student->image);
        if (file_exists($image_path)) {
            unlink($image_path);
        }
        $student->delete();
        return redirect()->route('student.show')->with('success', 'Student Deleted Successfully !');
    }
}
