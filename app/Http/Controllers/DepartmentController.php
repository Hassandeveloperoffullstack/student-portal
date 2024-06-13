<?php
namespace App\Http\Controllers;
use App\Http\Requests\DepartmentRequest;
use App\Models\Department;
class DepartmentController extends Controller
{
    public function index()
    {
        $department = Department::all();
        return view('admin/department/index', compact('department'));
    }
    public function create()
    {
        return view('admin/department/create');
    }
    public function store(DepartmentRequest $request)
    {
        if ($request->createData()) {
            return redirect()->route('department.show')->with('success', 'Department Created Successfully !');
        }
    }
    public function edit(string $id)
    {
        $department = Department::where('id', $id)->get();
        return view('admin/department/edit', ['department' => $department]);
    }
    public function update(DepartmentRequest $request, string $id)
    {
        if ($request->updatedData($id)) {
            return redirect()->route('department.show')->with('success', 'Department Updated Successfully !');
        }
    }
    public function destroy(string $id)
    {
        $class = Department::find($id)->delete();
        return redirect()->route('department.show')->with('success', 'Department Deleted Successfully !');
    }
}
