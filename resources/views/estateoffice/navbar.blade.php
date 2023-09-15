<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="myprofile.php">
        <div class="sidebar-brand-text mx-3">PICSS</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!--General Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{url('Homepage')}}">
            <i class="fas fa-solid fa-house"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Estateoffice Navbar -->

    <!-- <hr class="sidebar-divider my-0"> -->
    <li class="nav-item">
        <a class="nav-link" href="MyDevices">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Registered Devices</span>
        </a>
    </li>
    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link" href="MyTasks">
            <i class="fa-solid fa-square-arrow-up-right"></i>
            <span>Reported Tasks</span>
        </a>
    </li>

    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="RequestedDevices">
            <i class="fa-solid fa-rug"></i>
            <span>Requested Device</span>
        </a>
    </li>

    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('profile.show') }}">
            <i class="fa-solid fa-user fa-2xl"></i>
            <span>My Profile</span>
        </a>
    </li>
    <hr class="sidebar-divider">
</ul>