<?php

namespace App\Http\ViewComposers;
use Illuminate\View\View;
use DB;
class NavbarComposer{

	public $sidebar ='';
	public $ulclass = '<ul class="list-unstyled components">';

	public function compose(View $view){
		//get the role of the user
		$role_id = 1;
		$parent_id = 0;
		$this->count_dashboard($parent_id,$role_id);// count of main module
		$view->with("sidebar",$this->sidebar);
	}
	public function count_dashboard($parent_id,$role_id){
		$count = DB::select("SELECT count(*) as count FROM authentications as a LEFT JOIN authentication_items as ai ON ai.abs_id = a.id WHERE a.parent_id = ? and ai.role = ?",[$parent_id,$role_id]);
		foreach ($count as $c) {
			if($c->count > 0){
				return $this->get_dashboard($parent_id,$role_id);
			}
			else{
				return $c = [];
			}
		}
	}
	public function count($parent_id,$role_id){
		$count = DB::select("SELECT count(*) as count FROM authentications as a LEFT JOIN authentication_items as ai ON ai.abs_id = a.id WHERE a.parent_id = ? and ai.role = ?",[$parent_id,$role_id]);
		foreach ($count as $c) {
			return $c->count;
		}
	}
	public function get_dashboard($parent_id,$role_id){
		$dashboard = DB::select("SELECT a.id,a.type,a.name, a.icon, a.parent_id, a.path, t.abs_id, t.role, t.isVisible, t.isReadable, t.isWritable FROM authentications as a LEFT JOIN authentication_items as t ON t.abs_id = a.id WHERE a.parent_id = ? and t.role = ?",[$parent_id,$role_id]);
		$arr = [];
		$this->sidebar .= $this->ulclass;
		foreach ($dashboard as $dash) {
			$count = $this->count($dash->id,$role_id);
			if($count > 0){
				$settings = 'href=#'.$dash->id.' data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"';
			}
			else
				$settings = 'href=/'.$dash->path.' ';
			$this->sidebar.='<li class=""><a '.$settings.' ><img style="height: 70px;">'.$dash->name.'</a>';
			$this->ulclass ='<ul class="collapse list-unstyled" id="'.$dash->id.'">';
			$this->count_dashboard($dash->id,$role_id);
			// if(count($child) == 0){
			// 	$item = [];
			// }
			// else{
			// 	$sidebar.= '<ul class="collapse list-unstyled show" id="'.$dash->id.'">';
			// 	foreach($child as $c){
			// 		$item[] = array($c);
			// 	}
			// 	//ul
			// }
			// $arr[] = array($dash,$item);
			//li
			$this->sidebar.='</li>';
		}

		$this->sidebar.='</ul>';
	}
}
?>