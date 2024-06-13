<?php

namespace App\Http\Controllers;
use App\Http\Requests\SubjectRequest;
use App\Models\Subject;
class SubjectController extends Controller
{
    public function index()
    {
        $subject = Subject::all();
        return view('admin/subject/index', compact('subject'));
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
