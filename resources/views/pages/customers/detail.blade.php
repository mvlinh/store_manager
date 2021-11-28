@extends('home')
@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    

                        <div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Thông tin khách hàng</h3>
									</div>
									<div class="table-responsive">
										<table class="table card-table table-vcenter text-nowrap table-warning mb-0">
											<thead  class="bg-warning text-white">
												<tr>
													<th>ID</th>
													<th>Name</th>
													<th>Employees_care</th>
													<th>phone</th>
													<th>address</th>
													<th>email</th>
													<th>status</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th scope="row">{{$detail['0']->id}}</th>
													<td>{{$detail['0']->customer_name}}</td>
													<td>{{$detail['0']->name}}</td>
													<td>{{$detail['0']->phonecus}}</td>
													<td>{{$detail['0']->address}}</td>
													<td>{{$detail['0']->email}}</td>
                                                    @if($detail['0']->status == 1)
														<td><span class="badge badge-success" style="padding: 5px 26px ; background-color: #0dcd94;">Active</span></td>
														@elseif($detail['0']->status == 2)
														<td><span class="badge badge-warning" style="padding: 6px 10px ; background-color: #fbc518;">transferring</span></td>
														@else
														<td><span class="badge badge-danger" style="padding: 5px 28px; background-color: #f7284a;">block</span></td>
														@endif
												</tr>
                                                
											</tbody>
										</table>
									</div>
									<!-- table-responsive -->
								</div>
							</div>
						</div>

                        <div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Danh mục sản phẩm quan tâm</h3>
									</div>
									<div class="table-responsive">
										<table class="table card-table table-vcenter text-nowrap table-warning mb-0">
											<thead  class="bg-warning text-white">
												<tr>
													<th>ID</th>
													<th>Name</th>
													<th>price</th>
												</tr>
											</thead>
                                            <tbody>
                                            @foreach($detail_product_care as $pro)
                                            
												<tr>
													<th scope="row">{{$pro->product_id}}</th>
													<td>{{$pro->product_name}}</td>
													<td>{{number_format( $pro->price)}} vnd</td>
												</tr>
                                                @endforeach  
											</tbody>
											
										</table>
									</div>
									<!-- table-responsive -->
								</div>
							</div>
						</div>
                        <button data-toggle="modal" data-target="#add" style="color: red; margin-bottom: 10px;">
                            Thêm Xóa sản phẩm quan tâm
                        </button>
       
                        <div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Sản phẩm đã mua</h3>
									</div>
									<div class="table-responsive">
										<table class="table card-table table-vcenter text-nowrap table-warning mb-0">
											<thead  class="bg-warning text-white">
												<tr>
													<th>ID</th>
													<th>Name</th>
												</tr>
											</thead>
											<tbody>
                                                @if(count( $sold )== 0)
                                                <tr>
													
													<td>Chưa có sản phẩm nào được mua</td>
												</tr>
                                                @else
                                                  @foreach($sold as $pro)
                                                    
                                                    <tr>
                                                        <th scope="row">{{$pro->id}}</th>
                                                        <td>{{$pro->name}}</td>
                                                    </tr>
                                                    @endforeach  
                                                 @endif
											</tbody>
										</table>
									</div>
									<!-- table-responsive -->
								</div>
							</div>
						</div>
                        <div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Thông tin chăm sóc khách hàng: <button id="care_info">Chi tiết</button></h3>
									</div>
									<div class="table-responsive">
										<table class="table_info table card-table table-vcenter text-nowrap table-warning mb-0">
											<thead  class="bg-warning text-white">
												<tr>
													<th>Employee</th>
													<th>Phone</th>
													<th>Comment</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													
												</tr>
                                                
											</tbody>
										</table>
									</div>
									<!-- table-responsive -->
								</div>
							</div>
						</div>
  <!-- The Modal -->
        <div class="modal" id="add">
            <div class="modal-dialog">
                <div class="modal-content">
                
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title">Product</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body">
                    @foreach($product_nocare as $pro)
                        <!-- @if($pro->id)
                        @endif -->
                            <div class="row">
                                <div class="col-md-4">{{$pro->name}}</div>
                                <div class="col-md-4 ms-auto"><a href="{{route('add_product_care',['cus_id'=>$id,'pro_id'=>$pro->id])}}"> <i class="ti-plus"></i> </a></div>
                            </div>
                    @endforeach
                    @foreach($product_care as $pro)
                            <div class="row">
                                <div class="col-md-4">{{$pro->name}}</div>
                                <div class="col-md-4 ms-auto"><a href="{{route('del_product_care',['cus_id'=>$id,'pro_id'=>$pro->id])}}"><i class="ti-minus"></i> </a></div>
                            </div>
                    @endforeach
            
                    </div>
                    
                    <!-- Modal footer -->
                    <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <div>
            <span class="table_info" id="add_info" data-toggle="modal" data-target="#add_info_follow"></span>
        </div>

        <div class="modal" id="add_info_follow">
            <div class="modal-dialog">
                <div class="modal-content">
                
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title">Product</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body">
                            <meta name="csrf-token" content="{{ csrf_token() }}">
                            <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required" class="error"></textarea>
                    </div>
                    
                    <!-- Modal footer -->
                    <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" id="send_info">Send</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                    
                </div>
            </div>
        </div>
</div>
 <!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

 <script>
      $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
 
       $('#care_info').click(function(){
           $id = {{$detail['0']->id}};
            $.ajax({
                    url : "{{route('show_info_care',['id'=>"$id"])}}",
                    type : 'get',
                    data : {
                    },
                    success : function(result){
                        console.log(result);
                            $('.table_info thead').html('<tr><th> Employees </th> <th>Phone </th> <th>Comment </th></tr>');
                            $('.table_info tbody').html('');
                            length = result.length;
                            for(let i = 0; i < length; i++){
                                $('.table_info tbody').append('<tr><td>'+result[i].name+'</td><td>'+result[i].phone+'</td><td>'+result[i].care_info+'</tr>');
                            }
                            $('#add_info').html('<button> Add </button>');
                            $('.table_info').show();
                    },
                        error : function(){
                            console.log('error');
                        }
                })
       });

    //    add info_care

    $('#send_info').click(function(){
        id = {{$detail['0']->id}};
        emp_id = {{Auth::id()}};
        info = $('#comment').val();
            $.ajax({
                    url : "{{route('add_info_follow')}}",
                    type : 'post',
                    data : { info: info, id: id
                    },
                    success : function(result){
                        console.log(result);
                        $('.table_info tbody').append('<tr><td>'+result.name+'</td><td>'+result.phone+'</td><td>'+result.info+'</td></tr>');
                    },
                        error : function(){
                            console.log('error');
                        }
                })
       })
       
   </script>
@endsection