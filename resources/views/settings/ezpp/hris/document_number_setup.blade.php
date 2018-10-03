@extends('layouts.app')

@section('content')
<div class="row">

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-2 mb-2">
		<div class="media-body pb-3 mb-0 lh-125 border-bottom border-gray">
			<div class="d-flex justify-content-between align-items-center w-100">
				<strong class="text-gray-dark"><h3>Document Number Setup</h3></strong>
				
			</div>
		</div>
	</div>

	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-2 mb-2">
		<div class="my-2 p-3 bg-white rounded shadow-sm">
			<div class="row">

				<div class="col-md-12 col-xs-12">
					<label class="font-weight-bold">Employee ID</label>
					<div class="form-group">
						<label>Prefix</label>
						<input type="text" class="form-control" name="prefix">
					</div>

					<div class="form-group">
						<label>Digits</label>
						<input type="text" class="form-control" name="digits">
					</div>

					<div class="form-group">
						<button class="btn btn-primary">Save</button>
					</div>
				</div>

			</div>
		</div>
	</div>

</div>
@endsection