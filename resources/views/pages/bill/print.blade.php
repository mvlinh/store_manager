@extends('home')
@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <h2>Chi tiết hóa đơn</h2>
 <div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Thông Tin khách hàng</h3>
									</div>
									<div class="table-responsive">
										<table class="table card-table table-vcenter text-nowrap table-primary mb-0">
											<thead  class="bg-primary text-white">
												<tr >
													<th class="text-white"></th>
													<th class="text-white"></th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Thông tin người mua: </td>
													<td>{{$customer->name}}</td>
												</tr>
                                                <tr>
													<td>Ngày mua: </td>
													<td>{{$bill->created_at}}</td>
												</tr>
                                                <tr>
													<td>Số điện thoại: </td>
													<td>{{$customer->phone}}</td>
												</tr>
                                                <tr>
													<td>Địa chỉ: </td>
													<td>{{$customer->address}}</td>
												</tr>
												</tr>
											</tbody>
										</table>
                                        <div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Sản Phẩm</h3>
									</div>
									<div class="card-body p-0">
										<div class="table-responsive">
											<table class="table table-hover card-table table-vcenter text-nowrap mb-0">
												<thead>
													<tr>
														<th>Stt</th>
														<th>Tên Sản Phẩm</th>
														<th>Số lượng</th>
														<th>Giá tiền</th>
													</tr>
												</thead>
												<tbody>
                                                    @for($j = 0; $j< $i; $j++)
                                                    <tr>
														<th scope="row">{{$j+1}}</th>
														<td>{{$product[$j][0]->name}}</td>
														<td>{{$product[$j]['quantity']}}</td>
														<td>{{number_format($product[$j][0]->price)}} vnd</td>
                                                       
													</tr>
                                                    @endfor
												</tbody>
											</table>
										</div>
                                       <?php
                                       $count = 0;
                                        for($j = 0; $j< $i; $j++){
                                            $count = $count + $product[$j][0]->price;
                                        }
                                       ?>
									</div>
								</div>
                                    <div style="color: red; margin-left: 570px; font-size: 20px;">total: {{number_format($count)}} vnd</div>
									</div>
									<a href="{{route('invoice')}}">Quay lại</a>
								</div>
							</div>
						</div>

@endsection