@extends('layouts.app')

@section('content')
<div class="row">
	
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-2 mb-2">
		<div class="media-body pb-3 mb-0 lh-125 border-bottom border-gray">
			<div class="d-flex justify-content-between align-items-center w-100">
				<strong class="text-gray-dark"><h3>Group Message Settings</h3></strong>
				<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#m_create"><i class="fa fa-pen-square"></i> Add</button>
			</div>
		</div>
	</div>

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-2 mb-2">
		<table id="group_message_table" class="table" style="width: 100%">
			<thead>
				<tr>
					<th>Group Name</th>
					<th>Actions</th>
				</tr>
			</thead>
		</table>

		<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#m_edit"><i class="fa fa-edit"></i></button>
		<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#m_delete"><i class="fa fa-trash-alt"></i></button>
	</div>

</div>

<!-- Create company_activity Modal -->
<div class="modal fade" id="m_create" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<h5 class="modal-title">Create Message</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">
				<div class="row">

					<div class="col-lg-12 col-xs-12">
						<div class="form-group">
							<label>Group Name</label>
							<input type="text" class="form-control" name="group_name">
						</div>
					</div>

					<div class="col-lg-12 col-xs-12 mt-2 mb-2">

						<div class="input-group">
							<label>Add an Employee</label>
							<select class="custom-select select2" style="width: 90%">
								<option selected></option>
							</select>
							<div class="input-group-append">
								<button class="btn btn-outline-primary" type="button"><i class="fa fa-plus"></i> Add</button>
							</div>
						</div>

					</div>

					<div class="col-lg-12 col-xs-12 mt-2 mb-2">
						<table id="employee_table" class="table">
							<thead>
								<tr>
									<th>Employee ID</th>
									<th>Employee Name</th>
									<th>Action</th>
								</tr>
							</thead>
						</table>
					</div>

				</div>
			</div>

			<div class="modal-footer">
				<button class="btn btn-primary">Submit</button>
				<button class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>

		</div>
	</div>
</div>
<!-- Create company_activity Modal -->

<!-- edit company_activity Modal -->
<div class="modal fade" id="m_edit" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-md" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<h5 class="modal-title">Edit Deduction</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">
				<div class="row">

					<div class="col-lg-12 col-xs-12">
						<div class="form-group">
							<label>Group Name</label>
							<input type="text" class="form-control" name="group_name">
						</div>
					</div>

					<div class="col-lg-12 col-xs-12 mt-2 mb-2">

						<div class="input-group">
							<label>Add an Employee</label>
							<select class="custom-select select2" style="width: 90%">
								<option selected></option>
							</select>
							<div class="input-group-append">
								<button class="btn btn-outline-primary" type="button"><i class="fa fa-plus"></i> Add</button>
							</div>
						</div>

					</div>

					<div class="col-lg-12 col-xs-12 mt-2 mb-2">
						<table id="employee_table" class="table">
							<thead>
								<tr>
									<th>Employee ID</th>
									<th>Employee Name</th>
									<th>Action</th>
								</tr>
							</thead>
						</table>
					</div>

				</div>
			</div>

			<div class="modal-footer">
				<button class="btn btn-primary">Save</button>
				<button class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>

		</div>
	</div>
</div>
<!-- edit company_activity Modal -->

<script type="text/javascript">
	$("#group_message_table").DataTable();
	$("#employee_table").DataTable();
	$(".select2").select2();
</script>
@endsection