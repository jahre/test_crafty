<!DOCTYPE html>
<html lang="en">
<head>
	<title>{{$title}}</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="{{$description}}"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	<!--<link rel="stylesheet" type="text/css" href="media/css/reset.css">
	<link rel="stylesheet" type="text/css" href="media/css/main_responsive.css">-->
	
	<!--<script type="text/javascript" src="media/js/jquery.js"></script>
    <script type="text/javascript" src="media/js/carouFredSel.js"></script>
    <script type="text/javascript" src="media/js/main.js"></script>-->
	
	@foreach($styles as $style)
		{{HTML::style($style)}}
	@endforeach
	
	@foreach($scripts as $script)
		{{HTML::script($script)}}
	@endforeach
    
</head>
<body>

	<header>
	
		<div class="wrapper">
		
			<a href="{{asset('/')}}"><img src="{{asset('media/img/logo.png')}}" alt="Crafty" class="logo"></a>
			<a href="#" class="menu_icon" id="menu_icon"></a>
			<nav id="nav_menu">
				<ul>
					<li><a href="{{asset('ourstory')}}">Our Story</a></li>
					<li><a href="{{asset('price')}}">Price</a></li>
					<li><a href="{{asset('contact')}}">Contact</a></li>
                    <li><a href="{{asset('/auth/reg')}}">Login/Register</a></li>
					@if($cabinet)
					<li><a href="{{asset('/cabinet')}}">Cabinet</a></li>
					@endif
					
				</ul>
			</nav>



			<ul class="social">
				<li><a class="fb" href="#"></a></li>
				<li><a class="twitter" href="#"></a></li>
				<li><a class="gplus" href="#"></a></li>
			</ul>
		</div>
	</header>
	<!--@if($cabinet)
			<div style="background:#65bf95; height:40px; width:100%; text-align:center;">
				<h2 style="padding-top:10px; color:#fff;">Hello!</h2>
			</div>
	@endif  End Header  -->
	
	@yield('content')
		
	<footer>
		<img src="{{asset('media/img/logo_footer.png')}}" alt="Crafty">
		<p class="rights">Copyright © crafty - All rights reserved, Find more free templates at <a href="http://pixelhint.com">Pixelhint.com</a></p>
	</footer><!--  End Footer  -->

</body>
</html>