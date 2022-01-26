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
						<ul class="side-menu open">
							<li class="slide">
								<a class="side-menu__item" data-toggle="slide" href="{{route('admindashboard')}}">
									<i class="feather feather-home sidemenu_icon"></i>
									<span class="side-menu__label">Trang Chủ</span>
								</a>
							</li>
							<li class="slide">
								<a class="side-menu__item" data-toggle="slide" href="{{route('addemployee')}}">
									<i class="feather feather-book  sidemenu_icon"></i>
									<span class="side-menu__label">Thêm nhân viên mới</span>
								</a>
							</li>
							<li class="slide">
								<a class="side-menu__item" data-toggle="slide" href="{{route('showemployee')}}">
									<i class="feather feather-user sidemenu_icon"></i>
									<span class="side-menu__label">quản lí nhân viên</span>
								</a>
							</li>
							<li class="slide">
								<a class="side-menu__item" data-toggle="slide" href="{{route('customertransferhistory')}}">
									<i class="feather feather-briefcase  sidemenu_icon"></i>
									<span class="side-menu__label">Lịch sử chuyển khách hàng</span>
								</a>
							</li>
							<li class="slide">
								<a class="side-menu__item" data-toggle="slide" href="{{route('employeesalary')}}">
									<i class="feather feather-headphones  sidemenu_icon"></i>
									<span class="side-menu__label">Tính lương cho nhân viên</span>
								</a>
							</li>
							<li class="slide">
								<a class="side-menu__item" data-toggle="slide" href="{{route('holiday')}}">
									<i class="feather feather-airplay  sidemenu_icon"></i>
									<span class="side-menu__label">Thêm ngày nghỉ</span>
								</a>
							</li>
						</ul>
					</div>
</aside>