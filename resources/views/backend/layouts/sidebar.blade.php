 <div data-active-color="white" data-background-color="man-of-steel" data-image="app-assets/img/sidebar-bg/01.jpg" class="app-sidebar">
        <!-- main menu header-->
        <!-- Sidebar Header starts-->
        <div class="sidebar-header">
          <div class="logo clearfix"><a href="#" class="logo-text float-left">
              <div class="logo-img"><img src="{{asset('backend/app-assets/img/logo.png')}}"/></div>
              <span class="text align-middle">Admin</span></a>
              <a id="sidebarToggle" href="javascript:;" class="nav-toggle d-none d-sm-none d-md-none d-lg-block"><i data-toggle="expanded" class="toggle-icon ft-toggle-right"></i></a><a id="sidebarClose" href="javascript:;" class="nav-close d-block d-md-block d-lg-none d-xl-none"><i class="ft-x"></i></a></div>
        </div>
        <!-- Sidebar Header Ends-->
        <!-- / main menu header-->
        <!-- main menu content-->
        <div class="sidebar-content">
          <div class="nav-container">
            <ul id="main-menu-navigation" data-menu="menu-navigation" data-scroll-to-active="true" class="navigation navigation-main">
              
              
              <li class=" nav-item"><a href="#"><i class="ft-file-text"></i><span data-i18n="" class="menu-title">Dashboard</span></a>
              </li>
              
              
              <li class="has-sub nav-item"><a href="#"><i class="ft-layout"></i><span data-i18n="" class="menu-title">Products</span></a>
                <ul class="menu-content">
                  <li><a href="#" class="menu-item">Add Product</a>
                  </li>
                  <li><a href="#" class="menu-item">All Product</a>
                  </li>
                 
                 
                </ul>
              </li>
              
              <li class="has-sub nav-item"><a href="#"><i class="ft-layout"></i><span data-i18n="" class="menu-title">Brands</span></a>
                <ul class="menu-content">
                  <li><a href="{{url('admin/brand/create')}}" class="menu-item">Add Brand</a>
                  </li>
                  <li><a href="{{url('admin/brand')}}" class="menu-item">All Brand</a>
                  </li>
                  
                 
                </ul>
              </li>

              <li class="has-sub nav-item"><a href="#"><i class="ft-layout"></i><span data-i18n="" class="menu-title">Category</span></a>
                <ul class="menu-content">
                  <li><a href="#" class="menu-item">Add Category</a>
                  </li>
                  <li><a href="#" class="menu-item">All Category</a>
                  </li>
                  
                 
                </ul>
              </li>

              <li class="has-sub nav-item"><a href="#"><i class="ft-layout"></i><span data-i18n="" class="menu-title">User</span></a>
                <ul class="menu-content">
                  <li><a href="#" class="menu-item">Add user</a>
                  </li>
                  <li><a href="#" class="menu-item">All User</a>
                  </li>
                  
                 
                </ul>
              </li>

              <li class="has-sub nav-item"><a href="#"><i class="ft-layout"></i><span data-i18n="" class="menu-title">Customer</span></a>
                <ul class="menu-content">
                  <li><a href="#" class="menu-item">Add Customer</a>
                  </li>
                  <li><a href="#" class="menu-item">All Customer</a>
                  </li>
                  
                 
                </ul>
              </li>
              
            </ul>
          </div>
        </div>
        <!-- main menu content-->
        <div class="sidebar-background"></div>
        <!-- main menu footer-->
        <!-- include includes/menu-footer-->
        <!-- main menu footer-->
      </div>
      <!-- / main menu-->