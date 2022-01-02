<div class="app-header header">
							<div class="container-fluid">
								<div class="d-flex">
									<a class="header-brand" href="index.html">
										<img src="{{asset('assets/images/brand/logo.png')}}" class="header-brand-img desktop-lgo" alt="Dayonelogo">
										<img src="{{asset('assets/images/brand/logo-white.png')}}" class="header-brand-img dark-logo" alt="Dayonelogo">
										<img src="{{asset('assets/images/brand/favicon.png')}}" class="header-brand-img mobile-logo" alt="Dayonelogo">
										<img src="{{asset('assets/images/brand/favicon1.png')}}" class="header-brand-img darkmobile-logo" alt="Dayonelogo">
									</a>
									<div class="app-sidebar__toggle" data-toggle="sidebar">
										<a class="open-toggle" href="#">
											<i class="feather feather-menu"></i>
										</a>
										<a class="close-toggle" href="#">
											<i class="feather feather-x"></i>
										</a>
									</div>
									
									<div class="d-flex order-lg-2 my-auto ml-auto">
										<a class="nav-link my-auto icon p-0 nav-link-lg d-md-none navsearch" href="#" data-toggle="search">
											<i class="feather feather-search search-icon header-icon"></i>
										</a>
										
										<div class="dropdown header-fullscreen">
											<a class="nav-link icon full-screen-link">
												<i class="feather feather-maximize fullscreen-button fullscreen header-icons"></i>
												<i class="feather feather-minimize fullscreen-button exit-fullscreen header-icons"></i>
											</a>
										</div>
										
										
										<div class="dropdown profile-dropdown">
											<a href="#" class="nav-link pr-1 pl-0 leading-none" data-toggle="dropdown">
												<span>
													<img src="{{asset('assets/images/users/'.Auth::user()->avatar)}}" alt="img" class="avatar avatar-md bradius">
												</span>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow animated">
												<div class="p-3 text-center border-bottom">
													<a href="#" class="text-center user pb-0 font-weight-bold">{{Auth::user()->name}}</a>
													<p class="text-center user-semi-title">Quản lí</p>
												</div>
												<a class="dropdown-item d-flex" href="{{route('self_profile')}}">
													<i class="feather feather-user mr-3 fs-16 my-auto"></i>
													<div class="mt-1">Trang cá nhân</div>
												</a>
												
												
												<a class="dropdown-item d-flex" a href="{{route('logout')}}">
													<i class="feather feather-power mr-3 fs-16 my-auto"></i>
													<div class="mt-1">Đăng xuất</div>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>