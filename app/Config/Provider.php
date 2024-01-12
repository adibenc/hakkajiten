<?php

namespace Config;

use App\Models\UserModel;
use Illuminate\Database\Capsule\Manager as Capsule;

// dib
class Provider {
	function __construct() {
		$this->view();
	}

	function view(){
		/* 
		dib: plz provide & declare global scoped data for view 
		at this class 
		*/
		$user = 1;
		
		$renderer = Services::renderer();
		
		// assume the session is filled with first user
		// session()->set("user", (new UserModel)->first());
		$bu = base_url();

		$renderer->setData([
			"a" => "a1 provider",
			"b" => 2,
			"isGuest" => true,
			"isAdmin" => false,
			"_baseurl" => $bu,
			"_asset" => "$bu/assets/",
			"_user" => session("user"),
		]);
	}
}