@php 
    $route = Route::getCurrentRoute()->getAction();
    if (!array_key_exists('controller', $route)) {
        $controller = 'home';    
    } else {
        $controller = explode("\\", $route['controller'])[3];
        $controller = explode("@", $controller)[0];
    }
@endphp

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('AdminLTE/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Mas Wijayanto</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="{{ $controller == 'home' ? 'active' : '' }}"><a href="/"><i class="fa fa-book"></i> <span>Home</span></a></li>
        <li class="{{ $controller == 'MahasiswaController' ? 'active' : '' }}"><a href="{{ route('mahasiswa.index') }}"><i class="fa fa-user"></i> <span>Mahasiswa</span></a></li>
        <li class="{{ $controller == 'DosenController' ? 'active' : '' }}"><a href="{{ route('dosen.index') }}"><i class="fa fa-user-secret"></i> <span>Dosen</span></a></li>
        <li class="{{ $controller == 'MatakuliahController' ? 'active' : '' }}"><a href="{{ route('matakuliah.index') }}"><i class="fa fa-book"></i> <span>Matakuliah</span></a></li>
        <li class="{{ $controller == 'RuangController' ? 'active' : '' }}"><a href="{{ route('ruang.index') }}"><i class="fa fa-building"></i> <span>Ruangan</span></a></li>
        <li class="{{ $controller == 'JadwalController' ? 'active' : '' }}"><a href="{{ route('jadwal.index') }}"><i class="fa fa-calendar"></i> <span>Jadwal</span></a></li>
    </ul>
    </section>
    <!-- /.sidebar -->
  </aside>