<aside class="main-sidebar"> 
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('arsip/fileMaster/logo.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>LEVEL AKSES</p>
          <a href="#"><i class="fa fa-circle text-success"></i> {{ Auth::user()->level }}</a>
        </div>
      </div>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"><b>MENU UTAMA APLIKASI</b></li>
        {{-- @if(Auth::check()) --}}
        {{-- <li class="active">
          <a href="{{ url('/') }}">
            <i class="fa fa-home"></i> <span>DASHBOARD</span>
          </a>
        </li> --}}
        @if(Auth::check())
        <li class="active">
          <a href="{{ url('neraca') }}">
            <i class="fa fa-balance-scale"></i> <span>NERACA</span>
          </a>
        </li>
        <li>
          <a href="{{ url('nominatif') }}">
            <i class="fa fa-list-ol"></i> <span>NOMINATIF</span>
          </a>
        </li>
        @endif
        @if((Auth::check()&&Auth::user()->level=='Superadmin'))
        <li>
          <a href="{{ url('pengaturan-akun') }}">
            <i class="fa fa-user-circle-o"></i> <span>AKUN</span>
          </a>
        </li>
        @endif
        
      </ul>
    </section>
  <!-- /.sidebar -->
</aside>