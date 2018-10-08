<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\View\View;
use DB;
use App\Authentication;
use App\role;
use App\AuthenticationItems;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
	
class authController extends Controller
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
	 		->where('authentications.name','Modules')
	 		->get();

        $names = [];
        foreach($auths as $auth)
		{
			$names[] = $auth->name ; 
		} 
		Auth::user()->authorizeRoles($names);
		$auths = DB::table('authentication_items')
	 		->join('authentications' , 'auth_id', '=','authentications.id')
	 		->join('roles' , 'authentication_items.role', '=','roles.id')
	 		->select('authentications.path','authentications.parent_id','authentications.icon','authentications.name','authentications.order_id','roles.name as name2','authentications.id','authentication_items.auth_id','authentication_items.role','authentication_items.isVisible','authentication_items.isReadable','authentication_items.isWritable','authentications.parent_id as p_id',DB::raw('(SELECT name FROM authentications WHERE id = p_id) as parent_name'))
	 		->where('authentications.deleted_at',NULL)->orderBy('id','ASC')
	 		->get();
		return view('settings.developer_tools.manage_module',compact('auths'));
	 }
	 public function store(Request $request){
	 	if (request()->has('auth_id')){
	 		$authId = $request['auth_id'];
	 		 $update_auths = Authentication::where('id', $authId)->update([
	         'name'  => $request['auth_name_edit'],
	         'order_id' =>  $request['auth_order_edit'],
	         'icon' => $request['auth_icon_edit'],
	         'parent_id' =>  $request['auth_parent_edit'],
	         'path' =>  $request['auth_path_edit']
	       ]);
	 		return back()->with('success','Module Editted');
	 	}
	 	else if (request()->has('role_id')){
	 		$authId = $request['role_id'];
			if (isset($request['visible'])){$visible = 1;}else{$visible = 0;}
	 		if (isset($request['readable'])){$readable = 1;}else{$readable = 0;}
	 		if (isset($request['writable'])){$writable = 1;}else{$writable = 0;}
	 		$update_authitems = AuthenticationItems::where('auth_id', $authId)->update([
	           'isVisible' =>  $visible ,
	           'isReadable' => $readable,
	           'isWritable' => $writable
	        ]);
	        return back()->with('success','Permission Editted');
	 	}
	 	else{
		 	$authenticate = new Authentication;

		 	$authenticate->name=$request['auth_name'];
		 	$authenticate->order_id=$request['auth_order'];
		 	$authenticate->icon=$request['auth_icon'];
		 	$authenticate->parent_id=$request['auth_parent'];
		 	$authenticate->path=$request['auth_path'];
		 	$authenticate->save();
		 	$authsID = Authentication::orderby('id','DESC')->pluck('id')->first();
		 	$auth_items =  new AuthenticationItems;
		 	$auth_items->auth_id = $authsID;
		 	$auth_items->save();
		 	return back()->with('success','New Module Created');
	 	}
	 	
		
	 }
	 public function delete($authId){
	 	 $delete_auths = Authentication::where('id', $authId)->update([
           'deleted_at' =>  Carbon::now()
        ]);
	 	$auths = Authentication::where('deleted_at', '=', NULL )->get();
		return back()->with('success','Deleted Successfully');
	 }
}
?>