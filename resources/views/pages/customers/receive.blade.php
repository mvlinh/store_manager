@extends('home')
@section('content')
<!--Sidemenu js-->
<script src="assets/plugins/sidemenu/sidemenu.js"></script>

<!-- Custom js-->
<script src="assets/js/custom.js"></script>
<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Khách hàng được chuyển đến </h3>
									</div>
									<div class="table-responsive">
										<table class="table card-table table-vcenter text-nowrap table-warning mb-0">
											<thead  class="bg-warning text-white">
											<tr>
                        <th scope="col">STT</th>
                        <th scope="col">Người Gửi</th>
                        <th scope="col">SĐT người gửi</th>
                        <th scope="col">Khách hàng</th>
                        <th scope="col">SĐT khách hàng</th>
                        <th scope="col">Xác nhận</th>
                        <th scope="col">Chi Tiết</th>
                      </tr>
											</thead>
                      <tbody>
                        <?php $i =0;?>
                        @foreach($data as $item)
                        <tr>
                          <th scope="row">@php $i++; echo $i @endphp</th>
                          <td>{{$item->send_name}}</td>
                          <td>{{$item->send_phone}}</td>
                          <td>{{$item->name}}</td>
                          <td>{{$item->phone}}</td>
                          <td><button class="btn btn-primary" id="agree"><a href="{{route('agree_customer',['id'=>$item->id])}}"> Xác nhận</a> </button> <button class="btn btn-danger" id="refuse"><a href="{{route('refuse_customer',['id'=>$item->id])}}">Từ chối</a></button></td>
                          <td>
                            <a class="btn btn-primary btn-icon btn-sm"  href="{{route('customer_detail',['id'=>$item->customer_id])}}">
																<i class="feather feather-edit" data-toggle="tooltip" data-original-title="Xem"></i>
															</a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
										</table>
									</div>
									<!-- table-responsive -->
								</div>
							</div>
						</div>
@endsection
@include('js.js')