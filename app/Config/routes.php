<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	Router::connect('/', array('controller' => 'pages', 'action' => 'index'));
	
    Router::connect('/DevCamp', array('controller' => 'pages', 'action' => 'devcamp'));
    
    Router::connect('/error', array('controller' => 'pages', 'action' => 'displayError'));
    Router::connect('/success', array('controller' => 'pages', 'action' => 'displaySuccess'));
    
    Router::connect('/admin/viewUsers', array('controller' => 'admin', 'action' => 'viewUser'));
    Router::connect('/admin/addUser', array('controller' => 'admin', 'action' => 'addUser'));
    Router::connect('/admin/logs', array('controller' => 'admin', 'action' => 'logs'));
    Router::connect('/admin', array('controller' => 'admin', 'action' => 'index'));
    Router::connect('/admin/generateTag', array('controller' => 'admin', 'action' => 'addactiontag'));
    Router::connect('/admin/assignTag', array('controller' => 'admin', 'action' => 'assignActiontag'));
    
    Router::connect('/users/signup', array('controller' => 'users', 'action' => 'signup'));
    Router::connect('/users/login', array('controller' => 'users', 'action' => 'login'));
    Router::connect('/users/logout', array('controller' => 'users', 'action' => 'logout'));
    Router::connect('/users', array('controller' => 'users', 'action' => 'index'));
    
    Router::connect('/users/tagActivate/*', array('controller' => 'users', 'action' => 'tagActivate'));
    Router::connect('/users/tagEdit/*', array('controller' => 'users', 'action' => 'tagEdit'));
    Router::connect('/users/tag/*', array('controller' => 'users', 'action' => 'getTagInfo'));
    Router::connect('/users/tagAll/*', array('controller' => 'users', 'action' => 'getAllTagInfo'));
    Router::connect('/users/tagSearch/*', array('controller' => 'users', 'action' => 'getTagSearchInfo'));
    Router::connect('/users/qr/*', array('controller' => 'users', 'action' => 'gteqrcode'));
    
/**
 * ...this is the route for redirecting.
 */	
    
    //Router::connect('/*', array('controller' => 'pages', 'action' => 'redirectToUrl'));
    Router::connect('/*', array('controller' => 'pages', 'action' => 'loadGUID'));
/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
