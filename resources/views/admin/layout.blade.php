@include('admin/adminheader')
<div class="wrapper">
    @include('admin/admindashboard_layout')
    <div class="main">
        @include('admin/adminlogout_latout')
        <main class="content px-3 py-2">
            <div class="container-fluid">
                @include('admin.alert')
                @yield('content')
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
<script>
    $('#form_class').parsley();
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
<script type="text/javascript">
    $(function() {
        var table = $('#daterange_table').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('class.show') }}",
            },
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: null,
                    name: 'actions',
                    orderable: false,
                    searchable: false,
                    render: function(data, type, row) {
                        return `
                                <a href="{{ route('class.edit', ':id') }}"
                                   class="btn btn-warning text-white rounded-0">Update</a>
                                <a href="{{ route('class.delete', ':id') }}"
                                   class="btn btn-danger rounded-0">Delete</a>
                            `.replace(/:id/g, row.id);
                    }
                }
            ]
        });
        var table = $('#data_table').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('student.show') }}",
            },
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'department_name',
                    name: 'department_name'
                },
                {
                    data: 'class_name',
                    name: 'class_name'
                },
                {
                    data: 'session_name',
                    name: 'session_name'
                },
                {
                    data: 'cnic',
                    name: 'cnic'
                },
                {
                    data: 'image',
                    name: 'image',
                    orderable: false,
                    searchable: false,
                    render: function(data) {
                        return `<img src="/storage/${data}" class="rounded-circle" width="50px" height="50px"/>`;

                    }
                },
                {
                    data: null,
                    name: 'actions',
                    orderable: false,
                    searchable: false,
                    render: function(data, type, row) {
                        return `
                                <a href="{{ route('student.single', ':id') }}"
                                   class="btn btn-primary text-white rounded-0">More Details</a>
                            `.replace(/:id/g, row.id);
                    }
                }
            ]
        });

        var table = $('#department_table').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('department.show') }}",
            },
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: null,
                    name: 'actions',
                    orderable: false,
                    searchable: false,
                    render: function(data, type, row) {
                        return `
                                <a href="{{ route('department.edit', ':id') }}"
                                   class="btn btn-warning text-white rounded-0">Update</a>
                                <a href="{{ route('department.delete', ':id') }}"
                                   class="btn btn-danger rounded-0">Delete</a>
                            `.replace(/:id/g, row.id);
                    }
                }
            ]
        });


        var table = $('#session_table').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('session.show') }}",
            },
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: null,
                    name: 'actions',
                    orderable: false,
                    searchable: false,
                    render: function(data, type, row) {
                        return `
                                <a href="{{ route('session.edit', ':id') }}"
                                   class="btn btn-warning text-white rounded-0">Update</a>
                                <a href="{{ route('session.delete', ':id') }}"
                                   class="btn btn-danger rounded-0">Delete</a>
                            `.replace(/:id/g, row.id);
                    }
                }
            ]
        });
        var table = $('#sub_table').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('subject.show') }}",
            },
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: null,
                    name: 'actions',
                    orderable: false,
                    searchable: false,
                    render: function(data, type, row) {
                        return `
                                <a href="{{ route('subject.edit', ':id') }}"
                                   class="btn btn-warning text-white rounded-0">Update</a>
                                <a href="{{ route('subject.delete', ':id') }}"
                                   class="btn btn-danger rounded-0">Delete</a>
                            `.replace(/:id/g, row.id);
                    }
                }
            ]
        });

    });
</script>
