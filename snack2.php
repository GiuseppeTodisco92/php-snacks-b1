<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php

    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];

    echo $name ."<br>";
    echo $mail ."<br>";
    echo $age ."<br>";

    if(strlen($name) > 3 && filter_var($mail, FILTER_VALIDATE_EMAIL) && is_numeric($age) ){
        echo "ACCESSO VALIDO !";
    } else {
        echo "ACCESSO NON VALIDO !";
    }



?>