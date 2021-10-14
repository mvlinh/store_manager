<!doctype html>
<html lang="en">
 
@include('layout.head')
  <body>
  <div class="container">
		<div class="row" style="margin-top: 50px; line-height: 40px;">
			<div class="col-md-6 col-md-push-3">
            
                <form action="{{route('getInfo')}}" method="POST">
                    @csrf
						<legend>Đăng ký tài khoản</legend>

						<div class="form-group">
							<label for="">Họ tên <span style="color: red;">(*)</span></label>
							<input type="text" required name="name" class="form-control" value="" placeholder="Nhập họ tên của bạn">
						</div>
                        <div class="form-group">
							<label for="">Phone <span style="color: red;">(*)</span></label>
							<input type="text" required name="phone" class="form-control" value="" placeholder="Nhập sdt">
						</div>
                        <!-- <div class="form-group">
							<label for="">position_id<span style="color: red;">(*)</span></label>
							<input type="number" required name="position_id" class="form-control" value="" placeholder="Nhập họ tên của bạn">
						</div>
                        <div class="form-group">
							<label for="">Ngay sinh<span style="color: red;">(*)</span></label>
							<input type="text" required name="DoB" class="form-control" value="" placeholder="Nhập họ tên của bạn">
						</div> -->
						<div class="form-group">
							<label for="">Tài khoản (Email) <span style="color: red;">(*)</span></label>
							<input type="email" required name="email" class="form-control" value="" placeholder="Nhập ngay sinh">
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
   @include('include.js')
  </body>
</html>