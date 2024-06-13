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
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Departments</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($department as $departments)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $departments->name }}</td>
                            <td>
                                <a href="{{ route('department.edit', $departments->id) }}"
                                    class="btn btn-warning text-white rounded-0">Update</a>
                                <a href="{{ route('department.delete', $departments->id) }}"
                                    class="btn btn-danger rounded-0">Delete</a>
                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
@endsection
