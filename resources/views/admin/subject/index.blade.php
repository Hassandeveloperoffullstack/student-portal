@extends('admin.layout')

@section('content')
    <div class="card border-2 mt-4 ">

        <div class="card-header">
            <h5 class="card-title pt-2">
                Subject
                <a href="{{ route('subject.create') }}" class="btn btn-success float-end rounded-0">Add Subject</a>
            </h5>
        </div>
        <div class="card-body">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($subject as $subjects)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $subjects->name }}</td>
                            <td>
                                <a href="{{ route('subject.edit', $subjects->id) }}"
                                    class="btn btn-warning text-white rounded-0">Update</a>
                                <a href="{{ url('admin/subject/delete', $subjects->id) }}"
                                    class="btn btn-danger rounded-0">Delete</a>
                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
@endsection
