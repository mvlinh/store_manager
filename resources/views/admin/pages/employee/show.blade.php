@extends('admin.home')
@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatable/js/dataTables.bootstrap4.js"></script>
<script src="assets/plugins/datatable/dataTables.responsive.min.js"></script>
<script src="assets/plugins/datatable/responsive.bootstrap4.min.js"></script>

<div class="row">
							<div class="col-xl-12 col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header  border-0">
										<h4 class="card-title">Danh sách nhân viên</h4>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="hr-table">
												<thead>
													<tr>
														<th class="border-bottom-0 w-5">No</th>
														<th class="border-bottom-0">Tên nhân viên</th>
														<th class="border-bottom-0 w-10">ID nhân viên</th>
														<th class="border-bottom-0">Quản lí</th>
														<th class="border-bottom-0">Số điện thoại</th>
														<th class="border-bottom-0">Ngày sinh</th>
														<th class="border-bottom-0">Địa chỉ</th>
														<th class="border-bottom-0">Email</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>01</td>
														<td>
															<div class="d-flex">
																<span class="avatar avatar-md brround mr-3" style="background-image: url(assets/images/users/1.jpg)"></span>
																<div class="mr-3 mt-0 mt-sm-1 d-block">
																	<h6 class="mb-1 fs-14">Faith Harris</h6>
																	<p class="text-muted mb-0 fs-12">faith@gmail.com</p>
																</div>
															</div>
														</td>
														<td>#2987</td>
														<td>Designing Department</td>
														<td>Web Designer</td>
														<td>+9685321475</td>
														<td><span class="badge badge-success">Active</span></td>
														<td>
															<a class="btn btn-primary btn-icon btn-sm"  href="hr-empview.html">
																<i class="feather feather-edit" data-toggle="tooltip" data-original-title="View/Edit"></i>
															</a>
															<a class="btn btn-danger btn-icon btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="feather feather-trash-2"></i></a>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
	<script>
		$(document).ready( function () {
			$('#hr-attendance').DataTable();
		} );
	</script>
@include('js.js')
@endsection