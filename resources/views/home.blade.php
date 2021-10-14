<!DOCTYPE html>
<html lang="">
@include ('layout.head')
	<body>
		<div class="container" onmouseover = "increase();">
        <div class="row">
				@include('layout.nav');
			</div>
			<!-- Start Banner website -->
            <div class="row">
				<div class="col-md-12">
					<img src="http://itplus-academy.edu.vn/upload/e0299984838d38ecac3805d4d6661829/files/banner%20sao%20khue-03.jpg" alt="IT-Plus" class="responsive" style="width: 100%;" />
				</div>
</div>
			<!-- End banner website -->

			<!-- Start main -->
			<div class="row main_member">
				
            @include ('layout.slide')
					
					<div class="col-md-9 col-sm-9 col-xs-12">
                                @yield('content')
                                
					</div>
				</div>
			</div>
			

		</div>
        <div class="container-fluid">
        <div class="row footer">
				<div class="col-md-12 text-center">
					Hệ thống học viên IT Plus <br>
					Copyright © 2011 All Rights Reserved. Phát triển bởi ITPlus Academy
				</div>
			</div>
        </div>
	</body>
</html>

