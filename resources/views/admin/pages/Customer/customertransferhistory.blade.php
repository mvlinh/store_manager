@extends('admin.home')
@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<div class="row">
							<div class="col-xl-12 col-md-12 col-lg-12">
								<div class="card">
									<div class="card-body">
										
										<div class="table-responsive hr-attlist">
											<table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="hr-attendance" >
												<thead>
													<tr>
														<th class="border-bottom-0">Người gửi</th>
														<th class="border-bottom-0">Người nhận</th>
														<th class="border-bottom-0">Khách hàng</th>
														<th class="border-bottom-0">Ngày chuyển</th>
														<th class="border-bottom-0">Ngày cập nhập</th>
														<th class="border-bottom-0 w-5">Trạng thái</th>
													</tr>
												</thead>
												<tbody>
                                                    @foreach($info as $item)
													<tr>
														<td> 
															<div class="d-flex">
																<span class="avatar avatar brround mr-3" style="background-image: url({{asset('assets/images/users/'.$item->sendavatar)}})"></span>
																<div class="mr-3 mt-0 mt-sm-2 d-block">
																	<h6 class="mb-1 fs-14">{{$item->send}}</h6>
																</div>
															</div>
														</td>
                                                        <td>
															<div class="d-flex">
																<span class="avatar avatar brround mr-3" style="background-image: url({{asset('assets/images/users/'.$item->receiveavatar)}})"></span>
																<div class="mr-3 mt-0 mt-sm-2 d-block">
																	<h6 class="mb-1 fs-14">{{$item->receive}}</h6>
																</div>
															</div>
														</td>
                                                        <td>
															<div class="d-flex">
																<div class="mr-3 mt-0 mt-sm-2 d-block">
																	<h6 class="mb-1 fs-14">{{$item->customer}}</h6>
																</div>
															</div>
														</td>
                                                        <td>
															<div class="d-flex">
																<div class="mr-3 mt-0 mt-sm-2 d-block">
																	<h6 class="mb-1 fs-14">{{$item->start}}</h6>
																</div>
															</div>
														</td>
                                                        <td>
															<div class="d-flex">
																<div class="mr-3 mt-0 mt-sm-2 d-block">
																	<h6 class="mb-1 fs-14">{{$item->update}}</h6>
																</div>
															</div>
														</td>
                                                        <td>
															@if($item->status == 1)
												<span class="badge badge-success-light mr-2"><i class="feather feather-check-circle text-success"></i> ---> Đồng ý</span>
															@elseif ($item->status == 2)
												<span class="badge badge-warning-light mr-2"><i class="fa fa-star text-warning"></i> ---> Đang chờ</span>
															@elseif ($item->status == 0)
												<span class="badge badge-danger-light mr-2"><i class="feather feather-x-circle text-danger"></i> ---> từ chối</span>
															@endif
														</td>

                                                    @endforeach
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
	
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
	<script>
		$(document).ready( function () {
			$('#hr-attendance').DataTable();
		} );
	</script>
	@include('admin.js.js')
@endsection