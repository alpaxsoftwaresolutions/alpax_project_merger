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
						<a href = "/role/edit/{{$role->id}}" 
							data-toggle="modal" 
							data-target="#m_edit" 
							data-id = "{{$role->id}}"
							data-name = "{{$role->name}}"
							class="btn btn-primary open-edit btn-sm" title="Edit Role"><i class="fa fa-edit"></i></a>
							<a href = "/role/delete/{{$role->id}}" class="btn btn-danger btn-sm" title="Delete Role"><i class="fa fa-trash-alt"></i></a>
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
							<form action="{{route('store.role')}}" method="post" role="form">
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
					<h5 class="modal-title">Edit Roles</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<div class="modal-body">

					<form id="edit_role" action="{{route('store.role')}}" method="post" role="form">
						{{csrf_field()}}
						<div class="row">

							<div class="col-lg-12 col-xs-12">
								<div class="form-group">
									<label for="role_name_edit">Name</label>
									<input type="text" class="form-control textboxes" name="role_name_edit" id="role_name_edit"> 
								</div>
								<div class="form-group">
									<label for="role_id_edit">ID</label>
									<input type="text" class="form-control textboxes" name="role_id_edit" id="role_id_edit"> 
								</div>
							</div>

						</div>

					</form>
				</div>
				
				<div class="modal-footer">
					<button id="submit_edit" class="btn btn-primary">Save</button>
					<button class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>

			</div>
		</div>
	</div>
	<!-- edit Department Modal -->

	<!-- delete Department Modal -->

	<script type="text/javascript">
		$(".table").DataTable();
	</script>
	<script>
		$(document).on("click", ".open-edit", function () {
			var myauthId = $(this).data('id');
			var myauthOrder = $(this).data('name');

			$(".modal-body #role_id_edit").val( myauthId );
			$(".modal-body #role_name_edit").val( myauthOrder );

     // As pointed out in comments, 
     // it is superfluous to have to manually call the modal.
     // $('#addBookDialog').modal('show');
 });

		$("#submit_edit").on("click", function(){
			$("#edit_role").submit();
		});
	</script>
	@endsection