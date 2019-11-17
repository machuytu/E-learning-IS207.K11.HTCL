{{-- left navigation --}}
<aside class="sidebar-left">
    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <h1><a class="navbar-brand" href="/dashboard"><span class="fa fa-area-chart"></span>ADMINPAGE<span class="dashboard_text">for admin</span></a></h1>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="sidebar-menu">
            <li class="header">DASH BOARD</li>
            <li class="treeview">
              <a href="/dashboard">
              <i class="fa fa-dashboard"></i> <span>Trang Chủ</span>
              </a>
            </li>
            <li class="treeview">
              <a href="{{ route('giaoviens.index') }}">
              <i class="fa fa-dashboard"></i> <span>Giáo Viên</span>
              </a>
            </li>
            <li class="treeview">
              <a href="{{ route('hocviens.index') }}">
              <i class="fa fa-dashboard"></i> <span>Học Viên</span>
              </a>
            </li>
        </div>
        <!-- /.navbar-collapse -->
    </nav>
  </aside>
  </div>
{{-- left navigation --}}
