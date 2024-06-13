@extends('admin.layout')

@section('content')
    <div class="card border-2 mt-4">
        <div class="card-header">
            <h5 class="card-title pt-2">
                Class Add
                <a href="{{ route('class.show') }}" class="btn btn-success float-end rounded-0">Back</a>
            </h5>
        </div>
        <div class="card-body">
            {!! html()->form('POST', route('class.submit'))->id('form_class')->open() !!}
            @include('admin.class.field')
            {!! html()->form()->close() !!}
        </div>
    </div>
@endsection
