@extends('layouts.app')

@section('content')
<div class="row">
	
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-2 mb-2">
		<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
			<h3 class="text-gray-dark">Employee Information</h3>
			<div class="btn-toolbar mb-2 mb-md-0">
				<div class="btn-group mr-2">
					<button class="btn btn-primary" data-toggle="modal" data-target="#m_create"><i class="fa fa-plus"></i> Add Employee</button>
				</div>
			</div>
		</div>
	</div>

	<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 mt-2 mb-2">
		<table id="employee_table" class="table" style="width: 100%">
			<thead>
				<tr>
					<th>Employee ID</th>
					<th>Name</th>
					<th>Position</th>
					<th>Profit Center</th>
					<th>Branch</th>
					<th>Department</th>
					<th>Batch</th>
					<th>Actions</th>
				</tr>
			</thead>
		</table>

		<button class="btn btn-primary" data-toggle="modal" data-target="#m_view"><i class="fa fa-eye"></i></button>
	</div>

</div>

<!-- Create Employee Information Modal -->
<div class="modal fade" id="m_create" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-full" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<h5 class="modal-title">Add Employee Information</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">
				<div class="row">
					<div class="col-lg-3 col-xs-3">
						<div class="form-group">
							<label class="font-weight-bold">Employee ID</label>
							<input type="text" class="form-control-sm form-control" name="employee_id">
						</div>
					</div>

					<div class="col-lg-3 col-xs-3">
						<div class="form-group">
							<label class="font-weight-bold">Batch</label>
							<select class="select2" name="batch" id="batch" style="width: 100%"></select>
						</div>
					</div>

					<div class="col-lg-3 col-xs-3">
						<div class="form-group">
							<label class="font-weight-bold">Upload an Image</label>
							<input type="file" class="form-control-file" name="image">
						</div>
					</div>

					<div class="col-lg-3 col-xs-3">
						<div class="form-group">
							<img src="#" style="height: 100%; width: 100%" id="employee_picture">
						</div>
					</div>

					<div class="col-lg-12 col-xs-12">
						<h6 class="">Basic Information</h6><hr style="margin-top: -3px;">

						<div class="row">
							<div class="col-md-3 col-xs-3">
								<div class="form-group">
									<input type="text" class="form-control-sm form-control" name="lname" id="lname"  placeholder="Last Name">
								</div>
							</div>

							<div class="col-md-3 col-xs-3">
								<div class="form-group">
									<input type="text" class="form-control-sm form-control" name="fname" id="fname" placeholder="First Name">
								</div>
							</div>

							<div class="col-md-3 col-xs-3">
								<div class="form-group">
									<input type="text" class="form-control-sm form-control" name="mname" id="mname" placeholder="Middle Name">
								</div>
							</div>

							<div class="col-md-3 col-xs-3">
								<div class="form-group">
									<input type="text" class="form-control-sm form-control" name="suffix" id="suffix" placeholder="Suffix">
								</div>
							</div>
						</div>

						<div class="row">

							<div class="col-md-2 col-xs-2">
								<div class="form-group">
									<label class="font-weight-bold">Birthday</label>
									<input type="date" class="form-control form-control-sm" name="birthdate"  id="birthdate" placeholder="Birthday">
								</div>
							</div>

							<div class="col-md-1 col-xs-1">
								<div class="form-group">
									<label class="font-weight-bold">Age</label>
									<input type="text" class="form-control form-control-sm" name="age"  id="age" placeholder="" disabled>
								</div>
							</div>

							<div class="col-md-3 col-xs-3">
								<div class="form-group">
									<label class="font-weight-bold">Zodiac Sign</label>
									<input type="text" class="form-control form-control-sm" name="zodiac"  id="zodiac" placeholder="Zodiac Sign">
								</div>
							</div>

							<div class="col-md-3 col-xs-3">
								<div class="form-group">
									<label class="font-weight-bold">Civil Status</label>
									<select class="form-control form-control-sm" name="civil_status" id="civil_status">
										<option value="Single">Single</option>
										<option value="Married">Married</option>
										<option value="Divorced">Divorced</option>
										<option value="Seperated">Seperated</option>
										<option value="Widowed">Widowed</option>
									</select>
								</div>
							</div>

							<div class="col-md-2 col-xs-2">
								<div class="form-group">
									<label class="font-weight-bold">Gender</label>
									<br>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="gender" id="gender" value="Male">
										<label class="font-weight-bold" class="form-check-label" for="male">Male</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="gender" id="gender" value="Female">
										<label class="font-weight-bold" class="form-check-label" for="female">Female</label>
									</div>
								</div>
							</div>
						</div>

						<div class="row mt-2 mb-2">
							<div class="col-lg-12 col-xs-12">

								<nav>
									<div class="nav nav-tabs" id="nav-tab" role="tablist">
										<a class="nav-item nav-link active" id="nav-emp_info-tab" data-toggle="tab" href="#nav-emp_info" role="tab" aria-controls="nav-emp_info" aria-selected="true">Employee Information</a>
										<a class="nav-item nav-link" id="nav-personal_info-tab" data-toggle="tab" href="#nav-personal_info" role="tab" aria-controls="nav-personal_info" aria-selected="false">Personal Information</a>
										<a class="nav-item nav-link" id="nav-salary_info-tab" data-toggle="tab" href="#nav-salary_info" role="tab" aria-controls="nav-salary_info" aria-selected="false">Salary Information</a>
									</div>
								</nav>
								<div class="tab-content" id="nav-tabContent">
									<div class="tab-pane fade show active border" id="nav-emp_info" role="tabpanel">
										<div class="col-lg-12 col-xs-12 mt-3 mb-3">
											<div class="row">

												<div class="col-md-3 col-xs-3">
													<div class="form-group">
														<label class="font-weight-bold">Branch</label>
														<select class="select2" name="branch" id="branch"  style="width: 100%">
															@foreach($branch as $branches)
															<option value = "{{$branches->id}}">{{$branches->name}}</option>
															@endforeach
														</select>
													</div>
												</div>

												<div class="col-md-3 col-xs-3">
													<div class="form-group">
														<label class="font-weight-bold">Department</label>
														<select class="select2" name="department" id="department" style="width: 100%">
															@foreach($departments as $dept)
															<option value = "{{$dept->id}}">{{$dept->name}}</option>
															@endforeach
														</select>
													</div>
												</div>

												<div class="col-md-3 col-xs-3">
													<div class="form-group">
														<label class="font-weight-bold">Position</label>
														<select class="select2" name="position" id="position" style="width: 100%"></select>
													</div>
												</div>

												<div class="col-md-3 col-xs-3">
													<div class="form-group">
														<label class="font-weight-bold">Date Hired</label>
														<input type="date" class="form-control-sm form-control" name="date_hired"  id="date_hired">
													</div>
												</div>
												<div class="col-md-3 col-xs-3">
													<div class="form-group">
														<label class="font-weight-bold">Profit Center (Primary)</label>
														<select class="select2" name="profit_center_primary" id="profit_center_primary" style="width: 100%">
															
														</select>
													</div>
												</div>

												<div class="col-md-3 col-xs-3">
													<div class="form-group">
														<label class="font-weight-bold">Profit Center (Secondary)</label>
														<select class="select2" name="profit_center_secondary" id="profit_center_secondary" style="width: 100%">
															
														</select>
													</div>
												</div>
												<div class="col-md-3 col-xs-3">
													<div class="form-group">
														<label class="font-weight-bold">Employee Status</label>
														<select class="select2" name="employee_status" id="employee_status" style="width: 100%">
															@foreach($departments as $dept)
															<option value = "{{$dept->id}}">{{$dept->name}}</option>
															@endforeach
														</select>
													</div>
												</div>

												<div class="col-md-3 col-xs-3">
													<div class="form-group">
														<label class="font-weight-bold">Employment Status</label>
														<select class="select2" name="employment_status"  id="employment_status" style="width: 100%">
															<option value="Active">Active</option>
															<option value="Inactive">Inactive</option>
															<option value="Seperated">Seperated</option>
														</select>
													</div>
												</div>

												<div class="col-md-3 col-xs-3">
													<div class="form-group">
														<label class="font-weight-bold">Leave Credits</label>
														<input type="number" class="form-control" name="leave_credits"  id="leave_credits">
													</div>
												</div>

												<div class="col-md-3 col-xs-3">
												</div>

												<div class="col-lg-12">
													<hr style="margin-top: -3px;">
												</div>

												<div class="col-lg-12">
													<h6>Government Mandatory IDs</h6>
												</div>

												<div class="col-md-3 col-xs-3">
													<div class="form-group">
														<label class="font-weight-bold">Tax Identification Number</label>
														<input type="text" class="form-control form-control-sm" name="tin" id="tin">
													</div>
												</div>

												<div class="col-md-3 col-xs-3">
													<div class="form-group">
														<label class="font-weight-bold">Social Security System Number</label>
														<input type="text" class="form-control form-control-sm" name="sss" id="sss">
													</div>
												</div>

												<div class="col-md-3 col-xs-3">
													<div class="form-group">
														<label class="font-weight-bold">PhilHealth Number</label>
														<input type="text" class="form-control form-control-sm" name="philhealth" id="philhealth">
													</div>
												</div>

												<div class="col-md-3 col-xs-3">
													<div class="form-group">
														<label class="font-weight-bold">PagIBIG Number</label>
														<input type="text" class="form-control form-control-sm" name="pagibig" id="pagibig">
													</div>
												</div>

												<div class="col-lg-12">
													<hr style="margin-top: -3px;">
												</div>

												<div class="col-md-12 col-xs-12">
													<div class="form-group">
														<label class="font-weight-bold">Reason for Leaving</label>
														<textarea class="form-control" name="reason_for_leaving"  id="reason_for_leaving""></textarea>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="tab-pane fade border" id="nav-personal_info" role="tabpanel">
										<div class="col-lg-12 col-xs-12 mt-3 mb-3">
											<div class="row">

												<div class="col-lg-12">
													<h6>Address</h6>
												</div>

												<div class="col-md-6 col-xs-6">
													<label class="font-weight-bold">Present Address</label>
													<textarea class="form-control form-control-sm" name="present_address" id="present_address"></textarea>
												</div>

												<div class="col-md-6 col-xs-6">
													<label class="font-weight-bold">Permanent Address</label>
													<textarea class="form-control form-control-sm" name="permanent_address" id="permanent_address"></textarea>
												</div>

											</div>

											<div class="row">

												<div class="col-md-3 col-xs-3">
													<label class="font-weight-bold">Province</label>
													<select class="select2" name="province" id = "province" style="width: 100%"></select>
												</div>

												<div class="col-md-3 col-xs-3">
													<label class="font-weight-bold">City</label>
													<select class="select2" name="city" id="city" style="width: 100%"></select>
												</div>


											</div>

											<div class="row">

												<div class="col-lg-12">
													<hr>
												</div>

												<div class="col-lg-12">
													<h6>Contact Information</h6>
												</div>

												<div class="col-md-3 col-xs-3">
													<div class="form-group">
														<label class="font-weight-bold">Mobile Number</label>
														<input type="text" class="form-control-sm form-control" name="mobile" id="mobile">
													</div>
												</div>

												<div class="col-md-3 col-xs-3">
													<div class="form-group">
														<label class="font-weight-bold">Telephone Number</label>
														<input type="text" class="form-control-sm form-control" name="telephone" id="telephone">
													</div>
												</div>

												<div class="col-md-3 col-xs-3">
													<div class="form-group">
														<label class="font-weight-bold">Personal Email Address</label>
														<input type="email" class="form-control-sm form-control" name="personal_email"  id="personal_email">
													</div>
												</div>

												<div class="col-md-3 col-xs-3">
													<div class="form-group">
														<label class="font-weight-bold">Company Email Address</label>
														<input type="email" class="form-control-sm form-control" name="company_email" id="company_email">
													</div>
												</div>

											</div>

											<div class="row">
												<div class="col-lg-12">
													<hr>
												</div>

												<div class="col-lg-12">
													<h6>Emergency Contact Person</h6>
												</div>

												<div class="col-md-4 col-xs-4">
													<div class="form-group">
														<label class="font-weight-bold">Contact Person</label>
														<input type="text" class="form-control-sm form-control"  name="contact_person" id="contact_person">
													</div>
												</div>

												<div class="col-md-4 col-xs-4">
													<div class="form-group">
														<label class="font-weight-bold">Contact Number</label>
														<input type="text" class="form-control-sm form-control" name="contact_num" id="contact_num">
													</div>
												</div>

												<div class="col-md-4 col-xs-4">
													<div class="form-group">
														<label class="font-weight-bold">Relationship</label>
														<input type="text" class="form-control-sm form-control" name="relationship" id="relationship">
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="tab-pane fade border" id="nav-salary_info" role="tabpanel">
										<div class="col-lg-12 col-xs-12 mt-3 mb-3">
											<div class="row">

												<div class="col-lg-12">
													<h6>Payroll Information</h6>
												</div>

												<div class="col-md-3 col-xs-3">
													<label class="font-weight-bold">Bank</label>
													<input type="text" class="form-control form-control-sm" name="bank" id="bank">

												</div>

												<div class="col-md-3 col-xs-3">
													<label class="font-weight-bold">Basic Salary</label>
													<input type="text" class="form-control form-control-sm" name="basic_salary" id="basic_salary">
												</div>

												<div class="col-md-3 col-xs-3">
													<label class="font-weight-bold">Time Interpretation</label>
													<input type="text" class="form-control form-control-sm" name="time_interpretation" id="time_interpretation">
												</div>

												<div class="col-md-3 col-xs-3">
													<label class="font-weight-bold">Cost of Living Allowance</label>
													<input type="text" class="form-control form-control-sm" name="cola">
												</div>

											</div>
										</div>
									</div>
								</div>

							</div>
						</div>

					</div>
				</div>
			</div>

			<div class="modal-footer">
				<button class="btn btn-primary" type="submit">Submit</button>
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
			</div>

		</div>
	</div>
</div>
<!-- Create Employee Information Modal -->

<!-- View Employee Information -->
<div class="modal fade" id="m_view" role="dialog" tabindex="-1" aria-labelledby="View Employee Information" aria-hidden="true" style="padding-left: 0px !important;">
	<div class="modal-dialog modal-dialog-centered modal-full" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<h5 class="modal-title">View Employee Profile</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">
				<div class="row">

					<div class="col-lg-1 col-md-12 col-xs-12 mt-2 mb-2" style="height: 150px;">
						<img src="{{asset('img/avatars/user.svg')}}" style="width: 100%; height: 100%;" class="py-3">
					</div>

					<div class="col-lg-5 col-md-12 col-xs-12 mt-2 mb-2">
						<div class="row">
							<div class="col-md-12 col-xs-12">
								<h6 class="font-weight-bold border-bottom">Basic Information</h6>
							</div>

							<div class="col-md-6 col-xs-6">
								<h6 class="small">Employee ID</h6>
								<h6 id="emp_id_view">SOL-00001</h6>
							</div>

							<div class="col-md-6 col-xs-6">
								<h6 class="small">Batch</h6>
								<h6 id="emp_batch_view">Operations</h6>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12 col-xs-12">
								<hr style="margin-top: -2px;">
							</div>

							<div class="col-md-3 col-xs-3">
								<h6 class="small">Last Name</h6>
								<h6 id="last_name_view">Dela Cruz</h6>
							</div>

							<div class="col-md-3 col-xs-3">
								<h6 class="small">First Name</h6>
								<h6 id="first_name_view">Juan</h6>
							</div>

							<div class="col-md-3 col-xs-3">
								<h6 class="small">Middle Name</h6>
								<h6 id="middle_name_view">Protacio</h6>
							</div>

							<div class="col-md-3 col-xs-3">
								<h6 class="small">Suffix</h6>
								<h6 id="suffix_view">Jr.</h6>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12 col-xs-12">
								<hr style="margin-top: -2px;">
							</div>

							<div class="col-md-3 col-xs-3">
								<h6 class="small">Birthday</h6>
								<h6 id="birthday_view">July 23, 1997</h6>
							</div>

							<div class="col-md-1 col-xs-1">
								<h6 class="small">Age</h6>
								<h6 id="age_view">18</h6>
							</div>

							<div class="col-md-3 col-xs-3">
								<h6 class="small">Chinese Zodiac</h6>
								<h6 id="chinese_zodiac_view">Year of the Ox</h6>
							</div>

							<div class="col-md-2 col-xs-2">
								<h6 class="small">Sex</h6>
								<h6 id="sex_view">Male</h6>
							</div>

							<div class="col-md-3 col-xs-3">
								<h6 class="small">Civil Status</h6>
								<h6 id="civil_status_view">Single</h6>
							</div>
						</div>
					</div>

					<div class="col-lg-6 col-md-12 col-xs-12 mt-2 mb-2">
						<div class="row">
							<div class="col-lg-12 col-xs-12">
								<nav style="width: 100%">
									<div class="nav nav-tabs" id="nav-tab" role="tablist">
										<a class="nav-item nav-link active" id="nav-emp-tab" data-toggle="tab" href="#nav-emp" role="tab" aria-controls="nav-emp" aria-selected="true">Employee Information</a>
										<a class="nav-item nav-link" id="nav-per_info-tab" data-toggle="tab" href="#nav-per_info" role="tab" aria-controls="nav-per_info" aria-selected="false">Personal Information</a>
										<a class="nav-item nav-link" id="nav-sal_info-tab" data-toggle="tab" href="#nav-sal_info" role="tab" aria-controls="nav-sal_info" aria-selected="false">Salary Information</a>
									</div>
								</nav>

								<div class="tab-content" id="nav-tabContent">

									<div class="tab-pane fade show active border" id="nav-emp" role="tabpanel">
										<div class="col-lg-12 col-md-12 col-xs-12 mt-3 mb-3">
											<div class="row">

												<div class="col-lg-12 col-md-12 col-xs-12">
													<h6 class="font-weight-bold">Employee Information</h6>
												</div>

												<div class="col-md-12 col-xs-12">
													<hr style="margin-top: -2px;">
												</div>

												<div class="col-lg-3 col-md-3 col-xs-12">
													<h6 class="small">Branch</h6>
													<h6 id="branch_view">Head Office</h6>
												</div>

												<div class="col-lg-3 col-md-3 col-xs-12">
													<h6 class="small">Department</h6>
													<h6 id="department_view">Management</h6>
												</div>

												<div class="col-lg-3 col-md-3 col-xs-12">
													<h6 class="small">Position</h6>
													<h6 id="position_view">Security Guard</h6>
												</div>

												<div class="col-lg-3 col-md-3 col-xs-12">
													<h6 class="small">Date Hired</h6>
													<h6 id="date_hired_view">May 28, 2018</h6>
												</div>

											</div>

											<div class="row mt-4 mb-4">

												<div class="col-lg-3 col-md-3 col-xs-12">
													<h6 class="small">Primary Profit Center</h6>
													<h6 id="primary_profit_center_view">TEJ</h6>
												</div>

												<div class="col-lg-3 col-md-3 col-xs-12">
													<h6 class="small">Secondary Profit Center</h6>
													<h6 id="secondary_profit_center_view">Convergys</h6>
												</div>

												<div class="col-lg-3 col-md-3 col-xs-12">
													<h6 class="small">Employee Status</h6>
													<h6 id="employee_status_view">Probationary</h6>
												</div>

												<div class="col-lg-3 col-md-3 col-xs-12">
													<h6 class="small">Employment Status</h6>
													<h6 id="employment_status_view">Active</h6>
												</div>

												<div class="col-lg-3 col-md-3 col-xs-12">
													<h6 class="small">Leave Credits</h6>
													<h6 id="leave_credits_view">-</h6>
												</div>

											</div>

											<div class="row">
												<div class="col-lg-12 col-md-12 col-xs-12">
													<h6 class="font-weight-bold">Government Mandatory IDs</h6>
												</div>

												<div class="col-md-12 col-xs-12">
													<hr style="margin-top: -2px;">
												</div>

												<div class="col-lg-3 col-md-6 col-xs-12">
													<h6 class="small">Tax Identification Number (TIN)</h6>
													<h6 id="tin_view">1234-567-890</h6>
												</div>

												<div class="col-lg-3 col-md-6 col-xs-12">
													<h6 class="small">Social Security System Number (SSS)</h6>
													<h6 id="sss_view">1234-567-890</h6>
												</div>

												<div class="col-lg-3 col-md-6 col-xs-12">
													<h6 class="small">Phil Health Number</h6>
													<h6 id="philhealth_view">1234-567-890</h6>
												</div>

												<div class="col-lg-3 col-md-6 col-xs-12">
													<h6 class="small">Pag IBIG Number</h6>
													<h6 id="pagibig_view">1234-567-890</h6>
												</div>
											</div>
										</div>
									</div>

									<div class="tab-pane fade border" id="nav-per_info" role="tabpanel">
										<div class="col-lg-12 col-md-12 col-xs-12 mt-3 mb-3">

											<div class="row">
												<div class="col-lg-12 col-md-12 col-xs-12">
													<h6 class="font-weight-bold">Address</h6>
												</div>

												<div class="col-lg-12 col-md-12 col-xs-12">
													<hr style="margin-top: -2px;">
												</div>

												<div class="col-lg-6 col-md-6 col-xs-12">
													<h6 class="small">Present Address</h6>
													<h6 id="present_address_view"></h6>
												</div>

												<div class="col-lg-3 col-md-3 col-xs-12">
													<h6 class="small">City</h6>
													<h6 id="city_view"></h6>
												</div>

												<div class="col-lg-3 col-md-3 col-xs-12">
													<h6 class="small">Province</h6>
													<h6 id="province_view"></h6>
												</div>

												<div class="col-lg-12 col-md-12 col-xs-12">
													<h6 class="small">Permanent Address</h6>
													<h6 id="permanent_address_view"></h6>
												</div>
											</div>

											<div class="row mt-4 mb-4">
												<div class="col-lg-12 col-md-12 col-xs-12">
													<h6 class="font-weight-bold">Contact Information</h6>
												</div>

												<div class="col-lg-12 col-md-12 col-xs-12">
													<hr style="margin-top: -2px;">
												</div>

												<div class="col-lg-3 col-md-6 col-xs-12">
													<h6 class="small">Mobile Number</h6>
													<h6 id="mobile_number_view">(+69)999-999-9999</h6>
												</div>

												<div class="col-lg-3 col-md-6 col-xs-12">
													<h6 class="small">Telephone Number</h6>
													<h6 id="tel_number_view">(+69)999-999-9999</h6>
												</div>

												<div class="col-lg-3 col-md-6 col-xs-12">
													<h6 class="small">Personal Email Address</h6>
													<h6 id="personal_email_view">(+69)999-999-9999</h6>
												</div>

												<div class="col-lg-3 col-md-6 col-xs-12">
													<h6 class="small">Company Email Address</h6>
													<h6 id="company_email_view">(+69)999-999-9999</h6>
												</div>
											</div>

											<div class="row">
												<div class="col-lg-12 col-md-12 col-xs-12">
													<h6 class="font-weight-bold">Emergency Contact Person</h6>
												</div>

												<div class="col-lg-12 col-md-12 col-xs-12">
													<hr style="margin-top: -2px;">
												</div>

												<div class="col-lg-4 col-md-4 col-xs-12">
													<h6 class="small">Contact Person</h6>
													<h6 id="contact_person_view">Juan Dela Cruz</h6>
												</div>

												<div class="col-lg-4 col-md-4 col-xs-12">
													<h6 class="small">Contact Number</h6>
													<h6 id="emergency_contact_person_view">Juan Dela Cruz</h6>
												</div>

												<div class="col-lg-4 col-md-4 col-xs-12">
													<h6 class="small">Relationship</h6>
													<h6 id="relationship_view">Father</h6>
												</div>
											</div>

										</div>
									</div>

									<div class="tab-pane fade border" id="nav-sal_info" role="tabpanel">
										<div class="col-lg-12 col-md-12 col-xs-12 mt-3 mb-3">
											<div class="row">

												<div class="col-lg-12 col-md-12 col-xs-12">
													<h6 class="font-weight-bold">Salary Information</h6>
												</div>

												<div class="col-lg-3 col-md-3 col-xs-12">
													<h6 class="small">Bank</h6>
													<h6 id="bank_view">BDO</h6>
												</div>

												<div class="col-lg-3 col-md-3 col-xs-12">
													<h6 class="small">Basic Salary</h6>
													<h6 id="basic_salary_view">BDO</h6>
												</div>

												<div class="col-lg-3 col-md-3 col-xs-12">
													<h6 class="small">Time Interpretation</h6>
													<h6 id="time_interpretation_view">BDO</h6>
												</div>

												<div class="col-lg-3 col-md-3 col-xs-12">
													<h6 class="small">Cost of Living Allowance</h6>
													<h6 id="cola_view">BDO</h6>
												</div>

											</div>
										</div>
									</div>

								</div>

							</div>
						</div>
					</div>

				</div>
			</div>

			<div class="modal-footer">
				<button class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>

		</div>
	</div>
</div>
<!-- View Employee Information -->


<script type="text/javascript">
	$("#employee_table").DataTable({
		responsive: true
	});
	$(".select2").select2();
</script>
@endsection