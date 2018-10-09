<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\View\View;
use DB;
use App\TimeInterpretations;
use Carbon\Carbon;

class TimeInterpretationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       	$interpretations = TimeInterpretations::where("deleted_at","=",NULL)->get();
        return view('settings.ezpp.payroll.time_interpretation',compact('interpretations'));
    }
    public function store(Request $request)
    {
        if(request()->has('interpretation_id')){
        	$interpretation = TimeInterpretations::find($request['interpretation_id']);
        	$interpretation->created_at = Carbon::now();
            $msg = "Time Interpretation Editted";
        }
        else{
        	$interpretation = new TimeInterpretations;
        	$msg = "New Time Interpretation Created";
        	$interpretation->updated_at = Carbon::now();
        }
        $interpretation->code = $request['code'];
        $interpretation->r_rwh_rh = $request['r_rwh_rh'];
        $interpretation->r_rwh_nd = $request['r_rwh_nd'];
        $interpretation->r_rwh_ot = $request['r_rwh_ot'];
        $interpretation->r_lh_rh = $request['r_lh_rh'];
        $interpretation->r_lh_nd = $request['r_lh_nd'];
        $interpretation->r_lh_ot = $request['r_lh_ot'];
        $interpretation->r_sh_rh = $request['r_sh_rh'];
        $interpretation->r_sh_nd = $request['r_sh_rh'];
        $interpretation->r_sh_ot = $request['r_sh_ot'];
        $interpretation->rd_rwh_rh = $request['rd_rwh_rh'];
        $interpretation->rd_rwh_nd = $request['rd_rwh_nd'];
        $interpretation->rd_rwh_ot = $request['rd_rwh_ot'];
        $interpretation->rd_lh_rh = $request['rd_lh_rh'];
        $interpretation->rd_lh_nd = $request['rd_lh_nd'];
        $interpretation->rd_lh_ot = $request['rd_lh_ot'];
        $interpretation->rd_sh_rh = $request['rd_sh_rh'];
        $interpretation->rd_sh_nd = $request['rd_sh_nd'];
        $interpretation->rd_sh_ot = $request['rd_sh_ot'];
        $interpretation->save();
        return back()->with('success',$msg);
    }

    public function delete($interpretation_id){
        $delete_config = TimeInterpretations::where('id', $interpretation_id)->update([
            'deleted_at' =>  Carbon::now()
        ]);
       return back()->with('success','Deleted Successfully');
    }
}
