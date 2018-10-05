@extends('layouts.app')

@section('content')
<div class="row">
	
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-2 mb-2">
		<div class="media-body pb-3 mb-0 lh-125 border-bottom border-gray">
			<div class="d-flex justify-content-between align-items-center w-100">
				<strong class="text-gray-dark"><h3>BIR Tax Table</h3></strong>
			</div>
		</div>
	</div>

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="row">
			
		</div>
	</div>

	<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
		<div class="row">

		</div>
	</div>

	<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">

		<div class="col-lg-12 col-md-12 col-xs-12 text-center mt-4 mb-4">
			<h4 style="margin-bottom: -2px;">REVISED WITHHOLDING TAX TABLE (version 2)</h4>
			<h6 style="margin-bottom: -2px;">Effective January 1, 2018 to December 21, 2022</h6>
		</div>

		<table id="table_filtered" class="table-stripped table" style="width: 100%">
			<tr style = "background-color: #ffe066 !important; color: black !important">
				<td class = "t-border" style = "text-align: center; font-size: 20px; width: 10% !important; border-right: 1px solid black !important">DAILY</td>
				<td class = "t-border" style = "text-align: center; font-size: 20px; width: 10% !important; border-right: 1px solid black !important">1</td>
				<td class = "t-border" style = "text-align: center; font-size: 20px; width: 10% !important; border-right: 1px solid black !important">2</td>
				<td class = "t-border" style = "text-align: center; font-size: 20px; width: 10% !important; border-right: 1px solid black !important">3</td>
				<td class = "t-border" style = "text-align: center; font-size: 20px; width: 10% !important; border-right: 1px solid black !important">4</td>
				<td class = "t-border" style = "text-align: center; font-size: 20px; width: 10% !important; border-right: 1px solid black !important">5</td>
				<td class = "t-border" style = "text-align: center; font-size: 20px; width: 10% !important; border-right: 1px solid black !important">6</td>
			</tr>
			<tr>
				<td style = "border-right: 1px solid black !important">Compensation Range</td>
				<td style = "text-align: center; border-right: 1px solid black !important"" >P685 and below</td>
				<td style = "text-align: center; border-right: 1px solid black !important"" >P685 - P1,095</td>
				<td style = "text-align: center; border-right: 1px solid black !important"" >P1,096 - P2,191</td>
				<td style = "text-align: center; border-right: 1px solid black !important"" >P2,192 - P5,478</td>
				<td style = "text-align: center; border-right: 1px solid black !important"" >P5,479 - P21,917</td>
				<td style = "text-align: center; border-right: 1px solid black !important"" >P21,918 and above</td>
			</tr>
			<tr>
				<td style = "border-right: 1px solid black !important">Prescribed Witholding Tax</td>
				<td style = "text-align: center; border-right: 1px solid black !important"" >0.00</td>
				<td style = "text-align: center; border-right: 1px solid black !important"" >0.00 <br> + 20% over P685</td>
				<td style = "text-align: center; border-right: 1px solid black !important"" >P82.19<br> + 25% over P1,096</td>
				<td style = "text-align: center; border-right: 1px solid black !important"" >P356.16<br> + 30% over P2,192</td>
				<td style = "text-align: center; border-right: 1px solid black !important"" >P1,342.47<br> + 32% over P5,479</td>
				<td style = "text-align: center; border-right: 1px solid black !important"" >P6,602.74<br> + 35% over P21,918</td>
			</tr>
		</table>

		<table id="table_filtered" class="table-stripped table" style="width: 100%">
			<tr style = "background-color: #ffe066 !important; color: black !important">
				<td class = "t-border" style = "text-align: center; font-size: 20px; width: 10% !important; border-right: 1px solid black !important">WEEKLY</td>
				<td class = "t-border" style = "text-align: center; font-size: 20px; width: 10% !important; border-right: 1px solid black !important">1</td>
				<td class = "t-border" style = "text-align: center; font-size: 20px; width: 10% !important; border-right: 1px solid black !important">2</td>
				<td class = "t-border" style = "text-align: center; font-size: 20px; width: 10% !important; border-right: 1px solid black !important">3</td>
				<td class = "t-border" style = "text-align: center; font-size: 20px; width: 10% !important; border-right: 1px solid black !important">4</td>
				<td class = "t-border" style = "text-align: center; font-size: 20px; width: 10% !important; border-right: 1px solid black !important">5</td>
				<td class = "t-border" style = "text-align: center; font-size: 20px; width: 10% !important; border-right: 1px solid black !important">6</td>
			</tr>
			<tr>
				<td style = "border-right: 1px solid black !important">Compensation Range</td>
				<td style = "text-align: center; border-right: 1px solid black !important" >P4.808 and below</td>
				<td style = "text-align: center; border-right: 1px solid black !important" >P4.808 - P7,691</td>
				<td style = "text-align: center; border-right: 1px solid black !important" >P7,692 - P15,384</td>
				<td style = "text-align: center; border-right: 1px solid black !important" >P15,385 - P38,461</td>
				<td style = "text-align: center; border-right: 1px solid black !important" >P38,162 - P153,845</td>
				<td style = "text-align: center; border-right: 1px solid black !important" >P153,846 and above</td>
			</tr>
			<tr>
				<td style = "border-right: 1px solid black !important">Prescribed Witholding Tax</td>
				<td style = "text-align: center; border-right: 1px solid black !important" >0.00</td>
				<td style = "text-align: center; border-right: 1px solid black !important" >0.00 <br> + 20% over P4.808</td>
				<td style = "text-align: center; border-right: 1px solid black !important" >P576.92<br> + 25% over P7,692</td>
				<td style = "text-align: center; border-right: 1px solid black !important" >P2,500.00<br> + 30% over P15,385</td>
				<td style = "text-align: center; border-right: 1px solid black !important" >P9,423.00<br> + 32% over P38,162</td>
				<td style = "text-align: center; border-right: 1px solid black !important" >P46,346.15<br> + 35% over P153,846</td>
			</tr>
		</table>

		<table id="table_filtered" class="table-stripped table" style="width: 100%">
			<tr style = "background-color: #ffe066 !important; color: black !important">
				<td class = "t-border" style = "text-align: center; font-size: 20px; width: 10% !important; border-right: 1px solid black !important">SEMI-MONTHLY</td>
				<td class = "t-border" style = "text-align: center; font-size: 20px; width: 10% !important; border-right: 1px solid black !important">1</td>
				<td class = "t-border" style = "text-align: center; font-size: 20px; width: 10% !important; border-right: 1px solid black !important">2</td>
				<td class = "t-border" style = "text-align: center; font-size: 20px; width: 10% !important; border-right: 1px solid black !important">3</td>
				<td class = "t-border" style = "text-align: center; font-size: 20px; width: 10% !important; border-right: 1px solid black !important">4</td>
				<td class = "t-border" style = "text-align: center; font-size: 20px; width: 10% !important; border-right: 1px solid black !important">5</td>
				<td class = "t-border" style = "text-align: center; font-size: 20px; width: 10% !important; border-right: 1px solid black !important">6</td>
			</tr>
			<tr>
				<td style = "border-right: 1px solid black !important">Compensation Range</td>
				<td style = "text-align: center; border-right: 1px solid black !important" >P10,417 and below</td>
				<td style = "text-align: center; border-right: 1px solid black !important" >P10,417 - P16,666</td>
				<td style = "text-align: center; border-right: 1px solid black !important" >P16,667- P33,332</td>
				<td style = "text-align: center; border-right: 1px solid black !important" >P33,333 - P83,332</td>
				<td style = "text-align: center; border-right: 1px solid black !important" >P83,333 - P333,332</td>
				<td style = "text-align: center; border-right: 1px solid black !important">P333,333 and above</td>
			</tr>
			<tr>
				<td style = "border-right: 1px solid black !important">Prescribed Witholding Tax</td>
				<td style = "text-align: center; border-right: 1px solid black !important" >0.00</td>
				<td style = "text-align: center; border-right: 1px solid black !important" >0.00 <br> + 20% over P10,417</td>
				<td style = "text-align: center; border-right: 1px solid black !important" >P1,250.00<br> + 25% over P16,667</td>
				<td style = "text-align: center; border-right: 1px solid black !important" >P5,416.67<br> + 30% over P33,333</td>
				<td style = "text-align: center; border-right: 1px solid black !important" >P20,416.67<br> + 32% over P83,333</td>
				<td style = "text-align: center; border-right: 1px solid black !important" >P100,416.67<br> + 35% over P333,333</td>
			</tr>
		</table>

		<table id="table_filtered" class="table-stripped table" style="width: 100%">
			<tr style = "background-color: #ffe066 !important; color: black !important">
				<td class = "t-border" style = "text-align: center; font-size: 20px; width: 10% !important; border-right: 1px solid black !important">MONTHLY</td>
				<td class = "t-border" style = "text-align: center; font-size: 20px; width: 10% !important; border-right: 1px solid black !important">1</td>
				<td class = "t-border" style = "text-align: center; font-size: 20px; width: 10% !important; border-right: 1px solid black !important">2</td>
				<td class = "t-border" style = "text-align: center; font-size: 20px; width: 10% !important; border-right: 1px solid black !important">3</td>
				<td class = "t-border" style = "text-align: center; font-size: 20px; width: 10% !important; border-right: 1px solid black !important">4</td>
				<td class = "t-border" style = "text-align: center; font-size: 20px; width: 10% !important; border-right: 1px solid black !important">5</td>
				<td class = "t-border" style = "text-align: center; font-size: 20px; width: 10% !important; border-right: 1px solid black !important">6</td>
			</tr>
			<tr>
				<td style = "border-right: 1px solid black !important">Compensation Range</td>
				<td style = "text-align: center; border-right: 1px solid black !important" >P20,833 and below</td>
				<td style = "text-align: center; border-right: 1px solid black !important" >P20,833 - P33,332</td>
				<td style = "text-align: center; border-right: 1px solid black !important">P33,333- P66,666</td>
				<td style = "text-align: center; border-right: 1px solid black !important">P66,667 - P166,666</td>
				<td style = "text-align: center; border-right: 1px solid black !important">P166,667 - P666,666</td>
				<td style = "text-align: center; border-right: 1px solid black !important" >P666,667 and above</td>
			</tr>
			<tr>
				<td style = "border-right: 1px solid black !important">Prescribed Witholding Tax</td>
				<td style = "text-align: center; border-right: 1px solid black !important">0.00</td>
				<td style = "text-align: center; border-right: 1px solid black !important">0.00 <br> + 20% over P20,833</td>
				<td style = "text-align: center; border-right: 1px solid black !important">P2,500.00<br> + 25% over P33,333</td>
				<td style = "text-align: center; border-right: 1px solid black !important">P10,833.33<br> + 30% over P66,667</td>
				<td style = "text-align: center; border-right: 1px solid black !important">P40,833.33<br> + 32% over P166,667</td>
				<td style = "text-align: center; border-right: 1px solid black !important">P200,833.33<br> + 35% over P666,667</td>
			</tr>
		</table>
	</div>

</div>

@endsection