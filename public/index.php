<?php
use myMvc\Services\View;

use PHPRouter\RouteCollection;
use PHPRouter\Router;
use PHPRouter\Route;

/*
 * System config and initialization
 */
	
include ('../init.inc.php');

	

/*
 * Router
 */
	
$collection = new RouteCollection();

/*
 * User routes
 */

/* Route to system = log in to the system
 * 
 * $collection->attachRoute(new Route('/', array(
 *  '_controller' => 'myMvc\Controllers\UserController::login',
 *  'methods' => 'GET'
 * )));
 * 
 * Route to overview. UserController::isLoggedIn
 * 
 * $collection = new RouteCollection();
 * $collection->attachRoute(new Route('/overview', array(
 *  '_controller' => '',
 *  'methods' => 'GET'
 * )));
 */

$collection->attachRoute(new Route('/users', array(
    '_controller' => 'myMvc\Controllers\UserController::index',
    'methods' => 'GET'
)));

$collection->attachRoute(new Route('/users/create', array(
    '_controller' => 'myMvc\Controllers\UserController::create',
    'methods' => 'GET'
)));

$collection->attachRoute(new Route('/users/:id', array(
    '_controller' => 'myMvc\Controllers\UserController::show',
    'methods' => 'GET'
)));

$collection->attachRoute(new Route('/users/:id/edit', array(
    '_controller' => 'myMvc\Controllers\UserController::edit',
    'methods' => 'GET'
)));

$collection->attachRoute(new Route('/users/:id/delete', array(
    '_controller' => 'myMvc\Controllers\UserController::delete',
    'methods' => 'GET'
)));

$collection->attachRoute(new Route('/users', array(
    '_controller' => 'myMvc\Controllers\UserController::insert',
    'methods' => 'POST'
)));

$collection->attachRoute(new Route('/users/:id', array(
    '_controller' => 'myMvc\Controllers\UserController::update',
    'methods' => 'POST'
)));

/*
 * Article routes
 */
$collection->attachRoute(new Route('/articles', array(
    '_controller' => 'myMvc\Controllers\ArticleController::index',
    'methods' => 'GET'
)));

$collection->attachRoute(new Route('/articles/create', array(
    '_controller' => 'myMvc\Controllers\ArticleController::create',
    'methods' => 'GET'
)));

$collection->attachRoute(new Route('/articles/:id', array(
    '_controller' => 'myMvc\Controllers\ArticleController::show',
    'methods' => 'GET'
)));

$collection->attachRoute(new Route('/articles/:id/edit', array(
    '_controller' => 'myMvc\Controllers\ArticleController::edit',
    'methods' => 'GET'
)));

$collection->attachRoute(new Route('/articles/:id/delete', array(
    '_controller' => 'myMvc\Controllers\ArticleController::delete',
    'methods' => 'GET'
)));

$collection->attachRoute(new Route('/articles', array(
    '_controller' => 'myMvc\Controllers\ArticleController::insert',
    'methods' => 'POST'
)));

$collection->attachRoute(new Route('/articles/:id', array(
    '_controller' => 'myMvc\Controllers\ArticleController::update',
    'methods' => 'POST'
)));

$router = new Router($collection);
// $router->setBasePath('/myMvc_v2');
$route = $router->matchCurrentRequest();

// var_dump($route);

/*
* Display the view
*/
View::displayView();