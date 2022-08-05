<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('fotouser/'.Auth::user()->foto) }}" alt="User" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
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
        <li class="">
          @section('dashboard')
            <a href="/"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
          @show
        </li>
        <li class="header">MASTER</li>
        <li class="">
          @section('dtuser')
            <a href=/datauser><i class="fa fa-users"></i> <span>Data user</span></a>            
          @show
        </li>
        <li class="">
          @section('unit')
          <a href="data">
            <i class="fa fa-cubes"></i> <span>Unit</span>
          </a>
          @show
        </li>
        <li class="">
          @section('tenant')
          <a href="datatenant">
            <i class="fa fa-id-card"></i> <span>Tenant</span>
          </a>
          @show
        </li>
        <li class="header">Log Out</li>
        <li class="keluar">
          <a href="logout">
            <i class="fa-solid fa-arrow-right-from-bracket"></i> <span>Log out</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>