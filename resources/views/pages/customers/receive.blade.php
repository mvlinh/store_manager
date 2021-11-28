@extends('home')
@section('content')
<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Khách hàng được chuyển đến</h3>
									</div>
									<div class="table-responsive">
										<table class="table card-table table-vcenter text-nowrap table-warning mb-0">
											<thead  class="bg-warning text-white">
											<tr>
                        <th scope="col">#</th>
                        <th scope="col">Employee_send</th>
                        <th scope="col">Employee_Phone</th>
                        <th scope="col">Customer</th>
                        <th scope="col">phone</th>
                        <th scope="col">confirm</th>
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