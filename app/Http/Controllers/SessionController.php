<?php

namespace App\Http\Controllers;
use App\Http\Requests\SessionRequest;
use App\Models\Session;
class SessionController extends Controller
{
    public function index()
    {
        $session = Session::all();
        return view('admin/session/index', compact('session'));
    }
    public function create()
    {
        return view('admin/session/create');
    }
    public function store(SessionRequest $request)
    {
        if($request->createData()){
            return redirect()->route('session.show')->with('success', 'Session Created Successfully !');
        }
    }
    public function edit(string $id)
    {
        $session = Session::where('id', $id)->get();
        return view('admin/session/edit', ['session' => $session]);
    }
    public function update(SessionRequest $request, string $id)
    {
        if($request->updatedData($id)){
            return redirect()->route('session.show')->with('success', 'Session Updated Successfully !');
        }
    }
    public function destroy(string $id)
    {
        $session = Session::find($id)->delete();
        return redirect()->route('session.show')->with('success', 'Session Deleted Successfully !');
    }
}
