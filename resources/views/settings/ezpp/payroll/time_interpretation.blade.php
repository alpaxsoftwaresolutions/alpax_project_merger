@extends('layouts.app')

@section('content')
<div class="row">
	
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-2 mb-2">
		<div class="media-body pb-3 mb-0 lh-125 border-bottom border-gray">
			<div class="d-flex justify-content-between align-items-center w-100">
				<strong class="text-gray-dark"><h3>Time Interpretation</h3></strong>
				<button class="btn btn-primary" data-toggle="modal" data-target="#m_create"><i class="fa fa-pen-square"></i> Add</button>
			</div>
		</div>
	</div>

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-2 mb-2">
		<div class="row" id="body">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-2 mb-2" id="template_body">

				<div class="my-3 p-3 bg-white rounded shadow-sm">
					<div class="d-flex justify-content-between align-items-center w-100">
						<strong class="text-gray-dark"><h4>Daily</h4></strong>
						<button class="btn btn-primary" title="Edit Time Interpretation" data-toggle="modal" data-target="#m_edit"><i class="fa fa-edit"></i></button>
					</div>
					<div class="media text-muted pt-3">
						<div class="col-lg-12">
							<div class="row">

								<div class="col-lg-6">
									<div class="row">

										<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
											<h6 class="bg-secondary text-light p-2 text-center">Regular</h6>
										</div>

										<div class="col-lg-12 col-md-12 col-xs-12">
											<table class="table">
												<thead>
													<tr>
														<th></th>
														<th>Regular Hours</th>
														<th>Night Differential</th>
														<th>Overtime</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Regular Working Hours</td>
														<td>
															<input type="number" class="form-control">
														</td>
														<td>
															<input type="number" class="form-control">
														</td>
														<td>
															<input type="number" class="form-control">
														</td>
													</tr>

													<tr>
														<td>Legal Holiday</td>
														<td>
															<input type="number" class="form-control">
														</td>
														<td>
															<input type="number" class="form-control">
														</td>
														<td>
															<input type="number" class="form-control">
														</td>
													</tr>

													<tr>
														<td>Special Holiday</td>
														<td>
															<input type="number" class="form-control">
														</td>
														<td>
															<input type="number" class="form-control">
														</td>
														<td>
															<input type="number" class="form-control">
														</td>
													</tr>
												</tbody>
											</table>
										</div>

									</div>
								</div>

								<div class="col-lg-6">
									<div class="row">

										<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
											<h6 class="bg-secondary text-light p-2 text-center">Rest Day</h6>
										</div>

										<div class="col-lg-12 col-md-12 col-xs-12">
											<table class="table">
												<thead>
													<tr>
														<th>Regular Hours</th>
														<th>Night Differential</th>
														<th>Overtime</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<input type="number" class="form-control">
														</td>
														<td>
															<input type="number" class="form-control">
														</td>
														<td>
															<input type="number" class="form-control">
														</td>
													</tr>

													<tr>
														<td>
															<input type="number" class="form-control">
														</td>
														<td>
															<input type="number" class="form-control">
														</td>
														<td>
															<input type="number" class="form-control">
														</td>
													</tr>

													<tr>
														<td>
															<input type="number" class="form-control">
														</td>
														<td>
															<input type="number" class="form-control">
														</td>
														<td>
															<input type="number" class="form-control">
														</td>
													</tr>
												</tbody>
											</table>
										</div>

									</div>
								</div>

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

<!-- Create Time Interpretation Modal -->
<div class="modal fade" id="m_create" role="dialog" tabindex="0" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<h5 class="modal-title">Create Time Interpretation</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">
				<div class="row">

					<div class="col-lg-6 col-xs-6">
						<div class="form-group">
							<label>Code</label>
							<input type="text" class="form-control" name="code">
						</div>
					</div>

					<div class="col-lg-6 col-xs-6">
						<div class="form-group" style="text-align: right;">
							<label class="text-muted">** Note: The values are in percentage **</label>
						</div>
					</div>

					<div class="col-lg-12">
						<div class="row">

							<div class="col-lg-6">
								<div class="row">

									<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
										<h6 class="bg-secondary text-light p-2 text-center">Regular</h6>
									</div>

									<div class="col-lg-12 col-md-12 col-xs-12">
										<table class="table">
											<thead>
												<tr>
													<th></th>
													<th>Regular Hours</th>
													<th>Night Differential</th>
													<th>Overtime</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Regular Working Hours</td>
													<td>
														<input type="number" class="form-control">
													</td>
													<td>
														<input type="number" class="form-control">
													</td>
													<td>
														<input type="number" class="form-control">
													</td>
												</tr>

												<tr>
													<td>Legal Holiday</td>
													<td>
														<input type="number" class="form-control">
													</td>
													<td>
														<input type="number" class="form-control">
													</td>
													<td>
														<input type="number" class="form-control">
													</td>
												</tr>

												<tr>
													<td>Special Holiday</td>
													<td>
														<input type="number" class="form-control">
													</td>
													<td>
														<input type="number" class="form-control">
													</td>
													<td>
														<input type="number" class="form-control">
													</td>
												</tr>
											</tbody>
										</table>
									</div>

								</div>
							</div>

							<div class="col-lg-6">
								<div class="row">

									<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
										<h6 class="bg-secondary text-light p-2 text-center">Rest Day</h6>
									</div>

									<div class="col-lg-12 col-md-12 col-xs-12">
										<table class="table">
											<thead>
												<tr>
													<th>Regular Hours</th>
													<th>Night Differential</th>
													<th>Overtime</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<input type="number" class="form-control">
													</td>
													<td>
														<input type="number" class="form-control">
													</td>
													<td>
														<input type="number" class="form-control">
													</td>
												</tr>

												<tr>
													<td>
														<input type="number" class="form-control">
													</td>
													<td>
														<input type="number" class="form-control">
													</td>
													<td>
														<input type="number" class="form-control">
													</td>
												</tr>

												<tr>
													<td>
														<input type="number" class="form-control">
													</td>
													<td>
														<input type="number" class="form-control">
													</td>
													<td>
														<input type="number" class="form-control">
													</td>
												</tr>
											</tbody>
										</table>
									</div>

								</div>
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
<!-- Create Time Interpretation Modal -->

<!-- Edit Time Interpretation Modal -->
<div class="modal fade" id="m_edit" role="dialog" tabindex="0" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<h5 class="modal-title">Edit Time Interpretation</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">
				<div class="row">

					<div class="col-lg-6 col-xs-6">
						<div class="form-group">
							<label>Code</label>
							<input type="text" class="form-control" name="code">
						</div>
					</div>

					<div class="col-lg-6 col-xs-6">
						<div class="form-group" style="text-align: right;">
							<label class="text-muted">** Note: The values are in percentage **</label>
						</div>
					</div>

					<div class="col-lg-12">
						<div class="row">

							<div class="col-lg-6">
								<div class="row">

									<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
										<h6 class="bg-secondary text-light p-2 text-center">Regular</h6>
									</div>

									<div class="col-lg-12 col-md-12 col-xs-12">
										<table class="table">
											<thead>
												<tr>
													<th></th>
													<th>Regular Hours</th>
													<th>Night Differential</th>
													<th>Overtime</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Regular Working Hours</td>
													<td>
														<input type="number" class="form-control">
													</td>
													<td>
														<input type="number" class="form-control">
													</td>
													<td>
														<input type="number" class="form-control">
													</td>
												</tr>

												<tr>
													<td>Legal Holiday</td>
													<td>
														<input type="number" class="form-control">
													</td>
													<td>
														<input type="number" class="form-control">
													</td>
													<td>
														<input type="number" class="form-control">
													</td>
												</tr>

												<tr>
													<td>Special Holiday</td>
													<td>
														<input type="number" class="form-control">
													</td>
													<td>
														<input type="number" class="form-control">
													</td>
													<td>
														<input type="number" class="form-control">
													</td>
												</tr>
											</tbody>
										</table>
									</div>

								</div>
							</div>

							<div class="col-lg-6">
								<div class="row">

									<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
										<h6 class="bg-secondary text-light p-2 text-center">Rest Day</h6>
									</div>

									<div class="col-lg-12 col-md-12 col-xs-12">
										<table class="table">
											<thead>
												<tr>
													<th>Regular Hours</th>
													<th>Night Differential</th>
													<th>Overtime</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<input type="number" class="form-control">
													</td>
													<td>
														<input type="number" class="form-control">
													</td>
													<td>
														<input type="number" class="form-control">
													</td>
												</tr>

												<tr>
													<td>
														<input type="number" class="form-control">
													</td>
													<td>
														<input type="number" class="form-control">
													</td>
													<td>
														<input type="number" class="form-control">
													</td>
												</tr>

												<tr>
													<td>
														<input type="number" class="form-control">
													</td>
													<td>
														<input type="number" class="form-control">
													</td>
													<td>
														<input type="number" class="form-control">
													</td>
												</tr>
											</tbody>
										</table>
									</div>

								</div>
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
<!-- Edit Time Interpretation Modal -->

<script type="text/javascript">
	$("#payroll_config_table").DataTable();
</script>
@endsection