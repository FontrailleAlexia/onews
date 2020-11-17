<?php
// chargement du header ; nous utilisons un chemin relatif
// injection du contenu du fichier inc/header.php "ici"
require './inc/header.php';
?>

<h2 class="right__title">Mentions légales</h2>
<div class="posts">
  <div class="post post--solo">
    <p class="single">
      TODO
    </p>
    
    <?php echo getHomeLink();?>

  </div>
</div>

<?php
// chargement du contenu du fichier inc/footer.php
require './inc/footer.php';
?>
