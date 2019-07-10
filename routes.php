<?php
// logica de routing
// domain.ext/?q=some/path;

$path = $_GET['q'] ?? '/'; // default pagina radacina

$routes = [
    '/home'=> 'home',
    '/events'=> 'EventController@index',
    '/events/add'=> 'EventController@add',
    '/events/save'=> 'EventController@save',
    '/participants'=> 'ParticipantController@index',    
    '/tickets'=> 'tickets',
];

if(array_key_exists($path, $routes)){
    list($controller,$method) = explode('@', $routes[$path]);        
    include "logic/$controller.php";
    $controller::$method();
}else{
    render('404');
}

// var_dump($path);





?>