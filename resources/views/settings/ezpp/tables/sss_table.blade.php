@extends('layouts.app')

@section('content')
<div class="row">
	
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-2 mb-2">
		<div class="media-body pb-3 mb-0 lh-125 border-bottom border-gray">
			<div class="d-flex justify-content-between align-items-center w-100">
				<strong class="text-gray-dark"><h3>SSS Table</h3></strong>
			</div>
		</div>
	</div>

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="row">
			
		</div>
	</div>

	<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
		<table id="table_filtered" style="width: 100%">
			<tr style = "background-color: #1a75ff !important;">
				<td style = "text-align: center; font-size: 30px">Table of Contribution</td>
			</tr>
		</table>

		<table id="table_filtered" style="width: 100%">

			<tr style = "background-color: #ffe066 !important; color: black !important">
				<td class = "t-border" style = "text-align: center; font-size: 20px; width: 20% !important; border-right: 1px solid black !important">RANGE OF COMPENSATION</td>
				<td class = "t-border" style = "text-align: center; font-size: 20px; width: 20% !important; border-right: 1px solid black !important">MONTHLY SALARY CREDIT*</td>
				<td class = "t-border" style = "text-align: center; font-size: 20px; width: 40% !important; border-right: 1px solid black !important" colspan="7">EMPLOYER - EMPLOYEE </td>
				<td class = "t-border" style = "text-align: center; font-size: 20px; width: 20% !important; border-right: 1px solid black !important">SE/VM/OFW</td>
			</tr>

			<tr class="sub-tr" style = "background-color: #ffe066 !important;">
				<td style = "border-right: 1px solid black !important"></td>
				<td style = "border-right: 1px solid black !important"></td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; border-top: 1px solid black !important; border-bottom: 1px solid black !important; width: 20% !important" colspan="3">SOCIAL SECURITY </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; border-top: 1px solid black !important; border-bottom: 1px solid black !important;  width: 20% !important" colspan="1"> EC </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; border-top: 1px solid black !important; border-bottom: 1px solid black !important;  width: 20% !important" colspan="3"> TOTAL CONTRIBUTION </td>
				<td class = "t-border" style = "text-align: center; width: 20% !important; border-right: 1px solid black !important; border-top: 1px solid black !important; border-bottom: 1px solid black !important;  width: 20% !important"> TOTAL CONTRIBUTION </td>
			</tr> 

			<tr class="sub-tr" style = "background-color: #ffe066 !important;">
				<td style = "border-right: 1px solid black !important"></td>
				<td style = "border-right: 1px solid black !important"></td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> ER </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> EE  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> TOTAL </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> ER </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> ER </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> EE  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> TOTAL </td>
				<td style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"></td>
			</tr>

			<tr>
				<td style = "text-align: center; border-right: 1px solid black !important"> 1,000 - 1,249.99 </td>
				<td style = "text-align: center; border-right: 1px solid black !important"> 1,000 </td>
				<td class = "t-border" style = "background-color: #80b3ff !important; text-align: center; border-right: 1px solid black !important; width: 20px !important"> 73.70 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 36.30  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 110.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 10.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 83.70 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 36.30  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 120.00 </td>
				<td style = "background-color: #80b3ff !important; text-align: center; border-right: 1px solid black !important; width: 30px !important"> 110.00 </td>
			</tr>

			<tr>
				<td style = "text-align: center; border-right: 1px solid black !important"> 1,250 - 1,749.99 </td>
				<td style = "text-align: center; border-right: 1px solid black !important"> 1,500 </td>
				<td class = "t-border" style = "background-color: #80b3ff !important; text-align: center; border-right: 1px solid black !important; width: 20px !important"> 110.50 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 54.50  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 165.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 10.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 120.50 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 54.50  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 175.00 </td>
				<td style = "background-color: #80b3ff !important; text-align: center; border-right: 1px solid black !important; width: 30px !important"> 165.00 </td>
			</tr>

			<tr>
				<td style = "text-align: center; border-right: 1px solid black !important"> 1,750 - 2,249.99 </td>
				<td style = "text-align: center; border-right: 1px solid black !important"> 1,200 </td>
				<td class = "t-border" style = "background-color: #80b3ff !important; text-align: center; border-right: 1px solid black !important; width: 20px !important"> 147.30 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 72.70  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 220.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 10.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 157.30 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 72.70  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 230.00 </td>
				<td style = "background-color: #80b3ff !important; text-align: center; border-right: 1px solid black !important; width: 30px !important"> 220.00 </td>
			</tr>

			<tr>
				<td style = "text-align: center; border-right: 1px solid black !important"> 2,250 - 2,749.99 </td>
				<td style = "text-align: center; border-right: 1px solid black !important">2,500 </td>
				<td class = "t-border" style = "background-color: #80b3ff !important; text-align: center; border-right: 1px solid black !important; width: 20px !important"> 184.20 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 90.80  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 275.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 10.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 194.20 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 90.80  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 285.00 </td>
				<td style = "background-color: #80b3ff !important; text-align: center; border-right: 1px solid black !important; width: 30px !important"> 275.00 </td>
			</tr>

			<tr>
				<td style = "text-align: center; border-right: 1px solid black !important"> 2,750 - 3,249.99 </td>
				<td style = "text-align: center; border-right: 1px solid black !important">3,000 </td>
				<td class = "t-border" style = "background-color: #80b3ff !important; text-align: center; border-right: 1px solid black !important; width: 20px !important"> 221.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 109.00  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 330.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 10.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 231.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 109.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 340.00 </td>
				<td style = "background-color: #80b3ff !important; text-align: center; border-right: 1px solid black !important; width: 30px !important"> 330.00 </td>
			</tr>

			<tr>
				<td style = "text-align: center; border-right: 1px solid black !important"> 3,250 - 3,749.99 </td>
				<td style = "text-align: center; border-right: 1px solid black !important">3,500 </td>
				<td class = "t-border" style = "background-color: #80b3ff !important; text-align: center; border-right: 1px solid black !important; width: 20px !important"> 257.80 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important">127.20  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 385.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 10.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 267.80 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 127.20  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 395.00 </td>
				<td style = "background-color: #80b3ff !important; text-align: center; border-right: 1px solid black !important; width: 30px !important"> 385.00 </td>
			</tr>

			<tr>
				<td style = "text-align: center; border-right: 1px solid black !important"> 3,750 - 4,249.99 </td>
				<td style = "text-align: center; border-right: 1px solid black !important">4,000 </td>
				<td class = "t-border" style = "background-color: #80b3ff !important; text-align: center; border-right: 1px solid black !important; width: 20px !important"> 294.70 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important">145.30  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 440.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 10.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 304.70 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 145.30  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 450.00 </td>
				<td style = "background-color: #80b3ff !important; text-align: center; border-right: 1px solid black !important; width: 30px !important"> 440.00 </td>
			</tr>

			<tr>
				<td style = "text-align: center; border-right: 1px solid black !important"> 4,250 - 4,749.99 </td>
				<td style = "text-align: center; border-right: 1px solid black !important">4,500 </td>
				<td class = "t-border" style = "background-color: #80b3ff !important; text-align: center; border-right: 1px solid black !important; width: 20px !important"> 331.50 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important">163.50  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 495.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 10.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 341.70 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 163.30  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 505.00 </td>
				<td style = "background-color: #80b3ff !important; text-align: center; border-right: 1px solid black !important; width: 30px !important"> 495.00 </td>
			</tr>

			<tr>
				<td style = "text-align: center; border-right: 1px solid black !important"> 4,750 - 5,249.99 </td>
				<td style = "background-color: #ffe066 !important; text-align: center; border-right: 1px solid black !important">5,000 </td>
				<td class = "t-border" style = "background-color: #80b3ff !important; text-align: center; border-right: 1px solid black !important; width: 20px !important"> 368.30 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important">181.70  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 550.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 10.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 378.30 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 181.30  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 560.00 </td>
				<td style = "background-color: #ffe066 !important; text-align: center; border-right: 1px solid black !important; width: 30px !important"> 550.00 </td>
			</tr>

			<tr>
				<td style = "text-align: center; border-right: 1px solid black !important"> 5,250 - 5,749.99 </td>
				<td style = "background-color: #ffe066 !important; text-align: center; border-right: 1px solid black !important">5,500 </td>
				<td class = "t-border" style = "background-color: #80b3ff !important; text-align: center; border-right: 1px solid black !important; width: 20px !important"> 405.20 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important">199.80  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 605.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 10.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 415.20 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 199.80  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 615.00 </td>
				<td style = "background-color: #ffe066 !important; text-align: center; border-right: 1px solid black !important; width: 30px !important"> 605.00 </td>
			</tr>

			<tr>
				<td style = "text-align: center; border-right: 1px solid black !important"> 5,750 - 6,249.99 </td>
				<td style = "background-color: #ffe066 !important; text-align: center; border-right: 1px solid black !important">6,000 </td>
				<td class = "t-border" style = "background-color: #80b3ff !important; text-align: center; border-right: 1px solid black !important; width: 20px !important"> 442.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important">218.00  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 660.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 10.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 452.20 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 218.80  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 670.00 </td>
				<td style = "background-color: #ffe066 !important; text-align: center; border-right: 1px solid black !important; width: 30px !important"> 660.00 </td>
			</tr>

			<tr>
				<td style = "text-align: center; border-right: 1px solid black !important"> 6,250 - 6,749.99 </td>
				<td style = "background-color: #ffe066 !important; text-align: center; border-right: 1px solid black !important">6,500 </td>
				<td class = "t-border" style = "background-color: #80b3ff !important; text-align: center; border-right: 1px solid black !important; width: 20px !important"> 478.80 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important">236.20  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 715.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 10.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 488.80 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 236.20  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 725.00 </td>
				<td style = "background-color: #ffe066 !important; text-align: center; border-right: 1px solid black !important; width: 30px !important"> 715.00 </td>
			</tr>

			<tr>
				<td style = "text-align: center; border-right: 1px solid black !important"> 6,750 - 7,249.99 </td>
				<td style = "background-color: #ffe066 !important; text-align: center; border-right: 1px solid black !important">7,000 </td>
				<td class = "t-border" style = "background-color: #80b3ff !important; text-align: center; border-right: 1px solid black !important; width: 20px !important"> 515.70 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important">254.30  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 770.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 10.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 525.70 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 254.30  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 780.00 </td>
				<td style = "background-color: #ffe066 !important; text-align: center; border-right: 1px solid black !important; width: 30px !important"> 770.00 </td>
			</tr>

			<tr>
				<td style = "text-align: center; border-right: 1px solid black !important"> 7,250 - 7,749.99 </td>
				<td style = "background-color: #ffe066 !important; text-align: center; border-right: 1px solid black !important">7,500 </td>
				<td class = "t-border" style = "background-color: #80b3ff !important; text-align: center; border-right: 1px solid black !important; width: 20px !important"> 552.50 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important">272.50  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 825.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 10.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 562.50 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 272.50  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 835.00 </td>
				<td style = "background-color: #ffe066 !important; text-align: center; border-right: 1px solid black !important; width: 30px !important"> 825.00 </td>
			</tr>

			<tr>
				<td style = "text-align: center; border-right: 1px solid black !important"> 7,750 - 8,249.99 </td>
				<td style = "background-color: #ffe066 !important; text-align: center; border-right: 1px solid black !important">8,000 </td>
				<td class = "t-border" style = "background-color: #80b3ff !important; text-align: center; border-right: 1px solid black !important; width: 20px !important"> 589.30 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important">290.70  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 880.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 10.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 599.30 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 290.70  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 890.00 </td>
				<td style = "background-color: #ffe066 !important; text-align: center; border-right: 1px solid black !important; width: 30px !important"> 880.00 </td>
			</tr>

			<tr>
				<td style = "text-align: center; border-right: 1px solid black !important"> 8,250 - 8,749.99 </td>
				<td style = "background-color: #ffe066 !important; text-align: center; border-right: 1px solid black !important">8,500 </td>
				<td class = "t-border" style = "background-color: #80b3ff !important; text-align: center; border-right: 1px solid black !important; width: 20px !important"> 626.20 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important">308.80  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 935.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 10.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 636.20 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 308.80  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 945.00 </td>
				<td style = "background-color: #ffe066 !important; text-align: center; border-right: 1px solid black !important; width: 30px !important"> 935.00 </td>
			</tr>

			<tr>
				<td style = "text-align: center; border-right: 1px solid black !important"> 8,750 - 9,249.99 </td>
				<td style = "background-color: #ffe066 !important; text-align: center; border-right: 1px solid black !important">9,000 </td>
				<td class = "t-border" style = "background-color: #80b3ff !important; text-align: center; border-right: 1px solid black !important; width: 20px !important"> 663.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important">327.00  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 990.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 10.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 673.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 327.00  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 1000.00 </td>
				<td style = "background-color: #ffe066 !important; text-align: center; border-right: 1px solid black !important; width: 30px !important"> 990.00 </td>
			</tr>

			<tr>
				<td style = "text-align: center; border-right: 1px solid black !important"> 9,250 - 9,749.99 </td>
				<td style = "background-color: #ffe066 !important; text-align: center; border-right: 1px solid black !important">9,500 </td>
				<td class = "t-border" style = "background-color: #80b3ff !important; text-align: center; border-right: 1px solid black !important; width: 20px !important"> 699.80 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important">345.20  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 1045.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 10.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 709.80 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 345.80  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 1055.00 </td>
				<td style = "background-color: #ffe066 !important; text-align: center; border-right: 1px solid black !important; width: 30px !important"> 1045.00 </td>
			</tr>

			<tr>
				<td style = "text-align: center; border-right: 1px solid black !important"> 9,750 - 10,249.99 </td>
				<td style = "background-color: #ffe066 !important; text-align: center; border-right: 1px solid black !important">10,000 </td>
				<td class = "t-border" style = "background-color: #80b3ff !important; text-align: center; border-right: 1px solid black !important; width: 20px !important"> 376.70 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important">63.30  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 1100.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 10.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 746.70 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 363.30  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 1110.00 </td>
				<td style = "background-color: #ffe066 !important; text-align: center; border-right: 1px solid black !important; width: 30px !important"> 1100.00 </td>
			</tr>

			<tr>
				<td style = "text-align: center; border-right: 1px solid black !important"> 10,250 - 10,749.99 </td>
				<td style = "background-color: #ffe066 !important; text-align: center; border-right: 1px solid black !important">10,500 </td>
				<td class = "t-border" style = "background-color: #80b3ff !important; text-align: center; border-right: 1px solid black !important; width: 20px !important"> 773.50 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important">381.50  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 1155.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 10.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 783.50 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 381.50  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 1165.00 </td>
				<td style = "background-color: #ffe066 !important; text-align: center; border-right: 1px solid black !important; width: 30px !important"> 1155.00 </td>
			</tr>

			<tr>
				<td style = "text-align: center; border-right: 1px solid black !important"> 10,750 - 11,249.99 </td>
				<td style = "background-color: #ffe066 !important; text-align: center; border-right: 1px solid black !important">11,000 </td>
				<td class = "t-border" style = "background-color: #80b3ff !important; text-align: center; border-right: 1px solid black !important; width: 20px !important"> 810.30 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important">399.70  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 1210.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 10.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 820.30 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 399.70  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 1220.00 </td>
				<td style = "background-color: #ffe066 !important; text-align: center; border-right: 1px solid black !important; width: 30px !important"> 1210.00 </td>
			</tr>

			<tr>
				<td style = "text-align: center; border-right: 1px solid black !important"> 11,250 - 11,249.99 </td>
				<td style = "background-color: #ffe066 !important; text-align: center; border-right: 1px solid black !important">11,500 </td>
				<td class = "t-border" style = "background-color: #80b3ff !important; text-align: center; border-right: 1px solid black !important; width: 20px !important"> 847.20 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important">417.80  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 1265.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 10.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 857.20 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 417.80  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 1275.00 </td>
				<td style = "background-color: #ffe066 !important; text-align: center; border-right: 1px solid black !important; width: 30px !important"> 1265.00 </td>
			</tr>

			<tr>
				<td style = "text-align: center; border-right: 1px solid black !important"> 11,750 - 12,249.99 </td>
				<td style = "background-color: #ffe066 !important; text-align: center; border-right: 1px solid black !important">12,000 </td>
				<td class = "t-border" style = "background-color: #80b3ff !important; text-align: center; border-right: 1px solid black !important; width: 20px !important"> 884.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important">436.00  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 1320.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 10.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 894.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 436.00  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 1330.00 </td>
				<td style = "background-color: #ffe066 !important; text-align: center; border-right: 1px solid black !important; width: 30px !important"> 1320.00 </td>
			</tr>

			<tr>
				<td style = "text-align: center; border-right: 1px solid black !important"> 12,250 - 13,249.99 </td>
				<td style = "background-color: #ffe066 !important; text-align: center; border-right: 1px solid black !important">12,500 </td>
				<td class = "t-border" style = "background-color: #80b3ff !important; text-align: center; border-right: 1px solid black !important; width: 20px !important"> 920.80 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important">454.20  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 1375.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 10.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 930.80 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 454.20  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 1385.00 </td>
				<td style = "background-color: #ffe066 !important; text-align: center; border-right: 1px solid black !important; width: 30px !important"> 1375.00 </td>
			</tr>

			<tr>
				<td style = "text-align: center; border-right: 1px solid black !important"> 12,750 - 13,749.99 </td>
				<td style = "background-color: #ffe066 !important; text-align: center; border-right: 1px solid black !important">13,000 </td>
				<td class = "t-border" style = "background-color: #80b3ff !important; text-align: center; border-right: 1px solid black !important; width: 20px !important"> 957.70 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important">472.30  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 1430.30 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 10.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 967.70 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 472.30  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 1440.00 </td>
				<td style = "background-color: #ffe066 !important; text-align: center; border-right: 1px solid black !important; width: 30px !important"> 1430.00 </td>
			</tr>

			<tr>
				<td style = "text-align: center; border-right: 1px solid black !important"> 13,250 - 14,249.99 </td>
				<td style = "background-color: #ffe066 !important; text-align: center; border-right: 1px solid black !important">13,500 </td>
				<td class = "t-border" style = "background-color: #80b3ff !important; text-align: center; border-right: 1px solid black !important; width: 20px !important"> 994.50 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important">490.50  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 1485.30 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 10.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 1004.50 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 490.30  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 1495.00 </td>
				<td style = "background-color: #ffe066 !important; text-align: center; border-right: 1px solid black !important; width: 30px !important"> 1485.00 </td>
			</tr>

			<tr>
				<td style = "text-align: center; border-right: 1px solid black !important"> 13,750 - 14,749.99 </td>
				<td style = "background-color: #ffe066 !important; text-align: center; border-right: 1px solid black !important">14,000 </td>
				<td class = "t-border" style = "background-color: #80b3ff !important; text-align: center; border-right: 1px solid black !important; width: 20px !important"> 1,031.30</td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important">508.70  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 1540.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 10.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 1041.30 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 508.70  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 1550.00 </td>
				<td style = "background-color: #ffe066 !important; text-align: center; border-right: 1px solid black !important; width: 30px !important"> 1540.00 </td>
			</tr>


			<tr>
				<td style = "text-align: center; border-right: 1px solid black !important"> 14,250 - 15,249.99 </td>
				<td style = "background-color: #ffe066 !important; text-align: center; border-right: 1px solid black !important">14,500 </td>
				<td class = "t-border" style = "background-color: #80b3ff !important; text-align: center; border-right: 1px solid black !important; width: 20px !important"> 1,068.30</td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important">526.80  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 1595.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 10.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 1078.20 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 526.80  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 1605.00 </td>
				<td style = "background-color: #ffe066 !important; text-align: center; border-right: 1px solid black !important; width: 30px !important"> 1595.00 </td>
			</tr>

			<tr>
				<td style = "text-align: center; border-right: 1px solid black !important"> 14,750 - 15,749.99 </td>
				<td style = "background-color: #ffe066 !important; text-align: center; border-right: 1px solid black !important">15,000 </td>
				<td class = "t-border" style = "background-color: #80b3ff !important; text-align: center; border-right: 1px solid black !important; width: 20px !important"> 1,105.00</td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important">545.00  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 1650.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 30.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 1035.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 545.00  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 1680.00 </td>
				<td style = "background-color: #ffe066 !important; text-align: center; border-right: 1px solid black !important; width: 30px !important"> 1650.00 </td>
			</tr>

			<tr>
				<td style = "text-align: center; border-right: 1px solid black !important"> 15,250 - 16,249.99 </td>
				<td style = "background-color: #ffe066 !important; text-align: center; border-right: 1px solid black !important">15,500 </td>
				<td class = "t-border" style = "background-color: #80b3ff !important; text-align: center; border-right: 1px solid black !important; width: 20px !important"> 1,141.80</td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important">563.20  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 1705.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 30.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 1717.80 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 563.20  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 1735.00 </td>
				<td style = "background-color: #ffe066 !important; text-align: center; border-right: 1px solid black !important; width: 30px !important"> 1705.00 </td>
			</tr>

			<tr>
				<td style = "text-align: center; border-right: 1px solid black !important"> 15,750 - 16,749.99 </td>
				<td style = "background-color: #ffe066 !important; text-align: center; border-right: 1px solid black !important">16,000 </td>
				<td class = "t-border" style = "background-color: #80b3ff !important; text-align: center; border-right: 1px solid black !important; width: 20px !important"> 1,178.70</td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important">581.30  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 1760.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 30.00 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 1208.70 </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 20px !important"> 581.30  </td>
				<td class = "t-border" style = "text-align: center; border-right: 1px solid black !important; width: 30px !important"> 1790.00 </td>
				<td style = "background-color: #ffe066 !important; text-align: center; border-right: 1px solid black !important; width: 30px !important"> 1760.00 </td>
			</tr>







		</table>
	</div>

</div>

@endsection