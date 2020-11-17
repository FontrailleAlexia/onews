<?php
// chargement du header ; nous utilisons un chemin relatif
// injection du contenu du fichier inc/header.php "ici"
require './inc/header.php';

// $_GET  est une variable gérée "automatiquement" par php. Cette variable est un tableau associatif. Cette variable est dite dans le vocabulaire de php "variable super globale"
var_dump($_GET);
var_dump($_POST);

?>


<h2 class="right__title">Contact</h2>

<!-- une balise form nous permet d'encapsuler des "champs" dont les valeurs seront transmises au serveur //-->
<!-- Il y a deux façon d'envoyer les données grace à un formulaire

- une méthode GET : les variables sont envoyées dans l'url (ça permet entres autres de partager des url) - la méthode GET est la méthode utilisée par défaut
- une méthode POST , les variables sont envoyée de façon "cachées"

//-->
<form class="contact-form" method="POST" action="./enregistrer-contact.php">
  <div class="contact-form__division contact-form__division-identity">
    <h3 class="identite__title">Identité</h3>
    <fieldset>
      <label for="gender_choice">Je suis</label>
      
      <input type="radio" name="gender" id="gender_choice_woman" value="f">
      <label for="gender_choice_woman" class="gender_choice">Une femme /</label>
      
      <input type="radio" name="gender" id="gender_choice_man" value="h">
      <label for="gender_choice_man" class="gender_choice">Un homme</label>
    </fieldset>
    
    <label for="firstname">Mon prénom est</label>
    <input type="text" id="firstname" value="Toto" name="firstname"></input>

    <label for="family-name">Et mon nom</label>
    <input type="text" id="family-name" value="" name="lastname"></input>


    <label for="decouverte">J'ai connu ce site grâce à</label>
    <select name="decouverte">
      <option value="none" selected disabled hidden>Choisir</option>
      <option value="facebook">Site Facebook</option>
      <option value="twitter">Site Twitter</option>
      <option value="google">Site Google</option>
      <option value="bouche-a-oreille">Bouche à oreille</option>
      <option value="jt">JT de 13h de Jean-Pierre Pernault</option>
      <option value="autre">Autre</option>
    </select>
  </div>
  <div class="contact-form__division contact-form__division-message">
    <h3 class="message__titre">Message</h3>
    <label for="mail">Répondez-moi via</label>
    <input type="email" id="mail" value="Adresse Email"></input>

    <label for="message">Je voulais vous dire que</label>
    <textarea name="message">Votre message</textarea>

    <label for="choose-pictures">Et vous montrer ça aussi</label>
    <input type="file" id="choose_picture" value="Browse...">

  </div>
  <div class="contact-form__division contact-form__division-certif">
    <label for="veracite_des_informations">Je certifie la véracité de ces informations.</label>
    <input type="checkbox" id="veracite_des_informations"></input>
  </div>
  <button type="submit" value="Envoyer">Envoyer</button>
</form>

<?php
// chargement du contenu du fichier inc/footer.php
require './inc/footer.php';
?>