<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="{{ asset('dist2/img/icons/icon-48x48.png') }}" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-blank.html" />

	<title>Dashboard</title>

	<link href="{{ asset('dist2/css/app.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

	<link href="{{ 'dist/vendor/fontawesome-free/css/all.min.css' }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('dist/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{ asset('dist/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
	{{-- sidebar --}}
        @include('layout.sidebar')

		<div class="main">
            {{-- navbar --}}
            @include('layout.navbar')   
			@yield('master.content')

		
		</div>
	</div>

	    <!-- Bootstrap core JavaScript-->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="{{ asset('dist/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
	
		<!-- Core plugin JavaScript-->
		<script src="{{ asset('dist/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
	
		<!-- Custom scripts for all pages-->
		<script src="{{ asset('dist/js/sb-admin-2.min.js') }}"></script>
	
		<!-- Page level plugins -->
		<script src="{{ asset('dist/vendor/datatables/jquery.dataTables.min.js') }}"></script>
		<script src="{{ asset('dist/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
	
		<!-- Page level custom scripts -->
		<script src="{{ asset('dist/js/demo/datatables-demo.js') }}"></script>

	<script src="{{ asset('dist2/js/app.js') }}"></script>

</body>

</html>