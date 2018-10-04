@extends('layouts.app')

@section('content')
<div class="row">

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-2 mb-2">
		<div class="media-body pb-3 mb-0 lh-125 border-bottom border-gray">
			<div class="d-flex justify-content-between align-items-center w-100">
				<strong class="text-gray-dark"><h3>Company</h3></strong>
				<button class="btn btn-primary" title="Add Company" data-toggle="modal" data-target="#m_create"><i class="fa fa-plus"></i> Add</button>
			</div>
		</div>
	</div>

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-2 mb-2">
		<table class="table">
			<thead>
				<tr>
					<th>Name</th>
					<th>Address</th>
					<th>Contact Person</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($company as $cmp)
				<tr>
					<td>{{$cmp->name}}</td>
					<td>{{$cmp->Unit}} {{$cmp->Bldg}} {{$cmp->Bldg}} {{$cmp->Street}} {{$cmp->City}} {{$cmp->Province}} {{$cmp->Country}} {{$cmp->ZIP_Code}} </td>
					<td>{{$cmp->Contact_Person}}</td>
					<td>
						<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#m_edit" title="Edit Company"><i class="fa fa-edit"></i></button>
						<button class="btn btn-danger btn-sm open-delete-company" 
						data-toggle="modal" 
						data-target="#m_delete"
						data-id = "{{$cmp->id}}" title="Delete Company"><i class="fa fa-trash-alt"></i></button>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

</div>

<!-- Create Company -->
<div class="modal fade" id="m_create" role="dialog" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<h5 class="modal-title">Create Company</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">
				<div class="row">

					<form id="create_company" action="{{route('store.company')}}" method="post" role="form">
						{{csrf_field()}}

						<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
							<div class="row">

								<div class="col-md-12 col-xs-12">
									<div class="form-group">
										<label for="company_name">Company Name</label>
										<input type="text" class="form-control" name="company_name" id="company_name" value="{{ old('company_name') }}">
									</div>
								</div>

								<div class="col-lg-12">
									<h6 class="border-bottom">Address</h6>
								</div>

								<div class="col-md-3 col-xs-3">
									<div class="form-group">
										<label for="company_unit">Unit</label>
										<input type="text" class="form-control textboxes" name="company_unit" id="company_unit" value="{{ old('company_unit') }}">
									</div>
								</div>

								<div class="col-md-3 col-xs-3">
									<div class="form-group">
										<label for="company_bldg">Building</label>
										<input type="text" class="form-control textboxes" name="company_bldg" id="company_bldg" value="{{ old('company_bldg') }}">
									</div>
								</div>

								<div class="col-md-3 col-xs-3">
									<div class="form-group">
										<label for="company_street">Street</label>
										<input type="text" class="form-control textboxes" name="company_street" id="company_street" value="{{ old('company_street') }}">
									</div>
								</div>

								<div class="col-md-3 col-xs-3">
									<div class="form-group">
										<label for="company_city">City</label>
										<input type="text" class="form-control textboxes" name="company_city" id="company_city" value="{{ old('company_city') }}">
									</div>
								</div>

								<div class="col-md-3 col-xs-3">
									<div class="form-group">
										<label for="company_province">Province</label>
										<input type="text" class="form-control textboxes" name="company_province" id="company_province" value="{{ old('company_province') }}">
									</div>
								</div>

								<div class="col-md-3 col-xs-3">
									<div class="form-group">
										<label for="company_zip">ZIP</label>
										<input type="text" class="form-control textboxes" name="company_zip" id="company_zip" value="{{ old('company_zip') }}">
									</div>
								</div>

								<div class="col-md-3 col-xs-3">
									<div class="form-group">
										<label for="company_country">Country</label>
										<input type="text" class="form-control textboxes" name="company_country" id="company_country" value="{{ old('company_country') }}">
									</div>
								</div>

								<div class="col-md-3 col-xs-3">
								</div>

								<div class="col-lg-6">
									<h6 class="border-bottom">Contact Information</h6>

									<div class="row">
										<div class="col-lg-12">
											<div class="form-group">
												<label for="company_contact">Contact Person</label>
												<input type="text" class="form-control textboxes" name="company_contact" id="company_contact" value="{{ old('company_contact') }}">
											</div>
										</div>

										<div class="col-lg-12">
											<div class="form-group">
												<label for="company_telephone">Telephone</label>
												<input type="text" class="form-control textboxes" name="company_telephone" id="company_telephone" value="{{ old('company_telephone') }}">
											</div>
										</div>

										<div class="col-lg-12">
											<div class="form-group">
												<label for="company_mobile">Mobile</label>
												<input type="text" class="form-control textboxes" name="company_mobile" id="company_mobile" value="{{ old('company_mobile') }}">
											</div>
										</div>

										<div class="col-lg-12">
											<div class="form-group">
												<label for="company_email">Email</label>
												<input type="text" class="form-control textboxes" name="company_email" id="company_email" value="{{ old('company_email') }}">
											</div>
										</div>

										<div class="col-lg-12">
											<div class="form-group">
												<label for="company_website">Website</label>
												<input type="text" class="form-control textboxes" name="company_website" id="company_website" value="{{ old('company_website') }}">
											</div>
										</div>

									</div>
								</div>

								<div class="col-lg-6">
									<h6 class="border-bottom">Government Mandated Number</h6>

									<div class="row">

										<div class="col-lg-12">
											<div class="form-group">
												<label for="company_tin">TIN</label>
												<input type="text" class="form-control textboxes" name="company_tin" id="company_tin" value="{{ old('company_tin') }}">
											</div>
										</div>

										<div class="col-lg-12">
											<div class="form-group">
												<label for="company_sss">SSS</label>
												<input type="text" class="form-control textboxes" name="company_sss" id="company_sss" value="{{ old('company_sss') }}">
											</div>
										</div>

										<div class="col-lg-12">
											<div class="form-group">
												<label for="company_pagibig">Pagibig</label>
												<input type="text" class="form-control textboxes" name="company_pagibig" id="company_pagibig" value="{{ old('company_pagibig') }}">
											</div>
										</div>

										<div class="col-lg-12">
											<div class="form-group">
												<label for="company_philhealth">Philhealth</label>
												<input type="text" class="form-control textboxes" name="company_philhealth" id="company_philhealth" value="{{ old('company_philhealth') }}">
											</div>
										</div>

									</div>
								</div>


							</div>
						</div>
					</form>
				</div>

			</div>

			<div class="modal-footer">
				<button id="submit_create_company" class="btn btn-primary">Submit</button>
				
				<button class="btn btn-secondary">Cancel</button>
			</div>

		</div>
	</div>
</div>
<!-- Create Company -->


<!-- Edit Company -->
<div class="modal fade" id="m_edit" role="dialog" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<h5 class="modal-title">Edit Company</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			@foreach($company as $cmp)
			<form id="edit_company" action="{{route('store.company')}}" method="post" role="form">
				{{csrf_field()}}

				<div class="modal-body">
					<div class="row">

						<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
							<div class="row">

								<div class="col-md-12 col-xs-12">
									<div class="form-group">
										<label for="company_name">Company Name</label>
										<input type="text" class="form-control textboxes" name="company_name" id="company_name" >
									</div>
								</div>

								<div class="col-lg-12">
									<div class="row">

										<div class="col-lg-12">
											<h6 class="border-bottom">Address</h6>
										</div>

										<div class="col-md-3 col-xs-3">
											<div class="form-group">
												<label for="company_unit">Unit</label>
												<input type="text" class="form-control textboxes" name="company_unit" id="company_unit">
											</div>
										</div>

										<div class="col-md-3 col-xs-3">
											<div class="form-group">
												<label for="company_bldg">Building</label>
												<input type="text" class="form-control textboxes" name="company_bldg" id="company_bldg">
											</div>
										</div>

										<div class="col-md-3 col-xs-3">
											<div class="form-group">
												<label for="company_street">Street</label>
												<input type="text" class="form-control textboxes" name="company_street" id="company_street">
											</div>
										</div>

										<div class="col-md-3 col-xs-3">
											<div class="form-group">
												<label for="company_city">City</label>
												<input type="text" class="form-control textboxes" name="company_city" id="company_city">
											</div>
										</div>

										<div class="col-md-3 col-xs-3">
											<div class="form-group">
												<label for="company_province">Province</label>
												<input type="text" class="form-control textboxes" name="company_province" id="company_province">
											</div>
										</div>

										<div class="col-md-3 col-xs-3">
											<div class="form-group">
												<label for="company_zip">ZIP</label>
												<input type="text" class="form-control textboxes" name="company_zip" id="company_zip">
											</div>
										</div>

										<div class="col-md-3 col-xs-3">
											<div class="form-group">
												<label for="company_country">Country</label>
												<input type="text" class="form-control textboxes" name="company_country" id="company_country">
											</div>
										</div>

									</div>
								</div>

								<div class="col-lg-6">
									<div class="row">

										<div class="col-lg-12">
											<h6 class="border-bottom">Contact Information</h6>
										</div>

										<div class="col-md-12 col-xs-12">
											<div class="form-group">
												<label for="company_contact">Contact</label>
												<input type="text" class="form-control textboxes" name="company_contact" id="company_contact">
											</div>
										</div>
										
										<div class="col-md-12 col-xs-12">
											<div class="form-group">
												<label for="company_telephone">Telephone</label>
												<input type="text" class="form-control textboxes" name="company_telephone" id="company_telephone">
											</div>
										</div>

										<div class="col-md-12 col-xs-12">
											<div class="form-group">
												<label for="company_mobile">Mobile</label>
												<input type="text" class="form-control textboxes" name="company_mobile" id="company_mobile">
											</div>
										</div>

										<div class="col-md-12 col-xs-12">
											<div class="form-group">
												<label for="company_website">Website</label>
												<input type="text" class="form-control textboxes" name="company_website" id="company_website">
											</div>
										</div>

										<div class="col-md-12 col-xs-12">
											<div class="form-group">
												<label for="company_email">Email</label>
												<input type="text" class="form-control textboxes" name="company_email" id="company_email">
											</div>
										</div>

									</div>
								</div>

								<div class="col-lg-6">
									<div class="row">

										<div class="col-lg-12">
											<h6 class="border-bottom">Contact Information</h6>
										</div>

										<div class="col-md-12 col-xs-12">
											<div class="form-group">
												<label for="company_tin">TIN</label>
												<input type="text" class="form-control textboxes" name="company_tin" id="company_tin">
											</div>
										</div>

										<div class="col-md-12 col-xs-12">
											<div class="form-group">
												<label for="company_sss">SSS</label>
												<input type="text" class="form-control textboxes" name="company_sss" id="company_sss">
											</div>
										</div>

										<div class="col-md-12 col-xs-12">
											<div class="form-group">
												<label for="company_pagibig">Pagibig</label>
												<input type="text" class="form-control textboxes" name="company_pagibig" id="company_pagibig">
											</div>
										</div>

										<div class="col-md-12 col-xs-12">
											<div class="form-group">
												<label for="company_philhealth">Philhealth</label>
												<input type="text" class="form-control textboxes" name="company_philhealth" id="company_philhealth">
											</div>
										</div>

									</div>
								</div>

							</div>
						</div>
					</div>
				</div>

			</form>
			@endforeach


			<div class="modal-footer">
				<button id="submit_edit_company" class="btn btn-primary">Save</button>
				<button class="btn btn-secondary" data-dismiss="modal">Cancel</button>
			</div>

		</div>

	</div>
</div>
<!-- Edit Company -->

<!-- delete Company Modal -->
<div class="modal fade" id="m_delete" role="dialog" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<h5 class="modal-title">Delete Company</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">
				<div class="row">
					<div class="col-md-12 col-xs-12 d-none">
						<div class="form-group">
							<label for="company_id_delete">ID</label>
							<input type="text" class="form-control textboxes" name="company_id_delete" id="company_id_delete">
						</div>
					</div>

					<div class="col-lg-12 text-center">
						<p class="">Are you sure you want to delete this?</p>
					</div>

				</div>
			</div>

			<div class="modal-footer">
				<button class="btn btn-danger">Yes</button>
				<button class="btn btn-secondary" data-dismiss="modal">No</button>
			</div>

		</div>
	</div>
</div>
<!-- delete Company Modal -->



<script type="text/javascript">
	$(".table").DataTable();
	$("select[name='country']").select2();
	$("select[name='province']").select2();
	$("#submit_create_company").on("click", function(){
		$("#create_company").submit();
	});
	$("#submit_edit_company").on("click", function(){
		$("#edit_company").submit();
	});
</script>
<script>
	$(document).on("click", ".open-delete-company", function () {
		var myroleId = $(this).data('id');
		$(".modal-body #department_id_delete").val( myroleId );

	});
</script>
@endsection