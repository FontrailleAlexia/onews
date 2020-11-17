<?php

var_dump($_GET);
var_dump($_POST);


//echo $_POST['firstname'];


//vérification si l'index image existe dans $_POST
if(isset($_POST['image'])) {
    // si l'image existe dans post ; alors on affiche
    echo  $_POST['image'];
}
else {
    echo "Image non envoyée";
}

// ========================================

//pour récupérer une valeur envoyée en POST ou en GET, nous pouvons utiliser la fonction filter_input

// nous demandons ici à la fonction filter_input d'aller chercher dans POST la valeur de 'image'
$image = filter_input(INPUT_POST, 'image');
var_dump($image);


// récupération dans $_GET de la "variable" image
$imageGet = filter_input(INPUT_GET, 'image');
var_dump($imageGet);


// ========================================================





