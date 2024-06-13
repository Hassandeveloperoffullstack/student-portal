@extends('admin.layout')

@section('content')
    <div class="card border-2 mt-4">

        <div class="card-header">
            <h5 class="card-title pt-2">
                Session Add
                <a href="{{ route('subject.show') }}" class="btn btn-success float-end rounded-0">Back</a>
            </h5>
        </div>
        <div class="card-body">
            {!! html()->form('POST', route('subject.submit'))->id('form_class')->open() !!}
            {{ csrf_field() }}
            <div class="form-group py-2">
                {!! html()->label('Subject')->for('name')->class('form-label') !!}
                {!! html()->text('name')->class('form-control')->placeholder('Enter Subject')->required() !!}
                @error('name')
                    <p class="invalid-feedback">{{ $message }}</p>
                @enderror
            </div>
            {!! html()->submit('Save')->class('btn btn-primary mt-2 rounded-0 px-3') !!}
            {!! html()->form()->close() !!}
        </div>
    </div>
@endsection
