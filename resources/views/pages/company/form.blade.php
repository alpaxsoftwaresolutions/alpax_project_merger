<form action="" method="post" role="form">
	{{csrf_field()}}

	<div class="form-group">
		<label for="company_name"><i class="fa fa-id-badge" aria-hidden="true"></i>Name</label>
		<input type="text" class="form-control textboxes" name="company_name" id="company_name" value="{{ old('company_name') }}">
	</div>
	<div class="form-group">
		<label for="company_branch_code"><i class="fa fa-id-badge" aria-hidden="true"></i>Branch Code</label>
		<input type="number" class="form-control textboxes" name="company_branch_code" id="company_branch_code" value="{{ old('company_branch_code') }}">
	</div>
	<div class="form-group">
		<label for="company_branch_name"><i class="fa fa-id-badge" aria-hidden="true"></i>Branch Name</label>
		<input type="text" class="form-control textboxes" name="company_branch_name" id="company_branch_name" value="{{ old('company_branch_name') }}">
	</div>
	<div class="form-group">
		<label for="company_unit"><i class="fa fa-id-badge" aria-hidden="true"></i>Unit</label>
		<input type="text" class="form-control textboxes" name="company_unit" id="company_unit" value="{{ old('company_unit') }}">
	</div>
		<div class="form-group">
		<label for="company_bldg"><i class="fa fa-id-badge" aria-hidden="true"></i>Building</label>
		<input type="number" class="form-control textboxes" name="company_bldg" id="company_bldg" value="{{ old('company_bldg') }}">
	</div>
		<div class="form-group">
		<label for="company_street"><i class="fa fa-id-badge" aria-hidden="true"></i>Street</label>
		<input type="number" class="form-control textboxes" name="company_street" id="company_street" value="{{ old('company_street') }}">
	</div>
		<div class="form-group">
		<label for="company_city"><i class="fa fa-id-badge" aria-hidden="true"></i>City</label>
		<input type="number" class="form-control textboxes" name="company_city" id="company_city" value="{{ old('company_city') }}">
	</div>
		<div class="form-group">
		<label for="company_province"><i class="fa fa-id-badge" aria-hidden="true"></i>Province</label>
		<input type="number" class="form-control textboxes" name="company_province" id="company_province" value="{{ old('company_province') }}">
	</div>
		<div class="form-group">
		<label for="company_zip"><i class="fa fa-id-badge" aria-hidden="true"></i>ZIP</label>
		<input type="number" class="form-control textboxes" name="company_zip" id="company_zip" value="{{ old('company_zip') }}">
	</div>
		<div class="form-group">
		<label for="company_country"><i class="fa fa-id-badge" aria-hidden="true"></i>Country</label>
		<input type="number" class="form-control textboxes" name="company_country" id="company_country" value="{{ old('company_country') }}">
	</div>
		<div class="form-group">
		<label for="company_contact"><i class="fa fa-id-badge" aria-hidden="true"></i>Contact</label>
		<input type="number" class="form-control textboxes" name="company_contact" id="company_contact" value="{{ old('company_contact') }}">
	</div>
		<div class="form-group">
		<label for="company_telephone"><i class="fa fa-id-badge" aria-hidden="true">Telephone</i></label>
		<input type="number" class="form-control textboxes" name="company_telephone" id="company_telephone" value="{{ old('company_telephone') }}">
	</div>
		<div class="form-group">
		<label for="company_mobile"><i class="fa fa-id-badge" aria-hidden="true">Mobile</i></label>
		<input type="number" class="form-control textboxes" name="company_mobile" id="company_mobile" value="{{ old('company_mobile') }}">
	</div>
		<div class="form-group">
		<label for="company_website"><i class="fa fa-id-badge" aria-hidden="true">Website</i></label>
		<input type="number" class="form-control textboxes" name="company_website" id="company_website" value="{{ old('company_website') }}">
	</div>
		<div class="form-group">
		<label for="company_email"><i class="fa fa-id-badge" aria-hidden="true"></i>Email</label>
		<input type="number" class="form-control textboxes" name="company_email" id="company_email" value="{{ old('company_email') }}">
	</div>
		<div class="form-group">
		<label for="company_tin"><i class="fa fa-id-badge" aria-hidden="true"></i>TIN</label>
		<input type="number" class="form-control textboxes" name="company_tin" id="company_tin" value="{{ old('company_tin') }}">
	</div>
		<div class="form-group">
		<label for="company_sss"><i class="fa fa-id-badge" aria-hidden="true"></i>SSS</label>
		<input type="number" class="form-control textboxes" name="company_sss" id="company_sss" value="{{ old('company_sss') }}">
	</div>
		<div class="form-group">
		<label for="company_pagibig"><i class="fa fa-id-badge" aria-hidden="true"></i>Pagibig</label>
		<input type="number" class="form-control textboxes" name="company_pagibig" id="company_pagibig" value="{{ old('company_pagibig') }}">
	</div>
		<div class="form-group">
		<label for="company_philhealth"><i class="fa fa-id-badge" aria-hidden="true"></i>Philhealth</label>
		<input type="number" class="form-control textboxes" name="company_philhealth" id="company_philhealth" value="{{ old('company_philhealth') }}">
	</div>
		<button>Submit</button>
	</form>