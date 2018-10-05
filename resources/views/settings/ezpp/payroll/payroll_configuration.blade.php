@extends('layouts.app')

@section('content')
<style type="text/css">
	.line{
		border-right: 1px dotted #DDE;
	}
	.line-left{
		border-left: 1px dotted #DDE;
	}
</style>
<div class="row">
	
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-2 mb-2">
		<div class="media-body pb-3 mb-0 lh-125 border-bottom border-gray">
			<div class="d-flex justify-content-between align-items-center w-100">
				<strong class="text-gray-dark"><h3>Payroll Configuration</h3></strong>
				<button class="btn btn-primary" data-toggle="modal" data-target="#m_create"><i class="fa fa-pen-square"></i> Add</button>
			</div>
		</div>
	</div>

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-2 mb-2">
		<table id="payroll_config_table" class="table " style="width: 100%">
			<thead width="100%">
				<tr>
					<th width="10%">Code</th>
					<th width="10%">Working Days / Year</th>
					<th width="10%">Working Hours / Day</th>
					<th width="10%">Time Interpretation</th>
					<th width="10%">Pay Frequency</th>
					<th colspan="4" class="text-center" width="10%">Witholding Tax</th>
					<th colspan="4" class="text-center" width="10%">SSS</th>
					<th colspan="4" class="text-center" width="10%">PagIBIG</th>
					<th colspan="4" class="text-center" width="10%">PhilHealth</th>
					<th width="10%">Actions</th>
				</tr>
				<tr>
					<th colspan="5" class = "line-left"></th>
					<th class = "line-left">1</th>
					<th class = "line-left">2</th>
					<th class = "line-left">3</th>
					<th class = "line-left">4</th>
					<th class = "line-left">1</th>
					<th class = "line-left">2</th>
					<th class = "line-left">3</th>
					<th class = "line-left">4</th>
					<th class = "line-left">1</th>
					<th class = "line-left">2</th>
					<th class = "line-left">3</th>
					<th class = "line-left">4</th>
					<th class = "line-left">1</th>
					<th class = "line-left">2</th>
					<th class = "line-left">3</th>
					<th class = "line-left">4</th>
					<th class = "line-left"></th>
				</tr>
			</thead>
			<tbody>
				@if($payroll_configurations)
					@php
						$c = 0;
					@endphp
					@foreach($payroll_configurations as $config)
						<tr>
							<td data-value="{{ $config->id }}">{{ $config->code }}</td>
							<td>{{ $config->working_day_per_year }}</td>
							<td>{{ $config->working_day_per_hour }}</td>
							<td>{{ $config->pay_frequency }}</td>
							<td>{{ $config->time_interpretation_id }}</td>
							@for($o = 0; $o < 4; $o++)
								@for($p = 0; $p < 4; $p++)
									@if($taxes[$c][$o][$p] == 1)
										<td class="line-left" data-value="1">&#9989;</td>
									@else
										<td class="line-left" data-value="0">&#10060;</td>
									@endif
								@endfor
							@endfor
							<td class="line-left">
								<button class="btn btn-primary btn-sm open-edit" data-id ="{{ $config->id }}"><i class="fa fa-edit"></i></button>
								<a class="btn btn-danger btn-sm" href="/settings/ezpp/payroll/payroll_configuration/delete/{{ $config->id }}" title="Delete Module" ><i class="fa fa-trash-alt"></i></button>
							</td>
						</tr>
						@php
							$c++;
						@endphp
					@endforeach
				@endif
			</tbody>
		</table>
	</div>

</div>

<!-- Create Payroll Configuration Modal -->
<div class="modal fade" id="m_create" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<form action="{{ route('store.payroll_configuration') }}" method="post" role="form" id="form">
				{{csrf_field()}}
				<input type="hidden" name="config_id" value="0">
				<div class="modal-header">
					<h5 class="modal-title">Create Payroll Configuration</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">

						<div class="col-lg-12 col-xs-12">
							<div class="form-group">
								<label>Code</label>
								<input type="text" class="form-control" name="code" required>
							</div>
						</div>

						<div class="col-lg-12 col-xs-12">
							<div class="form-group">
								<label>Working Day Per Year</label>
								<input type="text" class="form-control" name="working_per_year" required>
							</div>
						</div>

						<div class="col-lg-12 col-xs-12">
							<div class="form-group">
								<label>Working Day Per Hour</label>
								<input type="text" class="form-control" name="working_day_per_hour" required>
							</div>
						</div>

						<div class="col-lg-12 col-xs-12">
							<div class="form-group">
								<label>Pay Frequency</label>
								<select class="custom-select" name="pay_frequency">
									<option value="Weekly">Weekly</option>
									<option value="Semi-Monthly">Semi-Monthly</option>
									<option value="Monthly">Monthly</option>
								</select>
							</div>
						</div>

						<div class="col-lg-12 col-xs-12">
							<div class="form-group">
								<label>Time Interpretation</label>
								<select class="custom-select" name="time_interpretation">
									<option value="1">Daily</option>
									<option value="2">Monthly</option>
								</select>
							</div>
						</div>

						<div class="col-lg-12 col-xs-12 mt-4">
							<div class="form-group">
								<label>Government Contribution</label>
							</div>

							<table class="table table-stripped hover" style="width: 100%">
								<tbody>
									<tr style="text-align: center">
										<td></td>
										<td>1</td>
										<td>2</td>
										<td>3</td>
										<td>4</td>
									</tr>

									<tr>
										<td>Witholding Tax</td>
										<td style="text-align: center">
											<input type="checkbox" name="wt_1" value="1">
										</td style="text-align: center">
										<td style="text-align: center">
											<input type="checkbox" name="wt_2" value="1">
										</td>
										<td style="text-align: center">
											<input type="checkbox" name="wt_3" value="1">
										</td>
										<td style="text-align: center">
											<input type="checkbox" name="wt_4" value="1">
										</td>
									</tr>

									<tr>
										<td>SSS</td>
										<td style="text-align: center">
											<input type="checkbox" name="ss_1" value="1">
										</td>
										<td style="text-align: center">
											<input type="checkbox" name="ss_2" value="1">
										</td>
										<td style="text-align: center">
											<input type="checkbox" name="ss_3" value="1">
										</td>
										<td style="text-align: center">
											<input type="checkbox" name="ss_4" value="1">
										</td>
									</tr>

									<tr>
										<td>Pag IBIG</td>
										<td style="text-align: center">
											<input type="checkbox" name="pi_1" value="1">
										</td>
										<td style="text-align: center">
											<input type="checkbox" name="pi_2" value="1">
										</td>
										<td style="text-align: center">
											<input type="checkbox" name="pi_3" value="1">
										</td>
										<td style="text-align: center">
											<input type="checkbox" name="pi_4" value="1">
										</td>
									</tr>

									<tr>
										<td>Phil Health</td>
										<td style="text-align: center">
											<input type="checkbox" name="ph_1" value="1">
										</td>
										<td style="text-align: center">
											<input type="checkbox" name="ph_2" value="1">
										</td>
										<td style="text-align: center">
											<input type="checkbox" name="ph_3" value="1">
										</td>
										<td style="text-align: center">
											<input type="checkbox" name="ph_4" value="1">
										</td>
									</tr>
								</tbody>
							</table>

						</div>

					</div>
				</div>

				<div class="modal-footer">
					<button class="btn btn-primary" id="button">Submit</button>
					<button class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Create Payroll Configuration Modal -->

<script type="text/javascript">
	$(":checkbox").on('change', function(){
		if(this.checked)
			$(this).val(1);
		else
			$(this).val(0);
	});
	$('#m_create').on('hidden.bs.modal', function () {
	  	$("#form").trigger('reset');
		$("input[name='config_id']").val(0);
	});
	$(".open-edit").on('click',function(){
		var row = $(this).closest('tr').find('td');
		$("input[name='config_id']").val(row.eq(0).data('value'));
		$("input[name='code']").val(row.eq(0).text());
		$("input[name='working_per_year']").val(row.eq(1).text());
		$("input[name='working_day_per_hour']").val(row.eq(2).text());
		$("select[name='pay_frequency']").val(row.eq(3).text()).trigger('change');
		$("select[name='time_interpretation']").val(row.eq(4).text()).trigger('change');
		console.log(row.eq(5).data('value'));
		if(row.eq(5).data('value') == 1){
			$("input[name='wt_1']").val(row.eq(5).data('value'));
			$("input[name='wt_1']").prop('checked',true);
		}
		if(row.eq(6).data('value') == 1){
			$("input[name='wt_2']").val(row.eq(6).data('value'));
			$("input[name='wt_2']").prop('checked',true);
		}
		if(row.eq(7).data('value') == 1){
			$("input[name='wt_3']").val(row.eq(7).data('value'));
			$("input[name='wt_3']").prop('checked',true);
		}
		if(row.eq(8).data('value') == 1){
			$("input[name='wt_4']").val(row.eq(8).data('value'));
			$("input[name='wt_4']").prop('checked',true);
		}
		if(row.eq(9).data('value') == 1){
			$("input[name='ss_1']").val(row.eq(9).data('value'));
			$("input[name='ss_1']").prop('checked',true);
		}
		if(row.eq(10).data('value') == 1){
			$("input[name='ss_2']").val(row.eq(10).data('value'));
			$("input[name='ss_2']").prop('checked',true);
		}
		if(row.eq(11).data('value') == 1){
			$("input[name='ss_3']").val(row.eq(11).data('value'));
			$("input[name='ss_3']").prop('checked',true);
		}
		if(row.eq(12).data('value') == 1){
			$("input[name='ss_4']").val(row.eq(12).data('value'));
			$("input[name='ss_4']").prop('checked',true);
		}
		if(row.eq(13).data('value') == 1){
			$("input[name='pi_1']").val(row.eq(13).data('value'));
			$("input[name='pi_1']").prop('checked',true);
		}
		if(row.eq(14).data('value') == 1){
			$("input[name='pi_2']").val(row.eq(14).data('value'));
			$("input[name='pi_2']").prop('checked',true);
		}
		if(row.eq(15).data('value') == 1){
			$("input[name='pi_3']").val(row.eq(15).data('value'));
			$("input[name='pi_3']").prop('checked',true);
		}
		if(row.eq(16).data('value') == 1){
			$("input[name='pi_4']").val(row.eq(16).data('value'));
			$("input[name='pi_4']").prop('checked',true);
		}
		if(row.eq(17).data('value') == 1){
			$("input[name='ph_1']").val(row.eq(17).data('value'));
			$("input[name='ph_1']").prop('checked',true);
		}
		if(row.eq(18).data('value') == 1){
			$("input[name='ph_2']").val(row.eq(18).data('value'));
			$("input[name='ph_2']").prop('checked',true);
		}
		if(row.eq(19).data('value') == 1){
			$("input[name='ph_3']").val(row.eq(19).data('value'));
			$("input[name='ph_3']").prop('checked',true);
		}
		if(row.eq(20).data('value') == 1){
			$("input[name='ph_4']").val(row.eq(20).data('value'));
			$("input[name='ph_4']").prop('checked',true);
		}
		$("#m_create").modal('show');
	});
	//$("#payroll_config_table").DataTable();
	$("#payroll_config_table").DataTable({
		"columnDefs": [ 
			{
				"targets": [5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21],
				"orderable": false
			}
		]
	});
</script>
@endsection