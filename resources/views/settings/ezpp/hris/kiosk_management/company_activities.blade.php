@extends('layouts.app')

@section('content')
<div class="row">
	
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-2 mb-2">
		<div class="media-body pb-3 mb-0 lh-125 border-bottom border-gray">
			<div class="d-flex justify-content-between align-items-center w-100">
				<strong class="text-gray-dark"><h3>Company Activities</h3></strong>
				<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#m_create"><i class="fa fa-pen-square"></i> Add</button>
			</div>
		</div>
	</div>

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-2 mb-2">
		<table class="table" style="width: 100%">
			<thead>
				<tr>
					<th>Title</th>
					<th>Description</th>
					<th>Target Date</th>
					<th>Active</th>
					<th>Actions</th>
				</tr>
			</thead>
		</table>

		<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#m_edit"><i class="fa fa-edit"></i></button>
		<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#m_delete"><i class="fa fa-trash-alt"></i></button>
	</div>

</div>

<!-- Create company_activity Modal -->
<div class="modal fade" id="m_create" role="dialog" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-md" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<h5 class="modal-title">Create Company Activity</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">
				<div class="row">

					<div class="col-lg-12 col-xs-12">
						<div class="form-group">
							<label>Title</label>
							<input type="text" class="form-control" name="title">
						</div>
					</div>

					<div class="col-lg-12 col-xs-12">
						<div class="form-group">
							<label>Date From</label>
							<input type="date" class="form-control" name="date_form">
						</div>
					</div>

					<div class="col-lg-12 col-xs-12">
						<div class="form-group">
							<label>Date To</label>
							<input type="date" class="form-control" name="date_to">
						</div>
					</div>

					<div class="col-lg-12 col-xs-12">
						<div class="form-group">
							<label>Description</label>
							<textarea class="form-control" name="description"></textarea>
						</div>
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
<div class="modal fade" id="m_edit" role="dialog" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-md" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<h5 class="modal-title">Edit Company Activity</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">
				<div class="row">

					<div class="col-lg-12 col-xs-12">
						<div class="form-group">
							<label>Title</label>
							<input type="text" class="form-control" name="title">
						</div>
					</div>

					<div class="col-lg-12 col-xs-12">
						<div class="form-group">
							<label>Date From</label>
							<input type="date" class="form-control" name="date_form">
						</div>
					</div>

					<div class="col-lg-12 col-xs-12">
						<div class="form-group">
							<label>Date To</label>
							<input type="date" class="form-control" name="date_to">
						</div>
					</div>

					<div class="col-lg-12 col-xs-12">
						<div class="form-group">
							<label>Description</label>
							<textarea class="form-control" name="description"></textarea>
						</div>
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
	$(".table").DataTable();
</script>
@endsection