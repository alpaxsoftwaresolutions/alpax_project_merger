<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/r-2.2.2/datatables.min.css"/>

	<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/solid.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/animate.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/select2.min.js')}}"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/r-2.2.2/datatables.min.js"></script>

	<title>{{config('app.name', 'Merger')}}</title>

	<style type="text/css">
		body{
			font-family: 'Raleway';
			font-size: 13px;
		}

		h1, h2, h3, h4, h5, h6{
			font-family: 'Poppins'
		}

		input {
			border: 1px solid transparent;
			background-color: #f1f1f1;
			padding: 10px;
			font-size: 13px;
		}
		input[type=text] {
			width: 100%;
		}
		input[type=submit] {
			background-color: DodgerBlue;
			color: #fff;
		}
	</style>

</head>

<body>
	<div class="wrapper">
		
		@include('inc.sidebar')

		<div id="content">
			@include('pages.flash-message')
			@include('inc.navbar')

			@yield('content')

		</div>

	</div>
</body>

<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>

<script type="text/javascript" src="{{asset('js/moment.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/solid.min.js')}}"></script>

<script type="text/javascript">
	$(document).ready(function () {

		var interval = setInterval(function() {
			var momentNow = moment();
			$('#date').html(momentNow.format('MMMM DD, YYYY') + ' - '
				/*+ momentNow.format('dddd ')*/
				.substring(0,9));
			$('#time').html(momentNow.format('hh:mm:ss A'));
		}, 100);

		$('#sidebarCollapse').on('click', function () {
			$('#sidebar').toggleClass('active');
			$(this).toggleClass('active');
		});

	});
</script>

</html>
