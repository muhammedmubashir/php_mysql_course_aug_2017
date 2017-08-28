<!DOCTYPE html>
<html>
<head>
	<title>AppName - @yield('title')</title>
	<!-- <link href="{{url('/')}}/asset/css/bootstrap.css"> -->
	<!-- http://localhost/blog -->
	<!-- href
	src -->
	<script type="text/javascript" src="file.js"></script>
</head>
<body>
<!-- partial view 
_sidebar.blade.php -->

@include("layout.sidebar") 
<div class="container">
	@yield("content")
</div>
</body>
</html>