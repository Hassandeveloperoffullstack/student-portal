<nav class="navbar navbar-expand px-3 border-bottom">
    <button class="btn" id="sidebar-toggle" type="button">
        Hello , {{Auth::user()->name}} !
    </button>
    <div class="navbar-collapse navbar">
        <ul class="navbar-nav">
            <a href="{{url('/')}}"  class="btn btn-outline-primary me-5">
                Back To Home
            </a>
            <li class="nav-item dropdown">
                <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                  <span class="text-dark"> <i style="font-size: 28px" class="bi bi-list"></i></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a href="{{route('dashboard')}}" class="dropdown-item">Dashboard</a>
                    <a href="{{route('profile.edit')}}" class="dropdown-item">Profile</a>
                    <a href="{{route('profile.logout')}}" class="dropdown-item">Logout</a>

                </div>
               
            </li>
        </ul>
    </div>
</nav>