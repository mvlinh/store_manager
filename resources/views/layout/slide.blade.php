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
									<span class="text-muted app-sidebar__user-name text-sm">Nhân Viên</span>
								</div>
							</div>
							<div class="d-flex justify-content-center text-center fs-18 mt-1 mb-3 align-items-end app-user-rating">
								<!-- <div class="Rating mg-l-5">
									<svg xmlns='http://www.w3.org/2000/svg' class='ionicon active' height="18" width="18" viewBox='0 0 512 512'><title>Star</title><path d='M394 480a16 16 0 01-9.39-3L256 383.76 127.39 477a16 16 0 01-24.55-18.08L153 310.35 23 221.2a16 16 0 019-29.2h160.38l48.4-148.95a16 16 0 0130.44 0l48.4 149H480a16 16 0 019.05 29.2L359 310.35l50.13 148.53A16 16 0 01394 480z'/></svg>
									<svg xmlns='http://www.w3.org/2000/svg' class='ionicon active' height="18" width="18" viewBox='0 0 512 512'><title>Star</title><path d='M394 480a16 16 0 01-9.39-3L256 383.76 127.39 477a16 16 0 01-24.55-18.08L153 310.35 23 221.2a16 16 0 019-29.2h160.38l48.4-148.95a16 16 0 0130.44 0l48.4 149H480a16 16 0 019.05 29.2L359 310.35l50.13 148.53A16 16 0 01394 480z'/></svg>
									<svg xmlns='http://www.w3.org/2000/svg' class='ionicon active' height="18" width="18" viewBox='0 0 512 512'><title>Star Half</title><path d='M480 208H308L256 48l-52 160H32l140 96-54 160 138-100 138 100-54-160z' fill='none' stroke='currentColor' stroke-linejoin='round' stroke-width='32'/><path d='M256 48v316L118 464l54-160-140-96h172l52-160z'/></svg>
									<svg xmlns='http://www.w3.org/2000/svg' class='ionicon' height="18" width="18" viewBox='0 0 512 512'><title>Star</title><path d='M394 480a16 16 0 01-9.39-3L256 383.76 127.39 477a16 16 0 01-24.55-18.08L153 310.35 23 221.2a16 16 0 019-29.2h160.38l48.4-148.95a16 16 0 0130.44 0l48.4 149H480a16 16 0 019.05 29.2L359 310.35l50.13 148.53A16 16 0 01394 480z'/></svg>
									<svg xmlns='http://www.w3.org/2000/svg' class='ionicon' height="18" width="18" viewBox='0 0 512 512'><title>Star</title><path d='M394 480a16 16 0 01-9.39-3L256 383.76 127.39 477a16 16 0 01-24.55-18.08L153 310.35 23 221.2a16 16 0 019-29.2h160.38l48.4-148.95a16 16 0 0130.44 0l48.4 149H480a16 16 0 019.05 29.2L359 310.35l50.13 148.53A16 16 0 01394 480z'/></svg>
									<span class="fs-13 text-white-80 ml-1">(3/5)</span>
								</div> -->
							</div>
						</div>
						<ul class="side-menu open">
							<li class="slide">
								<a class="side-menu__item" data-toggle="slide" href="{{route('dashboard')}}">
									<i class="feather feather-home sidemenu_icon"></i>
									<span class="side-menu__label">Trang Chủ</span>
								</a>
							</li>
							<li class="slide">
								<a class="side-menu__item" data-toggle="slide" href="{{route('manager_customer')}}">
									<i class="feather feather-book  sidemenu_icon"></i>
									<span class="side-menu__label">Khách Hàng đang chăm sóc</span>
								</a>
							</li>
							<li class="slide">
								<a class="side-menu__item" data-toggle="slide" href="{{route('addCustomer')}}">
									<i class="feather feather-user sidemenu_icon"></i>
									<span class="side-menu__label">Thêm khách hàng</span>
								</a>
							</li>
							<li class="slide">
								<a class="side-menu__item" data-toggle="slide" href="{{route('transfer_customer_receive')}}">
									<i class="feather feather-briefcase  sidemenu_icon"></i>
									<span class="side-menu__label">Nhận khách hàng mới</span>
								</a>
							</li>
							<li class="slide">
								<a class="side-menu__item" data-toggle="slide" href="{{route('self_profile')}}">
									<i class="feather feather-headphones  sidemenu_icon"></i>
									<span class="side-menu__label">Profile</span>
								</a>
							</li>
							<li class="slide">
								<a class="side-menu__item" data-toggle="slide" href="{{route('invoice')}}">
									<i class="feather feather-airplay  sidemenu_icon"></i>
									<span class="side-menu__label">Xuất hóa đơn</span>
								</a>
							</li>
						</ul>
					</div>
				</aside>