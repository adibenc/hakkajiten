<?php

namespace App\Controllers\Auth;

use CodeIgniter\Shield\Controllers\RegisterController as ShieldRegisterController;
use CodeIgniter\HTTP\RedirectResponse;
use CodeIgniter\Shield\Validation\ValidationRules;

class RegisterController extends ShieldRegisterController {
	protected function getValidationRules(): array {
		// wip, todo : fix rules
		$usernameRules = [
			'label' => 'Auth.username',
			'rules' => [
				'required',
				'max_length[30]',
				'min_length[3]',
				'regex_match[/\A[a-zA-Z0-9\.]+\z/]',
			],
		];
        $usernameRules['rules'][] = sprintf(
            'is_unique[%s.username]',
            'users'
        );

        return [
            'username'         => $usernameRules,
		];
    }
}