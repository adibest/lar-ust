<section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('adminlte/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
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
        {{-- <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{asset('adminlte/index.html')}}"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a href="{{asset('adminlte/index2.html')}}"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>
        </li> --}}
        <li class="{{ Request::is('admin') ? 'active' : '' }}">
          <a href="{{ url('admin') }}">
            <i class="fa fa-home"></i> <span>Home</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>
        <li class="{{ Request::is('admin/santri') ? 'active' : '' }}">
          <a href="{{ url('admin/santri') }}">
            <i class="fa fa-th"></i> <span>Santri</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>
        <li class="{{ Request::is('admin/guru') ? 'active' : '' }}">
          <a href="{{ url('admin/guru') }}">
            <i class="fa fa-bank"></i> <span>Guru</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>
      </ul>
    </section>