<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">

	<script type="text/javascript" src="{{asset('js/solid.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/animate.min.js')}}"></script>

	<title>{{config('app.name', 'Merger')}}</title>

	<style type="text/css">
	@import url("https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700");
	body {
		font-family: 'Poppins', sans-serif;
		background: #fff;
	}

	p {
		font-family: 'Poppins', sans-serif;
		font-size: 1.1em;
		font-weight: 300;
		line-height: 1.7em;
		color: #999;
	}

	.row{
		font-family: 'Poppins', sans-serif;
	}

	h1, h2, h3, h4, h5{
		font-family: 'Poppins';
		font-weight: 800;
	}

	@media(max-width: 986px){
		#design{
			display: none;
		}

		#login_form{
			padding: 0px;
		}
	}

	@media(min-width: 990px){
		#login_form{
			padding: 0px;
		}
	}

	.carousel-background{
		height: 100vh;
	}

	.carousel-caption-top{
		position: absolute;
		top: 8%;
		bottom: auto;
		right: 8%;
		z-index: 10;
		padding-top: 20px;
		padding-bottom: 20px;
		color: #fff;
		text-align: center;
	}
</style>

</head>
<body>

	<div class="container">
		
		<div class="py-5 text-center">
			
		</div>

		<div class="row">
			<div class="col-md-8 mb-4">

				<h2 class="mb-2">Registration</h2>

				<form method="POST">

					<div class="row mt-4">

						<div class="col-md-12 mb-3">
							<div class="form-group">
								<label>Full Name</label>
								<input type="text" class="form-control" name="name">
							</div>
						</div>

						<div class="col-md-12 mb-3">
							<div class="form-group">
								<label>Email Address</label>
								<input type="text" class="form-control" name="email">
							</div>
						</div>

						<div class="col-md-12 mb-3">
							<div class="form-group">
								<label>Password</label>
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="col-md-12 mb-3">
							<div class="form-group">
								<label>Confirm Password</label>
								<input type="password" class="form-control" name="confirm_password">
							</div>
						</div>

						<div class="col-md-12 mb-3">
							<div class="form-group">
								<button class="btn bg-orange">Submit</button>
							</div>
						</div>
					</div>

				</form>

			</div>
		</div>

	</div>

</body>

<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/moment.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/solid.min.js')}}"></script>

</html>