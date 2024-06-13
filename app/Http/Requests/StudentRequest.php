<?php

namespace App\Http\Requests;

use App\Models\Student;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
        ];
    }
    public function createData()
    {
        if(!empty($this->image))
        {
            $file = $this->file('image');
            $fileName = time() . '' . $file->getClientOriginalName();
            $filePath = $file->storeAs('images', $fileName, 'public');
        }
        else{
            if($this->gender == "Male" || $this->gender == "male")
            {
                $student_image = "images/student_boy.jpg";
            }
            else
            {
                $student_image = "images/student_girl.png";
            }
        }
        $user = Student::create([
            'phone' => $this->phone,
            'department_id' => $this->department_id,
            'class_id' => $this->class_id,
            'session_id' => $this->session_id,
            'address' => $this->address,
            'zipcode' => $this->zipcode,
            'f_name' => $this->f_name,
            'f_phone' => $this->f_phone,
            'cnic' => $this->cnic,
            'gender' => $this->gender,
            'city' => $this->city,
            'f_cnic' => $this->f_cnic,
            'image' => !empty($this->password) ? $filePath : $student_image,

        ]);
        $user->user()->create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => !empty($this->password) ? $this->password : $this->cnic,

        ]);
        $subjects = $this->subject;
        if ($user->subject()->sync($subjects)) {
            return $user;
        } else {
            return "error";
        }
    }


    public function updatedData($id)
    {
        $student = Student::findOrFail($id);
        $student->phone = $this->phone;
        $student->department_id = $this->department_id;
        $student->class_id = $this->class_id;
        $student->session_id = $this->session_id;
        $student->address = $this->address;
        $student->zipcode = $this->zipcode;
        $student->f_name = $this->f_name;
        $student->f_phone = $this->f_phone;
        $student->cnic = $this->cnic;
        $student->gender = $this->gender;
        $student->f_cnic = $this->f_cnic;
        $student->city = $this->city;
        if (!empty($this->image)) {
            $image_path = public_path('storage/' . $student->image);

            if (file_exists($image_path)) {
                unlink($image_path);
            }
            $file = $this->file('image');
            $fileName = time() . '' . $file->getClientOriginalName();
            $filePath = $file->storeAs('images', $fileName, 'public');
            $student->image = $filePath;
        }
        $student->user()->updateOrCreate(
            [],
            [
                'name' => $this->name,
                'email' => $this->email,
                'password' => !empty($this->password) ? $this->password : $student->user->password,
            ]
        );
        $student->save();
        $subjects = $this->subject;
        if ($student->subject()->sync($subjects)) {
            return $student;
        } else {
            return "error";
        }

    }
}
