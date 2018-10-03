@foreach($company as $cmp)
<form action="" method="post" role="form">
	{{csrf_field()}}

	<div class="form-group">
		<label for="company_name"><i class="fa fa-id-badge" aria-hidden="true"></i>Name</label>
		<input type="text" class="form-control textboxes" name="company_name" id="company_name" value="{{ $cmp->name }}">
	</div>
	<div class="form-group">
		<label for="company_branch_code"><i class="fa fa-id-badge" aria-hidden="true"></i>Branch Code</label>
		<input type="text" class="form-control textboxes" name="company_branch_code" id="company_branch_code" value="{{ $cmp->branch_code }}">
	</div>
	<div class="form-group">
		<label for="company_branch_name"><i class="fa fa-id-badge" aria-hidden="true"></i>Branch Name</label>
		<input type="text" class="form-control textboxes" name="company_branch_name" id="company_branch_name" value="{{ $cmp->branch_name }}">
	</div>
	<div class="form-group">
		<label for="company_unit"><i class="fa fa-id-badge" aria-hidden="true"></i>Unit</label>
		<input type="text" class="form-control textboxes" name="company_unit" id="company_unit" value="{{ $cmp->Unit }}">
	</div>
		<div class="form-group">
		<label for="company_bldg"><i class="fa fa-id-badge" aria-hidden="true"></i>Building</label>
		<input type="text" class="form-control textboxes" name="company_bldg" id="company_bldg" value="{{ $cmp->Bldg }}">
	</div>
		<div class="form-group">
		<label for="company_street"><i class="fa fa-id-badge" aria-hidden="true"></i>Street</label>
		<input type="text" class="form-control textboxes" name="company_street" id="company_street" value="{{ $cmp->Street }}">
	</div>
		<div class="form-group">
		<label for="company_city"><i class="fa fa-id-badge" aria-hidden="true"></i>City</label>
		<input type="text" class="form-control textboxes" name="company_city" id="company_city" value="{{ $cmp->City }}">
	</div>
		<div class="form-group">
		<label for="company_province"><i class="fa fa-id-badge" aria-hidden="true"></i>Province</label>
		<input type="text" class="form-control textboxes" name="company_province" id="company_province" value="{{ $cmp->Province }}">
	</div>
		<div class="form-group">
		<label for="company_zip"><i class="fa fa-id-badge" aria-hidden="true"></i>ZIP</label>
		<input type="text" class="form-control textboxes" name="company_zip" id="company_zip" value="{{ $cmp->ZIP_Code }}">
	</div>
		<div class="form-group">
		<label for="company_country"><i class="fa fa-id-badge" aria-hidden="true"></i>Country</label>
		<input type="text" class="form-control textboxes" name="company_country" id="company_country" value="{{ $cmp->Country }}">
	</div>
		<div class="form-group">
		<label for="company_contact"><i class="fa fa-id-badge" aria-hidden="true"></i>Contact</label>
		<input type="text" class="form-control textboxes" name="company_contact" id="company_contact" value="{{ $cmp->Contact_Person }}">
	</div>
		<div class="form-group">
		<label for="company_telephone"><i class="fa fa-id-badge" aria-hidden="true">Telephone</i></label>
		<input type="text" class="form-control textboxes" name="company_telephone" id="company_telephone" value="{{$cmp->Telephone }}">
	</div>
		<div class="form-group">
		<label for="company_mobile"><i class="fa fa-id-badge" aria-hidden="true">Mobile</i></label>
		<input type="text" class="form-control textboxes" name="company_mobile" id="company_mobile" value="{{ $cmp->Mobile }}">
	</div>
		<div class="form-group">
		<label for="company_website"><i class="fa fa-id-badge" aria-hidden="true">Website</i></label>
		<input type="text" class="form-control textboxes" name="company_website" id="company_website" value="{{ $cmp->Website }}">
	</div>
		<div class="form-group">
		<label for="company_email"><i class="fa fa-id-badge" aria-hidden="true"></i>Email</label>
		<input type="text" class="form-control textboxes" name="company_email" id="company_email" value="{{ $cmp->Email }}">
	</div>
		<div class="form-group">
		<label for="company_tin"><i class="fa fa-id-badge" aria-hidden="true"></i>TIN</label>
		<input type="text" class="form-control textboxes" name="company_tin" id="company_tin" value="{{ $cmp->Tin }}">
	</div>
		<div class="form-group">
		<label for="company_sss"><i class="fa fa-id-badge" aria-hidden="true"></i>SSS</label>
		<input type="text" class="form-control textboxes" name="company_sss" id="company_sss" value="{{ $cmp->SSS }}">
	</div>
		<div class="form-group">
		<label for="company_pagibig"><i class="fa fa-id-badge" aria-hidden="true"></i>Pagibig</label>
		<input type="text" class="form-control textboxes" name="company_pagibig" id="company_pagibig" value="{{ $cmp->Pagibig }}">
	</div>
		<div class="form-group">
		<label for="company_philhealth"><i class="fa fa-id-badge" aria-hidden="true"></i>Philhealth</label>
		<input type="text" class="form-control textboxes" name="company_philhealth" id="company_philhealth" value="{{ $cmp->Philhealth }}">
	</div>
		<button>Submit</button>
	</form>
	@endforeach