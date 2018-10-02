<!--Sidebar -->
{{-- <nav id="sidebar">
	{!!html_entity_decode($sidebar)!!}
	<ul class="list-unstyled components">
		{!!html_entity_decode($dashboard)!!}
		@foreach($dashboard as $dash)
			<li class="">
				<a href="{{ $dash->id }}" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle" style="text-align: center"><img style="height: 70px;">{{ $dash->name }}</a>
				@foreach($dash->item as $item)
					<ul class="collapse list-unstyled show" id="{{ $item->parent_id }}">

						<li class="">
							<a href="#"><img src="{{asset('img/nav_icons/speedometer.svg')}}" style="height: 20px; margin-right: 10px;">Dashboard</a>
						</li>
					</ul>
				@endforeach
			</li>
		@endforeach
	</ul>

	<div class="sidebar-header">
		<h3>Soliman Security Services</h3>
		<strong><img src="{{asset('img/logo/brand.svg')}}" style="height: 30px; width: 100%"></strong>
	</div>

	<ul class="list-unstyled components">
		<li id="doctor">
			<a href="#">
				<i class="fas fa-home"></i>
				Settings
			</a>
		</li>
	</ul>

	<ul class="list-unstyled CTAs">
		<li>
			<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Logout') }}</a>

			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
				@csrf
			</form>

		</li>
	</ul>
</nav> --}}

<!-- Sidebar  -->
{!!html_entity_decode($sidebar)!!}
<nav id="sidebar">
	<div class="sidebar-header">
		<h3><img src="{{asset('img/logo/brand.svg')}}" style="height: 50px; width: 100%"></h3>
		<strong><img src="{{asset('img/logo/brand.svg')}}" style="height: 50px; width: 100%"></strong>
	</div>

	<ul class="list-unstyled components">
		<li id="doctor">
			<a href="admission_dashboard.php">
				<i class="fas fa-home"></i>Dashboard
			</a>
		</li>
	</ul>


	<ul class="list-unstyled">
		<li>
			<a href="#" class="text-danger-200">
				<i class="fas fa-cogs"></i>
				Settings
			</a>
		</li>

		<li>
			<a href="logout.php" class="text-danger-200">
				<i class="fas fa-sign-out-alt"></i>
				Log out
			</a>
		</li>
	</ul>
</nav>
<!-- Sidebar -->