<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">ระบบกิจกรรมนิสิต</span>
    </a>

    <!-- Sidebar -->
    {{-- <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="img-circle
    elevation-2" alt="User Image">
    </div>
    <div class="info">
        <a href="#" class="d-block">Samit Koyom</a>
    </div>
    </div> --}}

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


            <li class="nav-item">
                <a href="{{ url('backend/dashboard') }}" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>

            <li class="nav-header">เมนูหลัก</li>
            {{-- <li class="nav-item has-treeview {{ (request()->segment(2)=='products')?'menu-open':'' }}
            {{ (request()->segment(2)=='categories')?'menu-open':'' }}">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-cubes"></i>
                <p>
                    Stocks
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ url('backend/products') }}"
                        class="nav-link {{ (request()->segment(2)=='products')?'active':'' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Products</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('backend/categories') }}"
                        class="nav-link {{ (request()->segment(2)=='categories')?'active':'' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Category</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{url('backend/orders')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Orders</p>
                    </a>
                </li>
            </ul>
            </li> --}}

            <li class="nav-item">
                <a href="{{ url('backend/activities') }}" class="nav-link">
                    <i class="nav-icon fas fa-cogs"></i>
                    <p>
                        กิจกรรม
                    </p>
                </a>
            </li>

            <li class="nav-header">เมนูสำหรับผู้ดูแล</li>

            <li class="nav-item">
                <a href="{{ url('backend/students') }}" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                        รายชื่อนิสิต
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ url('backend/users') }}" class="nav-link">
                    <i class="nav-icon fas fa-user-friends"></i>
                    <p>
                        Users
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ url('backend/settings') }}" class="nav-link">
                    <i class="nav-icon fas fa-cog"></i>
                    <p>
                        Settings
                    </p>
                </a>
            </li>

            <li class="nav-header">
                <hr>
            </li>

            {{-- <li class="nav-item">
            <a href="#"  class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li> --}}
            <form action="{{ route('logout') }}" id="frm_logout" method="post">
                @csrf
                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="document.getElementById('frm_logout').submit()">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                          ออกจากระบบ
                        </p>
                    </a>
                </li>
            </form>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
