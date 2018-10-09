<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;



Router::defaultRouteClass(DashedRoute::class);

Router::prefix('admin', function (RouteBuilder $routes) {
    $routes->connect('/dashboards', ['controller' => 'Admins', 'action' => 'index',]);
    $routes->connect('/companies', ['controller' => 'Companies', 'action' => 'index']);
    $routes->connect('/departments', ['controller' => 'Departments', 'action' => 'index']);
    $routes->connect('/groups', ['controller' => 'Groups', 'action' => 'index']);
    $routes->connect('/userdocuments', ['controller' => 'UserDocuments', 'action' => 'index']);
    $routes->connect('/userdoccategories', ['controller' => 'UserDocCategories', 'action' => 'index']);
    $routes->connect('/userrequestreasons', ['controller' => 'UserRequestReasons', 'action' => 'index']);
    $routes->connect('/userrequestheaders', ['controller' => 'UserRequestHeaders', 'action' => 'index']);
    $routes->connect('/userrequestdetails', ['controller' => 'UserRequestDetails', 'action' => 'index']);
    $routes->connect('/articlecategories', ['controller' => 'ArticleCategories', 'action' => 'index']);
    $routes->connect('/positions', ['controller' => 'Positions', 'action' => 'index']);
    $routes->fallbacks(DashedRoute::class);
});

Router::scope('/', function (RouteBuilder $routes) {
    $routes->connect('/', ['controller' => 'Publics', 'action' => 'index']);
    $routes->connect('/approvals', ['controller' => 'Publics', 'action' => 'approval']);
    $routes->connect('/monitoring-approval', ['controller' => 'UserRequestHeaders', 'action' => 'index']);
    $routes->connect('/user-request-details-list', ['controller' => 'UserRequestDetails', 'action' => 'index']);
    $routes->connect('/discussion-list', ['controller' => 'Discussions', 'action' => 'index']);
    $routes->connect('/discussion-view', ['controller' => 'Discussions', 'action' => 'view']);
    $routes->connect('/user-request', ['controller' => 'UserRequestHeaders', 'action' => 'add']);
    
    //For Article
    $routes->connect('/articles',['controller' => 'Articles', 'action'=>'index']);
    // $routes->connect('/articles-add',['controller' => 'Articles', 'action'=>'add']);
    $routes->setExtensions(['json']);
    $routes->fallbacks(DashedRoute::class);
});