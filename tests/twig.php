<?php
// testing twig engine

use \Twig\Loader\FilesystemLoader;
use \Twig\Environment;
use \Twig\Extension\DebugExtension;
use Symfony\Component\Debug\Debug;

Debug::enable();


print 'Test STARTED <br>';
// cream obiectul unui loader - seteaza folderul pentru sabloane
$loader = new FilesystemLoader('./templates');
$twig = new Environment($loader, [
    'cache' => FALSE,
    'debug' => true
    ]);
$twig->addExtension(new DebugExtension());
print $twig->render('pages/events.html.twig',[
    'data' => [
        'money'=> 1000000,
        'currency' => 'USD',
        'list' => [
            'one' => 100,
            'two' => 200,
            'three' => 300,
        ]
    ]
]);
    
print 'Test Ended ';    
// generati o lista de evenimente(10-15)
// transmiteti lista in event(twig) + afisati lista
//


?>