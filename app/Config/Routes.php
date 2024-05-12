<?php

use CodeIgniter\Router\RouteCollection;

use App\Controllers\Auth\LoginController;
use App\Controllers\Auth\RegisterController;
use CodeIgniter\Shield\Controllers\MagicLinkController;
use CodeIgniter\Shield\Controllers\ActionController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'D1Controller::index');

$artRoutes = function($k, $ctrl) use ($routes){
	$routes->get("/$k", "$ctrl::list/$1", [
		'as'=> "$k.list"
	]);
	$routes->get("/$k/(:any)", "$ctrl::d/$1", [
		'as'=> "$k.r"
	]);
};

$routes->get('/wikis/', 'WikiController::list');
$routes->get('/wiki/', 'WikiController::wiki');
$routes->get('/wiki/c/(:any)/(:any)', 'WikiController::dc/$1/$2');
$routes->get('/wiki/(:any)', 'WikiController::d/$1');

$artRoutes("reddits", "RedditController");
$artRoutes("webs", "WebController");

$routes->get('/quiz/', 'QuizController::index');

$t = function() use ($routes) {
	$routes->get('/d1', 'D1Controller::index');
	$routes->get('/d1/all', 'D1Controller::all');
	$routes->get('/d1/show', 'D1Controller::show');
	$routes->get('/d1/create', 'D1Controller::create');
	$routes->get('/d1/update/(:id)', 'D1Controller::update');
	$routes->get('/d1/delete/(:id)', 'D1Controller::delete');
};

$t();

$routes->get('register', [RegisterController::class, 'registerView']);
$routes->get('login', [LoginController::class, 'loginView']);
$routes->get('login/magic-link', [MagicLinkController::class, 'loginView'], [
    "as" => 'magic-link',
]);
$routes->get('login/verify-magic-link', [MagicLinkController::class, 'verify'], [
    "as" => 'verify-magic-link',
]);
$routes->get('logout', [LoginController::class, 'logoutAction']);
$routes->get('auth/a/show', [ActionController::class, 'show'], [
    "as" => 'auth-action-show'
]);
$routes->post('register', [RegisterController::class, 'registerAction'], [
    "as" => 'toolbar'
]);
$routes->post('login', [LoginController::class, 'loginAction'], [
    "as" => 'toolbar'
]);
$routes->post('login/magic-link', [MagicLinkController::class, 'loginAction'], [
    "as" => 'toolbar'
]);
$routes->post('auth/a/handle', [ActionController::class, 'handle'], [
    "as" => 'toolbar'
]);
$routes->post('auth/a/verify', [ActionController::class, 'verify'], [
    "as" => 'toolbar'
]);

service('auth')->routes($routes);
