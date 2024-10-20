<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin.dashboard')}}">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Admin Panel</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link" href="{{route('admin.dashboard')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{route('admin.metatags')}}">
        <i class="fas fa-fw fa-list"></i>
        <span>Meta Tags</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{route('admin.enquiry')}}">
        <i class="fas fa-fw fa-question"></i>
        <span>Enquiry</span>
    </a>
</li>

<li class="nav-item ">
    <a class="nav-link" href="{{route('admin.pages')}}">
        <i class="fas fa-fw fa-list-alt"></i>
        <span>Pages</span></a>
</li>

<li class="nav-item ">
    <a class="nav-link" href="{{route('admin.clients')}}">
        <i class="fas fa-fw fa-list-alt"></i>
        <span>Clients</span></a>
</li>

<li class="nav-item ">
    <a class="nav-link" href="{{route('admin.service.view')}}">
        <i class="fas fa-fw fa-table"></i>
        <span>Service</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<li class="nav-item">
    <a class="nav-link" href="{{route('admin.logout')}}">
        <i class="fas fa-fw fa-sign-out-alt"></i>
        <span>Logout</span></a>
</li>

</ul>
<!-- End of Sidebar -->
