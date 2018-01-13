<!DOCTYPE html>
<html en="lang">
<head>
<title>FrontNepal</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{asset('newsfeed/assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('newsfeed/assets/css/font-awesome.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('newsfeed/assets/css/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('newsfeed/assets/css/font.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('newsfeed/assets/css/li-scroller.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('newsfeed/assets/css/slick.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('newsfeed/assets/css/jquery.fancybox.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('newsfeed/assets/css/theme.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('newsfeed/assets/css/style.css')}}">
<style>
	.classwithpad{margin-left:10px;}
	.bar{background-color: black;height:35px;}
	h2{text-align:center;color: white}

</style>
</head>
<body>
		@include('inc.navbar_headline')
	
	<div class="container">
        @yield('main_content') 

        </div>


	<script src="{{asset('newsfeed/assets/js/jquery.min.js')}}"></script> 
	<script src="{{asset('newsfeed/assets/js/wow.min.js')}}"></script> 
	<script src="{{asset('newsfeed/assets/js/bootstrap.min.js')}}"></script> 
	<script src="{{asset('newsfeed/assets/js/slick.min.js')}}"></script> 
	<script src="{{asset('newsfeed/assets/js/jquery.li-scroller.1.0.js')}}"></script> 
	<script src="{{asset('newsfeed/assets/js/jquery.newsTicker.min.js')}}"></script> 
	<script src="{{asset('newsfeed/assets/js/jquery.fancybox.pack.js')}}"></script> 
	<script src="{{asset('newsfeed/assets/js/custom.js')}}"></script>
</body>
</html>