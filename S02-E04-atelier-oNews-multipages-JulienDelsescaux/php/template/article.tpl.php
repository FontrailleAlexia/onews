
<!-- emmet: h2+article*6>a+h3+div(img+strong+time)+p+a -->
<h2 class="right__title">Latest News</h2>

<article class="full">
<!-- dynamisation de l'affichage de la catégorie -->
<a href="" class="post__category post__category--color-<?=$article['categorie'];?>"><?=$article['categorie'];?></a>
<h3><?php
    // affichage du titre de l'article
    // on va chercher la valeur stockée à l'index "titre" dans la variable $article
    echo $article['titre'];
?></h3>
<div class="post__meta">
    <img class="post__author-icon" src="<?=$article['avatar'];?>" alt="">
    <strong class="post__author">
    <!--syntaxe raccourcie pour faire un echo en php. On parle de "short tags" //-->
    <?=$article['auteur'];?>
    </strong>
    <?php
    // génération de la chaine "YYYY-MM-DD" (mais pour la date du jour)
    // Y = année sur quatre chiffres
    // m = mois sur deux chiffres
    // d = jour sur deux chiffres
    // doc sur le format des dates : https://www.php.net/manual/fr/datetime.format.php
    // doc sur la fonction date() : https://www.php.net/manual/fr/function.date.php

    /* bingo bonus =======================================
    $dateChoisie = strtotime('2013-02-01'); //<- transforme une date "standard" en timestamp

    $datetime = date('Y-m-d', $dateChoisie);
    $jour = date('d', $dateChoisie);
    $mois = date('F', $dateChoisie);
    $annee = date('Y', $dateChoisie);
    */

    /* mega bingo bonus =======================================
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
    $mois = $moisFrance[date('n')];
    */

    if(isset($article['date'])) {
        $date = $article['date'];
    }
    else {
        $date = time();
    }

    $datetime = date('Y-m-d', $date);

    
    $jour = date('d', $date);
    //$mois = date('F');
    // date('n') nous retourne le numéro du mois (entre 1 et 12)
    
    //var_dump(date('n'));

    $mois = getMonthFr(date('n', $date));
    $annee = date('Y', $date);


    ?>
    <time datetime="<?=$datetime;?>">le <?=$jour;?> <?=$mois;?> <?=$annee?></time>
</div>
<p><?php
// Affichage du contenu de l'article
echo $article['texte'];
?></p>
<?php echo getHomeLink();?>
</article>
