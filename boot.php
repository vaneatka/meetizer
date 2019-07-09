<?php
    //bootstrapp
    include 'vendor/autoload.php';
    // va starta tot ce poate fi necesar in aplicatie
    
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