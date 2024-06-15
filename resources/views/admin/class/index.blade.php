@extends('admin.layout')
@section('content')
    <div class="card border-2 mt-4 ">
        <div class="card-header">
            <h5 class="card-title pt-2">
                Classes
                <a href="{{ route('class.create') }}" class="btn btn-success float-end rounded-0">Add
                    Class</a>
            </h5>
        </div>
        <div class="card-body">
            <table class="table table-bordered text-center" id="daterange_table">
                <thead>
                    <tr>
                        <th >#</th>
                        <th >Classes</th>
                        <th >Action</th>
                    </tr>
                </thead>
        <tbody></tbody>
            </table>
        </div>
    </div>
@endsection