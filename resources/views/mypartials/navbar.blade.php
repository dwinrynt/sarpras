<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light"
    style="background-color: #00A65B !important;height: 11vh;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars text-light"></i></a>
        </li>
    </ul>

    <!-- SEARCH FORM -->
    {{-- <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form> --}}



    <form class="form-inline ml-2" action="/profil/admin" method="GET">
      <div class="input-group" style="width: 50vw">
        <input class="form-control form-control-navbar" type="search" placeholder="Search NPSN, sekolah id, nama sekolah" aria-label="Search" style="height: 2.5rem;font-size: 15px;padding: 0 10px;" name="search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit" style="width: 40px;">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    {{-- <form action="/logout" method="post">
      @csrf
      <button type="submit" class="btn btn-danger">Logout</button>
    </form> --}}

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link mr-2" data-toggle="dropdown" href="#" style="padding: 0;">
                <span class="nama-sekolah text-white mr-2">{{ Auth::user()->name }}</span>
                <img src="/assets/img/avatars/TarunaBhaktiLogo.png" alt="TarunaBhakti Logo"
                    class="brand-image img-circle bg-white" width="33" style="opacity: .8">
            </a>
            <div class="dropdown-menu float-right">
                <a class="dropdown-item" tabindex="-1" href="#"><i class="bi bi-pencil-square"></i> Ubah Password</a>
                <a class="dropdown-item" tabindex="-1" href="/upload-logo"><i class="bi bi-image"></i> Upload Logo</a>
                <div class="dropdown-divider"></div>
                <form action="/logout" method="post">
                    @csrf
                    <button class="dropdown-item" tabindex="-1" type="submit" style="border: none; background: none;"><i
                            class="bi bi-box-arrow-left"></i> Logout</button>
                </form>
            </div>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
