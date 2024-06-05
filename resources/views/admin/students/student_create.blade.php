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
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ Session::get('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if (Session::has('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ Session::get('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="card-header">
                        <h5 class="card-title pt-2">
                            Student Add
                            <a href="{{ route('student.show') }}" class="btn btn-success float-end rounded-0">Back</a>
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="row">


                            {!! html()->form('POST', route('student.submit'))->attribute('enctype', 'multipart/form-data')->open() !!}
                            {{ csrf_field() }}

                            <div class="row  mb-2">
                                <div class="form-group col-md-6">
                                    {!! html()->label('Name')->for('name')->class('form-label') !!}
                                    {!! html()->text('name')
                                        ->class(['form-control', $errors->has('name') ? 'is-invalid' : ''])
                                        ->placeholder('Enter Name')!!}
                                    @error('name')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                                
                                <div class="form-group col-md-6">
                                    {!! html()->label('Email')->for('email')->class('form-label') !!}
                                    {!! html()->email('email')->class(['form-control', $errors->has('email') ? 'is-invalid' : ''])->placeholder('Enter Email') !!}
                                    @error('email')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="row  mb-2">
                                <div class="form-group col-md-6">
                                    {!! html()->label('Phone')->for('phone')->class('form-label') !!}
                                    {!! html()->text('phone')->class(['form-control', $errors->has('phone') ? 'is-invalid' : ''])->placeholder('Enter Phone') !!}
                                    @error('phone')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    {!! html()->label('CNIC')->for('cnic')->class('form-label') !!}
                                    {!! html()->text('cnic')->class(['form-control', $errors->has('cnic') ? 'is-invalid' : ''])->placeholder('Enter CNIC') !!}
                                    @error('cnic')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="row  mb-2">
                                <div class="form-group col-md-6">
                                    {!! html()->label('City')->for('city')->class('form-label') !!}
                                    {!! html()->text('city')->class(['form-control', $errors->has('city') ? 'is-invalid' : ''])->placeholder('Enter City') !!}
                                    @error('city')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    {!! html()->label('Gender')->for('gender')->class('form-label') !!}
                                    {!! html()->text('gender')->class(['form-control', $errors->has('gender') ? 'is-invalid' : ''])->placeholder('Enter Gender') !!}
                                    @error('gender')
                                        <p class="invalid-feedback ">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="row  mb-2">
                                <div class="form-group col-md-6">
                                    {!! html()->label('Address')->for('address')->class('form-label') !!}
                                    {!! html()->text('address')->class(['form-control', $errors->has('address') ? 'is-invalid' : ''])->placeholder('Enter Address') !!}
                                    @error('address')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    {!! html()->label('Zip Code')->for('zipcode')->class('form-label') !!}
                                    {!! html()->text('zipcode')->class(['form-control', $errors->has('zipcode') ? 'is-invalid' : ''])->placeholder('Enter Zip Code') !!}
                                    @error('zipcode')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="row  mb-2">
                                <div class="form-group col-md-6">
                                    {!! html()->label('Father\'s Name')->for('f_name')->class('form-label') !!}
                                    {!! html()->text('f_name')->class(['form-control', $errors->has('f_name') ? 'is-invalid' : ''])->placeholder('Enter Father\'s Name') !!}
                                    @error('f_name')
                                        <p class="invalid-feedback">The father name is required</p>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    {!! html()->label('Father\'s Phone')->for('f_phone')->class('form-label') !!}
                                    {!! html()->text('f_phone')->class(['form-control', $errors->has('f_phone') ? 'is-invalid' : ''])->placeholder('Enter Father\'s Phone') !!}
                                    @error('f_phone')
                                        <p class="invalid-feedback">The father phone is required</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="row  mb-2">
                                <div class="form-group col-md-6">
                                    {!! html()->label('Father\'s CNIC')->for('f_cnic')->class('form-label') !!}
                                    {!! html()->text('f_cnic')->class(['form-control', $errors->has('f_cnic') ? 'is-invalid' : ''])->placeholder('Enter Father\'s CNIC') !!}
                                    @error('f_cnic')
                                        <p class="invalid-feedback">The father CNIC is required</p>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    {!! html()->label('Password (Optional)')->for('password')->class('form-label') !!}
                                    {!! html()->password('password')->class(['form-control', $errors->has('password') ? 'is-invalid' : ''])->placeholder('Enter Password') !!}
                                    @error('password')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="row  mb-2">
                                <div class="form-group col-md-6">
                                    {!! html()->label('Image (Optional)')->for('image')->class('form-label') !!}
                                    {!! html()->file('image')->class(['form-control', $errors->has('image') ? 'is-invalid' : '']) !!}
                                    @error('image')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="row  mb-2">
                                <div class="form-group col-md-6">
                                    {!! html()->label('Department')->for('dropdownd')->class('form-label') !!}
                                    {!! html()->select('department_id', \App\Services\DropdownService::department_dropdown())->class(['form-control', $errors->has('department_id') ? 'is-invalid' : ''])->placeholder('Select Department') !!}
                                    @error('department_id')
                                        <p class="invalid-feedback">The Department Is Required !</p>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    {!! html()->label('Class')->for('dropdownc')->class('form-label') !!}
                                    {!! html()->select('class_id', \App\Services\DropdownService::class_dropdown())->class(['form-control', $errors->has('class_id') ? 'is-invalid' : ''])->placeholder('Select Class') !!}
                                    @error('class_id')
                                        <p class="invalid-feedback">The Class Is Required !</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row  mb-2">
                                <div class="form-group col-md-6">
                                    {!! html()->label('Session')->for('dropdowns')->class('form-label') !!}
                                    {!! html()->select('session_id', \App\Services\DropdownService::session_dropdown())->class(['form-control', $errors->has('session_id') ? 'is-invalid' : ''])->placeholder('Select Session') !!}
                                    @error('session_id')
                                        <p class="invalid-feedback">The Session Is Required !</p>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    {!! html()->label('Subjects')->for('checkbox')->class('form-label') !!}
                                    {{-- {!! html()->select('subject_id[]',\App\Services\DropdownService::subject_dropdown())->multiple()->class('form-control') !!}  --}}
                                    <br>
                                    @foreach ($subject as $subjects)
                                        <label for="">
                                            <input type="checkbox" class="mx-2 " name="subject[]"
                                                value="{{ $subjects->id }}">
                                            {{ $subjects->name }}
                                        </label>
                                    @endforeach
                                </div>
                            </div>




                            {!! html()->submit('Save')->class('btn btn-primary mt-2 rounded-0 px-3') !!}
                            {!! html()->form()->close() !!}
                        </div>
{{-- 
                        @if ($errors->any())
                            <div class="">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif --}}
                        {{-- @error('name')
                        <p class="invalid-feedback">{{ $message }}</p>
                    @enderror --}}
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



{{-- {{in_array($permissions->id, $rolePermission) ? 'checked' : ''}} --}}
