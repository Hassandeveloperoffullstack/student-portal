@extends('admin.layout')

@section('content')
    <div class="card border-2 mt-4 ">

        <div class="card-header">
            <h5 class="card-title pt-2">
                Departments
                <a href="{{ route('department.create') }}" class="btn btn-success float-end rounded-0">Add Department</a>
            </h5>
        </div>
        <div class="card-body">
            <table class="table table-bordered text-center" id="department_table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Departments</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
@endsection
