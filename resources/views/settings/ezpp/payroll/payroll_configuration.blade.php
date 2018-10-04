@extends('layouts.app')

@section('content')
<div class="row">
	
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-2 mb-2">
		<div class="media-body pb-3 mb-0 lh-125 border-bottom border-gray">
			<div class="d-flex justify-content-between align-items-center w-100">
				<strong class="text-gray-dark"><h3>Payroll Configuration</h3></strong>
				<button class="btn btn-primary" data-toggle="modal" data-target="#m_create"><i class="fa fa-pen-square"></i> Add</button>
			</div>
		</div>
	</div>

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-2 mb-2">
		<table id="payroll_config_table" class="table" style="width: 100%">
			<thead>
				<tr>
					<th>Code</th>
					<th>Working Days / Year</th>
					<th>Working Hours / Day</th>
					<th>Time Interpretation</th>
					<th>Pay Frequency</th>
					<th>Witholding Tax</th>
					<th>SSS</th>
					<th>PagIBIG</th>
					<th>PhilHealth</th>
					<th>Actions</th>
				</tr>
			</thead>
		</table>

		<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#m_edit"><i class="fa fa-edit"></i></button>
		<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#m_delete"><i class="fa fa-trash-alt"></i></button>
	</div>

</div>

<!-- Create Payroll Configuration Modal -->
<div class="modal fade" id="m_create" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<h5 class="modal-title">Create Payroll Configuration</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">
				<div class="row">

					<div class="col-lg-12 col-xs-12">
						<div class="form-group">
							<label>Code</label>
							<input type="text" class="form-control" name="code">
						</div>
					</div>

					<div class="col-lg-12 col-xs-12">
						<div class="form-group">
							<label>Working Day Per Year</label>
							<input type="text" class="form-control" name="working_per_year">
						</div>
					</div>

					<div class="col-lg-12 col-xs-12">
						<div class="form-group">
							<label>Working Day Per Hour</label>
							<input type="text" class="form-control" name="working_per_hour">
						</div>
					</div>

					<div class="col-lg-12 col-xs-12">
						<div class="form-group">
							<label>Pay Frequency</label>
							<select class="custom-select" name="pay_frequency">
								<option value="Weekly">Weekly</option>
								<option value="Semi-Monthly">Semi-Monthly</option>
								<option value="Monthly">Monthly</option>
							</select>
						</div>
					</div>

					<div class="col-lg-12 col-xs-12">
						<div class="form-group">
							<label>Time Interpretation</label>
							<select class="custom-select" name="time_interpretation">
								<option value="Daily">Daily</option>
								<option value="Monthly">Monthly</option>
							</select>
						</div>
					</div>

					<div class="col-lg-12 col-xs-12 mt-4">
						<div class="form-group">
							<label>Government Contribution</label>
						</div>

						<table class="table table-stripped hover" style="width: 100%">
							<tbody>
								<tr style="text-align: center">
									<td></td>
									<td>1</td>
									<td>2</td>
									<td>3</td>
									<td>4</td>
								</tr>

								<tr>
									<td>Witholding Tax</td>
									<td style="text-align: center">
										<input type="checkbox" name="wt_1" value="1">
									</td style="text-align: center">
									<td style="text-align: center">
										<input type="checkbox" name="wt_2" value="1">
									</td>
									<td style="text-align: center">
										<input type="checkbox" name="wt_3" value="1">
									</td>
									<td style="text-align: center">
										<input type="checkbox" name="wt_4" value="1">
									</td>
								</tr>

								<tr>
									<td>SSS</td>
									<td style="text-align: center">
										<input type="checkbox" name="sss_1" value="1">
									</td>
									<td style="text-align: center">
										<input type="checkbox" name="sss_2" value="1">
									</td>
									<td style="text-align: center">
										<input type="checkbox" name="sss_3" value="1">
									</td>
									<td style="text-align: center">
										<input type="checkbox" name="sss_4" value="1">
									</td>
								</tr>

								<tr>
									<td>Pag IBIG</td>
									<td style="text-align: center">
										<input type="checkbox" name="pagibig_1" value="1">
									</td>
									<td style="text-align: center">
										<input type="checkbox" name="pagibig_2" value="1">
									</td>
									<td style="text-align: center">
										<input type="checkbox" name="pagibig_3" value="1">
									</td>
									<td style="text-align: center">
										<input type="checkbox" name="pagibig_4" value="1">
									</td>
								</tr>

								<tr>
									<td>Phil Health</td>
									<td style="text-align: center">
										<input type="checkbox" name="ph_1" value="1">
									</td>
									<td style="text-align: center">
										<input type="checkbox" name="ph_2" value="1">
									</td>
									<td style="text-align: center">
										<input type="checkbox" name="ph_3" value="1">
									</td>
									<td style="text-align: center">
										<input type="checkbox" name="ph_4" value="1">
									</td>
								</tr>
							</tbody>
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
<!-- Create Payroll Configuration Modal -->

<script type="text/javascript">
	$("#payroll_config_table").DataTable();
</script>
@endsection