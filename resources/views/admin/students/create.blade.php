@extends('admin.layout')

@section('content')
    <div class="card border-2 mt-4">

        <div class="card-header">
            <h5 class="card-title pt-2">
                Student Add
                <a href="{{ route('student.show') }}" class="btn btn-success float-end rounded-0">Back</a>
            </h5>
        </div>
        <div class="card-body">
            <div class="row">


                {!! html()->form('POST', route('student.submit'))->attribute('enctype', 'multipart/form-data')->id('form_class')->open() !!}
                @include('admin.students.field')


                <div class="form-group col-md-12 my-3">
                    {!! html()->label('Subjects')->for('checkbox')->class('form-label') !!}

                    <br>
                    @foreach ($subject as $subjects)
                        <label for="">
                            <input type="checkbox" class="mx-2 mt-3" name="subject[]" value="{{ $subjects->id }}">
                            {{ $subjects->name }}
                        </label>
                    @endforeach
                </div>
                {!! html()->submit('Save')->class('btn btn-primary mt-2 rounded-0 px-3') !!}

                {!! html()->form()->close() !!}
            </div>

        </div>
    </div>
@endsection
