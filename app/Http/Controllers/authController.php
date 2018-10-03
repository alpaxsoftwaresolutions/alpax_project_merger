<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\View\View;
use DB;
use App\Authentication;
use App\role;
use App\AuthenticationItems;
use Carbon\Carbon;

	
class authController extends Controller
{
	 public function index(){
		$auths = DB::table('authentication_items')
	 		->join('authentications' , 'auth_id', '=','authentications.id')
	 		->join('roles' , 'authentication_items.role', '=','roles.id')
	 		->select('authentications.path','authentications.parent_id','authentications.icon','authentications.name','roles.name as name2','authentications.id')
	 		->get();
		return view('settings.developer_tools.manage_module',compact('auths'));
	 }
	 public function create(){
        $auths = Authentication::all();
	 	return view('pages.auth.form',compact('auths'));
	 }
	 public function store(Request $request){
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
	 	 $auths = Authentication::where('deleted_at', '=', NULL )->get();
		return view('pages.auth.index',compact('auths'));
	 }
	 public function edit($authId){
	 	$auths_edit = Authentication::where('id', $authId)->get();
	 	$auths = Authentication::all();
	 	return view('pages.auth.edit',compact('auths','auths_edit'));
	 }
	 public function delete($authId){
	 	 $delete_auths = Authentication::where('id', $authId)->update([
           'deleted_at' =>  Carbon::now()
        ]);
	 	$auths = Authentication::where('deleted_at', '=', NULL )->get();
		return view('pages.auth.index',compact('auths'));
	 }
	  public function update(Request $request, $authId){
	 	 $update_auths = Authentication::where('id', $authId)->update([
         'name'  => $request['auth_name_edit'],
         'order_id' =>  $request['auth_order_edit'],
         'icon' => $request['auth_icon_edit'],
         'parent_id' =>  $request['auth_parent_edit'],
         'path' =>  $request['auth_path_edit']
       ]);
	 	 $auths = Authentication::where('deleted_at', '=', NULL )->get();
		return view('pages.auth.index',compact('auths'));
	}
	 public function editItem(Request $request, $authId){
 		$authItems = DB::table('authentication_items')
 		->join('authentications' , 'auth_id', '=','authentications.id')
 		->select('isVisible','isReadable','isWritable','authentications.name')
 		->where('authentication_items.auth_id','=', $authId)
 		->get();
 		
	 	return view('pages.authItems.edit',compact('authItems'));
	 }
	public function updateItem(Request $request, $authId){

		if (isset($request['visible'])){$visible = 1;}else{$visible = 0;}
 		if (isset($request['readable'])){$readable = 1;}else{$readable = 0;}
 		if (isset($request['writable'])){$writable = 1;}else{$writable = 0;}
 		$update_authitems = AuthenticationItems::where('auth_id', $authId)->update([
           'isVisible' =>  $visible ,
           'isReadable' => $readable,
           'isWritable' => $writable
           ]);
 		$auths = Authentication::where('deleted_at', '=', NULL )->get();
		return view('pages.auth.index',compact('auths'));
	}
}
?>