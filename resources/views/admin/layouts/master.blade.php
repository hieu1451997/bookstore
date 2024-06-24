<!DOCTYPE html>
<html lang="vi">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Book Store</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{'admin/img/icon.ico'}}" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="{{'admin/js/plugin/webfont/webfont.min.js'}}"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['{{'admin/css/fonts.min.css'}}']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{{'admin/css/bootstrap.min.css'}}">
	<link rel="stylesheet" href="{{'admin/css/atlantis.min.css'}}">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="{{'admin/css/demo.css'}}">
</head>
<body data-background-color="dark">
	<div class="wrapper">
		<div class="main-header">
			<!-- Header -->
            @include('admin.layouts.header')
            <!-- End Header -->
		</div>

		<!-- Sidebar -->
		@include('admin.layouts.menu')
		<!-- End Sidebar -->
        <div class="main-panel">
            <div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">BookStore.com</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="#">
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Tables</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Datatables</a>
							</li>
						</ul>
					</div>
					<div class="row">
                		@yield('content')
					</div>
				</div>
            </div>
            <!-- Footer -->
            @include('admin.layouts.footer')
            <!-- End Footer -->
        </div>
	</div>
	<!--   Core JS Files   -->
	<script src="{{'admin/js/core/jquery.3.2.1.min.js'}}"></script>
	<script src="{{'admin/js/core/popper.min.js'}}"></script>
	<script src="{{'admin/js/core/bootstrap.min.js'}}"></script>

	<!-- jQuery UI -->
	<script src="{{'admin/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js'}}"></script>
	<script src="{{'admin/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js'}}"></script>

	<!-- jQuery Scrollbar -->
	<script src="{{'admin/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js'}}"></script>


	<!-- Chart JS -->
	<script src="{{'admin/js/plugin/chart.js/chart.min.js'}}"></script>

	<!-- jQuery Sparkline -->
	<script src="{{'admin/js/plugin/jquery.sparkline/jquery.sparkline.min.js'}}"></script>

	<!-- Chart Circle -->
	<script src="{{'admin/js/plugin/chart-circle/circles.min.js'}}"></script>

	<!-- Datatables -->
	<script src="{{'admin/js/plugin/datatables/datatables.min.js'}}"></script>

	<!-- Bootstrap Notify -->
	<script src="{{'admin/js/plugin/bootstrap-notify/bootstrap-notify.min.js'}}"></script>

	<!-- jQuery Vector Maps -->
	{{-- <script src="{{'admin/js/plugin/jqvmap/jquery.vmap.min.js'}}"></script>
	<script src="{{'admin/js/plugin/jqvmap/maps/jquery.vmap.world.js'}}"></script> --}}

	<!-- Sweet Alert -->
	<script src="{{'admin/js/plugin/sweetalert/sweetalert.min.js'}}"></script>

	<!-- Atlantis JS -->
	<script src="{{'admin/js/atlantis.min.js'}}"></script>

	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="{{'admin/js/setting-demo.js'}}"></script>
	{{-- <script src="{{'admin/js/demo.js'}}"></script> --}}
	<script>
		$('#lineChart').sparkline([102,109,120,99,110,105,115], {
			type: 'line',
			height: '70',
			width: '100%',
			lineWidth: '2',
			lineColor: 'rgba(255, 255, 255, .5)',
			fillColor: 'rgba(255, 255, 255, .15)'
		});

		$('#lineChart2').sparkline([99,125,122,105,110,124,115], {
			type: 'line',
			height: '70',
			width: '100%',
			lineWidth: '2',
			lineColor: 'rgba(255, 255, 255, .5)',
			fillColor: 'rgba(255, 255, 255, .15)'
		});

		$('#lineChart3').sparkline([105,103,123,100,95,105,115], {
			type: 'line',
			height: '70',
			width: '100%',
			lineWidth: '2',
			lineColor: 'rgba(255, 255, 255, .5)',
			fillColor: 'rgba(255, 255, 255, .15)'
		});
	</script>
	<script >
		$(document).ready(function() {
			$('#add-row').DataTable({
				"pageLength": 5,
			});
		});
	</script>
</body>
</html>