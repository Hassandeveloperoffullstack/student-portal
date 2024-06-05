<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class SubjectController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subject = DB::table('subjects')->get();
      $i=1;
        return view('admin/subject/subject',compact(['subject','i']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/subject/create_subject');
        
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
            $subject = DB::table('subjects')->insert([
               'name' =>$request->name
            ]);
            return redirect()->route('subject.show')->with('success', 'Subject Created Successfully !');
        }
        else{
            return redirect()->route('subject.create')->withInput()->withErrors($validator);
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
        $subject = DB::table('subjects')->where('id',$id)->get();
        // return $department;
        return view('admin/subject/edit_subject',['subject' => $subject]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $subject = DB::table('subjects')->where('id', $id)->update([
            'name' => $request->name
        ]);

        return redirect()->route('subject.show')->with('success', 'Subject Updated Successfully !');

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      $subject = DB::table('subjects')->where('id',$id)->delete();
    // $subject = DB::table('subjectess')->find($id)->delete();
    // $subject->delete();

    //   return $subject ;
        return redirect()->route('subject.show')->with('success', 'Subject Deleted Successfully !');


    }
}
