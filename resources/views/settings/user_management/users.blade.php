@extends('layouts.app')

@section('content')
<div class="row">

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-2 mb-2">
		<div class="media-body pb-3 mb-0 lh-125 border-bottom border-gray">
			<div class="d-flex justify-content-between align-items-center w-100">
				<strong class="text-gray-dark"><h3>Users</h3></strong>
				<button class="btn btn-primary" title="Add User" data-toggle="modal" data-target="#m_create"><i class="fa fa-plus"></i> Add</button>
			</div>
		</div>
	</div>

	<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 mt-2 mb-2">
		<table class="table" style="width: 100%">
			<thead>
				<tr>
					<th>Name</th>
					<th>Username</th>
					<th>Role</th>
					<th>Status</th>
					<th>Locked</th>
					<th>Actions</th>
				</tr>
			</thead>
		</table>
	</div>
</div>

<!-- Create User -->
<div class="modal fade" id="m_create" role="dialog" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<h5 class="modal-title">Create User</h5>
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
								<label>Username</label>
								<input type="text" class="form-control"  name="username" id="username">
							</div>

							<div class="form-group">
								<label>Password</label>
								<input type="text" class="form-control"  name="password" id="password">
							</div>

							<div class="form-group">
								<label>Confirm Password</label>
								<input type="text" class="form-control"  name="confirm_password" id="confirm_password">
							</div>

							<div class="form-group">
								<label>First Name</label>
								<input type="text" class="form-control"  name="firstname" id="firstname">
							</div>

							<div class="form-group">
								<label>Last Name</label>
								<input type="text" class="form-control"  name="lastname" id="lastname">
							</div>
							
							<div class="form-group">
								<label>Roles</label>
								<select class="select2" style="width: 100%" name="role"></select>
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
<!-- Create User -->

<script type="text/javascript">
	$(".table").DataTable();
	$("select[name='role']").select2();
</script>
@endsection