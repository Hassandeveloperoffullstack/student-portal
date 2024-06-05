<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $class = DB::table('grades')->get();
        $i = 1;
        return view('admin/class/classes', compact(['class', 'i']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/class/create_class');
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
            $class = DB::table('grades')->insert([
                'name' => $request->name
            ]);
            return redirect()->route('class.show')->with('success', 'Class Created Successfully !');
        } else {
            return redirect()->route('class.create')->withInput()->withErrors($validator);
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
        $class = DB::table('grades')->where('id', $id)->get();
        // return $class;
        return view('admin/class/edit_class', ['classes' => $class]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $class = DB::table('grades')->where('id', $id)->update([
            'name' => $request->name
        ]);

        return redirect()->route('class.show')->with('success', 'Class Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $class = DB::table('grades')->where('id', $id)->delete();
        // $class = DB::table('classess')->find($id)->delete();
        // $class->delete();

        //   return $class ;
        return redirect()->route('class.show')->with('success', 'Class Deleted Successfully !');
    }
    public function logout()
    {
        Auth::logout();

        return redirect()->route('home');
    }
}
