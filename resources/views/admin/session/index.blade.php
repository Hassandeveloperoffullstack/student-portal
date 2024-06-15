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
            <table class="table table-bordered text-center" id="session_table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Sessions</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
@endsection
