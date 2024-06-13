<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use Spatie\Html\Facades\Html;

class DropdownService
{

    public static function department_dropdown()
    {
        $data = DB::table('departments')->pluck('name','id');

        return $data;
    }
    public static function class_dropdown()
    {
        $data = DB::table('grades')->pluck('name','id');
        return $data;
    }
    public static function session_dropdown()
    {
        $data = DB::table('sessions')->pluck('name','id');
        return $data;
    }
  
}
