<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('index')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-graduation-cap"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Serenity Lib</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{url('index')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Member Profiles Section -->
    <li class="nav-item">
        <a class="nav-link" href="{{url('show_members')}}">
            <i class="fas fa-users"></i>
            <span>Member Profiles</span>
        </a>
    </li>

    <!-- Book Management Section -->
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Book Management
    </div>

    <li class="nav-item">
        <a class="nav-link" href="{{url('add_book')}}">
            <i class="fas fa-book"></i>
            <span>Add New Book</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{url('add_category')}}">
            <i class="fas fa-book"></i>
            <span>Add New Category</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{url('show_book')}}">
            <i class="fas fa-book-open"></i>
            <span>View Book List</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{url('category_page')}}">
            <i class="fas fa-folder"></i>
            <span>Book Categories</span>
        </a>
    </li>

    <!-- Request Handling Section -->
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Requests
    </div>

    <li class="nav-item">
        <a class="nav-link" href="{{url('show_book_requests')}}">
            <i class="fas fa-clock"></i>
            <span>Pending Requests</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{url('show_approved_requests')}}">
            <i class="fas fa-thumbs-up"></i>
            <span>Approved Requests</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{url('show_rejected_requests')}}">
            <i class="fas fa-thumbs-down"></i>
            <span>Rejected Requests</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
