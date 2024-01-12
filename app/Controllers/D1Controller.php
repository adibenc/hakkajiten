<?php

namespace App\Controllers;

use App\Models\User;
use CodeIgniter\Log\Logger;
// use Illuminate\Support\Facades\DB;

class D1Controller extends JsonCrudController{
	public function index(): string {
		return view('admin/d1/index');
	}

	function all() {
		try{
			$data = User::with("profile")->get();

			return self::success("Ok", $data);
		}catch(\Exception $e){
			return self::fail($e->getMessage(), [1]);
		}
	}

	function create(){
		try{
			// log_message(7, "test");
			logs("info 7 test");
			// Logger
			$x = 1/0;
			return self::success("created", [$x]);
		}catch(\Exception $e){
			return self::fail($e->getMessage(), [1]);
		}
	}
}
