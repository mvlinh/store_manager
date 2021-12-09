@extends('home')
@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header border-bottom-0">
                  <h3 class="card-title">Tên khách hàng : <span style="color: red;">{{$customer->name}}</span></h3>
								</div>
                  <div class="card-header border-bottom-0">
                  <h3 class="card-title">Danh sách nhân viên</h3>
									</div>
									<div class="table-responsive">
										<table class="table card-table table-vcenter text-nowrap table-warning mb-0">
											<thead  class="bg-warning text-white">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        <th scope="col">Positon</th>
                        <th scope="col">transfer</th>
                      </tr>
											</thead>
											<tbody>
                        <?php $i =0;?>
                        @foreach($employee as $employee)
                        <tr>
                          <th scope="row">@php $i++; echo $i @endphp</th>
                          <td>{{$employee->name}}</td>
                          <td>{{$employee->phone}}</td>
                          <td>{{$employee->email}}</td>
                          <td>{{$employee->address}}</td>
                          <td>{{$employee->position_name}}</td>
                          <td><a href="{{route('transfer_customer_toEmployee',['id'=>$customer->id,'employee_id'=>$employee->id])}}"><button class="btn btn-primary fe fe-truck"> Chuyển đến</button></a></td>
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