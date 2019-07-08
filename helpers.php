<?php


// functia care afiseaza un template dupa denumire
function render($template, $data =[]){
    global $twig;
    print $twig->render("pages/$template.html.twig", $data);
}


?>