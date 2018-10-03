@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-2 mb-2">
		<h3 class="border-bottom mt-2 mb-2">Company Profile</h3>
	</div>

	<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
		<div class="my-2 p-3 bg-white rounded shadow-sm">
			<div class="row">

				<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 mt-2 mb-2">
					<h6 class="bg-primary small text-light p-2 text-center">General Company Information</h6>
				</div>

				<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
					<div class="form-group">
						<label>Company Name</label>
						<input type="text" class="form-control" name="company_name">
					</div>
				</div>

				<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 mt-2 mb-2">
					<h6 class="bg-primary small text-light p-2 text-center">Address</h6>
				</div>

				<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
					<div class="form-group">
						<label>Unit / Floor / Block / Lot / No.</label>
						<input type="text" class="form-control" name="unit_floor">
					</div>

					<div class="form-group">
						<label>Street</label>
						<input type="text" class="form-control" name="street">
					</div>	

					<div class="form-group">
						<label>Building</label>
						<input type="text" class="form-control" name="building">
					</div>

					<div class="form-group">
						<label>City</label>
						<input type="text" class="form-control" name="city">
					</div>

					<div class="form-group">
						<label>Zip Code</label>
						<input type="text" class="form-control" name="zip">
					</div>

					<div class="form-group">
						<label>Province</label>
						<select class="select2" style="width: 100%" name="province">
						</select>
					</div>

					<div class="form-group">
						<label>Country</label>
						<select class="select2" style="width: 100%" name="country">
						</select>
					</div>
				</div>

				<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 mt-2 mb-2">
					<h6 class="bg-primary small text-light p-2 text-center">Contact Information</h6>
				</div>

				<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 mt-2 mb-2">
					<div class="form-group">
						<label>Telephone No.</label>
						<input type="text" class="form-control" name="telephone">
					</div>

					<div class="form-group">
						<label>Mobile No.</label>
						<input type="text" class="form-control" name="mobile">
					</div>

					<div class="form-group">
						<label>Website</label>
						<input type="text" class="form-control" name="website">
					</div>

					<div class="form-group">
						<label>Email Address</label>
						<input type="text" class="form-control" name="email">
					</div>
				</div>

				<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 mt-2 mb-2">
					<h6 class="bg-primary small text-light p-2 text-center">Others</h6>
				</div>

				<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 mt-2 mb-2">
					<div class="form-group">
						<label>TIN</label>
						<input type="text" class="form-control" name="tin">
					</div>

					<div class="form-group">
						<label>SSS</label>
						<input type="text" class="form-control" name="sss">
					</div>

					<div class="form-group">
						<label>Pag IBIG</label>
						<input type="text" class="form-control" name="pagibig">
					</div>

					<div class="form-group">
						<label>PhilHealth</label>
						<input type="text" class="form-control" name="philhealth">
					</div>
				</div>

				<div class="col-lg-12 col-md-12 col-xs-12 col-ms-12">
					<div class="form-group">
						<button class="btn btn-primary">Save</button>
					</div>
				</div>

			</div>
		</div>
	</div>

</div>
</div>

<script type="text/javascript">
	$(".select2").select2();
	$("select[name='country']").select2();
	$("select[name='province']").select2();
</script>
@endsection