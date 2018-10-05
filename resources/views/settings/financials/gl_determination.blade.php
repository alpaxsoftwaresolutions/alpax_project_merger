@extends('layouts.app')

@section('content')
<div class="row">
	
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-2 mb-2">
		<div class="media-body pb-3 mb-0 lh-125 border-bottom border-gray">
			<div class="d-flex justify-content-between align-items-center w-100">
				<strong class="text-gray-dark"><h3>GL Determination</h3></strong>
				<button class="btn btn-primary" data-toggle="modal" data-target="#m_create"><i class="fa fa-pen-square"></i> Add</button>
			</div>
		</div>
	</div>

	<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 mt-2 mb-2">
		<div class="my-3 p-3 bg-white rounded shadow-sm">
			<h5 class="font-weight-bold text-orange">EZPayPlus</h5>

			<nav>
				<div class="nav nav-tabs" id="nav-tab" role="tablist">
					<a class="nav-item nav-link active font-weight-bold" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">General</a>
				</div>
			</nav>

			<div class="tab-content border-left border-right border-bottom" id="nav-tabContent">
				<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

					<div class="col-lg-8 col-md-8 col-xs-8 mt-4 mb-2">
						<div class="form-group row">
							<label class="col-sm-4 col-form-label">Cash</label>
							<div class="col-sm-8">
								<select class="select2" name="cash" style="width: 100%"></select>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-4 col-form-label">Salaries and Wages</label>
							<div class="col-sm-8">
								<select class="select2" name="salaries_wages" style="width: 100%"></select>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-4 col-form-label">Employee Advances</label>
							<div class="col-sm-8">
								<select class="select2" name="employee_advances" style="width: 100%"></select>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-4 col-form-label">SSS Premiums Payable</label>
							<div class="col-sm-8">
								<select class="select2" name="sss_premiums_payable" style="width: 100%"></select>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-4 col-form-label">PhilHealth Contribution Payable</label>
							<div class="col-sm-8">
								<select class="select2" name="philhealth_contributions" style="width: 100%"></select>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-4 col-form-label">Witholding Tax Payable</label>
							<div class="col-sm-8">
								<select class="select2" name="Witholding_tax" style="width: 100%"></select>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-4 col-form-label">SSS and PhilHealth Contributions Expense</label>
							<div class="col-sm-8">
								<select class="select2" name="sss_philhealth" style="width: 100%"></select>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-4 col-form-label">PagIBIG Contributions Expense</label>
							<div class="col-sm-8">
								<select class="select2" name="pagibig_contributions" style="width: 100%"></select>
							</div>
						</div>
					</div>

				</div>
			</div>

		</div>
	</div>

</div>

<script type="text/javascript">
	$(".select2").select2();
</script>
@endsection