@extends('home')
@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                        <div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Thông tin khách hàng</h3>
									</div>
									<div class="table-responsive">
										<table class="table card-table table-vcenter text-nowrap table-primary mb-0">
								
											<tbody>
                                                <tr>
                                                    <th>ID: </th>
                                                    <th scope="row">{{$detail['0']->id}}</th>
                                                </tr>
                                                <tr>
                                                    <th>Tên: </th>
                                                    <th scope="row">{{$detail['0']->customer_name}}</th>
                                                </tr>
                                                <tr>
                                                    <th>Người chăm sóc: </th>
                                                    <th scope="row">{{$detail['0']->customer_name}}</th>
                                                </tr>
                                                <tr>
                                                    <th>Số điện thoại: </th>
                                                    <th scope="row">{{$detail['0']->phonecus}}</th>
                                                </tr>
                                                <tr>
                                                    <th>Địa chỉ: </th>
                                                    <th scope="row">{{$detail['0']->address}}</th>
                                                </tr>
                                                <tr>
                                                    <th>email: </th>
                                                    <th scope="row">{{$detail['0']->email}}</th>
                                                </tr>
                                                <tr>
                                                    <th>Trạng Thái: </th>
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
										<table class="table card-table table-vcenter text-nowrap table-primary mb-0">
											<thead  class="bg-success text-white">
												<tr>
													<th>ID</th>
													<th>Tên sản phẩm</th>
													<th>Giá sản phẩm</th>
												</tr>
											</thead>
                                            <tbody>
                                            @if($detail_product_care != NULL)
                                                @foreach($detail_product_care as $pro)
                                                
                                                    <tr>
                                                        <th scope="row">{{$pro->product_id}}</th>
                                                        <td>{{$pro->product_name}}</td>
                                                        <td>{{number_format( $pro->price)}} vnd</td>
												    </tr>
                                                @endforeach  
                                            @else
                                                     <tr>
                                                        <th scope="row">Chưa có sản phâm quan tâm</th>
                                                       
                                                        
												    </tr>
                                            @endif
											</tbody>
											
										</table>
									</div>
									<!-- table-responsive -->
								</div>
							</div>
						</div>
                        <button class="btn btn-danger" data-toggle="modal" data-target="#add" style="color: red; margin-bottom: 10px;">
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
											<thead  class="bg-primary text-white">
												<tr>
													<th>ID</th>
													<th>Tên sản phẩm</th>
													<th>Giá sản phẩm</th>
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
                                                        <td>{{$pro->price}}</td>
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
										<h3 class="card-title">Thông tin chăm sóc khách hàng:<span class="table_info" id="add_info" data-toggle="modal" data-target="#add_info_follow"><button class="btn btn-primary"> Add </button></span></h3>
									</div>
									<div class="table-responsive" >
										<table id="comment_table" class="table_info table card-table table-vcenter text-nowrap table-primary mb-0">
											<thead  class="bg-info text-white">
												<tr>
													<th>Người chăm sóc</th>
													<th>email người chăm sóc</th>
													<th>Số điện thoại</th>
													<th>Nội dung chăm sóc</th>
												</tr>
											</thead>
											<tbody>
                                                @if($comment != NULL)
                                                    @foreach($comment as $item)
                                                    <tr>
                                                        <td>{{$item->name}}
                                                            
                                                        </td>
                                                        <td>{{$item->email}}
                                                            
                                                        </td>
                                                        <td>{{$item->phone}}
                                                            
                                                        </td>
                                                        <td>{{$item->care_info}}
                                                            
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                @else
                                                     <tr>
                                                        <td>Chưa có chăm sóc nào</td>
                                                    </tr>
                                                @endif
												
                                                
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

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
<script>
$(document).ready(function() {
    $('#comment_table').DataTable();
});
</script>
 <script>
      $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
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
                        $('.table_info tbody').prepend('<tr><td>'+result.name+'</td><td>'+result.phone+'</td><td>'+result.phone+'</td><td>'+result.info+'</td></tr>');
                    },
                        error : function(){
                            console.log('error');
                        }
                })
       })
       
   </script>
@endsection