<!DOCTYPE html>
<html lang="">
@include ('layout.head')
	<body>
		<div class="container" onmouseover = "increase();">
        <div class="row">
				@include('layout.nav')
			</div>
			<!-- Start Banner website -->
            <div class="row">
				<div class="col-md-12">
					<img src="https://tapchisieuxe.com/wp-content/uploads/2020/10/van-hoa-do-sieu-xe-o-nhat-ban-doc-dao-va-dien-ro-so-mot-the-gioi-0-1.jpg" alt="showroom" class="responsive" style="width: 100%; height: 300px" />
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