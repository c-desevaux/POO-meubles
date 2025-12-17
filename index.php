<?php

    require_once('classes/Batiment.class.php');
    require_once('classes/Contenant.class.php');
    require_once('classes/Meuble.class.php');
    require_once('classes/Piece.class.php');


    $bureau = new Meuble(2, 1, 1, "Bureau");
    echo "La surface du bureau est: ".$bureau->getSurface()."m² <br>";
    //$bureau2 = new Meuble(2, 0, 1, "Bureau2");
    $chaise = new Meuble(1, 1, 1, "Chaise");
    echo "La surface du chaise est: ".$chaise->getSurface()."m² <br>";


    $tresGrandBureau = new Meuble (10, 1, 10, "Giant Desk");

    echo $bureau->affiche();

    $cuisine = new Piece(3, 3, 3, "Cuisine", 2);

    $cuisine->ajouterMeuble($tresGrandBureau);
    //$cuisine->ajouterMeuble($bureau2);
    $cuisine->ajouterMeuble($chaise);

    echo "La surface de meuble de la cuisine est: ".$cuisine->getSurfaceMeuble()."m². <br>";
    echo "La surface libre de la cuisine est: ".$cuisine->getSurfaceLibre()."m². <br>";

    echo $cuisine->affiche();



    
?>