<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
@include('layout.head')

	<body class="app sidebar-mini" id="index1">

        <!-- Switcher -->
		
		<!-- End Switcher -->

		<!---Global-loader-->
		<!-- <div id="global-loader" >
			<img src="assets/images/svgs/loader.svg" alt="loader">
		</div> -->

		<div class="page">
			<div class="page-main">

                <!--aside open-->
				@include('layout.slide')
				<!--aside closed-->

				<div class="app-content main-content">
					<div class="side-app">

                        <!--app header-->
					@include('layout.nav')
						<!--/app header-->
						<!--Page header-->
					
						<!--End Page header-->
						<!--Row-->
						@yield('content')
					</div>
				</div><!-- end app-content-->
			</div>

            <!--Footer-->
			@include('layout.footer')
			<!-- End Footer-->
		</div>

        <!-- Back to top -->
		<a href="#top" id="back-to-top"><span class="feather feather-chevrons-up"></span></a>

		
	</body>

<!-- Mirrored from laravel.spruko.com/dayone/ltr/index by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Nov 2021 03:05:43 GMT -->
</html>
;


