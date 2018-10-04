@extends('layouts.app')

@section('content')
<div class="row">
	
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-2 mb-2">
		<div class="media-body pb-3 mb-0 lh-125 border-bottom border-gray">
			<div class="d-flex justify-content-between align-items-center w-100">
				<strong class="text-gray-dark"><h3>Holiday Per Branch</h3></strong>
				<button class="btn btn-primary" data-toggle="modal" data-target="#m_create"><i class="fa fa-pen-square"></i> Add</button>
			</div>
		</div>
	</div>

	<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 mt-2 mb-2">
		<table class="table">
			<thead>
				<tr>
					<th>Year</th>
					<th>Date</th>
					<th>Description</th>
					<th>Type</th>
					<th>Actions</th>
				</tr>
			</thead>
		</table>

		<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#m_edit"><i class="fa fa-edit"></i></button>
		<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#m_delete"><i class="fa fa-trash-alt"></i></button>
	</div>

</div>

<!-- Create Holiday Per Branch Modal -->
<div class="modal fade" id="m_create" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<h5 class="modal-title">Create Holiday Per Branch</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">
				<div class="row">

					<div class="col-lg-12 col-xs-12">
						<div class="form-group">
							<label>Branch</label>
							<select class="form-control" name="branch" style="width: 100%">
							</select>
						</div>
					</div>

					<div class="col-lg-12 col-xs-12">
						<div class="form-group">
							<label>Code</label>
							<input type="text" class="form-control" name="code">
						</div>
					</div>

					<div class="col-lg-12 col-xs-12">
						<div class="form-group">
							<label>Date</label>
							<input type="date" class="form-control" name="date">
						</div>
					</div>

					<div class="col-lg-12 col-xs-12">
						<div class="form-group">
							<label>Type</label>
							<select class="form-control" name="type">
								<option value="Regular">Regular</option>
								<option value="Special">Special</option>
							</select>
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
<!-- Create Holiday Per Branch Modal -->

<!-- Edit Holiday Per Branch Modal -->
<div class="modal fade" id="m_edit" role="dialog" tabindex="0" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<h5 class="modal-title">Edit Holiday Per Branch</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">
				<div class="row">

					<div class="col-lg-12 col-xs-12">
						<div class="form-group">
							<label>Branch</label>
							<select class="form-control" name="branch" style="width: 100%">
							</select>
						</div>
					</div>

					<div class="col-lg-12 col-xs-12">
						<div class="form-group">
							<label>Code</label>
							<input type="text" class="form-control" name="code">
						</div>
					</div>

					<div class="col-lg-12 col-xs-12">
						<div class="form-group">
							<label>Date</label>
							<input type="date" class="form-control" name="date">
						</div>
					</div>

					<div class="col-lg-12 col-xs-12">
						<div class="form-group">
							<label>Type</label>
							<select class="form-control" name="type">
								<option value="Regular">Regular</option>
								<option value="Special">Special</option>
							</select>
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
<!-- Edit Holiday Per Branch Modal -->

<script type="text/javascript">
	$(".table").DataTable();
	$("select[name='branch']").select2();
</script>
@endsection