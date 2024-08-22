<?php

namespace App\Controllers;

trait BaseCtrlTrait{
	// base response builder
	static function stdJson($success = true, $msg = "", $data = []){
		return [
			"success" => $success,
			"message" => $msg,
			"data" => $data
		];
	}

	static function jsonResp($data = [], $code = null){
		$code = $code ?? 200;
		return response()->setStatusCode($code)
			->setJSON($data);
	}

	// self::success()
	static function success($msg = "", $data = []){
		return response()->setStatusCode(200)
			->setJSON(self::stdJson(true, $msg, $data));
	}

	static function ufail($msg = "", $data = []){
		return response()->setStatusCode(500)
			->setJSON(self::stdJson(false, $msg, $data));
	}
}