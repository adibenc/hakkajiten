<?php

namespace App\Controllers;

use App\Models\User;
use CodeIgniter\Log\Logger;
// use Illuminate\Support\Facades\DB;

class WikiController extends JsonCrudController{
	public function index(): string {
		return view('admin/d1/index');
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
}
