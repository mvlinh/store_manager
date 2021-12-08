@extends('home')
@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <div class="col-md-6">
    <label for="validationDefault01" class="form-label">Phone number</label>
    <span id="notification"></span>
    <input type="text" class="form-control" id="validationDefault01" value="" placeholder="0985734161" required>
  </div>
  <div class="col-md-12" style="margin-top: 24px;">
    <button class="btn btn-danger add-customer" style="display: none" type="" data-toggle="modal" data-target="#customerModal">Thêm mới</button>
  </div>


<!-- Modal -->
  
  <!-- Modal -->
  <div class="modal fade" id="customerModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
          
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Customer</h4>
        </div>
        <div class="modal-body">
            <form id="add-customer" method="post" >
            <meta name="csrf-token" content="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="">Họ tên <span style="color: red;">(*)</span></label>
                    <input type="text" name="name" id="name" class="form-control" value="" placeholder="Nhập họ tên của bạn">
                </div>
                <div class="form-group">
                    <label for="">Phone <span style="color: red;">(*)</span></label>
                        <input type="text"  name="phone" id="phone" class="form-control" value="" placeholder="Nhập sdt">
                    </div>
                
                    <div class="form-group">
                        <label for="">Tài khoản (Email) <span style="color: red;">(*)</span></label>
                        <input type="email" name="email" id="email" class="form-control" value="" placeholder="Nhập email">
                    </div>

                    <div class="form-group">
                        <label for="">Address <span style="color: red;">(*)</span></label>
                        <input type="text" name="address" id="address" class="form-control" value="" placeholder="Nhập địa chỉ">
                    </div>
                    
                    <div class="form-group">
                        <label for="">Status <span style="color: red;">(*)</span></label>
                        <input type="number" name="status" id="status" class="form-control" value="" placeholder="status">
                    </div>

                    <button class="btn btn-primary" id="btn-submit" type="submit">Submit form</button>
                    
            </form>
        </div>
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Add</button>
        </div> -->
      </div>
      
    </div>
  </div>
<div>
</div>

  <div class="row">
							<div class="col-xl-12 col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header  border-0">
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table id="customerTable" class=" table  table-vcenter text-nowrap table-bordered border-bottom" id="hr-table">
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
                          @foreach($customer as $item)
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
														<td><span class="badge badge-success" style="padding: 5px 26px ; background-color: #0dcd94;">Active</span></td>
														@elseif($item->status == 2)
														<td><span class="badge badge-warning" style="padding: 6px 10px ; background-color: #fbc518;">transferring</span></td>
														@else
														<td><span class="badge badge-danger" style="padding: 5px 28px; background-color: #f7284a;">block</span></td>
														@endif
                            <td>
                              <a class="btn btn-primary btn-icon btn-sm"  href="{{route('customer_detail',['id'=>$item->id])}}">
																<i class="feather feather-edit" data-toggle="tooltip" data-original-title="View"></i>
															</a>
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
<div id = "nextpage">
{{ $customer->links() }}
</div>
<script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
 
        $('#validationDefault01').on('keyup change', function() {
            let phone = this.value;
            $.ajax({
                url : "{{route('getDataCustomer')}}",
                type : 'post',
                data : {        phone: phone
                },

                success : function(result){
                    $('#nextpage').hide();
                    if(result.length == 0){
                      $('#customerTable tbody').html("Khách Hàng Chưa Tồn Tại");
                      $('.add-customer').show();
                    }
                    else{
                      $('.add-customer').hide();
                      console.log(result);
                        let i = 0;
                        let id = result[i].id;
                        if(result[i].status == 1 )
                            $('#customerTable tbody').html('<tr><td>'+ 1 +'</td><td>'+result[i].name+'</td><td>'+result[i].phone+'</td><td>'+ result[i].id+'</td><td>'+result[i].email+'</td><td><span class="badge badge-dagge" style="background-color: #04aa6d; padding:5px 24px">Active</span></td><td><a class="btn btn-primary btn-icon btn-sm"  href="{{route('customer__detail')}}?id='+id+'"><i class="feather feather-edit" data-toggle="tooltip" data-original-title="View"></i></a></td></tr>');
                          else if(result[i].status == 2) 
                          $('#customerTable tbody').html('<tr><td>'+ 1 +'</td><td>'+result[i].name+'</td><td>'+result[i].phone+'</td><td>'+ result[i].id+'</td><td>'+result[i].email+'</td><td><span class="badge badge-dagge" style="background-color: #ffc107;">Transferring</span></td><td><a class="btn btn-primary btn-icon btn-sm"  href="{{route('customer__detail')}}?id='+id+'"><i class="feather feather-edit" data-toggle="tooltip" data-original-title="View"></i></a></td></tr>');
                          else 
                            $('#customerTable tbody').html('<tr><td>'+ 1 +'</td><td>'+result[i].name+'</td><td>'+result[i].phone+'</td><td>'+ result[i].id+'</td><td>'+result[i].email+'</td><td><span class="badge badge-dagge" style="background-color: #dc3545;padding:5px 30px;">block</span></td><td><a class="btn btn-primary btn-icon btn-sm"  href="{{route('customer__detail')}}?id='+id+'"><i class="feather feather-edit" data-toggle="tooltip" data-original-title="View"></i></a></td></tr>');
                          
                        let length = 0;
                        if (result.length>5) length =5;
                        else length = result.length;
                        for(let i = 1; i < length; i++){
                          let id = result[i].id;
                          let j = i + 1;
                          if(result[i].status == 1 )
                            $('#customerTable tbody').append('<tr><td>'+ j +'</td><td>'+result[i].name+'</td><td>'+result[i].phone+'</td><td>'+ result[i].id+'</td><td>'+result[i].email+'</td><td><span class="badge badge-dagge" style="background-color: #04aa6d; padding:5px 24px">Active</span></td><td><a class="btn btn-primary btn-icon btn-sm"  href="{{route('customer__detail')}}?id='+id+'"><i class="feather feather-edit" data-toggle="tooltip" data-original-title="View"></i></a></td></tr>');
                          else if(result[i].status == 2) 
                          $('#customerTable tbody').append('<tr><td>'+ j +'</td><td>'+result[i].name+'</td><td>'+result[i].phone+'</td><td>'+ result[i].id+'</td><td>'+result[i].email+'</td><td><span class="badge badge-dagge" style="background-color: #ffc107;">Transferring</span></td><td><a class="btn btn-primary btn-icon btn-sm"  href="{{route('customer__detail')}}?id='+id+'"><i class="feather feather-edit" data-toggle="tooltip" data-original-title="View"></i></a></td></tr>');
                          else 
                            $('#customerTable tbody').append('<tr><td>'+ j +'</td><td>'+result[i].name+'</td><td>'+result[i].phone+'</td><td>'+ result[i].id+'</td><td>'+result[i].email+'</td><td><span class="badge badge-dagge" style="background-color: #dc3545;padding:5px 30px;">block</span></td><td><a class="btn btn-primary btn-icon btn-sm"  href="{{route('customer__detail')}}?id='+id+'"><i class="feather feather-edit" data-toggle="tooltip" data-original-title="View"></i></a></td></tr>');
                          
                        }
                        console.log(result);
                    }

                },
                error : function(){
                    console.log('error');
                }
            })
        });

    
    $("#add-customer").submit(function(e){
        e.preventDefault();
        let name = $("#name").val();
        let phone = $("#phone").val();
        let address = $("#address").val();
        let email = $("#email").val();
        let status = $("#status").val();
        let _token =$("#input[name=_token]").val();
        $.ajax({
                url : "{{route('addCustomer')}}",
                type : 'post',
                data : {
                    name : name,
                    phone : phone,
                    address : address,
                    email : email,
                    status : status,
                    _token : _token
                },

                success : function(result){
                    
                    if(result == 1){
                        
                    $('#validationDefault01').val(phone);
                        alert('Số Điện Thoại đã tồn tại');
                    }
                    else{
                        $('#customerTable tbody').append('<tr><td>'+ @php $i++; echo $i @endphp + '</td><td>'+result.name+'</td><td>'+result.phone+'</td><td>'+result.address+'</td><td>'+result.status+'</td>	<td><span class="badge badge-dagge" style="background-color: #04aa6d;">Active</span></td><td><a class="btn btn-primary btn-icon btn-sm"  href="hr-empview.html"><i class="feather feather-edit" data-toggle="tooltip" data-original-title="View/Edit"></i></a></tr>');
                    }
                    
                    $('#add-customer')[0].reset();
                    $('#customerModal').modal('hide');
                },
                error : function(){
                    console.log('error');
                }
            })
    });
</script>
@endsection