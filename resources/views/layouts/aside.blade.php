<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/')}}" class="brand-link">
        <img src="{{asset('adminlte/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">The Wedding</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
                    <a href="{{url('dashboard')}}" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-header">MANAGE DATA</li>

                <li class="nav-item">
                    <a href="{{url('banner/1')}}" class="nav-link">
                        <i class="nav-icon fas fa-window-maximize"></i>
                        <p> Home</p> 
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{url('mempelai/1')}}" class="nav-link">
                        <i class="nav-icon fas fa-heart"></i>
                        <p> Mempelai</p> 
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{url('family')}}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p> Family</p> 
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('akad/1')}}" class="nav-link">
                        <i class="nav-icon fas fa-handshake"></i>
                        <p> Akad</p> 
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('ucapan_kalian')}}" class="nav-link">
                        <i class="nav-icon fas fa-handshake"></i>
                        <p> Ucapan</p> 
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('galeries')}}" class="nav-link">
                        <i class="nav-icon fas fa-image"></i>
                        <p> Galery</p> 
                    </a>
                </li>
                <li class="nav-header">OTHER</li>
                <li class="nav-item">
                    <a href="{{url('keluar')}}" class="nav-link">
                        <i class="far fa-arrow-alt-circle-right nav-icon"></i>
                        <p>Keluar</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>