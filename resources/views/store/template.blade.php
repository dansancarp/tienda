<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'My Laravel Store')</title>	
	<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/lumen/bootstrap.min.css" rel="stylesheet" integrity="sha384-mvYjhBJXQ9VlNETV/xXShy849GsBHnKzVVudnMOcWUVM/6Nd2ksj8VNng5f8ylyX" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
	<link href='https://fonts.googleapis.com/css?family=Poiret+One|Lobster' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">

</head>
<body>
	@if(\Session::has('message'))
		@include('store.partials.message')
	@endif

	@include('store.partials.nav')
	@yield('content')
	@include('store.partials.footer')

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script src="{{asset('js/pinterest_grid.js')}}" ></script>
	<script src="{{asset('js/main.js')}}" ></script>
</body>
</html>