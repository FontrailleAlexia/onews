<?php

require './inc/function.php';
require './data/articles.data.php';

// déclaration du tableau stockant les différentes entrée de notre menu
$menu = [
  'Plan du site' => './plan_de_site.php',
  'Mentions légales' => './mentions_legales.php',
  'Contact' => './contact.php',
  // 'Blog' => './blog.php',
];
// débug de la variable $menu
// var_dump($menu);



?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>oNews</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/contact.css">
</head>
<body>
    <div class="wrapper">
      <!-- emmet: header>h1+p+nav>ul>li*3>a -->
      <header class="left">
        <h1 class="left__title">O'Clock Students News</h1>
        <div class="left__paragraph">
          <h2 class="left__subtitle"><strong class="left__subtitle-strong">Latest news</strong> from our students</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque scelerisque suscipit nibh quis porttitor. Integer iaculis mi urna, a pulvinar quam adipiscing ut. Vivamus vel vestibulum mauris.
          </p>
        </div>
        <nav>
          <ul class="left__nav">
            <?php
              // génération du menu en parcourant le tableau $menu
              foreach($menu as $label => $url) {
                echo '<li class="left__nav-item">';
                  // génération de la balise a avec la bonne valeur pour l'attribut href
                  echo '<a href="' . $url . '" class="left__nav-link">';
                    // affichage du texte du lien
                    echo $label;
                  echo '</a>';
                echo '</li>';
              }

            ?>

          <!--
            <li class="left__nav-item"><a href="./plan_de_site.html" class="left__nav-link">Plan du site</a></li>
            <li class="left__nav-item"><a href="./mentions_legales.html" class="left__nav-link">Mentions légales</a></li>
            <li class="left__nav-item"><a href="./contact.html" class="left__nav-link">Contact</a></li>
          //-->
          </ul>
        </nav>
      </header>
      <main class="right">