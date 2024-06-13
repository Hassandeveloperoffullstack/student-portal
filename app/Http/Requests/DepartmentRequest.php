<?php

namespace App\Http\Requests;

use App\Models\Department;
use Illuminate\Foundation\Http\FormRequest;

class DepartmentRequest extends FormRequest
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
        $model = Department::create($this->all());
        if($model){
            return $model;
        }
    }
    public function updatedData($id)
    {
        $grade = Department::find($id);
        $grade->update($this->all());
        if($grade){
            return $grade;
        }
    }
}
