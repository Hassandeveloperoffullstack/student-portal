<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    public function index()
    {
        $student = Student::with(['department', 'class', 'session', 'subject', 'user'])->get();
        $i = 1;
        return view('admin/students/student', compact(['student', 'i']));
    }

    public function create()
    {
        $subject = Subject::get();

        return view('admin/students/student_create', compact('subject'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'phone' => 'required',
            'department_id' => 'required',
            'class_id' => 'required',
            'session_id' => 'required',
            'address' => 'required',
            'zipcode' => 'required',
            'f_name' => 'required',
            'f_phone' => 'required',
            'cnic' => 'required|unique:students,cnic',
            'gender' => 'required',
            'password' => 'nullable',
            'image' => 'nullable',
            'f_cnic' => 'required|unique:students,f_cnic',
            'city' => 'required',
        ]);
        if(!empty($request->image))
        {
            $file = $request->file('image');
            $fileName = time() . '' . $file->getClientOriginalName();
            $filePath = $file->storeAs('images', $fileName, 'public');
        }
        else{
            if($request->gender == "Male" || $request->gender == "male")
            {
                $student_image = "images/student_boy.jpg";
            }
            else
            {
                $student_image = "images/student_girl.png";
            }
        }
       
        if ($validator->passes()) {
            $user = Student::create([
                'phone' => $request->phone,
                'department_id' => $request->department_id,
                'class_id' => $request->class_id,
                'session_id' => $request->session_id,
                'address' => $request->address,
                'zipcode' => $request->zipcode,
                'f_name' => $request->f_name,
                'f_phone' => $request->f_phone,
                'cnic' => $request->cnic,
                'gender' => $request->gender,
                'city' => $request->city,
                'f_cnic' => $request->f_cnic,
                'image' => !empty($request->password) ? $filePath : $student_image,

            ]);
            $user->user()->create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => !empty($request->password) ? $request->password : $request->cnic,

            ]);
            $subjects = $request->subject;
            if ($user->subject()->sync($subjects)) {
                return redirect()->route('student.show')->with('success', 'Student Created Successfully !');
            } else {
                return "error";
            }
        } else {
            return redirect()->route('student.create')->withInput()->withErrors($validator);
        }
    }

    public function show(string $id)
    {
        $students = Student::with(['department', 'class', 'session', 'subject', 'user'])->find($id);
        $i = 1;
        return view('admin/students/single_student', compact(['students', 'i']));
    }

    public function edit(string $id)
    {
        $students = Student::with(['department', 'class', 'session', 'subject', 'user'])->find($id);
        $subject = Subject::get();
        $studentSubjectIds = $students->subject->pluck('id')->toArray();
        return view('admin/students/student_edit', compact(['students', 'subject', 'studentSubjectIds']));
    }

    public function update(Request $request, string $id)
    {


        $student = Student::findOrFail($id);
        $student->phone = $request->phone;
        $student->department_id = $request->department_id;
        $student->class_id = $request->class_id;
        $student->session_id = $request->session_id;
        $student->address = $request->address;
        $student->zipcode = $request->zipcode;
        $student->f_name = $request->f_name;
        $student->f_phone = $request->f_phone;
        $student->cnic = $request->cnic;
        $student->gender = $request->gender;
        $student->f_cnic = $request->f_cnic;
        $student->city = $request->city;
        if (!empty($request->image)) {
            $image_path = public_path('storage/' . $student->image);

            if (file_exists($image_path)) {
                unlink($image_path);
            }
            $file = $request->file('image');
            $fileName = time() . '' . $file->getClientOriginalName();
            $filePath = $file->storeAs('images', $fileName, 'public');
            $student->image = $filePath;
        }
        $student->user()->updateOrCreate(
            [],
            [
                'name' => $request->name,
                'email' => $request->email,
                'password' => !empty($request->password) ? $request->password : $student->user->password,
            ]
        );
        $student->save();
        $subjects = $request->subject;
        if ($student->subject()->sync($subjects)) {
            return redirect()->route('student.show')->with('success', 'Student Updated Successfully !');
        } else {
            return "error";
        }
        return redirect()->route('student.show')->with('success', 'Student Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     */
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
