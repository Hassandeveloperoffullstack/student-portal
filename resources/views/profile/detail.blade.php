@include('header')
<div class="wrapper">
    {{-- @include('dashboard_layout') --}}
    <div class="main">
        @include('logout_latout')
        <main class="content px-3 py-2">
            <div class="container-fluid">


                <!-- Table Element -->
                @if (Session::has('success'))
                    <div class="alert alert-success alert-dismissible fade show mb-2" role="alert">
                        {{ Session::get('success') }}
                        <button type="button" class="btn-close " data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if (Session::has('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ Session::get('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class=" col-12    px-4">
                    <h2 class="fw-bold text-dark"> Details</h2>
                    <div class="mb-3" style="font-size: 14px; ">
                        <a href="{{route('dashboard')}}" class="text-secondary text-decoration-none">Dashboard</a>
                        <span class="text-secondary"> > </span>
                        <a href="{{route('detail',Auth::user()->student_id)}}" class="text-secondary text-decoration-none">Details</a>
                    </div>
                </div>
                <div class="card border-2 mt-4 ">

                   

                    <div class="card-header">
                        <h5 class="card-title pt-2">
                            Student : {{ $students->user->name }}
                            <a href="{{ route('dashboard') }}" class="btn btn-success float-end rounded-0">Back</a>
                        </h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <thead>

                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Department</th>
                                    <th scope="col">Class</th>
                                    <th scope="col">Session</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">CNIC</th>
                                    <th scope="col">City</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Address</th>
                                </tr>


                            </thead>
                            <tbody>

                                <tr>
                                    <th scope="row">{{ $i++ }}</th>
                                    <td>{{ $students->user->name }}</td>
                                    <td>{{ $students->department->name }}</td>
                                    <td>{{ $students->class->name }}</td>
                                    <td>{{ $students->session->name }}</td>
                                    <td>{{ $students->user->email }}</td>
                                    <td>{{ $students->phone }}</td>
                                    <td>{{ $students->cnic }}</td>
                                    <td>{{ $students->city }}</td>
                                    <td>{{ $students->gender }}</td>
                                    <td>{{ $students->address }}</td>
                                </tr>




                            </tbody>
                        </table>

                        <table class="table table-bordered text-center">
                            <thead>



                                <tr>
                                    <th scope="col">Zipcode</th>

                                    <th scope="col">Father's Name</th>
                                    <th scope="col">Father's Phone</th>
                                    <th scope="col">Father's CNIC</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Subjects</th>
                                </tr>
                            </thead>
                            <tbody>


                                <tr>
                                    <td>{{ $students->zipcode }}</td>

                                    <td>{{ $students->f_name }}</td>
                                    <td>{{ $students->f_phone }}</td>
                                    <td>{{ $students->f_cnic }}</td>
                                    <td><img src="{{ asset('storage') }}/{{ $students->image }}" class="rounded-circle align-items-center " width="70px" ></td>
                                   
                                    <td>
                                        @php
                                        foreach ($students->subject as $book) {
                                            $boook[] = $book->name;
                                            // echo $book->name." / ";
                                            echo " <label class='badge bg-primary'> $book->name </label>";
                                        }
                                    @endphp
                                    </td>
                                    
                                </tr>



                            </tbody>
                        </table>
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
