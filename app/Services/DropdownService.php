<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use Spatie\Html\Facades\Html;

class DropdownService
{
   
   

    public static function department_dropdown($id = null)
    {
        $department = DB::table('departments')->get();
        $data = [];
        foreach ($department as $dept) {
            $data[$dept->id] = $dept->name;
        }
        if (!is_null($id)) {
            $data = $data[$id];
        }
        return $data;
    }
    public static function class_dropdown(): array
    {
        $class = DB::table('grades')->get();

        $data = [];
        foreach ($class as $dept) {
            $data[$dept->id] = $dept->name;
        }
        return $data;
    }
    public static function session_dropdown(): array
    {
        $session = DB::table('sessions')->get();

        $data = [];
        foreach ($session as $dept) {
            $data[$dept->id] = $dept->name;
        }
        return $data;
    }
    public static function subject_dropdown(): array
    {
        $subject = DB::table('subjects')->get();

        $data = [];
        foreach ($subject as $dept) {
            $data[$dept->id] = $dept->name;
        }
        return $data;
    }
}
