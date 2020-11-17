<?php

// je me place dans header.php car ce fichiers est inclu dans toutes les pages
// cette fonction a un paramètre qui est le numéro de mois demandé
// cette fonction retourne en français le nom du mois
function getMonthFr($numeroDuMois)
{
  // attention ceci est un tableau associatif !
  $moisFrance = [
    1 => 'Janvier',
    2 => 'Février',
    3 => 'Mars',
    4 => 'Avril',
    5 => 'Mai',
    6 => 'Juin',
    7 => 'Juillet',
    8 => 'Août',
    9 => 'Septembre',
    10 => 'Octobre',
    11 => 'Novembre',
    12 => 'Décembre',
  ];
  return $moisFrance[$numeroDuMois];
}


function getHomeLink()
{
    return '<a href="./index.php" class="post__link">🏠 Retour à l\'accueil</a>';
}

// cette fonction va nous nous permettre d'afficher une vignette d'article
// cette fonction a deux paramètres : 
/*
  - $articleId qui nous permet de savoir quel article nous souhaitons afficher
  - $tableauListeDesArticles est le paramètre qui va nous permettre de récupérer la liste de tous les articles
*/

/*
l'appel à cette fonction se fait dans index.php de la manière suivante :

$html =     displayArticleThumbnail(0,        $articleList);
                                    |               |
                                    |               |
                                    |               |
                                    V               V
*/
function displayArticleThumbnail($articleId, $tableauListeDesArticles)
{
  // récupérationd de l'article demandé
  $article = $tableauListeDesArticles[$articleId];

  // génération du html de la vignette de l'article

  // ce test est fait car il n'y a pas de date sur tout les articles
  if(isset($article['date'])) {
    $time = $article['date'];
  }
  else {
    // si l'article n'a pas de date ; nous prenons "le temps actuel"
    $time = time();
  }
  // formatage de la date
  // $mois = date('m', $time);
  $annee = date('Y', $time);
  $jour = date('d', $time);

  // date('n', $time) ; permet de récupérer le numéro du mois (entre 1 et 12);
  $mois = getMonthFr(date('n', $time));

  $html = '
    <article class="post">
      <a href="" class="post__category post__category--color-' . $article['categorie'] . '">' . $article['categorie'] . '</a>

      <h3>'. $article['titre'] . '</h3>
      <div class="post__meta">
        <img class="post__author-icon" src="' . $article['avatar'] . '" alt="">
        <strong class="post__author">' . $article['auteur'] . '</strong>
        <time datetime="2018-02-10">le ' . $jour . ' ' . $mois . ' ' . $annee . '</time>
      </div>
      <p>' .$article['texte'] . '</p>
      <a href="article.php?articleId=' . $articleId . '" class="post__link">Continue reading</a>
    </article>
  ';
  return $html;
}


