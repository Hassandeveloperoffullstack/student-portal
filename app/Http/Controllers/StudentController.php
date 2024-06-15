<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DataTables;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Student::with(['department', 'class', 'session', 'subject', 'user'])->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('session_name', function ($data) {
                    return $data->session ? $data->session->name : '';
                })
                ->addColumn('class_name', function ($data) {
                    return $data->class ? $data->class->name : '';
                })
                ->addColumn('name', function ($data) {
                    return $data->user ? $data->user->name : '';
                })
                ->addColumn('department_name', function ($data) {
                    return $data->department ? $data->department->name : '';
                })->make(true);
        }
        return view('admin/students/index');
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
