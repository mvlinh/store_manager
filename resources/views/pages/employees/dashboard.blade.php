@extends('home')
@section('content')
<div class="side-app">
                        <!--app header-->
						<div class="app-header header">
							<div class="container-fluid">
								<div class="d-flex">
									<a class="header-brand" href="index.html">
										<img src="assets/images/brand/logo.png" class="header-brand-img desktop-lgo" alt="Dayonelogo">
										<img src="assets/images/brand/logo-white.png" class="header-brand-img dark-logo" alt="Dayonelogo">
										<img src="assets/images/brand/favicon.png" class="header-brand-img mobile-logo" alt="Dayonelogo">
										<img src="assets/images/brand/favicon1.png" class="header-brand-img darkmobile-logo" alt="Dayonelogo">
									</a>
									<div class="app-sidebar__toggle" data-toggle="sidebar">
										<a class="open-toggle" href="#">
											<i class="feather feather-menu"></i>
										</a>
										<a class="close-toggle" href="#">
											<i class="feather feather-x"></i>
										</a>
									</div>
									<div class="mt-0">
										<form class="form-inline">
											<div class="search-element">
												<input type="search" class="form-control header-search" placeholder="Search…" aria-label="Search" tabindex="1">
												<button class="btn btn-primary-color" >
													<i class="feather feather-search"></i>
												</button>
											</div>
										</form>
									</div><!-- SEARCH -->
									<div class="d-flex order-lg-2 my-auto ml-auto">
										<a class="nav-link my-auto icon p-0 nav-link-lg d-md-none navsearch" href="#" data-toggle="search">
											<i class="feather feather-search search-icon header-icon"></i>
										</a>
										<div class="dropdown header-flags">
											<a class="nav-link icon" data-toggle="dropdown">
												<img src="assets/images/flags/flag-png/united-kingdom.png" class="h-24" alt="img">
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow animated">
												<a href="#" class="dropdown-item d-flex "> <span class="avatar  mr-3 align-self-center bg-transparent"><img src="assets/images/flags/flag-png/india.png" alt="img" class="h-24"></span>
													<div class="d-flex"> <span class="my-auto">India</span> </div>
												</a>
												<a href="#" class="dropdown-item d-flex"> <span class="avatar  mr-3 align-self-center bg-transparent"><img src="assets/images/flags/flag-png/united-kingdom.png" alt="img" class="h-24"></span>
													<div class="d-flex"> <span class="my-auto">UK</span> </div>
												</a>
												<a href="#" class="dropdown-item d-flex"> <span class="avatar mr-3 align-self-center bg-transparent"><img src="assets/images/flags/flag-png/italy.png" alt="img" class="h-24"></span>
													<div class="d-flex"> <span class="my-auto">Italy</span> </div>
												</a>
												<a href="#" class="dropdown-item d-flex"> <span class="avatar mr-3 align-self-center bg-transparent"><img src="assets/images/flags/flag-png/united-states-of-america.png" class="h-24" alt="img"></span>
													<div class="d-flex"> <span class="my-auto">US</span> </div>
												</a>
												<a href="#" class="dropdown-item d-flex"> <span class="avatar  mr-3 align-self-center bg-transparent"><img src="assets/images/flags/flag-png/spain.png" alt="img" class="h-24"></span>
													<div class="d-flex"> <span class="my-auto">Spain</span> </div>
												</a>
											</div>
										</div>
										<div class="dropdown header-fullscreen">
											<a class="nav-link icon full-screen-link">
												<i class="feather feather-maximize fullscreen-button fullscreen header-icons"></i>
												<i class="feather feather-minimize fullscreen-button exit-fullscreen header-icons"></i>
											</a>
										</div>
										<div class="dropdown header-message">
											<a class="nav-link icon" data-toggle="dropdown">
												<i class="feather feather-mail header-icon"></i>
												<span class="badge badge-success side-badge">5</span>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow  animated">
												<div class="header-dropdown-list message-menu" id="message-menu">
													<a class="dropdown-item border-bottom" href="#">
														<div class="d-flex align-items-center">
															<div class="">
																<span class="avatar avatar-md brround align-self-center cover-image" data-image-src="assets/images/users/1.jpg"></span>
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
																<span class="avatar avatar-md brround align-self-center cover-image" data-image-src="assets/images/users/2.jpg"></span>
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
																<span class="avatar avatar-md brround align-self-center cover-image" data-image-src="assets/images/users/3.jpg"></span>
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
																<span class="avatar avatar-md brround align-self-center cover-image" data-image-src="assets/images/users/4.jpg"></span>
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
																<span class="avatar avatar-md brround align-self-center cover-image" data-image-src="assets/images/users/6.jpg"></span>
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
										</div>
										<div class="dropdown header-notify">
											<a class="nav-link icon" data-toggle="sidebar-right" data-target=".sidebar-right">
												<i class="feather feather-bell header-icon"></i>
												<span class="bg-dot"></span>
											</a>
										</div>
										<div class="dropdown profile-dropdown">
											<a href="#" class="nav-link pr-1 pl-0 leading-none" data-toggle="dropdown">
												<span>
													<img src="assets/images/users/16.jpg" alt="img" class="avatar avatar-md bradius">
												</span>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow animated">
												<div class="p-3 text-center border-bottom">
													<a href="#" class="text-center user pb-0 font-weight-bold">John Thomson</a>
													<p class="text-center user-semi-title">App Developer</p>
												</div>
												<a class="dropdown-item d-flex" href="#">
													<i class="feather feather-user mr-3 fs-16 my-auto"></i>
													<div class="mt-1">Profile</div>
												</a>
												<a class="dropdown-item d-flex" href="#">
													<i class="feather feather-settings mr-3 fs-16 my-auto"></i>
													<div class="mt-1">Settings</div>
												</a>
												<a class="dropdown-item d-flex" href="#">
													<i class="feather feather-mail mr-3 fs-16 my-auto"></i>
													<div class="mt-1">Messages</div>
												</a>
												<a class="dropdown-item d-flex" href="#" data-toggle="modal" data-target="#changepasswordnmodal">
													<i class="feather feather-edit-2 mr-3 fs-16 my-auto"></i>
													<div class="mt-1">Change Password</div>
												</a>
												<a class="dropdown-item d-flex" href="#">
													<i class="feather feather-power mr-3 fs-16 my-auto"></i>
													<div class="mt-1">Sign Out</div>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--/app header-->

                        
						<!--Page header-->
						<div class="page-header d-xl-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Employee<span class="font-weight-normal text-muted ml-2">Dashboard</span></h4>
							</div>
							<div class="page-rightheader ml-md-auto">
								<div class="d-flex align-items-end flex-wrap my-auto right-content breadcrumb-right">
									<a href="#" class="btn btn-primary mr-3 mt-3 mt-lg-0 mb-3 mb-md-0" data-toggle="modal" data-target="#applyleaves">Apply Leaves</a>
									<div class="d-flex">
										<div class="header-datepicker mr-3">
											<div class="input-group">
												<div class="input-group-prepend">
													<div class="input-group-text">
														<i class="feather feather-calendar"></i>
													</div>
												</div><input class="form-control fc-datepicker" placeholder="19 Feb 2020" type="text">
											</div>
										</div>
										<div class="header-datepicker mr-3">
											<div class="input-group">
												<div class="input-group-prepend">
													<div class="input-group-text">
														<i class="feather feather-clock"></i>
													</div><!-- input-group-text -->
												</div><!-- input-group-prepend -->
												<input id="tpBasic" type="text" placeholder="09:30am" class="form-control input-small">
											</div>
										</div><!-- wd-150 -->
									</div>
									<div class="d-lg-flex d-block">
										<div class="btn-list">
											<button  class="btn btn-primary" data-toggle="modal" data-target="#clockinmodal">Clock In</button>
											<button  class="btn btn-light" data-toggle="tooltip" data-placement="top" title="E-mail"> <i class="feather feather-mail"></i> </button>
											<button  class="btn btn-light" data-placement="top" data-toggle="tooltip" title="Contact"> <i class="feather feather-phone-call"></i> </button>
											<button  class="btn btn-primary" data-placement="top" data-toggle="tooltip" title="Info"> <i class="feather feather-info"></i> </button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End Page header-->

						<!--Row-->
						<div class="row">
							<div class="col-xl-3 col-lg-6 col-md-12">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col-7">
												<div class="mt-0 text-left"> <h5 class="">Số khách hàng</h5>
													<h3 class="mb-0 mt-auto text-success">{{count($customer)}}</h3>
												</div>
											</div>
											<div class="col-5">
												<div class="icon1 bg-success my-auto  float-right"> <i class="feather feather-file-text"></i> </div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-12">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col-7">
												<div class="mt-0 text-left"> <h5 class="">Tổng số đơn hàng đã bán</h5>
													<h3 class="mb-0 mt-auto text-primary">{{count($sold)}}</h3>
												</div>
											</div>
											<div class="col-5">
												<div class="icon1 bg-primary my-auto  float-right"> <i class="feather feather-box"></i> </div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-12">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col-7">
												<div class="mt-0 text-left"> <h5 class="">Số đơn hàng đã chăm sóc</h5>
													<h3 class="mb-0 mt-auto text-secondary">{{count($care)}}</h3>
												</div>
											</div>
											<div class="col-5">
												<div class="icon1 bg-secondary my-auto  float-right"> <i class="feather feather-briefcase"></i> </div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-12">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col-7">
												<div class="mt-0 text-left"> <h5 class="">Chuyển nhận khách hàng</h5>
													<h3 class="mb-0 mt-auto text-danger">{{(count($send) + count($recv))}}</h3>
												</div>
											</div>
											<div class="col-5">
												<div class="icon1 bg-danger my-auto  float-right"> <i class="feather feather-award"></i> </div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Row-->

						<!--Row-->
						<div class="row">
							<div class="col-xl-8 col-md-12 col-lg-12">
								<div class="card" style="display: none;">
									<div class="card-header  border-0 responsive-header">
										<h4 class="card-title">Salary</h4>
										<div class="card-options mr-3">
											<div class="btn-list">
												<a href="#" class="btn btn-outline-light text-dark float-left mr-4 d-flex my-auto"><span class="dot-label bg-light4 mr-2 my-auto"></span>Attendance</a>
												<a href="#" class="btn btn-outline-light text-dark float-left mr-4 d-flex my-auto"><span class="dot-label bg-primary mr-2 my-auto"></span>Salary</a>
												<a href="#" class="btn btn-outline-light" data-toggle="dropdown" aria-expanded="false"> Year <i class="feather feather-chevron-down"></i> </a>
												<ul class="dropdown-menu dropdown-menu-right" role="menu">
													<li><a href="#">Monthly</a></li>
													<li><a href="#">Yearly</a></li>
													<li><a href="#">Weekly</a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="card-body">
										<canvas id="chartbar" class="h-400"></canvas>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-md-12 col-lg-12">
							
							</div>
						</div>
						<div class="row">
							<div class="col-xl-6 col-lg-12 col-md-12">
								<div class="card">
									<div class="p-0">
										<div class="card-header border-0">
											<h4 class="card-title">Calendar</h4>
										</div>
										<div class="calendar"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header border-0">
										<h4 class="card-title">Up Comming Holidays</h4>
									</div>
									<div class="card-body mt-1">
										<div class="mb-5">
											<div class="d-flex comming_holidays calendar-icon icons">
												<span class="date_time bg-success-transparent bradius mr-3"><span class="date fs-20">3</span>
													<span class="month fs-13">FEB</span>
												</span>
												<div class="mr-3 mt-0 mt-sm-1 d-block">
													<h6 class="mb-1 font-weight-semibold">Office Off</h6>
													<span class="clearfix"></span>
													<small>Sunday</small>
												</div>
												<p class="float-right text-muted  mb-0 fs-13 ml-auto bradius my-auto">3 days to left</p>
											</div>
										</div>
										<div class="mb-5">
											<div class="d-flex comming_holidays calendar-icon icons">
												<span class="date_time bg-purple-transparent bradius mr-3"><span class="date fs-20">10</span>
													<span class="month fs-13">FEB</span>
												</span>
												<div class="mr-3 mt-0 mt-sm-1 d-block">
													<h6 class="mb-1 font-weight-semibold">Public Holiday</h6>
													<span class="clearfix"></span>
													<small>Enjoy your day off</small>
												</div>
												<p class="float-right text-muted  mb-0 fs-13 ml-auto bradius my-auto">13 days to left</p>
											</div>
										</div>
										<div class="mb-5">
											<div class="d-flex comming_holidays calendar-icon icons">
												<span class="date_time bg-orange-transparent bradius mr-3"><span class="date fs-20">20</span>
													<span class="month fs-13">MAR</span>
												</span>
												<div class="mr-3 mt-0 mt-sm-1 d-block">
													<h6 class="mb-1 font-weight-semibold">Office Off</h6>
													<span class="clearfix"></span>
													<small>Sunday</small>
												</div>
												<p class="float-right text-muted  mb-0 fs-13 ml-auto bradius my-auto">23 days to left</p>
											</div>
										</div>
										<div class="mb-5">
											<div class="d-flex comming_holidays calendar-icon icons">
												<span class="date_time bg-warning-transparent bradius mr-3"><span class="date fs-20">17</span>
													<span class="month fs-13">FEB</span>
												</span>
												<div class="mr-3 mt-0 mt-sm-1 d-block">
													<h6 class="mb-1 font-weight-semibold">Optional Holiday</h6>
													<span class="clearfix"></span>
													<small>Sunday</small>
												</div>
												<p class="float-right text-muted  mb-0 fs-13 ml-auto bradius my-auto">20 days to left</p>
											</div>
										</div>
										<div class="mb-0">
											<div class="d-flex comming_holidays calendar-icon icons">
												<span class="date_time bg-pink-transparent bradius mr-3"><span class="date fs-20">13</span>
													<span class="month fs-13">MAR</span>
												</span>
												<div class="mr-3 mt-0 mt-sm-1 d-block">
													<h6 class="mb-1 font-weight-semibold">Conference</h6>
													<span class="clearfix"></span>
													<small>Money Update</small>
												</div>
												<p class="float-right text-muted  mb-0 fs-13 ml-auto bradius my-auto">35 days to left</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-5 col-lg-12 col-md-12">
							
							</div>
						</div>

@include('js.js')
					</div>
@endsection