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
                        {{Session::get('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                        
                    @endif
                    @if (Session::has('error'))
                    {{-- <div class="alert alert-danger">{{Session::get('error')}}</div> --}}
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{Session::get('error')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                        
                    @endif
                    <div class="card-header">
                        <h5 class="card-title pt-2">
                            Class Edit
                            <a href="{{ route('class.show') }}" class="btn btn-success float-end rounded-0">Back</a>
                        </h5>
                    </div>
                    <div class="card-body">
                        {!! html()->form('POST', route('class.update',$classes->first()->id))->open() !!}
                        {{ csrf_field() }}
                        <div class="form-group py-2">
                            {!! html()->label('Class Name')->for('name')->class('form-label ') !!}
                            {!! html()->text('name')->class('form-control')->placeholder('Enter Class')->value($classes->first()->name) !!}
                            @error('name')
                            <p class="invalid-feedback">{{$message}}</p>
                        @enderror
                        </div>
                        {!! html()->submit('Update')->class('btn btn-primary mt-2 rounded-0 px-3') !!}
                    {!! html()->form()->close() !!}
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
