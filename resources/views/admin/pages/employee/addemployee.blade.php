@extends('admin.home')
@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<div class="row">
  <body>
  <div class="container-fluid">
 
		<div class="row" style="margin-top: 50px; line-height: 40px;">
			<div class="col-md-6 col-md-push-3">
            @if (!empty($_GET['noti']) && $_GET['noti'] == 'successfully')

            <div class="col-md-12 justify-content-center  text-center" style="height: 150px;">
                <div class="card">
                    <div class="card-body p-1 text-center">
                        <img src="{{asset('assets/images/svgs/check.svg')}}" alt="img" class="w-7">
                        <h3 class="mt-1">Thành công</h3>
                    </div>
                </div>
            </div>
            @endif
                <form action="{{route('getInfo')}}" method="POST" enctype="multipart/form-data">
                    @csrf
						<legend>Đăng ký tài khoản</legend>

						<div class="form-group">
							<label for="">Họ tên <span style="color: red;">(*)</span></label>
							<input type="text" required name="name" class="form-control" value="" placeholder="Nhập họ tên của bạn">
						</div>

                        <div class="form-group">
							<input type="file" required name="file_upload" class="form-control" value="" placeholder="">
						</div>

                        <div class="form-group">
							<label for="">Phone <span style="color: red;">(*)</span></label>
							<input type="text" required name="phone" class="form-control" value="" placeholder="Nhập sdt">
						</div>
                        <div class="form-group">
							<label for="">Ngay sinh<span style="color: red;">(*)</span></label>
							<input type="date" required name="DoB" class="form-control" value="">
						</div>
                        <div class="form-group">
							<label for="">Địa chỉ<span style="color: red;">(*)</span></label>
							<input type="text" required name="address" class="form-control" value=""placeholder="Địa chỉ">
						</div>

						<div class="form-group">
							<label for="">Tài khoản (Email) <span style="color: red;">(*)</span></label>
							<input type="email" required name="email" class="form-control" value="" placeholder="Email">
						</div>

						<div class="form-group">
							<label for="">Mật khẩu <span style="color: red;">(*)</span></label>
							<input type="password" required name="passw" class="form-control" placeholder="*******">
						</div>

						<div class="form-group">
							<label for="">Xác nhận lại mật khẩu <span style="color: red;">(*)</span></label>
							<input type="password" required name="confirm_pass" class="form-control" placeholder="******">
						</div>

						<button type="submit" name="sm_register" class="btn btn-danger">Đăng ký </button>
						<span>Bạn đã có tài khoản <a href="index.php">Đăng nhập</a></span>

                </form>
            </div>
        </div>
    </div>
  </body>
</html>
@endsection