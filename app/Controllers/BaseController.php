<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = [];
    
	protected $db = null;

    /**
     * Be sure to declare properties for any property fetch you initialized.
     * The creation of dynamic property is deprecated in PHP 8.2.
     */
    // protected $session;

    /**
     * @return void
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.
		$this->db = \Config\Database::connect();

        // E.g.: $this->session = \Config\Services::session();
    }

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

	static function success($msg = "", $data = []){
		return response()->setStatusCode(200)
			->setJSON(self::stdJson(true, $msg, $data));
	}

	static function fail($msg = "", $data = []){
		return response()->setStatusCode(500)
			->setJSON(self::stdJson(false, $msg, $data));
	}
}
