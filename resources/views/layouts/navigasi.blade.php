<nav class="navbar bg-body-tertiary navbar-expand-md">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><i class="bi-webcam"></i> Presensi</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav nav-underline justify-content-start align-items-center flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="{{ url('dashboard') }}"><i class="bi-house"></i> Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('karyawan*') ? 'active' : '' }}" href="{{ url('karyawan') }}"><i class="bi-people"></i> Karyawan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('profil') ? 'active' : '' }}" href="{{ url('profil') }}"><i class="bi-person-bounding-box"></i> Upload</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
          </ul>
          <section class="me-4 d-flex">
            @if (Auth::user()->avatar)
              <img src="{{ asset(Auth::user()->avatar) }}" width="40" class="rounded-circle">
            @else
              <img src="https://placehold.co/40" class="rounded-circle">
            @endif
            <div class="dropdown open">
              <a class="btn border-0 dropdown-toggle" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true"
                  aria-expanded="false">
                    {{ Auth::user()->name }}
                  </a>
              <div class="dropdown-menu" aria-labelledby="triggerId">
                <form action="{{ route('logout') }}" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item">Logout</button>
                </form>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </nav>