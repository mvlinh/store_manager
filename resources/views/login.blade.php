<!doctype html>
<html lang="en">
 @include('layout.head')
  <body>
  <div class="container">
		<div class="row" style="margin-top: 150px; line-height: 40px;">
			<div class="col-md-6 col-md-push-3">
            <form action="{{route('login')}}" method="POST">
                @csrf
						<legend>Đăng nhập hệ thống</legend>
						<div class="form-group">
							<label for="">Username</label>
							<input type="email" required name="user" id = "login_user" class="form-control" value="" placeholder="Nhập email của bạn">
						</div>

						<div class="form-group">
							<label for="">Password</label>
							<input type="password" required name="passw" class="form-control" value="" placeholder="Nhập pass">
						</div>

						<button type="submit" name="sm_login" class="btn btn-primary">Đăng nhập</button>
						<span>Nếu bạn chưa có tài khoản? <a href="{{route('register')}}" style="color: red;">đăng kí</a></span>

					</form>
            </div>
        </div>

    </div>
   @include('include.js')
  </body>
</html>