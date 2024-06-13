@extends('admin.layout')

@section('content')
    <div class="card border-2 mt-4 ">

        <div class="card-header">
            <h5 class="card-title pt-2">
                Session
                <a href="{{ route('session.create') }}" class="btn btn-success float-end rounded-0">Add Session</a>
            </h5>
        </div>
        <div class="card-body">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Sessions</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($session as $sessions)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $sessions->name }}</td>
                            <td>
                                <a href="{{ route('session.edit', $sessions->id) }}"
                                    class="btn btn-warning text-white rounded-0">Update</a>
                                <a href="{{ route('session.delete', $sessions->id) }}"
                                    class="btn btn-danger rounded-0">Delete</a>
                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
@endsection
