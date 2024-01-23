<?php

namespace App\Controllers;

use App\Models\User;
use CodeIgniter\Log\Logger;
// use Illuminate\Support\Facades\DB;

class WikiController extends JsonCrudController{
	public function index(): string {
		return view('admin/d1/index');
	}

	function list() {
		try{
			$list = scandir( APPPATH."/Views/wiki");
			// return view("wiki/f3-bio");
			return view("wiki/list", compact('list'));
		}catch(\Exception $e){
			return self::fail($e->getMessage(), [1]);
		}
	}

	function wiki($f=null) {
		try{
			$f = $f ?? "f3-bio";
			// return view("wiki/f3-bio");
			return view("wiki/$f");
		}catch(\Exception $e){
			return self::fail($e->getMessage(), [1]);
		}
	}
	
	function wikic($c=null, $f=null) {
		try{
			$f = $f ?? "f3-bio";
			// return view("wiki/f3-bio");
			return view("wiki/$c/$f");
		}catch(\Exception $e){
			return self::fail($e->getMessage(), [1]);
		}
	}
}
