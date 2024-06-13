<?php

namespace App\Http\Controllers;
use App\Http\Requests\GradeRequest;
use App\Models\Grade;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;
class GradeController extends Controller
{
    public function index(Request $request)
    {
        // if($request->ajax())
        // {
        //     $data = User::select('*');

        //     if($request->filled('from_date') && $request->filled('to_date'))
        //     {
        //         $data = $data->whereBetween('created_at', [$request->from_date, $request->to_date]);
        //     }

        //     return DataTables::of($data)->addIndexColumn()->make(true);
        // }
        // return view('users');
        $class = Grade::all();
        return view("admin/class/index", compact('class'));
    }
    public function create()
    {
        return view('admin/class/create');
    }
    public function store(GradeRequest $request)
    {
        if($request->createData()){
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
        if($request->updatedData($id)){
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
