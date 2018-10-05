@extends('layouts.app')

@section('content')
<div class="row">
	
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-2 mb-2">
		<div class="media-body pb-3 mb-0 lh-125 border-bottom border-gray">
			<div class="d-flex justify-content-between align-items-center w-100">
				<strong class="text-gray-dark"><h3>PhilHealth Table</h3></strong>
			</div>
		</div>
	</div>

	<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
		<table id="table_filtered" class="table" style="width: 100%">
			<tr style = "background-color: #1a75ff !important;">
				<td style = "text-align: center; font-size: 30px">Revised Premium Contribution</td>

			</tr>
		</table>

		<table id="table_filtered" class="table" style="width: 100%">

			<tr style = "background-color: #cce0ff !important; color: black !important">
				<td style = "text-align: center; font-size: 20px">Monthly Basic Salary</td>
				<td style = "text-align: center; font-size: 20px">Monthly Premium</td>
				<td style = "text-align: center; font-size: 20px">Personal Share</td>
				<td style = "text-align: center; font-size: 20px">Employer Sharey</td>

			</tr>
			<tr>
				<td style = "text-align: center; font-size: 20px">P10,000.00 and below</td>
				<td style = "text-align: center; font-size: 20px">P275.00</td>
				<td style = "text-align: center; font-size: 20px">P137.50</td>
				<td style = "text-align: center; font-size: 20px">P137.50</td>

			</tr>
			<tr>
				<td style = "text-align: center; font-size: 20px">P10,000.00 <br> to <br> P39,999.99 </td>
				<td style = "text-align: center; font-size: 20px">P275.02 <br> to <br> P1,099.99</td>
				<td style = "text-align: center; font-size: 20px">P137.51 <br> to <br> P549.99</td>
				<td style = "text-align: center; font-size: 20px">P137.51 <br> to <br> P549.99</td>

			</tr>
			<tr>
				<td style = "text-align: center; font-size: 20px">P40,000.00 and above </td>
				<td style = "text-align: center; font-size: 20px">P1,100.00</td>
				<td style = "text-align: center; font-size: 20px">P550.00</td>
				<td style = "text-align: center; font-size: 20px">P550.00</td>

			</tr>

		</table>
	</div>

</div>

@endsection