@extends('layouts.app')

@section('content')
<div class="row">
	
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-2 mb-2">
		<div class="media-body pb-3 mb-0 lh-125 border-bottom border-gray">
			<div class="d-flex justify-content-between align-items-center w-100">
				<strong class="text-gray-dark"><h3>Pag IBIG Table</h3></strong>
			</div>
		</div>
	</div>

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="row">
			
		</div>
	</div>

	<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
		<table id="table_filtered" class="table" style="width: 100%">
			<tr style = "background-color: #1a75ff !important;">
				<td style = "text-align: center; font-size: 30px">Pagibig Contribution Table 2018</td>

			</tr>
		</table>
		<table id="table_filtered" class="table" style="width: 100%">
			<tr style = "background-color: #cce0ff !important; color: black !important">
				<td style = "text-align: center; font-size: 30px">Monthly Compensation</td>
				<td style = "text-align: center; font-size: 20px">Percentage of Monthly Compensation</td>

			</tr>
		</table>

		<table id="table_filtered" class="table" style="width: 100%">
			<tr style = "background-color: #cce0ff !important; color: black !important">
				<td style = "text-align: center; font-size: 20px; width: 50%"></td>

				<td style = "text-align: center; font-size: 20px">Employee Share</td>
				<td style = "text-align: center; font-size: 20px">Employer Share</td>

			</tr>
		</table>

		<table id="table_filtered" class="table" style="width: 100%">
			<tr style = "background-color: #ffe6e6 !important; color: black !important">
				<td style = "font-size: 20px; width: 50%"> P1,500 and below</td>

				<td style = "text-align: center; font-size: 20px">1%</td>
				<td style = "text-align: center; font-size: 20px">2%</td>

			</tr>
		</table>

		<table id="table_filtered" class="table" style="width: 100%">
			<tr style = "background-color: #ffe6e6 !important; color: black !important">
				<td style = "font-size: 20px; width: 50%"> Over P1,500 </td>

				<td style = "text-align: center; font-size: 20px">2%</td>
				<td style = "text-align: center; font-size: 20px">2%</td>

			</tr>
		</table>
	</div>

</div>

@endsection