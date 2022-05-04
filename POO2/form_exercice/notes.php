<?php

// On ne peut pas créer d'objet qui sont abstracts
abstract class vehicle
{
    public $couleur = "rouge";

    // Force les autres class hérité a créé une function getName()
    abstract function getName();

    // Peut etre appeler sans créer d'objet avec "::"
    // Ne peut pas etre appeler avec ->
    public static $toto = "toto"; 

}

class voiture extends vehicle
{
    public $couleur = "bleu";

    function getName()
    {
        echo "Toyota";
    }

    public static $titi = "titi";

}

$car = new voiture();
echo $car->couleur;
echo vehicle::$toto;
echo voiture::$titi;