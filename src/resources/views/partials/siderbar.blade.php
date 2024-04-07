  <!-- Main Sidebar Container -->
  <aside style="background-color: #1f2234" class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="{{ route('home') }}" class="brand-link">
          <img src="{{ asset('UserLTE/assets/images/icons/Logo_thuonghieu.png') }}" alt="AdminLTE Logo"
              class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light"><b>Tran Tien Anh</b></span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar ">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              @if (Auth::check())
                  <div class="info">
                      <a href="">
                          <i class="fas fa-user-tie"></i>
                          {{ Auth::user()->name }}
                      </a>
                  </div>
                  <div class="info">
                      <a href="{{ route('logout') }}">
                          Thoát
                      </a>
                  </div>
              @else
                  <div class="info">
                      <a href="">
                          Vui lòng đăng nhập vào hệ thống!
                      </a>
                  </div>
              @endif
          </div>


          <!-- SidebarSearch Form -->
          <div class="form-inline">
              <div class="input-group" data-widget="sidebar-search">
                  <input style="background-color: #1f2234" class="form-control form-control-sidebar" type="search"
                      placeholder="Tìm kiếm" aria-label="Search">
                  <div class="input-group-append">
                      <button style="background-color: #1f2234" class="btn btn-sidebar">
                          <i class="fas fa-search fa-fw"></i>
                      </button>
                  </div>
              </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">

                  <li class="nav-item">
                      <a href="{{ route('home.index') }}" class="nav-link">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                              Thống kê
                              <span class="right badge badge-danger"></span>
                          </p>
                      </a>
                  </li>

                  <li class="nav-item">
                      <a href="{{ route('categories.index') }}" class="nav-link">
                          <i class="nav-icon fas fa-th"></i>
                          <p>
                              Danh mục sản phẩm
                              <span class="right badge badge-danger"></span>
                          </p>
                      </a>
                  </li>


                  <li class="nav-item">
                      <a href="{{ route('product.index') }}" class="nav-link">
                          <i class="nav-icon fas fa-fish"></i>
                          <p>
                              Sản phẩm
                              <span class="right badge badge-danger"></span>
                          </p>
                      </a>
                  </li>

                  <li class="nav-item">
                      <a href="{{ route('slider.index') }}" class="nav-link">
                          <i class="nav-icon fas fa-sliders-h"></i>
                          <p>
                              Slider
                              <span class="right badge badge-danger"></span>
                          </p>
                      </a>
                  </li>

                  <li class="nav-item">
                      <a href="{{ URL::to('/manage-order') }}" class="nav-link">
                          <i class="nav-icon fas fa-file-invoice"></i>
                          <p>
                              Đơn hàng
                              <span class="right badge badge-danger"></span>
                          </p>
                      </a>
                  </li>

                  <li class="nav-item">
                      <a href="{{ route('customers.index') }}" class="nav-link">
                          <i class="nav-icon fas fa-users"></i>
                          <p>
                              Danh sách khách hàng
                              <span class="right badge badge-danger"></span>
                          </p>
                      </a>
                  </li>
              </ul>
          </nav>

          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>
