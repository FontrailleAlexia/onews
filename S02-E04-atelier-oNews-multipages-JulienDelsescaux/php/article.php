<?php
// chargement du header ; nous utilisons un chemin relatif
// injection du contenu du fichier inc/header.php "ici"
require './inc/header.php';

/*
créer un tableau associatif contenant les données suivantes sur le premier article :
- titre
- auteur
- texte
*/

// récupération du numéro de l'article envoyé en $_GET
$articleId = filter_input(INPUT_GET, 'articleId');

// récupération de l'article demandé
$article = $articleList[$articleId];
?>

<?php
//partie affichage de l'article ; chargement du template article.tpl.php
require './template/article.tpl.php';
?>

<?php
require './inc/footer.php';
?>