
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar" style="background-color: black;">
      <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top" style="background-color: black;">
        <a class="sidebar-brand brand-logo" href="index.html"><img src="admin/template/assets/images/logo.svg" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="admin/template/assets/images/logo-mini.svg" alt="logo" /></a>
      </div>

      <ul class="nav">
        <li class="nav-item nav-category">
          <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="{{url('/user')}}">
            <span class="menu-icon">
              <i class="mdi mdi-speedometer"></i>
            </span>
            <span class="menu-title">User</span>
          </a>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#menu" aria-expanded="false" aria-controls="menu">
                <span class="menu-icon">
              <i class="mdi mdi-playlist-play"></i>
            </span>
            <span class="menu-title">Menu</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="menu">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="{{url('/menu')}}">Data Menu</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{url('/tambah')}}"> Tambah Menu</a></li>
            </ul>
        </li>

        <li class="nav-item menu-items">
          <a class="nav-link" data-bs-toggle="collapse" href="#chef" aria-expanded="false" aria-controls="chef">
            <span class="menu-icon">
              <i class="mdi mdi-table-large"></i>
            </span>
            <span class="menu-title">Chef</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="chef">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="{{url('/viewchef')}}">Data Chef</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{url('/tambahchef')}}"> Tambah Chef</a></li>
            </ul>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="{{url('/viewreservation')}}">
            <span class="menu-icon">
              <i class="mdi mdi-chart-bar"></i>
            </span>
            <span class="menu-title">Pesanan</span>
          </a>
        </li>

      </ul>
    </nav>





