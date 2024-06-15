<?php

namespace App\Http\Controllers;
use App\Http\Requests\SubjectRequest;
use App\Models\Subject;
use Illuminate\Http\Request;
use DataTables;

class SubjectController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Subject::all();
            return DataTables::of($data)->addIndexColumn()->make(true);
        }
        return view('admin/subject/index');
    }
    public function create()
    {
        return view('admin/subject/create');
    }
    public function store(SubjectRequest $request)
    {
        if($request->createData()){
            return redirect()->route('subject.show')->with('success', 'Subject Created Successfully !');
        }
    }
    public function edit(string $id)
    {
        $subject = Subject::where('id', $id)->get();
        return view('admin/subject/edit', ['subject' => $subject]);
    }
    public function update(SubjectRequest $request, string $id)
    {
        if($request->updatedData($id)){
            return redirect()->route('subject.show')->with('success', 'Subject Updated Successfully !');
        }
    }
    public function destroy(string $id)
    {
        $subject = Subject::find($id)->delete();
        return redirect()->route('subject.show')->with('success', 'Subject Deleted Successfully !');
    }
}
