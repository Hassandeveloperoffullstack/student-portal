@include('header')
<div class="wrapper">
    <div class="main">
        @include('logout_latout')
        <main class="content px-3 py-2">
            <div class="container-fluid">
                <div class=" col-12    px-4">
                    <h2 class="fw-bold text-dark"> Dashboard</h2>
                    <div class="mb-3" style="font-size: 14px; ">
                        <a href="{{ route('dashboard') }}" class="text-secondary text-decoration-none">Dashboard</a>
                        <span class="text-secondary"> > </span>
                    </div>
                </div>

                <div class="row">
                    <div class=" col-12  mb-4  px-4">
                        <div class="bg-white p-3 p-md-4 rounded shadow-sm">

                            <h5 class="mb-3 fw-bold">Basic Information</h5>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Name</label>
                                    <input required name="name" value="{{ Auth::user()->name }}" readonly
                                        type="text" class="form-control shadow-none">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Email</label>
                                    <input required name="dob" value="{{ Auth::user()->email }}" readonly
                                        type="text" class="form-control shadow-none">
                                </div>


                            </div>
                            <a href="{{ route('detail', Auth::user()->student_id) }}"
                                class="btn btn-warning custom-bg btn-sm text-white ">More Details</a>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class=" col-12  mb-4  px-4">
                        <div class="bg-primary p-3 p-md-4 rounded shadow-sm">

                            <h5 class="mb-3 text-light fw-bold">Attendence Information</h5>
                            <div class="row ">
                                <div class="col-md-6">
                                    <div class="card  flex-fill border-0">

                                        <canvas id="myChart" class="mb-3"
                                            style="width:100%;max-width:600px"></canvas>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card flex-fill border-0">

                                        <canvas id="myChar" class="mb-3"
                                            style="width:100%;max-width:600px"></canvas>

                                    </div>
                                </div>



                            </div>

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
                    @include('layout_footer')
                </div>
            </div>
        </footer>
    </div>
</div>
@include('footer')
@include('footerchart')
