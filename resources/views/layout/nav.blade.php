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
										<!-- <div class="dropdown header-message">
											<a class="nav-link icon" data-toggle="dropdown">
												<i class="feather feather-bell header-icon"></i>
												<span class="badge badge-danger side-badge">5</span>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow  animated">
												<div class="header-dropdown-list message-menu" id="message-menu">
													<a class="dropdown-item border-bottom" href="#">
														<div class="d-flex align-items-center">
															<div class="">
																<span class="avatar avatar-md brround align-self-center cover-image" data-image-src="{{asset('assets/images/users/2.jpg')}}"></span>
															</div>
															<div class="d-flex">
																<div class="pl-3">
																	<h6 class="mb-1">Jack Wright</h6>
																	<p class="fs-13 mb-1">All the best your template awesome</p>
																	<div class="small text-muted">
																		3 hours ago
																	</div>
																</div>
															</div>
														</div>
													</a>
													<a class="dropdown-item border-bottom" href="#">
														<div class="d-flex align-items-center">
															<div class="">
																<span class="avatar avatar-md brround align-self-center cover-image" data-image-src="{{asset('assets/images/users/2.jpg')}}"></span>
															</div>
															<div class="d-flex">
																<div class="pl-3">
																	<h6 class="mb-1">Lisa Rutherford</h6>
																	<p class="fs-13 mb-1">Hey! there I'm available</p>
																	<div class="small text-muted">
																		5 hour ago
																	</div>
																</div>
															</div>
														</div>
													</a>
													<a class="dropdown-item border-bottom" href="#">
														<div class="d-flex align-items-center">
															<div class="">
																<span class="avatar avatar-md brround align-self-center cover-image" data-image-src="{{asset('assets/images/users/'.Auth::user()->avatar)}}"></span>
															</div>
															<div class="d-flex">
																<div class="pl-3">
																	<h6 class="mb-1">Blake Walker</h6>
																	<p class="fs-13 mb-1">Just created a new blog post</p>
																	<div class="small text-muted">
																		45 mintues ago
																	</div>
																</div>
															</div>
														</div>
													</a>
													<a class="dropdown-item border-bottom" href="#">
														<div class="d-flex align-items-center">
															<div class="">
																<span class="avatar avatar-md brround align-self-center cover-image" data-image-src="{{asset('assets/images/users/4.jpg')}}"></span>
															</div>
															<div class="d-flex">
																<div class="pl-3">
																	<h6 class="mb-1">Fiona Morrison</h6>
																	<p class="fs-13 mb-1">Added new comment on your photo</p>
																	<div class="small text-muted">
																		2 days ago
																	</div>
																</div>
															</div>
														</div>
													</a>
													<a class="dropdown-item border-bottom" href="#">
														<div class="d-flex align-items-center">
															<div class="">
																<span class="avatar avatar-md brround align-self-center cover-image" data-image-src="{{asset('assets/images/users/6.jpg')}}"></span>
															</div>
															<div class="d-flex">
																<div class="pl-3">
																	<h6 class="mb-1">Stewart Bond</h6>
																	<p class="fs-13 mb-1">Your payment invoice is generated</p>
																	<div class="small text-muted">
																		3 days ago
																	</div>
																</div>
															</div>
														</div>
													</a>
												</div>
												<div class=" text-center p-2">
													<a href="#" class="">See All Messages</a>
												</div>
											</div>
										</div> -->
										<!-- <div class="dropdown header-notify">
											<a class="nav-link icon" data-toggle="sidebar-right" data-target=".sidebar-right">
												<i class="feather feather-bell header-icon"></i>
												<span class="bg-dot"></span>
											</a>
										</div> -->
										<div class="dropdown profile-dropdown">
											<a href="#" class="nav-link pr-1 pl-0 leading-none" data-toggle="dropdown">
												<span>
													<img src="{{asset('assets/images/users/'.Auth::user()->avatar)}}" alt="img" class="avatar avatar-md bradius">
												</span>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow animated">
												<div class="p-3 text-center border-bottom">
													<a href="#" class="text-center user pb-0 font-weight-bold">{{Auth::user()->name}}</a>
													<p class="text-center user-semi-title">Nhân viên</p>
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