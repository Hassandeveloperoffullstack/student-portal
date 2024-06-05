<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
'department_id',
'class_id',
'session_id',
'address',
'zipcode',
'f_cnic',
 'f_name',
 'f_phone',
 'image',
'cnic',
'gender',
'city'
    ];

    public function department(){
        return $this->belongsTo(Department::class);
    }

    public function class(){
        return $this->belongsTo(Grade::class);
    }

    public function session(){
        return $this->belongsTo(Session::class);
    }
    public function subject(){
        return $this->belongsToMany(Subject::class, 'student_subjects', 'student_id', 'subject_id');
    }
    public function user(){
        return $this->hasOne(User::class);
    }
}
