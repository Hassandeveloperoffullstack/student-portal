<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
  

    
    public function student(){
        return $this->belongsToMany(Subject::class, 'student_subjects', 'student_id', 'subject_id');
    }
    use HasFactory;
    protected $fillable = [
        'name'
    ];
}
