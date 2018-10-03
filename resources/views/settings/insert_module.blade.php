@extends('layouts.app')

@section('content')

<div class="row">

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-2 mb-2 border-bottom">
		<h3>Modules</h3>
	</div>

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-2 mb-2">
		<table id="auth_table" class="table">
			<thead>
				<tr>
					<th>Name</th>
					<th>Role</th>
					<th>Icon</th>
					<th>Parent ID</th>
					<th>Path</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($auths as $auth)
				<tr>
					<td>{{$auth->name}}</td>
					<td>{{$auth->name2}}</td>
					<td>{{$auth->icon}}</td>
					<td>{{$auth->parent_id}}</td>
					<td>{{$auth->path}}</td>
					<td>
						<a class="btn btn-primary btn-sm" href = "/auth/edit/{{$auth->id}}"><i class="fa fa-users-cog"></i></a>
						<a class="btn btn-primary btn-sm" href = "/authItems/edit/{{$auth->id}}"><i class="fa fa-lock"></i></a>
						<a class="btn btn-danger btn-sm" href = "/auth/delete/{{$auth->id}}"><i class="fa fa-times"></i></a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

</div>

{{-- <div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-2 mb-2">
		<h3 class="border-bottom mt-2 mb-2">Insert Module</h3>
	</div>

	<div class="col-lg-6 col-md-6 col-xs-6 col-sm-6">
		<div class="my-2 p-3 bg-white rounded shadow-sm">
			<div class="row">

				<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 mt-2 mb-2">
					<h6 class="bg-primary small text-light p-2 text-center">General Company Information</h6>
				</div>

				<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 mt-2 mb-2">

					<form action="{{route('store.authentications')}}" method="post" role="form">
						{{csrf_field()}}

						<div class="form-group">
							<label for="auth_name">Name</label>
							<input type="text" class="form-control textboxes" name="auth_name" id="auth_name" value="{{ old('auth_name') }}">
						</div>
						<div class="form-group">
							<label for="auth_order">Order ID</label>
							<input type="number" class="form-control textboxes" name="auth_order" id="auth_order" value="{{ old('auth_order') }}">
						</div>
						<div class="form-group">
							<label for="auth_icon">Icon</label>
							<input type="text" class="form-control textboxes" name="auth_icon" id="auth_icon" value="{{ old('auth_icon') }}">
						</div>
						<div class="form-group">
							<select id = "auth_parent" name = "auth_parent" class="select2" style="width: 100%">
								<option value = "0">No Parent</option>
								@foreach($auths as $auth)
								<option value = "{{$auth->id}}">{{$auth->name}}</option>
								@endforeach
							</select>
							<div class="form-group">
								<label for="auth_path">Path</label>
								<input type="text" class="form-control textboxes" name="auth_icon" id="auth_path" value="{{ old('auth_path') }}">
							</div>
							<button class="btn btn-primary btn-sm">Submit</button>
						</div>
						</form>

					</div>

				</div>
			</div>
		</div>
	</div>
</div> --}}

	<script type="text/javascript">
		$("select[name='auth_parent']").select2();
		$("#auth_table").DataTable();
	</script>
	@endsection