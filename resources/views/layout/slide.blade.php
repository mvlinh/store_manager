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
									<img src="{{asset('assets/images/users/'.Auth::user()->avatar.'.jpg')}}" alt="user-img" class="avatar-xxl rounded-circle mb-1">
									<div class="emp-award" data-toggle="tooltip" data-placement="top" title="Best Employee Of The Year"><i class="fa fa-trophy"></i></div>
								</div>
								<div class="user-info">
									<h5 class=" mb-2">Max Poole</h5>
									<span class="text-muted app-sidebar__user-name text-sm">Employee</span>
								</div>
							</div>
							<div class="d-flex justify-content-center text-center fs-18 mt-1 mb-3 align-items-end app-user-rating">
								<div class="Rating mg-l-5">
									<svg xmlns='http://www.w3.org/2000/svg' class='ionicon active' height="18" width="18" viewBox='0 0 512 512'><title>Star</title><path d='M394 480a16 16 0 01-9.39-3L256 383.76 127.39 477a16 16 0 01-24.55-18.08L153 310.35 23 221.2a16 16 0 019-29.2h160.38l48.4-148.95a16 16 0 0130.44 0l48.4 149H480a16 16 0 019.05 29.2L359 310.35l50.13 148.53A16 16 0 01394 480z'/></svg>
									<svg xmlns='http://www.w3.org/2000/svg' class='ionicon active' height="18" width="18" viewBox='0 0 512 512'><title>Star</title><path d='M394 480a16 16 0 01-9.39-3L256 383.76 127.39 477a16 16 0 01-24.55-18.08L153 310.35 23 221.2a16 16 0 019-29.2h160.38l48.4-148.95a16 16 0 0130.44 0l48.4 149H480a16 16 0 019.05 29.2L359 310.35l50.13 148.53A16 16 0 01394 480z'/></svg>
									<svg xmlns='http://www.w3.org/2000/svg' class='ionicon active' height="18" width="18" viewBox='0 0 512 512'><title>Star Half</title><path d='M480 208H308L256 48l-52 160H32l140 96-54 160 138-100 138 100-54-160z' fill='none' stroke='currentColor' stroke-linejoin='round' stroke-width='32'/><path d='M256 48v316L118 464l54-160-140-96h172l52-160z'/></svg>
									<svg xmlns='http://www.w3.org/2000/svg' class='ionicon' height="18" width="18" viewBox='0 0 512 512'><title>Star</title><path d='M394 480a16 16 0 01-9.39-3L256 383.76 127.39 477a16 16 0 01-24.55-18.08L153 310.35 23 221.2a16 16 0 019-29.2h160.38l48.4-148.95a16 16 0 0130.44 0l48.4 149H480a16 16 0 019.05 29.2L359 310.35l50.13 148.53A16 16 0 01394 480z'/></svg>
									<svg xmlns='http://www.w3.org/2000/svg' class='ionicon' height="18" width="18" viewBox='0 0 512 512'><title>Star</title><path d='M394 480a16 16 0 01-9.39-3L256 383.76 127.39 477a16 16 0 01-24.55-18.08L153 310.35 23 221.2a16 16 0 019-29.2h160.38l48.4-148.95a16 16 0 0130.44 0l48.4 149H480a16 16 0 019.05 29.2L359 310.35l50.13 148.53A16 16 0 01394 480z'/></svg>
									<span class="fs-13 text-white-80 ml-1">(3/5)</span>
								</div>
							</div>
						</div>
						<div class="d-flex emp_details">
							<div class="attendance text-center">
								<h5 class="mb-1">
									<span class="fs-18 text-success">22</span>
									<span class="my-auto fs-9 font-weight-normal text-white-50 ml-1 mr-1">/</span>
									<span class="fs-18 text-white font-weight-light">31</span>
								</h5>
								<span class="fs-12 mb-0 pb-0">Attendance</span>
							</div>
							<div class="attendance text-center">
								<h5 class="mb-1">
									<span class="fs-18 text-orange">0</span>
									<span class="my-auto fs-9 font-weight-normal text-white-50 ml-1 mr-1">/</span>
									<span class="fs-18 text-white font-weight-light">41</span>
								</h5>
								<span class="fs-12 mb-0 pb-0">Leaves</span>
							</div>
						</div>
						<ul class="side-menu">
							
									<li><a href="{{route('dashboard')}}" class="slide-item">Dashboard</a></li>
									<li><a href="{{route('manager_customer')}}" class="slide-item">Khách Hàng đang chăm sóc</a></li>
									<li><a href="{{route('addCustomer')}}" class="slide-item">Thêm khách hàng</a></li>
									<li><a href="{{route('transfer_customer_receive')}}" class="slide-item">Nhận khách hàng mới</a></li>
									<li><a href="{{route('self_profile')}}" class="slide-item">Profile </a></li>
									<li><a href="{{route('invoice')}}" class="slide-item">Xuất hóa đơn</a></li>
						</ul>
						<div class="Annoucement_card">
							<div class="text-center">
								<h4 class="text-white text-center mb-0">This Week Report</h4>
							</div>
							<div>
								<div class="chart-wrapper sidemnu-widget overflow-hidden">
									<canvas id="sidemenuchart" class="overflow-hidden"></canvas>
								</div>
							</div>
							<div class="text-center">
								<h4 class="text-white text-center">Performance</h4>
								<span class="fs-13 text-white-50 justify-content-center text-center">Durning Weekly Working hours</span>
							</div>
						</div>
					</div>
				</aside>