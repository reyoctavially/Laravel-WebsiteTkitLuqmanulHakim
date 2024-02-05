<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-3 mb-1 text-muted">
        <span>Dashboard</span>
      </h6>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
            <span data-feather="file-text"></span>
            Postingan Saya
          </a>
        </li>
      </ul>

      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/passwords*') ? 'active' : '' }}" href="/dashboard/passwords">
            <span data-feather="lock"></span>
            Ganti Kata Sandi
          </a>
        </li>
      </ul>

      @can('admin')
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-3 mb-1 text-muted">
          <span>Administrator</span>
        </h6>

        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/activities*') ? 'active' : '' }}" href="/dashboard/activities">
              <span data-feather="activity"></span>
              Aktivitas Sekolah
            </a>
          </li>
        </ul> 

        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/users*') ? 'active' : '' }}" href="/dashboard/users">
              <span data-feather="users"></span>
              Data Guru
            </a>
          </li>
        </ul> 

        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/registrations*') ? 'active' : '' }}" href="/dashboard/registrations">
              <span data-feather="info"></span>
              Info Registrasi
            </a>
          </li>
        </ul>

        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" href="/dashboard/categories">
              <span data-feather="grid"></span>
              Kategori Postingan
            </a>
          </li>
        </ul>
        
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/profiles*') ? 'active' : '' }}" href="/dashboard/profiles">
              <span data-feather="briefcase"></span>
              Profil Sekolah
            </a>
          </li>
        </ul>  

        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/programs*') ? 'active' : '' }}" href="/dashboard/programs">
              <span data-feather="star"></span>
              Program Unggulan
            </a>
          </li>
        </ul>

        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/allposts*') ? 'active' : '' }}" href="/dashboard/allposts">
              <span data-feather="book"></span>
              Semua Postingan
            </a>
          </li>
        </ul>

        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/testimonials*') ? 'active' : '' }}" href="/dashboard/testimonials">
              <span data-feather="mic"></span>
              Testimoni
            </a>
          </li>
        </ul>

      @endcan

    </div>
  </nav>