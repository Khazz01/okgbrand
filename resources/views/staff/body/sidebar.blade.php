@php

	$id = Auth::user()->id;
	$staffId = App\models\User::find($id);
	$status = $staffId->status
@endphp

<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="{{ asset('backend/assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">staff</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
				</div>
			 </div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
			<li>
					<a href="{{ url('/staff/dashboard' )}}" >
						<div class="parent-icon"><i class='bx bx-home-alt'></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
				</li>
				@if($status === '1')
				<li class="menu-label">Entry</li>
				<li>
					<a class="" href="{{route('add.Entry')}}">
						<div class="parent-icon"><i class="fa-solid fa-link"></i>
						</div>
						<div class="menu-title">Add Entry</div>
					</a>
				</li>
				@else

				@endif
		
				<li class="menu-label">Account</li>
				<li>
					<a class="" href="{{route('staff.profile')}}">
						<div class="parent-icon"><i class="bx bx-user fs-5"></i>
						</div>
						<div class="menu-title">Profile</div>
					</a>
				</li>
				<li>
					<a class="" href="{{route('staff.password')}}">
						<div class="parent-icon"><i class="fa-solid fa-lock"></i>
						</div>
						<div class="menu-title">Change Password</div>
					</a>
				</li>
				<li>
					<a class="" href="{{route('staff.logout')}}">
						<div class="parent-icon"><i class="bx bx-log-out-circle"></i>
						</div>
						<div class="menu-title">Logout</div>
					</a>
				</li>		
				
			</ul>
			<!--end navigation-->
		</div>