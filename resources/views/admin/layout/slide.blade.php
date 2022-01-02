<aside class="app-sidebar">
					<div class="app-sidebar__logo">
						<a class="header-brand" href="index.html">
							<img src="{{asset('assets/images/brand/logo.png')}}" class="header-brand-img desktop-lgo" alt="Dayonelogo">
							<img src="{{asset('assets/images/brand/logo-white.png')}}" class="header-brand-img dark-logo" alt="Dayonelogo">
							<img src="{{asset('assets/images/brand/favicon.png')}}" class="header-brand-img mobile-logo" alt="Dayonelogo">
							<img src="{{asset('assets/images/brand/favicon1.png')}}" class="header-brand-img darkmobile-logo" alt="Dayonelogo">
						</a>
					</div>
					<div class="app-sidebar3">
						<div class="app-sidebar__user pb-3">
							<div class="dropdown user-pro-body text-center">
								<div class="user-pic">
									<img src="{{asset('assets/images/users/'.Auth::user()->avatar)}}" alt="user-img" class="avatar-xxl rounded-circle mb-1">
									<div class="emp-award" data-toggle="tooltip" data-placement="top" title="Best Employee Of The Year"><i class="fa fa-trophy"></i></div>
								</div>
								<div class="user-info">
									<h5 class=" mb-2">{{Auth::user()->name}}</h5>
									<span class="text-muted app-sidebar__user-name text-sm">Manager</span>
								</div>
							</div>
							
						</div>
						
						<ul class="side-menu">
							
									<li><a href="{{route('admindashboard')}}" class="slide-item">Dashboard</a></li>
									<li><a href="{{route('addemployee')}}" class="slide-item">Thêm nhân viên mới</a></li>
									<li><a href="{{route('showemployee')}}" class="slide-item">quản lí nhân viên</a></li>
									<li><a href="{{route('customertransferhistory')}}" class="slide-item">Lịch sử chuyển khách hàng</a></li>
									<li><a href="{{route('employeesalary')}}" class="slide-item">Tính lương cho nhân viên</a></li>
									<li><a href="{{route('holiday')}}" class="slide-item">Thêm ngày nghỉ</a></li>
						</ul>
						
					</div>
</aside>