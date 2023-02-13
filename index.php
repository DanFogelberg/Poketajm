<?php

require __DIR__ . '/vendor/autoload.php';

require 'bootstrap.php';
use App\Database\Connection;
use App\Database\QueryBuilder;
use App\Http\Router;
use App\Http\Request;

$router = new Router([
     "/" => "/controllers/pokedex.php",
     "/pokemon" => "/controllers/pokemon.php",
     "/404" => "/controllers/404.php"
]);

try{
    require __DIR__ . $router->direct(Request::uri());
}catch(\Throwable $th){
     require __DIR__ . $router->direct("/404");
}



