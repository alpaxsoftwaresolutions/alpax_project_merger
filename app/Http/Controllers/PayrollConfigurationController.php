<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\View\View;
use DB;
use App\PayrollConfiguration;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class PayrollConfigurationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payroll_configurations = PayrollConfiguration::where("deleted_at","=",NULL)->get();
        $taxes = [];
        $tax_holder = [];
        foreach($payroll_configurations as $config){

            $taxes [] = [$config->wt_1,$config->wt_2,$config->wt_3,$config->wt_4];
            $taxes [] = [$config->ss_1,$config->ss_2,$config->ss_3,$config->ss_4];
            $taxes [] = [$config->pi_1,$config->pi_2,$config->pi_3,$config->pi_4];
            $taxes [] = [$config->ph_1,$config->ph_2,$config->ph_3,$config->ph_4];
            $tax_holder[] = $taxes;
            unset($taxes);
        }
        $data=[
            "payroll_configurations" => $payroll_configurations,
            "taxes" => $tax_holder
        ];
        return view('settings.ezpp.payroll.payroll_configuration')->with($data);
    }
    public function store(Request $request)
    {
        if($request['config_id'] == 0){
            $config = new PayrollConfiguration;
            $msg = "New Payroll Configuration Created";
        }
        else{
            $config = PayrollConfiguration::find(4);
            $msg = "Payroll Configuration Editted";
        }
        $config->code = $request['code'];
        $config->working_day_per_year = $request['working_per_year'];
        $config->working_day_per_hour = $request['working_day_per_hour'];
        $config->pay_frequency = $request['pay_frequency'];
        $config->time_interpretation_id = $request['time_interpretation'];
        $config->wt_1 = isset($request['wt_1']) ? $request['wt_1'] : 0;
        $config->wt_2 = isset($request['wt_2']) ? $request['wt_2'] : 0;
        $config->wt_3 = isset($request['wt_3']) ? $request['wt_3'] : 0;
        $config->wt_4 = isset($request['wt_4']) ? $request['wt_4'] : 0;
        $config->ss_1 = isset($request['ss_1']) ? $request['ss_1'] : 0;
        $config->ss_2 = isset($request['ss_2']) ? $request['ss_2'] : 0;
        $config->ss_3 = isset($request['ss_3']) ? $request['ss_3'] : 0;
        $config->ss_4 = isset($request['ss_4']) ? $request['ss_4'] : 0;
        $config->pi_1 = isset($request['pi_1']) ? $request['pi_1'] : 0;
        $config->pi_2 = isset($request['pi_2']) ? $request['pi_2'] : 0;
        $config->pi_3 = isset($request['pi_3']) ? $request['pi_3'] : 0;
        $config->pi_4 = isset($request['pi_4']) ? $request['pi_4'] : 0;
        $config->ph_1 = isset($request['ph_1']) ? $request['ph_1'] : 0;
        $config->ph_2 = isset($request['ph_2']) ? $request['ph_2'] : 0;
        $config->ph_3 = isset($request['ph_3']) ? $request['ph_3'] : 0;
        $config->ph_4 = isset($request['ph_4']) ? $request['ph_4'] : 0;
        $config->save();

        return back()->with('success',$msg);
    }

    public function delete($config_id){
        $delete_config = PayrollConfiguration::where('id', $config_id)->update([
            'deleted_at' =>  Carbon::now()
        ]);
       return back()->with('success','Deleted Successfully');
    }
}
