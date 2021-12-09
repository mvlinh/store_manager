@extends('home')
@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<div class="side-app">
                        <!--app header-->
					
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

<!-- INTERNAL Chartjs rounded-barchart -->
<script src="assets/plugins/chart.min/chart.min.js"></script>
<script src="assets/plugins/chart.min/rounded-barchart.js"></script>
<!-- INTERNAL Pg-calendar-master js -->
<script src="assets/plugins/pg-calendar-master/pignose.calendar.full.min.js"></script>

<!-- INTERNAL jQuery-countdowntimer js -->
<script src="assets/plugins/jQuery-countdowntimer/jQuery.countdownTimer.js"></script>

<!-- INTERNAL Index js-->
<script src="assets/js/index2.js"></script>
<script src="assets/js/employee/emp-sidemenuchart.js"></script>
					</div>
@endsection