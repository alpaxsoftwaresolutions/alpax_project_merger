@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-2 mb-2">
		<h3 class="border-bottom mt-2 mb-2">General Settings</h3>
	</div>

	<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
		<div class="my-2 p-3 bg-white rounded shadow-sm">
			<div class="row">

				<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 mt-2 mb-2">
					<h6 class="bg-primary small text-light p-2 text-center">Currency</h6>
				</div>

				<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
					<div class="form-group">
						<select class="select2" name="currency" style="width: 100%">
							<option disabled selected>Select Default Currency</option>
						</select>
					</div>	
				</div>

				<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 mt-2 mb-2">
					<h6 class="bg-primary small text-light p-2 text-center">Printer</h6>
				</div>

				<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
					<div class="form-group">
						<input type="text" class="form-control" name="printer_name" placeholder="Enter printer name">
					</div>	
					<div class="form-group">
						<button class="btn btn-primary btn-sm">Save</button>
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