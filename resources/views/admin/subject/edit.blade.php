@extends('admin.layout')

@section('content')
    <div class="card border-2 mt-4">

        <div class="card-header">
            <h5 class="card-title pt-2">
                Subject Edit
                <a href="{{ route('subject.show') }}" class="btn btn-success float-end rounded-0">Back</a>
            </h5>
        </div>
        <div class="card-body">
            {!! html()->form('POST', route('subject.update', $subject->first()->id))->id('form_class')->open() !!}
            @include('admin.subject.field')
            {!! html()->form()->close() !!}
        </div>
    </div>
@endsection
