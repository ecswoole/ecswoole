<?php

declare(strict_types=1);

use Hyperf\HttpServer\Router\Router;

Router::get('/', 'App\Controller\Web\IndexController@index');
