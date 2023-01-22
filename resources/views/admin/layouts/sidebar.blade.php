<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="{{ asset('admin/images/logo.png') }}" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">{{ env('APP_ABBREVIATION') }}</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li>
					<a class="dropdown-item" href="{{ route('admin.dashboard') }}">
						<div class="parent-icon"><i class="bx bx-home-circle"></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
				</li>	
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-envelope'></i>
						</div>
						<div class="menu-title">Mails</div>
					</a>
					<ul>
					<li> <a href="{{ route('admin.mail.index') }}"><i class="bx bx-right-arrow-alt"></i>View Mails</a></li>
						<li> <a href="{{ route('admin.mail.create') }}"><i class="bx bx-right-arrow-alt"></i>Add Mail</a></li>						
					</ul>
				</li>				
				
				

				<li>
					<a onclick="return confirm('Are You Sure You want to Logout?') " class="dropdown-item" href="{{ route('admin.logout') }}">
						<div class="parent-icon"><i class="bx bx-exit"></i>
						</div>
						<div class="menu-title">Logout</div>
					</a>
				</li>				
			</ul>
		</div>