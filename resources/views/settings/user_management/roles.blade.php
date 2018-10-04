@extends('layouts.app')

@section('content')
<div class="row">

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-2 mb-2">
		<div class="media-body pb-3 mb-0 lh-125 border-bottom border-gray">
			<div class="d-flex justify-content-between align-items-center w-100">
				<strong class="text-gray-dark"><h3>Roles</h3></strong>
				<button class="btn btn-primary" title="Add Role" data-toggle="modal" data-target="#m_create"><i class="fa fa-plus"></i> Add</button>
			</div>
		</div>
	</div>

	<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 mt-2 mb-2">

		<table id="roles_table" class="table" style="width: 100%">
			<thead>
				<tr>
					<th>Name</th>
					<th>Version</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($roles as $role)
				<tr>
					<td>{{$role->name}}</td>
					<td>{{$role->version}}</td>
					<td>
						<a href = "/role/edit/{{$role->id}}" data-toggle="modal" data-target="#m_edit" class="btn btn-primary btn-sm" title="Edit Role"><i class="fa fa-edit"></i></a>
						<a href = "/role/delete/{{$role->id}}" data-toggle="modal" data-target="#m_delete"  class="btn btn-danger btn-sm" title="Delete Role"><i class="fa fa-trash-alt"></i></a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

</div>

<!-- Create Role Modal -->
<div class="modal fade" id="m_create" role="dialog" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<h5 class="modal-title">Create Role</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">
				<div class="row">

					<div class="col-lg-12">
						<form action="" method="post" role="form">
							{{csrf_field()}}

							<div class="form-group">
								<label>Name</label>
								<input type="text" class="form-control"  name="role_name" id="role_name">
							</div>
						</div>
					</div>

				</div>

				<div class="modal-footer">
					<button class="btn btn-primary">Submit</button>
				</form>
				<button class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>

		</div>
	</div>
</div>
<!-- Create Role Modal -->

<!-- edit Department Modal -->
<div class="modal fade" id="m_edit" role="dialog" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<h5 class="modal-title">Edit Violation</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">
				<div class="row">

					<form action="" method="post" role="form">
						{{-- {{csrf_field()}}
						<div class="form-group">
							<label for="role_name_edit"><i class="fa fa-id-badge" aria-hidden="true"></i>Name</label>
							@foreach($role as $roles)
							<input type="text" class="form-control textboxes" name="role_name_edit" id="role_name_edit" value = "{{$roles->name}}">
							@endforeach
						</div> --}}
					</div>
				</div>

				<div class="modal-footer">
					<button class="btn btn-primary">Save</button>
				</form>
				<button class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>

		</div>
	</div>
</div>
<!-- edit Department Modal -->

<!-- delete Department Modal -->
<div class="modal fade" id="m_delete" role="dialog" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<h5 class="modal-title">Delete Role</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">
				<div class="row">

					<div class="col-lg-12 text-center">
						<p class="">Are you sure you want to delete this?</p>
					</div>

				</div>
			</div>

			<div class="modal-footer">
				<button class="btn btn-danger">Yes</button>
				<button class="btn btn-secondary" data-dismiss="modal">No</button>
			</div>

		</div>
	</div>
</div>

<script type="text/javascript">
	$(".table").DataTable();
</script>
@endsection