<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
      <img src="{{ url('backend/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">HGI INSIDE</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ url('backend/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ ucwords(Auth::user()->name) }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link {{ (request()->segment(2) == '') ? ' active' : '' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                Dashboard
                </p>
            </a>
            </li>
          <li class="nav-header">DATA MASTER</li>
          <li class="nav-item">
            <a href="{{ route('pelanggan.index') }}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Data Pelanggan
              </p>
            </a>
          </li>
          <li class="nav-header">LAPORAN</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Penghasilan
              </p>
            </a>
          </li>
          <li class="nav-header">OTORITAS</li>
          <li class="nav-item">
            <a href="{{ route('user.index') }}" class="nav-link {{ (request()->segment(2) == 'user') ? ' active' : '' }}">
              <i class="nav-icon fas fa-user-cog"></i>
              <p>
                Data Pengguna
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Pengaturan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" class="nav-link">
                  <i class="fas fa-building nav-icon"></i>
                  <p>Perusahaan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link" data-toggle="modal" data-target="#modal-default">
                <i class="nav-icon fas fa-power-off"></i>
                <p>
                    Logout
                </p>
            </a>

            {{-- <a href="{{ route('logout') }}" class="nav-link">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
                Logout
              </p>
            </a> --}}
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


  <div class="modal fade" id="modal-default">
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn" style="color: #ffffff"><i class="nav-icon fas fa-power-off"></i> Logout</button>

    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Keluar</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Anda yakin ingin keluar dari sistem HGI ?</p>
        </div>
        <div class="modal-footer justify-content-end">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tidak, Batal</button>
          <button type="submit" class="btn btn-danger">Ya, Keluar</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    </form>
    <!-- /.modal-dialog -->
  </div>
