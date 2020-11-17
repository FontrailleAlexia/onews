<?php
// si l'on a 10 ans cm2
// si l'on 11 ans 6eme
// si l'on à plus de 11 ans on est "grande classe"

// enregistrement des classes correspondantes en fonction de l'age (de 1 ans à 18ans)


// pour tous les âges entre 1 et 18 ans
    // il va falloir savoir dans quelle classe on est
        // si l'on a moins de 10 ans on est "petit classe"
        // si l'on a 10 ans cm2
        // si l'on 11 ans 6eme
        // si l'on à plus de 11 ans on est "grande classe"

    // une fois que l'on sait dans quelle classe on est, on va enregistrer en fonction de l'age la classe associée

    $classeEnFonctionDeLAge = [];

    for($age = 1 ; $age <= 18 ; $age ++) {
        // si l'on a moins de 10 ans on est "petit classe"
        if( $age < 10) {
            $classe = 'petite classe';
        }
        // si l'on a 10 ans cm2
        elseif($age === 10) {
            $classe = 'cm2';
        }
        // si l'on 11 ans 6eme
        elseif($age === 11) {
            $classe = '6eme';
        }
        // si l'on à plus de 11 ans on est "grande classe"
        else {
            $classe = "grande classe";
        }
        // une fois que l'on sait dans quelle classe on est, on va enregistrer en fonction de l'age la classe associée
        //$classeEnFonctionDeLAge[$age] = $classe;
        $cle = $age;
        //$cle = $age;
        $classeEnFonctionDeLAge[$cle] = $classe;
    }

    // var_dump($classeEnFonctionDeLAge);


    $ageUtilisateur = filter_input(INPUT_GET, 'age');
    // il était possible également de faire $ageUtilisateur = $_GET['age']);
    var_dump($ageUtilisateur);

    echo '<h3>Votre enfant a ' . $ageUtilisateur . ' ans<h3>';
    echo '<p>' .
        'La classe correspondante à son âge est : ' .
        '<strong>' . $classeEnFonctionDeLAge[$ageUtilisateur] . '</strong>' .
    '</p>';

