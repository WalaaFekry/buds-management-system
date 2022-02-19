@php
$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();
@endphp

<aside class="main-sidebar">
  <section class="sidebar">	
		<div class="user-profile">
			<div class="ulogo">
				 <a href="#">
					 <div class="d-flex align-items-center justify-content-center">		
              <img alt="Logo" src="{{ asset('backend/images/favicon-32x32.png') }}" class="h-40px" />			 	
						  <h3><b>Buds</b> Admin</h3>
					 </div>
				</a>
			</div>
    </div>
    <ul class="sidebar-menu" data-widget="tree">
		  <li class="{{ ($route == 'dashboard')?'active': '' }}">
        <a href="{{ route('dashboard') }}">
          <i data-feather="pie-chart"></i>
			    <span>Dashboard</span>
        </a>
      </li> 

		  <li class="treeview {{ ($prefix == '/core')?'active': '' }}">
          <a href="#">
            <i data-feather="grid"></i>
            <span>Core Data</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=""><i class="ti-more"></i>Country</a></li>
            <li><a href=""><i class="ti-more"></i>City</a></li>
            <li><a href=""><i class="ti-more"></i>State</a></li>
          </ul>
      </li> 

      <li class="treeview {{ ($prefix == '/users')?'active': '' }}" >
        <a href="#">
        <i class="mdi mdi-account-settings-variant"></i>
          <span>Manage User</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('user.view') }}"><i class="ti-more"></i>View User</a></li>
          <li><a href="{{ route('user.add') }}"><i class="ti-more"></i>Add User</a></li>
        </ul>
      </li>

      <li class="treeview {{ ($prefix == '/profile')?'active': '' }}" >
        <a href="#">
        <i class="mdi mdi-account-settings-variant"></i>
          <span>Manage Profile</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('profile.view') }}"><i class="ti-more"></i>User Profile</a></li>
          <li><a href="{{ route('password.view') }}"><i class="ti-more"></i>Change Password</a></li>
        </ul>
      </li>

      <li class="header nav-small-cap">Settings</li>
      <li>
        <a href="{{ route('admin.logout') }}">
          <i class="mdi mdi-logout"></i>
          <span>Log Out</span>
        </a>
      </li>        
    </ul>
  </section>
</aside>