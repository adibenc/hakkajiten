<?php

namespace App\Controllers;

use App\Models\User;
use CodeIgniter\Log\Logger;
// use Illuminate\Support\Facades\DB;

class ArtController extends BaseController {
	public $prename = "reddit";
	public function index(): string {
		return view('admin/d1/index');
	}

	function list() {
		try{
			$prename = $this->getPrename();
			$list = scan_dir_rc( APPPATH."/Views/$prename/");
			// return view("wiki/f3-bio");
			return view("$prename/list", compact('prename','list'));
		}catch(\Exception $e){
			return self::fail($e->getMessage(), [1]);
		}
	}

	function d($f=null) {
		try{
			$prename = $this->getPrename();

			$f = $f ?? "f3-bio";
			// return view("wiki/f3-bio");
			return view("$prename/$f");
		}catch(\Exception $e){
			return self::fail($e->getMessage(), [1]);
		}
	}
	
	function dc($c=null, $f=null) {
		try{
			$prename = $this->getPrename();
			$f = $f ?? "f3-bio";
			// return view("wiki/f3-bio");
			return view("$prename/$c/$f");
		}catch(\Exception $e){
			return self::fail($e->getMessage(), [1]);
		}
	}

	/**
	 * Get the value of prename
	 */ 
	public function getPrename()
	{
		return $this->prename;
	}

	/**
	 * Set the value of prename
	 *
	 * @return  self
	 */ 
	public function setPrename($prename)
	{
		$this->prename = $prename;

		return $this;
	}
}
