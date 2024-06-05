<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $department = DB::table('departments')->get();
      $i=1;
        return view('admin/department/department',compact(['department','i']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/department/create_department');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required'
        ]);

        if ($validator->passes()) {
            $class = DB::table('departments')->insert([
               'name' =>$request->name
            ]);
            return redirect()->route('department.show')->with('success', 'Department Created Successfully !');
        }
        else{
            return redirect()->route('department.create')->withInput()->withErrors($validator);
        }

     

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // return $id;
        $department = DB::table('departments')->where('id',$id)->get();
        // return $department;
        return view('admin/department/edit_department',['department' => $department]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $department = DB::table('departments')->where('id', $id)->update([
            'name' => $request->name
        ]);

        return redirect()->route('department.show')->with('success', 'Department Updated Successfully !');

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      $class = DB::table('departments')->where('id',$id)->delete();
    // $class = DB::table('classess')->find($id)->delete();
    // $class->delete();

    //   return $class ;
        return redirect()->route('department.show')->with('success', 'Department Deleted Successfully !');


    }
}
