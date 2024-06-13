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
