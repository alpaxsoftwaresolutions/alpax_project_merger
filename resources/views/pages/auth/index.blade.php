@extends('layouts.app')

@section('content')

<div class="row">

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-2 mb-2">
		<h3 class="border-bottom mt-2 mb-2">Company Profile</h3>
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
					<th colspan="3">Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($auths as $auth)
				<tr>
					<td>{{$auth->name}}</td>
					<td> {{$auth->name2}}</td>
					<td>{{$auth->icon}}</td>
					<td>{{$auth->parent_id}}</td>
					<td>{{$auth->path}}</td>
					<td><a href = "/auth/edit/{{$auth->id}}">Edit Authorization Role</a></td>
					<td><a href = "/authItems/edit/{{$auth->id}}">Edit Authorization Permission</a></td>
					<td><a href = "/auth/delete/{{$auth->id}}">Delete Role</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

</div>


<script type="text/javascript">
	$("#auth_table").DataTable();
</script>
@endsection