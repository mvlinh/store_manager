@extends('home')
@section('content')

  <div class="col-md-6">
    <label for="validationDefault01" class="form-label">Phone number</label>
    <span id="notification"></span>
    <input type="text" class="form-control" id="validationDefault01" value="" placeholder="0985734161" required>
  </div>
  <div class="col-md-6" style="margin-top: 24px;">
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
  

  <table class="table" id="customerTable">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">status</th>
      <th scope="col">details</th>
    </tr>
  </thead>
    <?php $i =0;?>
  <tbody>
    @foreach($customer as $cus)
    <tr>
      <td scope="row">@php $i++; echo $i @endphp</td>
      <td>{{$cus->name}}</td>
      <td>0{{$cus->phone}}</td>
      <td>{{$cus->address}}</td>
      <td>{{$cus->status}}</td>
      <td><a href="{{route('customer_detail',['id'=>$cus->id])}}">chi tiết</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
<div id = "nextpage">
{{ $customer->links() }}
</div>
<script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
 
        $('#validationDefault01').on('keyup', function() {
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
                        let i = 0;
                        $('#customerTable tbody').html('<tr><td>'+ 1 +'</td><td>'+result[i].name+'</td><td>'+result[i].phone+'</td><td>'+result[i].address+'</td><td>'+result[i].status+'</td></tr>');
                        let length = 0;
                        if (result.length>5) length =5;
                        else length = result.length;
                        for(let i = 1; i < length; i++){
                          let j = i + 1;
                            $('#customerTable tbody').append('<tr><td>'+ j +'</td><td>'+result[i].name+'</td><td>'+result[i].phone+'</td><td>'+result[i].address+'</td><td>'+result[i].status+'</td></tr>');
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
                        $('#customerTable tbody').append('<tr><td>'+ @php $i++; echo $i @endphp + '</td><td>'+result.name+'</td><td>'+result.phone+'</td><td>'+result.address+'</td><td>'+result.status+'</td></tr>');
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