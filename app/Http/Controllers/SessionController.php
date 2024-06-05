<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $session = DB::table('sessions')->get();
      $i=1;
        return view('admin/session/session',compact(['session','i']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/session/create_session');
        
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
            $session = DB::table('sessions')->insert([
               'name' =>$request->name
            ]);
            return redirect()->route('session.show')->with('success', 'Session Created Successfully !');
        }
        else{
            return redirect()->route('session.create')->withInput()->withErrors($validator);
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
        $session = DB::table('sessions')->where('id',$id)->get();
        // return $department;
        return view('admin/session/edit_session',['session' => $session]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $session = DB::table('sessions')->where('id', $id)->update([
            'name' => $request->name
        ]);

        return redirect()->route('session.show')->with('success', 'Session Updated Successfully !');

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      $session = DB::table('sessions')->where('id',$id)->delete();
    // $session = DB::table('sessioness')->find($id)->delete();
    // $session->delete();

    //   return $session ;
        return redirect()->route('session.show')->with('success', 'Session Deleted Successfully !');


    }
}
