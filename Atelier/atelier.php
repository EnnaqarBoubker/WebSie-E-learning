<?php
    //exercice 1 instalation server in windows.


    //------------exerce 2

    echo "Hello youcode" . "<br>";

    /*Output
    
    Hello youcode
    */


    //-------------exercer 3

    $monNom    = "Ennaqar";
    $monPrenom = "Boubker";
    $monAge    = 27 ;

    echo "$monNom <br> $monPrenom <br> $monAge <br> "; //afficher value du var
    echo '$monNom <br> $monPrenom <br> $monAge <br><br>'; // afficher nom var et comme string,
    
    //syntaxe Heredoc aficer var
    $monInfo = <<< FIRST
        My first name is $monNom ,
        and last name is $monPrenom ,
        and I $monAge years old.
        FIRST;

    echo $monInfo ;

    //syntaxe Nowdoc aficher var comme string
    $monInfo = <<< 'FIRST'
        My first name is $monNom ,
        and last name is $monPrenom ,
        and I $monAge years old.<br><br>
        FIRST;

    echo $monInfo ;

    // -----------exercice 4 

    // Convertir un booléen en entier int

    echo intval(true ) . "<br>";

    //Convertir un entier en chaîne de caractères string.
    
    $entier = 22;

    $entier =  strval($entier);

    echo $entier;


    //------------------ exercice 6

    $technoLogi = array ("HTML", "HTML5", "CSS", "CSS3", "Bootstrap", "PHP");

     

    
?>


