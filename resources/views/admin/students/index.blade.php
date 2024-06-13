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
            <table class="table table-bordered text-center">
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
                    @foreach ($student as $students)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $students->user->name }}</td>
                            <td>{{ $students->department->name }}</td>
                            <td>{{ $students->class->name }}</td>
                            <td>{{ $students->session->name }}</td>
                            <td>{{ $students->cnic }}</td>
                            <td> <img src='{{ asset('storage') }}/{{ $students->image }}' class="rounded-circle"
                                    width="50px" height=""50px /></td>
                            <td>
                                <a href="{{ route('student.single', $students->id) }}"
                                    class="btn btn-primary text-white rounded-0">More Details</a>
                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
@endsection
