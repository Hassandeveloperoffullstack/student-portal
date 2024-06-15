<?php

namespace App\Http\Controllers;
use App\Http\Requests\GradeRequest;
use App\Models\Grade;
use Illuminate\Support\Facades\Auth;
use DataTables;
use Illuminate\Http\Request;
class GradeController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Grade::all();
            return DataTables::of($data)->addIndexColumn()->make(true);
        }
        return view('admin/class/index');
    }
    public function create()
    {
        return view('admin/class/create');
    }
    public function store(GradeRequest $request)
    {
        if ($request->createData()) {
            return redirect()->route('class.show')->with('success', 'Class Created Successfully !');
        }
    }
    public function edit(string $id)
    {
        $class = Grade::find($id);
        return view('admin/class/edit', ['classes' => $class]);
    }
    public function update(GradeRequest $request, string $id)
    {
        if ($request->updatedData($id)) {
            return redirect()->route('class.show')->with('success', 'Class Created Successfully !');
        }
    }
    public function destroy(string $id)
    {
        $class = Grade::find($id)->delete();
        return redirect()->route('class.show')->with('success', 'Class Deleted Successfully !');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
