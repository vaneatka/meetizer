<?php


// functia care afiseaza un template dupa denumire
function render($template, $data =[]){
    global $twig;
    print $twig->render("pages/$template.html.twig", $data);
}

// functia care poate inregistra mesaje in sesiune

function set_message($message, $context, $status = 'success'){// status poate fi success, warning, error, notice,...
    if(session_status() != PHP_SESSION_ACTIVE){
        session_start();
    }
    $_SESSION['messages'][$context] = [$status => $message];
}

function get_messages($context, $status = "" ){
    if(session_status() != PHP_SESSION_ACTIVE){
        session_start();
    }
    return $_SESSION['messages'][$context] ?? [];
}

function has_messages($context, $status = ""){
    if(session_status() != PHP_SESSION_ACTIVE){
        session_start();
    }
    return isset($_SESSION['messages'][$context]);
}


?>