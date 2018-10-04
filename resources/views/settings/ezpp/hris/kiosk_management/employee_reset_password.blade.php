@extends('layouts.app')

@section('content')
<div class="row">
	
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-2 mb-2">
		<div class="media-body pb-3 mb-0 lh-125 border-bottom border-gray">
			<div class="d-flex justify-content-between align-items-center w-100">
				<strong class="text-gray-dark"><h3>Employee Reset Password</h3></strong>
				<button class="btn btn-primary" data-toggle="modal" data-target="#m_create"><i class="fa fa-pen-square"></i> Select</button>
			</div>
		</div>
	</div>

</div>

<!-- Create company_activity Modal -->
<div class="modal fade" id="m_create" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<h5 class="modal-title">Reset Passowrd</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">
				<div class="row">

					<div class="col-lg-12 col-xs-12">
						<div class="form-group">
							<label>Branch</label>
							<select class="select2" name="branch" style="width: 100%"></select>
						</div>
					</div>

					<div class="col-lg-12 col-xs-12">
						<div class="form-group">
							<label>Employee</label>
							<select class="select2" name="employee" style="width: 100%"></select>
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

<script type="text/javascript">
	$("#group_message_table").DataTable();
	$("#employee_table").DataTable();
	$(".select2").select2();
</script>
@endsection