@include('admin/adminheader')
<div class="wrapper">
    @include('admin/admindashboard_layout')
    <div class="main">
        @include('admin/adminlogout_latout')
        <main class="content px-3 py-2">
            <div class="container-fluid">


                <!-- Table Element -->
                <div class="card border-2 mt-4">
                    @if (Session::has('success'))
                        {{-- <div class="alert alert-success">{{Session::get('success')}}</div> --}}
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ Session::get('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if (Session::has('error'))
                        {{-- <div class="alert alert-danger">{{Session::get('error')}}</div> --}}
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ Session::get('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="card-header">
                        <h5 class="card-title pt-2">
                            Student Edit
                            <a href="{{ route('student.show') }}" class="btn btn-success float-end rounded-0">Back</a>
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="row">

                            {!! html()->modelForm($students,'PUT', route('student.update',$students->id))->attribute('enctype', 'multipart/form-data')->open() !!}
                            {{ csrf_field() }}

                            <div class="row mt-3 mb-1">
                                <div class="form-group col-md-6">
                                    {!! html()->label('Name')->for('name')->class('form-label') !!}
                                    {!! html()->text('name')->class('form-control')->placeholder('Enter Name')->value($students->user->name) !!}
                                    @error('name')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    {!! html()->label('Email')->for('email')->class('form-label') !!}
                                    {!! html()->email('email')->class('form-control')->placeholder('Enter Email')->value($students->user->email) !!}
                                    @error('email')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mt-3 mb-1">
                                <div class="form-group col-md-6">
                                    {!! html()->label('Phone')->for('phone')->class('form-label') !!}
                                    {!! html()->text('phone')->class('form-control')->placeholder('Enter Phone') !!}
                                    @error('phone')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    {!! html()->label('CNIC')->for('cnic')->class('form-label') !!}
                                    {!! html()->text('cnic')->class('form-control')->placeholder('Enter CNIC') !!}
                                    @error('cnic')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mt-3 mb-1">
                                <div class="form-group col-md-6">
                                    {!! html()->label('City')->for('city')->class('form-label') !!}
                                    {!! html()->text('city')->class('form-control')->placeholder('Enter City') !!}
                                    @error('city')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    {!! html()->label('Gender')->for('gender')->class('form-label') !!}
                                    {!! html()->text('gender')->class('form-control')->placeholder('Enter Gender') !!}
                                    @error('gender')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mt-3 mb-1">
                                <div class="form-group col-md-6">
                                    {!! html()->label('Address')->for('address')->class('form-label') !!}
                                    {!! html()->text('address')->class('form-control')->placeholder('Enter Address') !!}
                                    @error('address')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    {!! html()->label('Zip Code')->for('zipcode')->class('form-label') !!}
                                    {!! html()->text('zipcode')->class('form-control')->placeholder('Enter Zip Code') !!}
                                    @error('zipcode')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mt-3 mb-1">
                                <div class="form-group col-md-6">
                                    {!! html()->label('Father\'s Name')->for('f_name')->class('form-label') !!}
                                    {!! html()->text('f_name')->class('form-control')->placeholder('Enter Father\'s Name') !!}
                                    @error('f_name')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    {!! html()->label('Father\'s Phone')->for('f_phone')->class('form-label') !!}
                                    {!! html()->text('f_phone')->class('form-control')->placeholder('Enter Father\'s Phone') !!}
                                    @error('f_phone')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mt-3 mb-1">
                                <div class="form-group col-md-6">
                                    {!! html()->label('Father\'s CNIC')->for('f_cnic')->class('form-label') !!}
                                    {!! html()->text('f_cnic')->class('form-control')->placeholder('Enter Father\'s CNIC') !!}
                                    @error('f_cnic')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    {!! html()->label('Password')->for('password')->class('form-label') !!}
                                    {!! html()->password('password')->class('form-control')->placeholder('Enter Password') !!}
                                    @error('password')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mt-3 mb-1">
                                <div class="form-group col-md-6">
                                    {!! html()->label('Image')->for('image')->class('form-label') !!}
                                    {!! html()->file('image')->class('form-control') !!}
                                    @error('image')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mt-3 mb-1">
                                <div class="form-group col-md-6">
                                    {!! html()->label('Department')->for('dropdownd')->class('form-label') !!}
                                    {!! html()->select('department_id', \App\Services\DropdownService::department_dropdown())->class('form-control')->placeholder('Select Department') !!}
                                </div>
                                <div class="form-group col-md-6">
                                    {!! html()->label('Class')->for('dropdownc')->class('form-label') !!}
                                    {!! html()->select('class_id', \App\Services\DropdownService::class_dropdown())->class('form-control')->placeholder('Select Class') !!}
                                </div>
                            </div>
                            <div class="row mt-3 mb-1">
                                <div class="form-group col-md-6">
                                    {!! html()->label('Session')->for('dropdowns')->class('form-label') !!}
                                    {!! html()->select('session_id', \App\Services\DropdownService::session_dropdown())->class('form-control')->placeholder('Select Session') !!}
                                </div>
                                <div class="form-group col-md-6">

                                    {{-- @php
                                        $subject_id =[];
                                        $id = $student_subject->first()->subject_id
                                        foreach ($student_subject->first()->subject_id as $key => $value) {
                                            $subject_id[] = $value->subject_id;
                                        }
                                    @endphp --}}
                                    {{-- {!! html()->label('Subjects')->for('multiple_dropdownsu')->class('form-label') !!}
                                    {!! html()->select('subject_id',\App\Services\DropdownService::subject_dropdown())->class('form-control')->placeholder('Select Subjects') !!} --}}
                                    <div class="form-group col-md-6">
                                        {!! html()->label('Subjects')->for('checkbox')->class('form-label') !!}
                                    {{-- {!! html()->select('subject_id[]',\App\Services\DropdownService::subject_dropdown())->multiple()->class('form-control') !!}  --}}
                                    <br>
                                    @foreach ($subject as $subjects)
                                         <label for="">
                                            <input type="checkbox" class="mx-2 mt-3"   name="subject[]" 
                                            {{ in_array($subjects->id, $studentSubjectIds) ? 'checked' : '' }} 
                                            value="{{$subjects->id }}">
                                            {{$subjects->name}}                    
                                         </label>
                                    @endforeach
                                    </div>
                                </div>
                            </div>




                            {!! html()->submit('Save')->class('btn btn-primary mt-2 rounded-0 px-3') !!}
                            {!! html()->form()->close() !!}
                            {{-- <h1>hello {{}}</h1> --}}
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <a href="#" class="theme-toggle">
            <i class="fa-regular fa-moon"></i>
            <i class="fa-regular fa-sun"></i>
        </a>
        <footer class="footer">
            <div class="container-fluid">
                <div class="row text-muted">
                    <div class="col-6 text-start">
                        <p class="mb-0">
                            <a href="#" class="text-muted">
                                <strong>CodzSwod</strong>
                            </a>
                        </p>
                    </div>
                    @include('admin/adminlayout_footer')
                </div>
            </div>
        </footer>
    </div>
</div>
@include('admin/adminfooter')
