<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
	data-sidebar-image="none">

<!-- Mirrored from smarthr.dreamstechnologies.com/html/template/admin-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Nov 2024 15:12:11 GMT -->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Smarthr - Bootstrap Admin Template">
	<meta name="keywords"
		content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
	<meta name="author" content="Dreamstechnologies - Bootstrap Admin Template">
	<title>Dashboard - HRMS admin template</title>

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets')}}/img/favicon.png">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="{{asset('assets')}}/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="{{asset('assets')}}/plugins/fontawesome/css/all.min.css">

	<!-- Lineawesome CSS -->
	<link rel="stylesheet" href="{{asset('assets')}}/css/line-awesome.min.css">
	<link rel="stylesheet" href="{{asset('assets')}}/css/material.css">

	<!-- Chart CSS -->
	<link rel="stylesheet" href="{{asset('assets')}}/plugins/morris/morris.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="{{asset('assets')}}/css/style.css">

    @yield('css')

</head>

<body>

	<!-- Main Wrapper -->
	<div class="main-wrapper">

		<!-- Header -->
	      @include('layout.backend.header')
		<!-- /Header -->

		<!-- Sidebar -->
		  @include('layout.backend.sidebar')
		<!-- /Two Col Sidebar -->



		<!-- Page Wrapper -->
		<div class="page-wrapper">

			<!-- Page Content -->
			<div class="content container-fluid pb-0">

			  @yield('page_content')

			</div>
			<!-- /Page Content -->

		</div>
		<!-- /Page Wrapper -->

	</div>
	<!-- /Main Wrapper -->
 
	     @include('layout.backend.footer')

		<!-- jQuery -->
		<script data-cfasync="false"
			src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
		<script src="{{asset('assets')}}/js/jquery-3.7.1.min.js" type="a9b306af835d173009bf3a2c-text/javascript"></script>

		<!-- Bootstrap Core JS -->
		<script src="{{asset('assets')}}/js/bootstrap.bundle.min.js" type="a9b306af835d173009bf3a2c-text/javascript"></script>

		<!-- Slimscroll JS -->
		<script src="{{asset('assets')}}/js/jquery.slimscroll.min.js" type="a9b306af835d173009bf3a2c-text/javascript"></script>

		<!-- Chart JS -->
		<script src="{{asset('assets')}}/plugins/morris/morris.min.js" type="a9b306af835d173009bf3a2c-text/javascript"></script>
		<script src="{{asset('assets')}}/plugins/raphael/raphael.min.js" type="a9b306af835d173009bf3a2c-text/javascript"></script>
		<script src="{{asset('assets')}}/js/chart.js" type="a9b306af835d173009bf3a2c-text/javascript"></script>
		<script src="{{asset('assets')}}/js/greedynav.js" type="a9b306af835d173009bf3a2c-text/javascript"></script>

		<!-- Theme Settings JS -->
		<script src="{{asset('assets')}}/js/layout.js" type="a9b306af835d173009bf3a2c-text/javascript"></script>
		<script src="{{asset('assets')}}/js/theme-settings.js" type="a9b306af835d173009bf3a2c-text/javascript"></script>

		<!-- Custom JS -->
		<script src="{{asset('assets')}}/js/app.js" type="a9b306af835d173009bf3a2c-text/javascript"></script>

		<script src="{{asset('assets')}}/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
			data-cf-settings="a9b306af835d173009bf3a2c-|49" defer></script>

      @yield('script')
</body>

<!-- Mirrored from smarthr.dreamstechnologies.com/html/template/admin-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Nov 2024 15:13:37 GMT -->

</html>