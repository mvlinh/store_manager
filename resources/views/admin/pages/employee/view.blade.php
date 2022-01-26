@extends('admin.home')
@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@include('admin.js.myjs')
<div class="page-header d-xl-flex d-block">
							<div class="page-leftheader">
								<h4 class="page-title">Nhân Viên: {{$employee->name}}</h4>
							</div>
							<div class="page-rightheader ml-md-auto">
								<div class="align-items-end flex-wrap my-auto right-content breadcrumb-right">
									<div class="btn-list">
										<a href="{{route('addemployee')}}" class="btn btn-primary mr-3">Add New Employee</a>
										</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xl-3 col-md-12 col-lg-12">
								<div class="card box-widget widget-user">
									<div class="card-body text-center">
										<div class="widget-user-image mx-auto text-center">
											<img  class="avatar avatar-xxl brround rounded-circle" alt="img" src="{{asset('assets/images/users/'.$employee->avatar)}}">
										</div>
										<div class="pro-user mt-3">
											<h5 class="pro-user-username text-dark mb-1 fs-16">{{$employee->name}}</h5>
											<h6 class="pro-user-desc text-muted fs-12">Nhân viên</h6>
										</div>
										<div class="star-ratings start-ratings-main mb-0 clearfix">
											<div class="stars stars-example-fontawesome star-sm">
												<select id="example-fontawesome" name="rating">
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4" selected>4</option>
													<option value="5">5</option>
												</select>
											</div>
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
								<div class="tab-menu-heading hremp-tabs p-0 ">
									<div class="tabs-menu1">
										<!-- Tabs -->
										@if (\Session::has('msg'))
											<div class="col-md-12 justify-content-center  text-center">
												<div class="card">
													<div class="card-body p-1 text-center">
														<img src="{{asset('assets/images/svgs/check.svg')}}" alt="img" class="w-7">
														<h3 class="mt-1">Cập nhập thành công</h3>
													</div>
												</div>
											</div>
											@endif
										<ul class="nav panel-tabs">
											<li class="ml-4"><a href="#tab5" class="active"  data-toggle="tab">Thông tin chi tiết của nhân viên</a></li>
											
										</ul>
									</div>
								</div>
								<div class="panel-body tabs-menu-body hremp-tabs1 p-0">
									<div class="tab-content">
										<div class="tab-pane active" id="tab5">
											<div class="card-body">
												<h4 class="mb-4 font-weight-bold">Thông tin cơ bản	</h4>
											<form action="{{route('editemployee',['id'=>$employee->id])}}" method="POST" enctype="multipart/form-data">
												@csrf
												<div class="form-group ">
													<div class="row">
														<div class="col-md-3">
															<label class="form-label mb-0 mt-2">Tên nhân viên</label>
														</div>
														<div class="col-md-9">
															<div class="row">
																<div class="col-md-12">
																	<input type="text" class="form-control mb-md-0 mb-5" name="name"  placeholder="First Name" value="{{$employee->name}}">
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
															<input type="text" class="form-control" name="phone" placeholder="Phone Number" value="{{$employee->phone}}">
														</div>
													</div>
												</div>
												
												<div class="form-group ">
													<div class="row">
														<div class="col-md-3">
															<label class="form-label mb-0 mt-2">Ngày sinh</label>
														</div>
														<div class="col-md-9">
															<input type="date" class="form-control fc-datepicker" name="DoB" placeholder="DD-MM-YYY" value="{{$employee->DoB}}">
														</div>
													</div>
												</div>
												
												
												<div class="form-group ">
													<div class="row">
														<div class="col-md-3">
															<label class="form-label mb-0 mt-2">Email</label>
														</div>
														<div class="col-md-9">
															<input type="text" class="form-control" name="email" placeholder="email" value="{{$employee->email}}">
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-md-3">
															<label class="form-label mb-0 mt-2">Địa chỉ</label>
														</div>
														<div class="col-md-9">
															<input type="text" class="form-control" name="address"  placeholder="address" value="{{$employee->address}}">
														</div>
														
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-md-3">
															<label class="form-label mb-0 mt-2">status</label>
														</div>
														<div class="col-md-9">
															<select  class="form-control" name="status" id="">
																<option @if($employee->status == 1) selected @endif value="1">active</option>
																<option @if($employee->status == 0) selected @endif value="0">block</option>
															</select>
														</div>
														
													</div>
												</div>
									
												<div class="form-group">
													<div class="row">
														<div class="col-md-3">
															<div class="form-label mb-0 mt-2">Upload Photo</div>
														</div>
														<div class="col-md-9">
															<div class="input-group file-browser">
																	<input type="file" name="file_upload" class="form-control" value="" placeholder="">
																
															</div>
														</div>
													</div>
												</div>
												<h4 class="mb-5 mt-7 font-weight-bold">Cấp lại mật khẩu</h4>
												<div class="form-group">
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-md-3">
															<label class="form-label mb-0 mt-2">Mật khẩu mới</label>
														</div>
														<div class="col-md-9">
															<input type="password" class="form-control"  name="newpassword"  placeholder="password" value="">
														</div>
													</div>
												</div>
												<!-- <div class="form-group mt-7">
													<div class="row">
														<div class="col-md-3">
															<label class="form-label">Email Notification:</label>
														</div>
														<div class="col-md-9">
															<label class="custom-switch">
																<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
																<span class="custom-switch-indicator"></span>
																<span class="custom-switch-description">On/Off</span>
															</label>
														</div>
													</div>
												</div> -->
												<div class="card-footer text-right">
													<button type="submit" class="btn btn-primary">Updated</button>
													<button type="reset" class="btn btn-danger">Cancle</button>
												</div>
											</form>
											
											</div>
										</div>
										
									</div>
								</div>
							</div>
						</div>
@endsection