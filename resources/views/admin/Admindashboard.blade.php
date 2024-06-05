@include('admin.adminheader')
<div class="wrapper">
    @include('admin.admindashboard_layout')
    <div class="main">
        @include('admin.adminlogout_latout')
        <main class="content px-3 py-2">
            <div class="container-fluid">
                <div class="mb-3">
                    <h4>Admin Dashboard</h4>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 d-flex">
                        <div class="card flex-fill border-0 illustration">
                            <div class="card-body p-0 d-flex flex-fill">
                                <div class="row g-0 w-100">
                                    <div class="col-7">
                                        <div class="p-3 m-1">
                                            <h4>Welcome Back, Admin</h4>
                                            <p class="mb-0">Admin Dashboard</p>
                                            <p class="mb-0">Students: {{ $student }} Classes: {{ $grade }}
                                                Departments: {{ $department }} </p>
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end text-end">
                                        <img src="{{ asset('images/customer-support.jpg') }}"
                                            class="img-fluid illustration-img" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 d-flex">
                        <div class="card flex-fill border-0">
                            <div class="card-body py-4">
                                <div class="d-flex align-items-start">
                                    <div class="flex-grow-1">
                                        <h4 class="mb-2">
                                            {{ $student }}
                                        </h4>
                                        <p class="mb-2">
                                            Total Students
                                        </p>
                                        <div class="mb-0">
                                            <span class="badge text-success me-2">
                                                +9.0%
                                            </span>
                                            <span class="text-muted">
                                                Since Last Month
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h4 class="mb-2">
                                            {{ $department }}
                                        </h4>
                                        <p class="mb-2">
                                            Total Departments
                                        </p>
                                        <div class="mb-0">
                                            <span class="badge text-success me-2">
                                                +9.0%
                                            </span>
                                            <span class="text-muted">
                                                Since Last Month
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h4 class="mb-2">
                                            {{ $grade }}
                                        </h4>
                                        <p class="mb-2">
                                            Total Classes
                                        </p>
                                        <div class="mb-0">
                                            <span class="badge text-success me-2">
                                                +9.0%
                                            </span>
                                            <span class="text-muted">
                                                Since Last Month
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

               

                    <div class="row">
                        <div class="col-12 col-md-6 d-flex">
                            <div class="card flex-fill border-0">
                                <canvas id="myChart" class="mb-3" style="width:100%;max-width:600px"></canvas>

                            </div>
                        </div>
                        <div class="col-12 col-md-6 d-flex">
                            <div class="card flex-fill border-0">
                                <canvas id="myChar" style="width:100%;max-width:600px"></canvas>

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
                    @include('admin.adminlayout_footer')
                </div>
            </div>
        </footer>
    </div>
</div>
@include('admin.adminfooter')
@include('admin.adminfooterchart')
