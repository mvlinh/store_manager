@extends('home')
@section('content')


		<div class="row" style="margin-top: 20px; margin-left: 50px;">
            <div class="col-md-10">

				<form method="POST" action="{{route('customers.store')}}" role="form" name="add-customer">
					@csrf
					<legend>Thêm khách hàng mới</legend>
					
					@if ($errors->any())
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
            		@endif

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

						<button type="submit" name="btn-submit" class="btn btn-danger">Thêm </button>

                </form>
            </div>
			<!-- <div class="col-md-4">

			</div> -->
		</div>



@endsection