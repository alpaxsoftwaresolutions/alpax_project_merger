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
						<button class="btn btn-primary btn-sm open-edit-company" 
						data-toggle="modal" 
						data-target="#m_edit"
						data-id = "{{$cmp->id}}" 
						data-name = "{{$cmp->name}}"
						data-unit = "{{$cmp->Unit}}"
						data-bldg = "{{$cmp->Bldg}}"
						data-street = "{{$cmp->Street}}"
						data-city = "{{$cmp->City}}"
						data-province = "{{$cmp->Province}}"
						data-zip = "{{$cmp->ZIP_Code}}"
						data-country = "{{$cmp->Country}}"
						data-contact = "{{$cmp->Contact_Person}}"
						data-tel = "{{$cmp->Telephone}}"
						data-mobile = "{{$cmp->Mobile}}"
						data-web = "{{$cmp->Website}}"
						data-email = "{{$cmp->Email}}"
						data-tin = "{{$cmp->Tin}}"
						data-sss = "{{$cmp->SSS}}"
						data-pagibig = "{{$cmp->Pagibig}}"
						data-philhealth = "{{$cmp->Philhealth}}"
						title="Edit Company"><i class="fa fa-edit"></i></button>
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
								<div class="col-md-12 col-xs-12 d-hide">
									<div class="form-group">
										<label for="company_id_edit">ID</label>
										<input type="text" class="form-control textboxes" name="company_id_edit" id="company_id_edit" >
									</div>
								</div>
								<div class="col-md-12 col-xs-12">
									<div class="form-group">
										<label for="company_name">Company Name</label>
										<input type="text" class="form-control textboxes" name="company_name" id="company_name_edit" >
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
												<input type="text" class="form-control textboxes" name="company_unit" id="company_unit_edit">
											</div>
										</div>

										<div class="col-md-3 col-xs-3">
											<div class="form-group">
												<label for="company_bldg">Building</label>
												<input type="text" class="form-control textboxes" name="company_bldg" id="company_bldg_edit">
											</div>
										</div>

										<div class="col-md-3 col-xs-3">
											<div class="form-group">
												<label for="company_street">Street</label>
												<input type="text" class="form-control textboxes" name="company_street" id="company_street_edit">
											</div>
										</div>

										<div class="col-md-3 col-xs-3">
											<div class="form-group">
												<label for="company_city">City</label>
												<input type="text" class="form-control textboxes" name="company_city" id="company_city_edit">
											</div>
										</div>

										<div class="col-md-3 col-xs-3">
											<div class="form-group">
												<label for="company_province">Province</label>
												<input type="text" class="form-control textboxes" name="company_province" id="company_province_edit">
											</div>
										</div>

										<div class="col-md-3 col-xs-3">
											<div class="form-group">
												<label for="company_zip">ZIP</label>
												<input type="text" class="form-control textboxes" name="company_zip" id="company_zip_edit">
											</div>
										</div>

										<div class="col-md-3 col-xs-3">
											<div class="form-group">
												<label for="company_country">Country</label>
												<input type="text" class="form-control textboxes" name="company_country" id="company_country_edit">
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
												<input type="text" class="form-control textboxes" name="company_contact" id="company_contact_edit">
											</div>
										</div>
										
										<div class="col-md-12 col-xs-12">
											<div class="form-group">
												<label for="company_telephone">Telephone</label>
												<input type="text" class="form-control textboxes" name="company_telephone" id="company_telephone_edit">
											</div>
										</div>

										<div class="col-md-12 col-xs-12">
											<div class="form-group">
												<label for="company_mobile">Mobile</label>
												<input type="text" class="form-control textboxes" name="company_mobile" id="company_mobile_edit">
											</div>
										</div>

										<div class="col-md-12 col-xs-12">
											<div class="form-group">
												<label for="company_website">Website</label>
												<input type="text" class="form-control textboxes" name="company_website" id="company_website_edit">
											</div>
										</div>

										<div class="col-md-12 col-xs-12">
											<div class="form-group">
												<label for="company_email">Email</label>
												<input type="text" class="form-control textboxes" name="company_email" id="company_email_edit">
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
												<input type="text" class="form-control textboxes" name="company_tin" id="company_tin_edit">
											</div>
										</div>

										<div class="col-md-12 col-xs-12">
											<div class="form-group">
												<label for="company_sss">SSS</label>
												<input type="text" class="form-control textboxes" name="company_sss" id="company_sss_edit">
											</div>
										</div>

										<div class="col-md-12 col-xs-12">
											<div class="form-group">
												<label for="company_pagibig">Pagibig</label>
												<input type="text" class="form-control textboxes" name="company_pagibig" id="company_pagibig_edit">
											</div>
										</div>

										<div class="col-md-12 col-xs-12">
											<div class="form-group">
												<label for="company_philhealth">Philhealth</label>
												<input type="text" class="form-control textboxes" name="company_philhealth" id="company_philhealth_edit">
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
			<form action = "{{route('delete.company')}}" method = "post" id = "delete_company">
				{{csrf_field()}}
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12 col-xs-12 d-hide">
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
			</form>
			<div class="modal-footer">
				<button class="btn btn-danger" id = "submit_delete_company">Yes</button>
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
	$("#submit_delete_company").on("click", function(){
		$("#delete_company").submit();
	});
</script>
<script>
	$(document).on("click", ".open-delete-company", function () {
		var myroleId = $(this).data('id');
		$(".modal-body #company_id_delete").val( myroleId );
	});
</script>
<script>
	$(document).on("click", ".open-edit-company", function () {
		var myroleId = $(this).data('id');
		var name = $(this).data('name');
		var unit = $(this).data('unit');
		var bldg = $(this).data('bldg');
		var street = $(this).data('street');
		var city = $(this).data('city');
		var province = $(this).data('province');
		var zip = $(this).data('zip');
		var country = $(this).data('country');
		var contact = $(this).data('contact');
		var tel = $(this).data('tel');
		var mobile = $(this).data('mobile');
		var web = $(this).data('web');
		var email = $(this).data('email');
		var tin = $(this).data('tin');
		var sss = $(this).data('sss');
		var pagibig = $(this).data('pagibig');
		var philhealth = $(this).data('philhealth');
		$(".modal-body #company_id_edit").val( myroleId );
		$(".modal-body #company_name_edit").val( name );
		$(".modal-body #company_unit_edit").val( unit );
		$(".modal-body #company_bldg_edit").val( bldg );
		$(".modal-body #company_street_edit").val( street );
		$(".modal-body #company_city_edit").val( city );
		$(".modal-body #company_province_edit").val( province );
		$(".modal-body #company_zip_edit").val( zip );
		$(".modal-body #company_country_edit").val( country );
		$(".modal-body #company_contact_edit").val( contact );
		$(".modal-body #company_telephone_edit").val( tel );
		$(".modal-body #company_mobile_edit").val( mobile );
		$(".modal-body #company_website_edit").val( web );
		$(".modal-body #company_email_edit").val( email );
		$(".modal-body #company_tin_edit").val( tin );
		$(".modal-body #company_pagibig_edit").val( pagibig );
		$(".modal-body #company_sss_edit").val( sss );
		$(".modal-body #company_philhealth_edit").val( philhealth );
	});
</script>
@endsection