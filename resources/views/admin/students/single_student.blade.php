@include('admin/adminheader')
<div class="wrapper">
    @include('admin/admindashboard_layout')
    <div class="main">
        @include('admin/adminlogout_latout')
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
                <div class="card border-2 mt-4 ">

                    <div class="card-header">
                        <h5 class="card-title pt-2">
                            Student : {{ $students->user->name }}
                            <a href="{{ route('student.show') }}" class="btn btn-success float-end rounded-0">Back</a>
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
                                    
                                </tr>




                            </tbody>
                        </table>

                        <table class="table table-bordered text-center">
                            <thead>



                                <tr>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Zipcode</th>
                                    <th scope="col">Father's Name</th>
                                    <th scope="col">Father's Phone</th>
                                    <th scope="col">Father's CNIC</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Subjects</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>


                                <tr>
                                    <td>{{ $students->gender }}</td>
                                    <td>{{ $students->address }}</td>
                                    <td>{{ $students->zipcode }}</td>
                                    <td>{{ $students->f_name }}</td>
                                    <td>{{ $students->f_phone }}</td>
                                    <td>{{ $students->f_cnic }}</td>
                                    <td><img src='{{ asset('storage') }}/{{ $students->image }}' class="rounded-circle" width="50px" height=""50px/></td>
                                   
                                    <td>
                                        @php
                                        foreach ($students->subject as $book) {
                                            $boook[] = $book->name;
                                            // echo $book->name." / ";
                                            echo " <label class='badge bg-primary'> $book->name </label>";
                                        }
                                    @endphp
                                    </td>
                                    <td>
                                        <a href="{{ route('student.edit', $students->id) }}"
                                            class="btn btn-warning text-white rounded-0">Update</a>
                                        <a href="{{ route('student.delete', $students->id) }}"
                                            class="btn btn-danger text-white rounded-0">Delete</a>
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
                    @include('admin/adminlayout_footer')
                </div>
            </div>
        </footer>
    </div>
</div>
@include('admin/adminfooter')
