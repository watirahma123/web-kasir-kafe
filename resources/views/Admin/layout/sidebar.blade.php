<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-secondary elevation-4">
  <!-- Brand Logo -->
  <a href="image/logo.jpg" class="brand-link">
    <!--img src="/image/logo.jpg" alt="Cafe de la Lune Logo" class="brand-image img-circle elevation-3" style="opacity: .8"-->
    <span class="brand-text font-weight-light" style="font-family: 'Lobster', cursive;">Café de la Luna</span>
  </a>

    <!-- Sidebar -->
    <div class="sidebar">
      
      
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            
          <li class="nav-item">
            <a href="/" class="nav-link {{ Request::is('/*') ? 'active' : ''}}">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/admin/kategori" class="nav-link {{ Request::is('admin/kategori*') ? 'active' : ''}}">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Kategori
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/admin/produk" class="nav-link {{ Request::is('admin/produk*') ? 'active' : ''}}">
              <i class="nav-icon fas fa-store"></i>
              <p>
                Produk
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/admin/transaksi" class="nav-link {{ Request::is('admin/transaksi*') ? 'active' : ''}}">
              <i class="nav-icon fas fa-credit-card"></i>
              <p>
                Transaksi
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/admin/user" class="nav-link {{ Request::is('admin/user*') ? 'active' : ''}}">
              <i class="nav-icon fas fa-user"></i>
              <p>
                User
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <div class="content-wrapper">