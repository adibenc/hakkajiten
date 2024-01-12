<?php

namespace App\Controllers\Auth;

use CodeIgniter\Shield\Controllers\LoginController as ShieldLogin;
use CodeIgniter\HTTP\RedirectResponse;

class LoginController extends ShieldLogin
{
	// @override
	public function loginView()
	{
		if (auth()->loggedIn()) {
			return redirect()->to(config('Auth')->loginRedirect());
		}

		/** @var Session $authenticator */
		$authenticator = auth('session')->getAuthenticator();

		// If an action has been defined, start it up.
		if ($authenticator->hasAction()) {
			return redirect()->route('auth-action-show');
		}

		return $this->view(setting('Auth.views')['login']);
	}

	public function logoutAction(): RedirectResponse{
		preout("pr lc logout");
		exit;
		return redirect()->to("google.com");
	}
}