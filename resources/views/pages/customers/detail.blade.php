@extends('home')
@section('content')

    
   <div class="container">
   Name: {{$detail['0']->customer_name}} <br>
   Employees_care: {{$detail['0']->name}}<br>
   Product Care :  
   @foreach($detail_product_care as $pro)
        {{$pro->product_name}},
   @endforeach
        <span data-toggle="modal" data-target="#add" style="color: red;">
            Thay đổi
        </span>

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
                                <div class="col-md-4 ms-auto"><a href="{{route('add_product_care',['cus_id'=>$id,'pro_id'=>$pro->id])}}"> <span style="color: blue;">Add</span> </a></div>
                            </div>
                    @endforeach
                    @foreach($product_care as $pro)
                            <div class="row">
                                <div class="col-md-4">{{$pro->name}}</div>
                                <div class="col-md-4 ms-auto"><a href="{{route('del_product_care',['cus_id'=>$id,'pro_id'=>$pro->id])}}"><span style="color: red;">Del  </span> </a></div>
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
            <span>Product sold: </span>
            @foreach($sold as $item)
                {{$item->name}}
            @endforeach
        </div>
        <div>
            Thông tin chăm sóc khách hàng: <button id="care_info">Chi tiết</button>

            <table class="table_info" border="1">
                <thead>
                </thead>
                <tbody>
                </tbody>
            </table>
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
                       
                            $('.table_info thead').html('<tr><th> Employees_id </th> <th>messes </th> </tr>');
                            $('.table_info tbody').html('');
                            length = result.length;
                            for(let i = 0; i < length; i++){
                                $('.table_info tbody').append('<tr><td>'+result[i].emp_id+'</td><td>'+result[i].care_info+'</tr>');
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
                        $('.table_info tbody').append('<tr><td>'+result.emp_id+'</td><td>'+result.info+'</tr>');
                    },
                        error : function(){
                            console.log('error');
                        }
                })
       })
       
   </script>
@endsection