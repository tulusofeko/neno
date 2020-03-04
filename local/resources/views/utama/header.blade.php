<header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>O</b>JK</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>CAR</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="{{ asset('/arsip/fileMaster/laki-laki2.png')}}" class="user-image" alt="User Image">
              <span class="hidden-xs">{{ Auth::user()->nama }}</span>
            </a>
            <ul class="dropdown-menu animated bounceIn" style="border-radius: 10px;">
              <!-- User image -->
              <li class="user-header" style="border-radius: 10px;">
                  <img src="{{ asset('/arsip/fileMaster/laki-laki2.png')}}" class="img-circle" alt="User Image">
                <p>
                  {{ Auth::user()->nama }}
                  <small>{{ Auth::user()->level }}</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer" style="border-radius: 10px;"> 
                {{-- <div class="pull-left">
                  <a href="#" class="btn-social btn btn-primary btn-sm"><i class="fa fa-id-card" aria-hidden="true"></i> Profil Pegawai</a>
                </div> --}}
                <div class="pull-right">
                  <a href="{{ url('logout') }}" class="btn-social btn btn-danger btn-sm"><i class="fa fa-sign-out" aria-hidden="true"></i> Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>