<?php
use Core\Router; 

Router::connect('/', ['controller' => 'app', 'action' => 'index']);
Router::connect('/coucou', ['controller' => 'app', 'action' => 'coucou']);
Router::connect('/user', ['controller' => 'user', 'action' => 'index']);
Router::connect('/user/login', ['controller' => 'user', 'action' => 'login']);
Router::connect('/user/register', ['controller' => 'user', 'action' => 'register']);
Router::connect('/user/read', ['controller' => 'user', 'action' => 'reader']);
