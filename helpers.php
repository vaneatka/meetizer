<?php


// functia care afiseaza un template dupa denumire
function render($template, $data =[]){
    global $twig;
    print $twig->render("pages/$template.html.twig", $data);
}

// functia care poate inregistra mesaje in sesiune

function set_message($message, $context, $status = 'success'){// status poate fi success, warning, error, notice,...
    session();
    $_SESSION['messages'][$context] = [$status => $message];
}

function get_messages($context, $status = "" ){
    session();
    return $_SESSION['messages'][$context] ?? [];
}

function has_messages($context, $status = ""){
    session();
    return isset($_SESSION['messages'][$context]);
}

function session(){
    if(session_status() != PHP_SESSION_ACTIVE){
        session_start();
    }
}


?>