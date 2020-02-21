<?php

require_once '../vendor/autoload.php';
set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHandler');
$router = new Core\Router();

$router->add('',['namespace'=>'user','controller' => 'user', 'action'=> 'login']);
$router->add('user',['namespace'=>'user','controller' => 'user', 'action'=> 'dashboard']);
$router->add('user/',['namespace'=>'user','controller' => 'user', 'action'=> 'dashboard']);
$router->add('{controller}/{action}');
$router->add('{controller}/{id:\d+}/{action}');
$router->add('admin/{controller}/{id:\d+}/{action}', ['namespace' => 'Admin']);
$router->add('admin/{controller}/{action}', ['namespace' => 'Admin']);
$router->add('user/{controller}/{action}', ['namespace' => 'user']);
$router->dispatch($_SERVER['QUERY_STRING']); 


?>