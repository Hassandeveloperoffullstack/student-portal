@extends('admin.layout')

@section('content')
    <div class="card border-2 mt-4 ">

        <div class="card-header">
            <h5 class="card-title pt-2">
                Subject
                <a href="{{ route('student.create') }}" class="btn btn-success float-end rounded-0">Add Student</a>
            </h5>
        </div>
        <div class="card-body">
            <table class="table table-bordered text-center" id="data_table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Department</th>
                        <th scope="col">Class</th>
                        <th scope="col">Session</th>
                        <th scope="col">CNIC</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
@endsection
