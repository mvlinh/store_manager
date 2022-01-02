@extends('admin.home')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="side-app">
                        <!--app header-->
					
						<!--/app header-->

                        
						<!--Page header-->
						<div class="page-header d-xl-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Quản lí<span class="font-weight-normal text-muted ml-2">Trang chủ</span></h4>
							</div>
							
						</div>
						<div class="row">
							<div class="col-xl-4 col-lg-6 col-md-12">
								<div class="card">
									<div class="card-body" style="height: 120px;">
										<div class="row">
											<div class="col-7">
												<div class="mt-0 text-left"> <h5 class="">Tổng số nhân viên</h5>
													<h3 class="mb-0 mt-auto text-success"> {{count($employees)}}</h3>
												</div>
											</div>
											<div class="col-5">
												<div class="icon1 bg-success my-auto  float-right"> <i class="feather feather-file-text"></i> </div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-6 col-md-12">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col-9">
												<div class="mt-0 text-left"> <h5 class="">Tổng số đơn hàng đã bán trong tháng {{$month}}</h5>
													<h3 class="mb-0 mt-auto text-primary">{{count($order)}}</h3>
												</div>
											</div>
											<div class="col-3">
												<div class="icon1 bg-primary my-auto  float-right"> <i class="feather feather-box"></i> </div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-6 col-md-12">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col-8">
												<div class="mt-0 text-left"> <h5 class="">Tiền thu về trong tháng {{$month}}</h5>
													<h3 class="mb-0 mt-auto text-secondary">{{$dola['0']->total/1000000000}} TỶ</h3>
												</div>
											</div>
											<div class="col-4">
												<div class="icon1 bg-secondary my-auto  float-right"> <i class="feather feather-briefcase"></i> </div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- <div class="col-xl-3 col-lg-6 col-md-12">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col-7">
												<div class="mt-0 text-left"> <h5 class="">Hoa hồng nhân viên trong tháng {{$month}}</h5>
													<h3 class="mb-0 mt-auto text-danger"></h3>
												</div>
											</div>
											<div class="col-5">
												<div class="icon1 bg-danger my-auto  float-right"> <i class="feather feather-award"></i> </div>
											</div>
										</div>
									</div>
								</div>
							</div> -->
						</div>
						<!-- /Row-->

						<!--Row-->
						<div class="row">
							<div class="col-xl-8 col-md-12 col-lg-12">
								<div class="card" style="display: none;">
									
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
										<h4 class="card-title">Các kì nghỉ sắp tới</h4>
									</div>
									<div class="card-body mt-1">
										@foreach($event as $e)
										<div class="mb-5">
											<div class="d-flex comming_holidays calendar-icon icons">
												<span class="date_time bg-{{$e->type}}-transparent bradius mr-3"><span class="date fs-20">{{date_format( date_create($e->date),"d")}}</span>
													<span class="month fs-13">{{date_format(date_create($e->date),"m")}}</span>
												</span>
												<div class="mr-3 mt-0 mt-sm-1 d-block">
													<h6 class="mb-1 font-weight-semibold">{{$e->name}}</h6>
													<span class="clearfix"></span>
													<small>{{$e->detail}}</small>
												</div>
												<p class="float-right text-muted  mb-0 fs-13 ml-auto bradius my-auto">Còn {{(abs(strtotime(date('Y-m-j')) - strtotime($e->date))/ (60*60*24))}} Ngày</p>
											</div>
										</div>
										@endforeach
									</div>
								</div>
							</div>
							<div class="col-xl-5 col-lg-12 col-md-12">
							
							</div>
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

@endsection