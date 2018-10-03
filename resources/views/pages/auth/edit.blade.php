@extends('layouts.app')

@section('content')

<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
	<div class="row">

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-2 mb-2">
			<h3 class="border-bottom mt-2 mb-2">Edit Module</h3>
		</div>

		<div class="col-lg-12 col-md-12 col-xs-12 col-ms-12">
			@foreach($auths_edit as $authr)
			<form action="" method="post" role="form">
				{{csrf_field()}}

				<div class="form-group">
					<label for="auth_name_edit">Name</label>
					<input type="text" class="form-control textboxes" name="auth_name_edit" id="auth_name_edit" value="{{ $authr->name }}">
				</div>
				<div class="form-group">
					<label for="auth_order_edit">Order ID</label>
					<input type="number" class="form-control textboxes" name="auth_order_edit" id="auth_order_edit" value="{{ $authr->order_id }}">
				</div>
				<div class="form-group">
					<label for="auth_icon_edit">Icon</label>
					<input type="text" class="form-control textboxes" name="auth_icon_edit" id="auth_icon_edit" value="{{ $authr->icon }}">
				</div>
				<div class="form-group">
					<select id = "auth_parent_edit" name = "auth_parent_edit" class="form-control textboxes">
						<option value = "0">No Parent</option>
						@foreach($auths as $auth)
						<option value = "{{$auth->id}}">{{$auth->name}}</option>
						@endforeach
					</select>
					<div class="form-group">
						<label for="auth_path_edit">Path</label>
						<input type="text" class="form-control textboxes" name="auth_path_edit" id="auth_path_edit" value="{{ $authr->path}}">
					</div>
				</div>
				<button>Submit</button>
			</form>
			@endforeach
		</div>

	</div>
</div>

@endsection