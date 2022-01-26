@extends('home')
@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- invoice -->
        @if(!empty($_GET['success']))
          {{$_POST['phone']}}
        @else
          
<div class="row g-3">
  <div class="col-md-12 ">
    <form class="row" action="{{route('create_order')}}" method="POST">
      @csrf
      <div class="col-md-6">
        <label for="validationDefault01" class="form-label">Số điện thoại khách hàng</label>
        <input type="text" class="form-control" name="phone" id="validationDefault01" value="" placeholder="0985734161" required>
      </div>
      <div class="col-md-6"> 
      @if(!empty($_GET['message_product']))
      <div class="alert alert-danger" role="alert">
        {{$_GET['message_product']}}
      </div>
      @elseif(!empty($_GET['message_customer']))
      <div class="alert alert-danger" role="alert">
        {{$_GET['message_customer']}}
      </div>
        <button class ="btn btn-danger"><a href="{{route('addCustomer')}}">Thêm khách hàng</a></button>
      @endif
      </div>
      <div class="col-md-6" style="margin-top: 24px;">
        <button class="btn btn-danger add-customer" style="display: none" type="" data-toggle="modal" data-target="#customerModal">Thêm mới</button>
      </div>
      <!-- bill -->
      <div class="col-md-6 ">
        <div class="card">
          <div class="card-header">
              Sản phẩm
          </div>
          <div class="card-body">
            <table class="table" id="products_table">
                <thead>
                    <tr>
                        <th>Sản phẩm</th>
                        <th>Số lượng</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (old('products', ['']) as $index => $oldProduct)
                        <tr id="product{{ $index }}">
                            <td>
                                <select name="products[]" class="form-control" style="height: 34px;">
                                    <option value="">-- Chọn sản phẩm --</option>
                                    @foreach ($products as $product)
                                        <option value="{{ $product->id }}"{{ $oldProduct == $product->id ? ' selected' : '' }}>
                                            {{ $product->name }} (${{ number_format($product->price, 2) }})
                                        </option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <input type="number" name="quantities[]" class="form-control" value="{{ old('quantities.' . $index) ?? '1' }}" />
                            </td>
                        </tr>
                    @endforeach
                    <tr id="product{{ count(old('products', [''])) }}"></tr>
                </tbody>
              </table>

              <div class="row">
                  <div class="col-md-12">
                      <button id="add_row" class="btn btn-default pull-left">+ Thêm sản phẩm</button>
                      <button id='delete_row' class="pull-right btn btn-danger">- Xóa sản phẩm</button>
                  </div>
              </div>
          </div>
        </div>
        
      </div>
      <div class="col-md-12" style="margin-top: 20px;">
        <button class="btn btn-danger" id="btn-submit" type="reset">Xóa</button>
        <button class="btn btn-primary" id="btn-submit" type="submit">Gửi</button>
      </div>
    </form>
  </div>
</div>
<script>
  $(document).ready(function(){
    let row_number = {{ count(old('products', [''])) }};
    $("#add_row").click(function(e){
      e.preventDefault();
      let new_row_number = row_number - 1;
      $('#product' + row_number).html($('#product' + new_row_number).html()).find('td:first-child');
      $('#products_table').append('<tr id="product' + (row_number + 1) + '"></tr>');
      row_number++;
    });
    $("#delete_row").click(function(e){
      e.preventDefault();
      if(row_number > 1){
        $("#product" + (row_number - 1)).html('');
        row_number--;
      }
    });
  });
</script>
@endif
@endsection