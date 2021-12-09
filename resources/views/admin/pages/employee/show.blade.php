@extends('admin.home')
@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>

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
														<th class="border-bottom-0">Status</th>
														<th class="border-bottom-0">Action</th>
													</tr>
												</thead>
												<tbody>
													@php $i  = 1 @endphp
													@foreach($employee as $item)
													<tr>
														<td>{{$i++}}</td>
														<td>
															<div class="d-flex">
																<span class="avatar avatar-md brround mr-3" style="background-image: url({{asset('assets/images/users/'.$item->avatar)}})"></span>
																<div class="mr-3 mt-0 mt-sm-1 d-block">
																	<h6 class="mb-1 fs-14">{{$item->name}}</h6>
																</div>
															</div>
														</td>
														<td>#{{$item->id}}</td>
														<td>{{$item->position_id}}</td>
														<td>{{$item->phone}}</td>
														<td>{{$item->DoB}}</td>
														<td>{{$item->address}}</td>
														<td>{{$item->email}}</td>
														@if($item->status == 1)
														<td><span class="badge badge-success" style="padding: 5px 26px ;">Active</span></td>
														@else
														<td><span class="badge badge-danger" style="padding: 5px 28px ;">block</span></td>
														@endif
														<td>
															<meta name="csrf-token" content="{{ csrf_token() }}">
															<button class="btn btn-primary btn-icon btn-sm"  href="">
																<i class="feather feather-edit" data-toggle="tooltip" data-original-title="View/Edit"></i>
															</button>
															@if($item->status == 1)
															<button class="btn btn-danger btn-icon btn-sm lock" id="{{$item->id}}" data-toggle="tooltip" onClick="reply_click(this.id)" >Khóa<i class="typcn typcn-lock-closed"></i></button>
															@else
															<button class="btn badge badge-warning-light btn-icon btn-sm lock" id="{{$item->id}}" data-toggle="tooltip" onClick="reply_click(this.id)">Mở<i class="typcn typcn-lock-open"></i></button>
															@endif
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
	<script>
		$(document).ready( function () {
			$('#hr-attendance').DataTable();
		} );
	</script>
	
	<script>
		$(document).ready(function(){
		$("p").click(function(){
			$(this).hide();
		});
		});
</script>
<script type="text/javascript">
	 $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
  function reply_click(clicked_id)
  {
            $.ajax({
                url : "{{route('lockemployee')}}",
                type : 'post',
                data : {        id: clicked_id
                },

                success : function(result){
					location.reload();
				},
                error : function(){
                    console.log('error');
                }
            })
  }
</script>

@endsection