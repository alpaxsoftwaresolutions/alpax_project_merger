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
		@foreach($interpretations as $interpretation)
			<div class="row" id="body">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-2 mb-2" id="template_body">

					<div class="my-3 p-3 bg-white rounded shadow-sm">
						<div class="d-flex justify-content-between align-items-center w-100">
							<strong class="text-gray-dark"><h4>{{ $interpretation->code }}</h4></strong>
							<button class="btn btn-primary open-edit-modal" title="Edit Time Interpretation" data-id ="{{ $interpretation->id }}" data-toggle="modal" data-target="#m_edit"><i class="fa fa-edit"></i></button>
							<button class="btn btn-danger btn-sm open-delete-modal" value='time_interpretation/delete/{{ $interpretation->id }}'><i class="fa fa-trash-alt"></i></button>
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
																<input type="number" class="form-control" value="{{ $interpretation->r_rwh_rh }}" readonly>
															</td>
															<td>
																<input type="number" class="form-control" value="{{ $interpretation->r_rwh_nd }}" readonly>
															</td>
															<td>
																<input type="number" class="form-control" value="{{ $interpretation->r_rwh_ot }}" readonly>
															</td>
														</tr>

														<tr>
															<td>Legal Holiday</td>
															<td>
																<input type="number" class="form-control" value="{{ $interpretation->r_lh_rh }}" readonly>
															</td>
															<td>
																<input type="number" class="form-control" value="{{ $interpretation->r_lh_nd }}" readonly>
															</td>
															<td>
																<input type="number" class="form-control" value="{{ $interpretation->r_lh_ot }}" readonly>
															</td>
														</tr>

														<tr>
															<td>Special Holiday</td>
															<td>
																<input type="number" class="form-control" value="{{ $interpretation->r_sh_rh }}" readonly>
															</td>
															<td>
																<input type="number" class="form-control" value="{{ $interpretation->r_sh_nd }}" readonly>
															</td>
															<td>
																<input type="number" class="form-control" value="{{ $interpretation->r_sh_ot }}" readonly>
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
																<input type="number" class="form-control" value="{{ $interpretation->rd_rwh_rh }}" readonly>
															</td>
															<td>
																<input type="number" class="form-control" value="{{ $interpretation->rd_rwh_nd }}" readonly>
															</td>
															<td>
																<input type="number" class="form-control" value="{{ $interpretation->rd_rwh_ot }}" readonly>
															</td>
														</tr>

														<tr>
															<td>
																<input type="number" class="form-control" value="{{ $interpretation->rd_lh_rh }}" readonly>
															</td>
															<td>
																<input type="number" class="form-control" value="{{ $interpretation->rd_lh_nd }}" readonly>
															</td>
															<td>
																<input type="number" class="form-control" value="{{ $interpretation->rd_lh_ot }}" readonly>
															</td>
														</tr>

														<tr>
															<td>
																<input type="number" class="form-control" value="{{ $interpretation->rd_sh_rh }}" readonly>
															</td>
															<td>
																<input type="number" class="form-control" value="{{ $interpretation->rd_sh_nd }}" readonly>
															</td>
															<td>
																<input type="number" class="form-control" value="{{ $interpretation->rd_sh_ot }}" readonly>
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
		@endforeach
	</div>

</div>

<!-- Create Time Interpretation Modal -->
<div class="modal fade" id="m_create" role="dialog" tabindex="0" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<form action="{{ route('store.time_interpretations') }}" method="post" role="form" id="form-edit">
			{{csrf_field()}}
				<div class="modal-header">
					<h5 class="modal-title" id="m_title">Create Time Interpretation</h5>
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
															<input type="number" class="form-control" name="r_rwh_rh">
														</td>
														<td>
															<input type="number" class="form-control" name="r_rwh_nd">
														</td>
														<td>
															<input type="number" class="form-control" name="r_rwh_ot">
														</td>
													</tr>

													<tr>
														<td>Legal Holiday</td>
														<td>
															<input type="number" class="form-control" name="r_lh_rh">
														</td>
														<td>
															<input type="number" class="form-control" name="r_lh_nd">
														</td>
														<td>
															<input type="number" class="form-control" name="r_lh_ot">
														</td>
													</tr>

													<tr>
														<td>Special Holiday</td>
														<td>
															<input type="number" class="form-control" name="r_sh_rh">
														</td>
														<td>
															<input type="number" class="form-control" name="r_sh_nd">
														</td>
														<td>
															<input type="number" class="form-control" name="r_sh_ot">
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
															<input type="number" class="form-control" name="rd_rwh_rh">
														</td>
														<td>
															<input type="number" class="form-control" name="rd_rwh_nd">
														</td>
														<td>
															<input type="number" class="form-control" name="rd_rwh_ot">
														</td>
													</tr>

													<tr>
														<td>
															<input type="number" class="form-control" name="rd_lh_rh">
														</td>
														<td>
															<input type="number" class="form-control" name="rd_lh_nd">
														</td>
														<td>
															<input type="number" class="form-control" name="rd_lh_ot">
														</td>
													</tr>

													<tr>
														<td>
															<input type="number" class="form-control" name="rd_sh_rh">
														</td>
														<td>
															<input type="number" class="form-control" name="rd_sh_nd">
														</td>
														<td>
															<input type="number" class="form-control" name="rd_sh_ot">
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

			</form>
		</div>
	</div>
</div>
<!-- Create Time Interpretation Modal -->

<!-- Edit Time Interpretation Modal -->
<div class="modal fade" id="m_edit" role="dialog" tabindex="0" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">

			<form action="{{ route('store.time_interpretations') }}" method="post" role="form" id="form-edit">
			{{csrf_field()}}
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
								<input type="hidden" name="interpretation_id">
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
															<input step=any type="number" class="form-control rd" name="r_rwh_rh">
														</td>
														<td>
															<input step=any type="number" class="form-control rd" name="r_rwh_nd">
														</td>
														<td>
															<input step=any type="number" class="form-control rd" name="r_rwh_ot">
														</td>
													</tr>

													<tr>
														<td>Legal Holiday</td>
														<td>
															<input step=any type="number" class="form-control rd" name="r_lh_rh">
														</td>
														<td>
															<input step=any type="number" class="form-control rd" name="r_lh_nd">
														</td>
														<td>
															<input step=any type="number" class="form-control rd" name="r_lh_ot">
														</td>
													</tr>

													<tr>
														<td>Special Holiday</td>
														<td>
															<input step=any type="number" class="form-control rd" name="r_sh_rh">
														</td>
														<td>
															<input step=any type="number" class="form-control rd" name="r_sh_nd">
														</td>
														<td>
															<input step=any type="number" class="form-control rd" name="r_sh_ot">
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
															<input step=any type="number" class="form-control rd" name="rd_rwh_rh">
														</td>
														<td>
															<input step=any type="number" class="form-control rd" name="rd_rwh_nd">
														</td>
														<td>
															<input step=any type="number" class="form-control rd" name="rd_rwh_ot">
														</td>
													</tr>

													<tr>
														<td>
															<input step=any type="number" class="form-control rd" name="rd_lh_rh">
														</td>
														<td>
															<input step=any type="number" class="form-control rd" name="rd_lh_nd">
														</td>
														<td>
															<input step=any type="number" class="form-control rd" name="rd_lh_ot">
														</td>
													</tr>

													<tr>
														<td>
															<input step=any type="number" class="form-control rd" name="rd_sh_rh">
														</td>
														<td>
															<input step=any type="number" class="form-control rd" name="rd_sh_nd">
														</td>
														<td>
															<input step=any type="number" class="form-control rd" name="rd_sh_ot">
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
			</form>
		</div>
	</div>
</div>
<!-- Edit Time Interpretation Modal -->
<!-- delete Department Modal -->
<div class="modal fade" id="m_delete" role="dialog" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<h5 class="modal-title">Delete Time Interpretation</h5>
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
				<a class="btn btn-danger" id="confirm_delete">Yes</a>
				<button class="btn btn-secondary" data-dismiss="modal">No</button>
			</div>

		</div>
	</div>
</div>
<!-- delete Department Modal -->
<script type="text/javascript">
	$("#payroll_config_table").DataTable();
	$(".open-edit-modal").on('click',function(){
		console.log($(this).data('id'));
		var title = $(this).prev().find('h4').text();
		$("#form-edit input[name='code']").val(title);
		$("input[name='interpretation_id']").val($(this).data('id'));
		var row_name = [0,1,2,3,4,5,6,7];
		var row = $(this).parent().next().find('table').find('tr');
		var row_list = [1,2,3,5,6,7];
		var starting = 0;
		var checker = 0;
		var srow_list = [1,2,3];
		var rd = 0;
		for(var i = 0; i < row_list.length; i++){
			var srow = row.eq(row_list[i]).find('td');
			var c = 1;
			var d = 4;
			if(i >= 3){
				c = 0;
				d = 3;
			}
			for(var o = c; o < d; o++){
				$(".rd").eq(rd).val($(srow).eq(o).children().val());
				rd++;
			}
		}
	});
	$(".open-delete-modal").on('click',function(){
		$("#confirm_delete").attr("href",$(this).val());
		$("#m_delete").modal('show');
	});
</script>
@endsection