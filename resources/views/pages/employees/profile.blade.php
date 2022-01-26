@extends('home')
@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@include('admin.js.myjs')
<div class="page-header d-xl-flex d-block">
						</div>
						<div class="row">
							<div class="col-xl-3 col-md-12 col-lg-12">
								<div class="card box-widget widget-user">
									<div class="card-body text-center">
										<div class="widget-user-image mx-auto text-center">
											<img  class="avatar avatar-xxl brround rounded-circle" alt="img" src="{{asset('assets/images/users/'.Auth::user()->avatar)}}">
										</div>
										<div class="pro-user mt-3">
											<h5 class="pro-user-username text-dark mb-1 fs-16">{{Auth::user()->name}}</h5>
											<h6 class="pro-user-desc text-muted fs-12">Nhân viên</h6>
										</div>
									</div>
									
								</div>
								<div class="card">
									<div class="card-header  border-0">
										<div class="card-title">Statistics-2021</div>
									</div>
									<div class="card-body">
									
										<div class="d-flex align-items-end justify-content-between mg-b-5">
											<h6 class="">This Week</h6>
											<h6 class="font-weight-bold mb-1">{{$week}}</h6>
										</div>
										<div class="progress progress-sm mb-5">
											<div class="progress-bar bg-danger w-{{$week*10}}"></div>
										</div>
										<div class="d-flex align-items-end justify-content-between mg-b-5">
											<h6 class="">This Month</h6>
											<h6 class="font-weight-bold mb-1">{{$month}}</h6>
										</div>
										<div class="progress progress-sm mb-5">
											<div class="progress-bar bg-info w-{{$month*10}}"></div>
										</div>
										<div class="d-flex align-items-end justify-content-between mg-b-5">
											<h6 class="">This Year</h6>
											<h6 class="font-weight-bold mb-1">{{$year}}</h6>
										</div>
										<div class="progress progress-sm mb-5">
											<div class="progress-bar bg-warning w-{{$year*10}}"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-9 col-md-12 col-lg-12">
								
								<div class="panel-body tabs-menu-body hremp-tabs1 p-0">
									<div class="tab-content">
										<div class="tab-pane active" id="tab5">
											<div class="card-body">
												<h4 class="mb-4 font-weight-bold">Thông tin cơ bản	</h4>
											<form action="{{route('editemployee',['id'=>Auth::user()->id])}}" method="POST" enctype="multipart/form-data">
												@csrf
												<div class="form-group ">
													<div class="row">
														<div class="col-md-3">
															<label class="form-label mb-0 mt-2">Tên nhân viên</label>
														</div>
														<div class="col-md-9">
															<div class="row">
																<div class="col-md-12">
																	<input type="text" class="form-control mb-md-0 mb-5" name="name"  placeholder="First Name" value="{{Auth::user()->name}}"  readonly>
																	<span class="text-muted"></span>
																</div>
																
															</div>
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-md-3">
															<label class="form-label mb-0 mt-2">Số điện thoại</label>
														</div>
														<div class="col-md-9">
															<input type="text" class="form-control" name="phone" placeholder="Phone Number" value="{{Auth::user()->phone}}" readonly>
														</div>
													</div>
												</div>
												
												<div class="form-group ">
													<div class="row">
														<div class="col-md-3">
															<label class="form-label mb-0 mt-2">Ngày sinh</label>
														</div>
														<div class="col-md-9">
															<input type="date" class="form-control fc-datepicker" name="DoB" placeholder="DD-MM-YYY" value="{{Auth::user()->DoB}}" readonly>
														</div>
													</div>
												</div>
												
												
												<div class="form-group ">
													<div class="row">
														<div class="col-md-3">
															<label class="form-label mb-0 mt-2">Email</label>
														</div>
														<div class="col-md-9">
															<input type="text" class="form-control" name="email" placeholder="email" value="{{Auth::user()->email}}" readonly>
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-md-3">
															<label class="form-label mb-0 mt-2">Địa chỉ</label>
														</div>
														<div class="col-md-9">
															<input type="text" class="form-control" name="address"  placeholder="address" value="{{Auth::user()->address}}" readonly>
														</div>
														
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-md-3">
															<label class="form-label mb-0 mt-2">status</label>
														</div>
														<div class="col-md-9">
                                                            
                                                            @if(Auth::user()->status == 1)
                                                            <input type="text" class="form-control" name="address"  placeholder="address" value="Active" readonly>
                                                            @else
                                                            <input type="text" class="form-control" name="address"  placeholder="address" value="Block" readonly>
                                                            @endif
														</div>
														
													</div>
												</div>
											</form>
											
											</div>
										</div>
										
									</div>
								</div>
							</div>
						</div>




                        <H4 style="color: red;">Tính lương</H4>
						<div class="row">
							
							<div class="col-xl-9 col-md-12 col-lg-12">
								
								<div class="panel-body tabs-menu-body hremp-tabs1 p-0">
									<div class="tab-content">
										<div class="tab-pane active" id="tab5">
											<div class="card-body">
												<h4 class="mb-4 font-weight-bold">Thông tin cơ bản	</h4>
											<form method="post" action="{{route('check_payroll')}}" >
												@csrf
												<div class="form-group ">
													<div class="row">
														<div class="col-md-3">
															<label class="form-label mb-0 mt-2">Từ ngày</label>
														</div>
														<div class="col-md-9">
															<div class="row">
																<div class="col-md-12">
																	<input type="date" class="form-control mb-md-0 mb-5" id="name" name = 'start'>
																	
																</div>
																
															</div>
														</div>
													</div>
                                                    <div class="row">
														<div class="col-md-3">
															<label class="form-label mb-0 mt-2">Đến ngày</label>
														</div>
														<div class="col-md-9">
															<div class="row">
																<div class="col-md-12">
																	<input type="date" class="form-control mb-md-0 mb-5" id="name" name = 'end'  >
																	
																</div>
																
															</div>
														</div>
													</div>
                                                    


                                                    @if(!empty($_GET['start_at']))
                                                    <div class="row">
														<div class="col-md-3">
															<label class="form-label mb-0 mt-2">Lương</label>
														</div>
														<div class="col-md-9">
															<div class="row">
																<div class="col-md-12">
																	<input type="text" class="form-control mb-md-0 mb-5" value="{{number_format($_GET['pay'], 0, '', ',')}} vnd" readonly>
																	
																</div>
																
															</div>
														</div>
													</div>
                                                     @endif
                                                    <div class="col-md-12" style="margin-top: 10px;">
                                                        <button class="btn btn-primary" name="submit"  type="submit">Check</button>
                                                        <button class="btn btn-danger" name="reset"  type="reset">Reset</button>
                                                    </div>
												</div>
											</form>
											
											</div>
										</div>
										
									</div>
								</div>
							</div>
						</div>

@endsection