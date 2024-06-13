<?php

namespace App\Http\Requests;

use App\Models\Grade;
use Illuminate\Foundation\Http\FormRequest;

class GradeRequest extends FormRequest
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
        $model = Grade::create($this->all());
        if($model){
            return $model;
        }
    }
    public function updatedData($id)
    {
        $grade = Grade::find($id);
        $grade->update($this->all());
        if($grade){
            return $grade;
        }
    }
}
