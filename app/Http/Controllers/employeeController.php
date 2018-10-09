<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Department;
use App\Branch;
use App\Batch;
use App\empstatus;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use DB;

class employeeController extends Controller
{
   public function __construct()
    {
		$this->middleware('auth');
    }
   	public function index(){
   		$auths = DB::table('authentication_items')
	 		->join('authentications' , 'auth_id', '=','authentications.id')
	 		->join('roles' , 'authentication_items.role', '=','roles.id')
	 		->select('roles.name')
	 		->where('authentications.deleted_at',NULL)
	 		->where('authentications.name','Employee Information')
	 		->get();
        $names = [];
        foreach($auths as $auth)
		{
			$names[] = $auth->name ; 
		} 
		Auth::user()->authorizeRoles($names);
		$employee =  Employee::where('deleted_at',NULL)->get();
		$emp_status =  empstatus::where('deleted_at',NULL)->get();
		$batch =  Batch::where('deleted_at',NULL)->get();
		$departments = Department::where('deleted_at',NULL)->get();
		$branch = Branch::where('deleted_at',NULL)->get();
    	return  view('ezpayplus.hris.employee_information',compact('employee','departments','branch','batch','emp_status'));
   	}
   	public function store(){
   		if(request()->has('employee_id_edit')){
			 $employeeId = $request['employee_id_edit'];
	 		 $update_employee = Department::where('id', $employeeId)->update([
	         'name'  => $request['department_name_edit'],
	         'description' =>  $request['department_description_edit']
	       ]);
	 		return back()->with('success','Employee Editted');
    	}else{
    		$employee = new Employee;
		 	$employee->employee_id=$request['employee_id'];
		 	$employee->firstname=$request['fname'];
		 	$employee->middlename=$request['mname'];
		 	$employee->lastname=$request['lname'];
		 	$employee->suffix=$request['suffix'];
		 	$employee->gender=$request['gender'];
		 	$employee->birthday=$request['birthdate'];
		 	$employee->zodiac=$request['zodiac'];
		 	$employee->civil_status=$request['civil_status'];
		 	$employee->age=$request['age'];
		 	$employee->batch=$request['batch'];
		 	$employee->branch_id=$request['branch'];
		 	$employee->dept_id=$request['department'];
		 	$employee->profit_id=$request['profit_center_primary'];
		 	$employee->profit_id_2nd=$request['profit_center_primary'];
		 	$employee->position_id=$request['position'];
		 	$employee->date_hired=$request['date_hired'];
		 	$employee->emp_status_id=$request['employee_status'];
		 	$employee->status=$request['employment_status'];
		 	$employee->leave_credits=$request['leave_credits'];
		 	$employee->reason=$request['reason_for_leaving'];
		 	$employee->bio_id=$request['bio_id'];
		 	$employee->present_address=$request['present_address'];
		 	$employee->permanent_address=$request['permanent_address'];
		 	$employee->province=$request['province'];
		 	$employee->city=$request['city'];
		 	$employee->tel=$request['telephone'];
		 	$employee->mobile=$request['mobile'];
		 	$employee->personal_email=$request['personal_email'];
		 	$employee->company_email=$request['company_email'];
		 	$employee->tin=$request['tin'];
		 	$employee->sss=$request['sss'];
		 	$employee->philhealth=$request['philhealth'];
		 	$employee->pagibig=$request['pagibig'];
		 	$employee->contact_name=$request['contact_person'];
		 	$employee->contact_no=$request['contact_num'];
		 	$employee->relationship=$request['relationship'];
		 	$employee->bank=$request['bank'];
		 	$employee->basic_salary=$request['basic_salary'];
		 	$employee->time_interpretation=$request['time_interpretation'];
		 	$employee->save();
	    	return back()->with('success','New Employee Added');
    	}
   	}
}
