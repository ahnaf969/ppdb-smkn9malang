 <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index-2.html">Stisla</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index-2.html">St</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{request()->routeIs('beranda') ? 'active' : ''}}">

              <a href="{{route('beranda')}}" class="nav-link"><i class="fas fa-home"></i><span>Beranda</span></a>
             
            </li>
            <li class="menu-header">Starter</li>
            <li class="dropdown"{{request()->routeis('user') ? 'active' : ''}}>

           <li class="{{request()->routeIs('user') ? 'active' : '' }}">
              <a class="nav-link" href="{{route('user')}}"><i class="far fa-square"></i> <span>User</span></a>
           </li>
            <li class="{{request()->routeIs('jurusan') ? 'active' : '' }}">
              <a class="nav-link" href="{{route('jurusan')}}"><i class="fas fa-fire"></i> <span>Jurusan</span></a></li>
            <li class="{{request()->routeIs('pendaftaran') ? 'active' : '' }}">
              <a class="nav-link" href="{{route('pendaftaran')}}"><i class="fas fa-fire"></i> <span>Pendaftaran</span></a></li>
           
           
          <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <!-- <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
              <i class="fas fa-rocket"></i> Documentation
            </a> -->
          </div>        </aside>
      </div>