@extends('home')
@section('content') 

    <form id="add-customer" action="{{route('create_order')}}" method="post" >
        @csrf
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
@endsection