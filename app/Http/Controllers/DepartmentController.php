<?php
namespace App\Http\Controllers;
use DataTables;
use App\Models\Department;
use Illuminate\Http\Request;
class DepartmentController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Department::all();
            return DataTables::of($data)->addIndexColumn()->make(true);
        }
        return view('admin/department/index');
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
