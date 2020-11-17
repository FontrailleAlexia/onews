<?php
// chargement du header ; nous utilisons un chemin relatif
// injection du contenu du fichier inc/header.php "ici"
// le require stoppe le traitement de php si jamais le fichier pas trouvé
require './inc/header.php';
?>

<!-- emmet: h2+article*6>a+h3+div(img+strong+time)+p+a -->
<h2 class="right__title">Latest News</h2>
<div class="posts">

<?php
// nos articles sont stockés dans un tableau ; nous allons parcourir ce tableau pour afficher les vignette

foreach($articleList as $articleId => $article) {
  // affichage de la vignette de l'article
  $html = displayArticleThumbnail($articleId, $articleList);
  echo $html;    
}
?>
</div>

<?php
// chargement du contenu du fichier inc/footer.php
//include continue le traitement même si le fichier n'est pas trouvé
include './inc/footer.php';
?>
