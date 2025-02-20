<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="{{ asset('backend/assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">Admin</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
				</div>
			 </div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
			<li>
					<a href="{{ url('/admin/dashboard' )}}" >
						<div class="parent-icon"><i class='bx bx-home-alt'></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
				</li>
					<br>
				<li>
					<a class="" href="{{route('all.Entries')}}">
						<div class="parent-icon"><i class="fa-solid fa-link"></i>
						</div>
						<div class="menu-title">All Entries</div>
					</a>
				</li>

		
				<li class="menu-label">Account</li>
				<li>
					<a class="" href="{{route('admin.profile')}}">
						<div class="parent-icon"><i class="bx bx-user fs-5"></i>
						</div>
						<div class="menu-title">Profile</div>
					</a>
				</li>
				<li>
					<a class="" href="{{route('admin.password')}}">
						<div class="parent-icon"><i class="fa-solid fa-lock"></i>
						</div>
						<div class="menu-title">Change Password</div>
					</a>
				</li>
				<li>
					<a class="" href="{{route('admin.logout')}}">
						<div class="parent-icon"><i class="bx bx-log-out-circle"></i>
						</div>
						<div class="menu-title">Logout</div>
					</a>
				</li>		

				
			</ul>
			<!--end navigation-->
		</div>