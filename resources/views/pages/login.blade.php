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

	<div class="fluid w-100">
		<div class="row" style="margin-left: 0px; margin-right: 0px;">

			<div id="design" class="col-lg-8 col-md-12 col-xs-12 col-sm-12 bg-light" style="height: 100vh; padding-right: 0; padding-left: 0;">
				<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" style="height: 100vh">
					<div class="carousel-inner">

						<div class="carousel-item active">
							<img class="img-responsive carousel-background" src="{{asset('img/carousel/fast.jpg')}}">
							<div class="carousel-caption-top text-white" style="text-align: right;">
								<h1>Fast</h1>
								<h6>a</h6>
							</div>
						</div>

						<div class="carousel-item">
							<img class="img-responsive carousel-background" src="{{asset('img/carousel/fast2.jpg')}}">
							<div class="carousel-caption text-white" style="text-align: right;">
								<h1>Convinient</h1>
								<h6>a</h6>
							</div>
						</div>

					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-12 col-xs-12 col-sm-12 bg-white p-50" style="height: 100vh; padding: 50px; ">
				<div class="row mt-5 mb-5">

					<img class="mt-1 mb-1" src="{{asset('img/logo/ezpayplus.svg')}}" style="height: 60px;">

					<div id="login_form" class="col-lg-12">

						<form method="post" action="{{ route('post.login') }}" aria-label="{{ __('Login') }}">
							{{csrf_field()}}
							{{-- <h1>Ez Pay Plus</h1> --}}

							<h6>Please enter your credentials</h6>

							<hr>

		

							<div class="form-group">
								<label>Username</label>
								<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

								@if ($errors->has('email'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('email') }}</strong>
								</span>
								@endif
							</div>

							<div class="form-group">
								<label>Password</label>
								<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

								@if ($errors->has('password'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('password') }}</strong>
								</span>
								@endif


								<input type="hidden" name="_token" value="{{ csrf_token() }}">


							</div>

							<hr>

							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-md bg-orange">
									{{ __('Login') }}
								</button>
							</div>

							<label>Doesn't have an account?</label>
							<h6 id="registration"><a href="#">Create one.</a></h6>

						</form>

					</div>

					<div id="registraion_form" class="col-lg-12" style="display: none;">
						<h6>Register an account</h6>
						<hr>

						<form class="form-horizontal" method="POST" action="{{ route('register') }}">

							<div class="row mt-4">

								<div class="col-md-12 mb-3">
									<div class="form-group">
										<label>Full Name</label>
										<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

										@if ($errors->has('name'))
										<span class="help-block">
											<strong>{{ $errors->first('name') }}</strong>
										</span>
										@endif
									</div>
								</div>

								<div class="col-md-12 mb-3">
									<div class="form-group">
										<label>Email Address</label>
										<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

										@if ($errors->has('email'))
										<span class="help-block">
											<strong>{{ $errors->first('email') }}</strong>
										</span>
										@endif
									</div>
								</div>

								<div class="col-md-12 mb-3">
									<div class="form-group">
										<label>Password</label>
										<input id="password" type="password" class="form-control" name="password" required>

										@if ($errors->has('password'))
										<span class="help-block">
											<strong>{{ $errors->first('password') }}</strong>
										</span>
										@endif
									</div>
								</div>

								<div class="col-md-12 mb-3">
									<div class="form-group">
										<label>Confirm Password</label>
										<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
									</div>

									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									
								</div>

								<div class="col-md-12 mb-3">

									<hr style="margin-top: -3px;">

									<div class="form-group">
										<button type="submit" class="btn btn-primary">
											Register
										</button>
									</div>

									<label>Back to Login</label>
									<h6 id="login"><a href="#">Click here.</a></h6>
								</div>
							</div>

						</form>
					</div>

				</div>

				<div class="mt-5 mb-5" style="bottom: 0; position: absolute; padding: 10px">
					<div class="row">
						<br><img src="{{asset('img/logo/alpax_logo.svg')}}" style="height: 25px; margin-right: 5px; margin-left: 5px"><span class="text-bold">ALPAX Software Solutions</span>
					</div>
				</div>

			</div>

		</div>

	</body>

	<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/moment.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/solid.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/select2.min.js')}}"></script>

	<script type="text/javascript">
		$("select[name='company']").select2();
		$("#registration").on("click", function(){
			jQuery("#login_form").fadeOut(500, function(){
				$("#login_form").css("display", "none");
				$("#registraion_form").css("display", "block");
			});
		});

		$("#login").on("click", function(){
			jQuery("#registraion_form").fadeOut(500, function(){
				$("#login_form").css("display", "block");
				$("#registraion_form").css("display", "none");
			});
		});
	</script>

	</html>