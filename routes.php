<?php
// logica de routing
// domain.ext/?q=some/path;

$path = $_GET['q'] ?? '/'; // default pagina radacina

$routes = [
    '/home'=> 'home',
    '/events'=> 'EventController@index',
    '/participants'=> 'ParticipantController@index',
    '/tickets'=> 'tickets',
];

if(array_key_exists($path, $routes)){
    list($controller,$method) = explode('@', $routes[$path]);
    var_dump($controller, $method);
    include "logic/$controller.php";
    $controller::$method();
}else{
    render('404');
}

// var_dump($path);





?>