<?php

namespace App\Controllers;

use CodeIgniter\Log\Logger;

class QuizController extends BaseController {
	public function index(): string {
		return view('quiz/index');
	}
}
