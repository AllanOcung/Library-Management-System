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
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<div class="sidebar-heading">
    Member Profiles
</div>

<li class="nav-item">
    <a class="nav-link" href="{{url('show_members')}}">
    <i class="fas fa-users"></i>
        <span>Members</span></a>
</li>

<hr class="sidebar-divider">

<li class="nav-item">
    <a class="nav-link" href="{{url('borrowed_books')}}">
    <i class="fas fa-book"></i>
        <span>Borrowed Books</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{url('borrowed_books')}}">
    <i class="fas fa-book"></i>
        <span>Returned Books</span></a>
</li>

<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
Book Repository
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-folder"></i>
        <span>Library Catalog</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Operations</h6>
            <a class="collapse-item" href="{{url('add_book')}}">
                    <i class="fas fa-book"></i>    
                    Register New Book</a>
            <a class="collapse-item" href="{{url('show_book')}}">
                    <i class="fas fa-book-open"></i>    
                    View Book List</a>
        </div>
    </div>
</li>

<hr class="sidebar-divider">

<li class="nav-item">
    <a class="nav-link" href="{{url('category_page')}}">
    <i class="fas fa-folder"></i>
        <span>Category</span></a>
</li>

<hr class="sidebar-divider">

<!-- Heading -->
<!-- Heading -->
<div class="sidebar-heading">
    Requests
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-tasks"></i>
        <span>Request Handling</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Book Reservation:</h6>
            <a class="collapse-item" href="{{url('show_book_requests')}}">
            <i class="fas fa-clock"></i>    
            Pending Requests</a>

            <a class="collapse-item" href="{{url('show_approved_requests')}}">
            <i class="fas fa-thumbs-up"></i>    
            Approved Requests</a>

            <a class="collapse-item" href="{{url('show_rejected_requests')}}">
            <i class="fas fa-thumbs-down"></i>    
            Rejected Requests</a>
        </div>
    </div>
</li>

<!-- Nav Item - Charts -->
<li class="nav-item">
    <a class="nav-link" href="charts.html">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Charts</span></a>
</li>

<!-- Nav Item - Tables -->
<li class="nav-item">
    <a class="nav-link" href="tables.html">
        <i class="fas fa-fw fa-table"></i>
        <span>Tables</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Utilities</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="utilities-color.html">Colors</a>
            <a class="collapse-item" href="utilities-border.html">Borders</a>
            <a class="collapse-item" href="utilities-animation.html">Animations</a>
            <a class="collapse-item" href="utilities-other.html">Other</a>
        </div>
    </div>
</li>

<!-- Divider -->


<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

<!-- Sidebar Message -->
<div class="sidebar-card d-none d-lg-flex">
    <img class="sidebar-card-illustration mb-2" src="{{asset('admin/img/undraw_rocket.svg')}}" alt="...">
    <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
    <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
</div>

</ul>
<!-- End of Sidebar -->