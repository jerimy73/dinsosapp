<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin<sup>Dinsos</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->is('dashboard')?'active':'' }}">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Database
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{ request()->is('employee')?'active':'' }}">
        <a class="nav-link" href="/employee">
            <i class="fas fa-fw fa-user-tie"></i>
            <span>Pegawai</span>
        </a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{ request()->is('user')?'active':'' }}">
        <a class="nav-link" href="/user">
            <i class="fas fa-fw fa-users"></i>
            <span>Akun</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Main Menu
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{ request()->is('surat-tugas')?'active':'' }} {{ request()->is('surat-masuk')?'active':'' }} {{ request()->is('surat-keluar')?'active':'' }}">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePersuratan" aria-expanded="true"
            aria-controls="collapsePersuratan">
            <i class="fas fa-fw fa-cog"></i>
            <span>Surat</span>
        </a>
        <div id="collapsePersuratan" class="collapse {{ request()->is('surat-tugas' || 'surat-keluar' ||'surat-masuk')?'active':'' }} {{ request()->is('customer')?'show':'' }}" aria-labelledby="headingTwo"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ request()->is('surat-tugas')?'active':'' }}" href="/surat-tugas">Surat Tugas</a>
                <a class="collapse-item {{ request()->is('surat-keluar')?'active':'' }}" href="/surat-keluar">Surat Keluar</a>
                <a class="collapse-item {{ request()->is('surat-masuk')?'active':'' }}" href="/surat-masuk">Surat Masuk</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{ request()->is('keputusan-kadis')?'active':'' }} {{ request()->is('keputusan-bupati')?'active':'' }}">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseKeputusan" aria-expanded="true"
            aria-controls="collapseKeputusan">
            <i class="fas fa-fw fa-cog"></i>
            <span>Keputusan</span>
        </a>
        <div id="collapseKeputusan" class="collapse {{ request()->is('keputusan-kadis')?'active':'' }} {{ request()->is('keputusan-bupati')?'show':'' }}" aria-labelledby="headingTwo"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ request()->is('keputusan-kadis')?'active':'' }}" href="/keputusan-kadis">Kepala Dinas</a>
                <a class="collapse-item {{ request()->is('keputusan-bupati')?'active':'' }}" href="/keputusan-bupati">Bupati</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{ request()->is('perbup')?'active':'' }} {{ request()->is('perda')?'active':'' }}">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePeraturan" aria-expanded="true"
            aria-controls="collapsePeraturan">
            <i class="fas fa-fw fa-cog"></i>
            <span>Peraturan</span>
        </a>
        <div id="collapsePeraturan" class="collapse {{ request()->is('perbup' || 'perda')?'active':'' }} {{ request()->is('customer')?'show':'' }}" aria-labelledby="headingTwo"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ request()->is('perbup')?'active':'' }}" href="/perbup">Bupati</a>
                <a class="collapse-item {{ request()->is('perda')?'active':'' }}" href="/perda">Daerah</a>
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
        <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
        <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
        <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
    </div>

</ul>