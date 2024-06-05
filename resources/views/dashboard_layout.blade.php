<aside id="sidebar" class="js-sidebar">
    <!-- Content For Sidebar -->
    <div class="h-100">
        <div class="sidebar-logo">
            <a href="#">SCHOOL</a>
        </div>
        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Admin Elements
            </li>
            <li class="sidebar-item">
                <a href="{{route('admindashboard')}}" class="sidebar-link">
                    <i class="fa-solid fa-list pe-2"></i>
                    Dashboard
                </a>
            </li>
            <li class="sidebar-item">
                <a href="{{route('class.show')}}" class="sidebar-link">
                    <i class="bi bi-hospital me-2"></i>
                    Classes
                </a>
            </li>
            <li class="sidebar-item">
                <a href="{{route('department.show')}}" class="sidebar-link">
                    <i class="bi bi-mortarboard me-2"></i>
                    Department
                </a>
            </li>
            <li class="sidebar-item">
                <a href="{{route('session.show')}}" class="sidebar-link">
                    <i class="bi bi-clock me-2"></i>
                    Session
                </a>
            </li>
            <li class="sidebar-item">
                <a href="{{route('subject.show')}}" class="sidebar-link">
                    <i class="bi bi-journals me-2"></i>
                    Subjects
                </a>
            </li>
            <li class="sidebar-item">
                <a href="{{route('student.show')}}" class="sidebar-link">
                    <i class="bi bi-person me-2"></i>
                    Students
                </a>
            </li>
            
        </ul>
    </div>
</aside>