<?php
    //bootstrapp
    include 'vendor/autoload.php';

    $countries = include 'vendor/umpirsky/country-list/data/en_US/country.php';
    // va starta tot ce poate fi necesar in aplicatie
    
    ///////////////// validation init //////////////////////
    
        use Respect\Validation\Validator as v; 
        $v = new v();
    
    ///////////////// validation init //////////////////////
    
        ////////////////// Twig init   //////////////////////////////
        use \Twig\Loader\FilesystemLoader;
        use \Twig\Environment;
        
        $loader = new FilesystemLoader('./templates');
        $twig = new Environment($loader, [
            'cache' => FALSE,
            'debug' => true
            ]);
        ////////////////// Twig init   //////////////////////////////          

        
        
        ////////////////// Helpers init   //////////////////////////////        
        include 'helpers.php';
        
        ////////////////// Helpers init   //////////////////////////////        



        //////////////////////// routes init ///////////////////////////////////
        include 'routes.php';
        //////////////////////// routes init ///////////////////////////////////
?>