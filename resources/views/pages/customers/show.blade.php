@extends('home')
@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
						<!-- End Row -->
						@if(!empty($_GET['noti']) && $_GET['noti'] == 'already exist')
					
									<div class="col-md-12 justify-content-center  text-center" style="height: 150px;">
										<div class="card">
											<div class="card-body p-1 text-center">
												<img src="assets/images/svgs/warning.svg" alt="img" class="w-7">
												<h3 class="mt-1">Cảnh báo</h3>
												<p class="mt-3 mb-1">Khách hàng đang chuyển hoặc đã bị khóa</p>
											</div>
										</div>
									</div>
						@elseif (!empty($_GET['noti']) && $_GET['noti'] == 'successfully')

						<div class="col-md-12 justify-content-center  text-center" style="height: 150px;">
							<div class="card">
								<div class="card-body p-1 text-center">
									<img src="assets/images/svgs/check.svg" alt="img" class="w-7">
									<h3 class="mt-1">Thành công</h3>
								</div>
							</div>
						</div>
						@endif
						<!-- Row -->
						<div class="row">
							<div class="col-xl-12 col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header  border-0">
										<h4 class="card-title">Customers List</h4>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="hr-table">
												<thead>
													<tr>
														<th class="border-bottom-0 w-5">No</th>
														<th class="border-bottom-0">Name</th>
														<th class="border-bottom-0 w-10">Phone</th>
														<th class="border-bottom-0">Address</th>
														<th class="border-bottom-0">Email</th>
														<th class="border-bottom-0">Status</th>
														<th class="border-bottom-0">Actions</th>
													</tr>
												</thead>
												<tbody>
													<?php $i = 1 ?>
													@foreach($cus as $item)
													<tr>
														<td>{{$i++}}</td>
														<td>
															<div class="d-flex">
																<!-- <span class="avatar avatar-md brround mr-3" style="background-image: url(assets/images/users/1.jpg)"></span> -->
																<div class="mr-3 mt-0 mt-sm-1 d-block">
																	<h6 class="mb-1 fs-14">{{$item->name}}</h6>
																</div>
															</div>
														</td>
														<td>{{$item->phone}}</td>
														<td>{{$item->address}}</td>
														<td>{{$item->email}}</td>
														@if($item->status == 1)
														<td><span class="badge badge-success" style="padding: 5px 26px ;">Active</span></td>
														@elseif($item->status == 2)
														<td><span class="badge badge-warning">transferring</span></td>
														@else
														<td><span class="badge badge-danger" style="padding: 5px 28px ;">block</span></td>
														@endif
														<td>
															<a class="btn btn-primary btn-icon btn-sm"  href="{{route('customer_detail',['id'=>$item->id])}}">
																<i class="feather feather-edit" data-toggle="tooltip" data-original-title="View"></i>
															</a>
															<a href="{{route('transfer_customer',['id'=>$item->id])}}"><button class="btn btn-danger  typcn typcn-plane-outline" style="font-size: 10px;">chuyển đi</button></a>
														</td>
													</tr>
                          						@endforeach
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row-->


					</div>
				</div>
			</div>

		</div>
	<script>
	$(document).ready( function () {
		$('#hr-table').DataTable();
	} );
	</script>
@endsection