  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{ asset( 'AdminLTE/dist/img/virus1.png') }}" alt="Logo" class="brand-image img-circle elevation-" style="opacity: .8">
      <span class="brand-text font-weight-light">SehaTI.</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset( 'AdminLTE/dist/img/logoicon5.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{  Auth::user()->name  }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{ url('/home') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

        @if (auth()->user()->role == 0)
        <li class="nav-header text-white">DATA USER</li>
          <li class="nav-item">
            <a href="{{ url('/user') }}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                  Pengajuan
              </p>
            </a>
          </li>
        @endif

        @if (auth()->user()->role == 1)
        <li class="nav-header text-white">DATA ADMIN</li>
          <li class="nav-item">
            <a href="{{ url('/admin') }}" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Pengecekan
              </p>
            </a>
          </li>
        @endif

        <li class="nav-header text-white">REPORT</li>
        <li class="nav-item">
            <a href="{{ url('/pengumuman') }}" class="nav-link">
              <i class="nav-icon fas fa-bullhorn"></i>
              <p>
                 Pengumuman
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- /.Main Sidebar Container -->
