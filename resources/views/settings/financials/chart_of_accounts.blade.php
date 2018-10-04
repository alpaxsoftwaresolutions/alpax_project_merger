@extends('layouts.app')

@section('content')
<div class="row">
	
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-2 mb-2">
		<div class="media-body pb-3 mb-0 lh-125 border-bottom border-gray">
			<div class="d-flex justify-content-between align-items-center w-100">
				<strong class="text-gray-dark"><h3>Chart of Accounts</h3></strong>
				<button class="btn btn-primary" data-toggle="modal" data-target="#m_create"><i class="fa fa-pen-square"></i> Add</button>
			</div>
		</div>
	</div>

	<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 mt-2 mb-2">
		
		<div class="row" id="coa_body">

			<div class="col-md-6 col-xs-6">
				<div class="my-3 p-3 bg-white rounded shadow-sm">

					<div class="media-body pb-3 mb-0 small lh-125">
						<div class="d-flex justify-content-between align-items-center w-100 border-bottom border-gray">
							<h6 class="pb-2 mb-0"><span id="account_name" class="font-weight-bold">Assets</span> <span class="text-muted">1000-1999</span></h6>
							<a href="#">Edit</a>
						</div>
					</div>

					<div class="media text-muted">
						<div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
							<div class="d-flex justify-content-between align-items-center w-100">
								<strong class="text-gray-dark">Full Name</strong>
								<a href="#" class="small">Edit</a>
							</div>
						</div>
					</div>

				</div>
			</div>

		</div>

		<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#m_edit"><i class="fa fa-edit"></i></button>
		<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#m_delete"><i class="fa fa-trash-alt"></i></button>
	</div>

</div>

<!-- Create Chart of Account Modal -->
<div class="modal fade" id="m_create" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-md" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<h5 class="modal-title">Create Chart of Account</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">
				<div class="row">

					<div class="col-lg-12 col-xs-12">
						<div class="form-group">
							<label>Name</label>
							<input type="text" class="form-control" name="name">
						</div>
					</div>

					<div class="col-lg-12 col-xs-12">
						<div class="form-group">
							<label>Account Code</label>
							<input type="text" class="form-control" name="account_code">
						</div>
					</div>

					<div class="col-lg-12 col-xs-12">
						<div class="form-group">
							<label>Parent</label>
							<select class="form-control" name="parent" style="width: 100%">
							</select>
						</div>
					</div>

					<div class="col-lg-12 col-xs-12">
						<div class="form-group">
							<label>Select State</label>
							<select class="form-control" name="state" style="width: 100%">
								<option value="Title">Title</option>
								<option value="Active">Active</option>
							</select>
						</div>
					</div>

					<div class="col-lg-12 col-xs-12">
						<div class="form-group">
							<label>Is Debit?</label>
							<br>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="is_debit" id="y" value="Yes" checked>
								<label class="form-check-label" for="y">Yes</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="is_debit" id="n" value="No">
								<label class="form-check-label" for="n">No</label>
							</div>
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
<!-- Create Chart of Account Modal -->

<script type="text/javascript">
	$("select[name='parent']").select2();
</script>
@endsection