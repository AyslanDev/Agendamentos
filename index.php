<?php

use CoffeeCode\Router\Router;

require __DIR__."/vendor/autoload.php";

$router = new Router(URL);
$router->namespace("\app\controllers");

$router->get("/", "HomeController:home");
$router->get("app/api", "app/api/verificaHorarios.php");

$router->dispatch();

?>