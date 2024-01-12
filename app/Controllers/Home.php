<?php

namespace App\Controllers;

use CodeIgniter\Log\Logger;

class Home extends BaseController
{
    public function index(): string
    {
		preout($this);
        return view('welcome_message');
    }
}
