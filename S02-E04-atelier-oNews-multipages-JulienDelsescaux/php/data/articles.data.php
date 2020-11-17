<?php
// mettre un var_dump permet de s'assurer que le fichier est bien chargé

// var_dump('fichier');

/*
créer un tableau associatif contenant les données suivantes sur le premier article :
- titre
- auteur
- texte
*/
$article0 = [
  'titre' => 'Le secret de maître Cornille',
  'auteur' => 'Alphonse Daudet',
  'texte' => 'Francet Mamaï, un vieux joueur de fifre, qui vient de temps en temps
  faire la veillée chez moi, en buvant du vin cuit, m’a raconté l’autre soir
  un petit drame de village dont mon moulin a été témoin il y a quelque
  vingt ans. Le récit du bonhomme m’a touché, et je vais essayer de vous
  le redire tel que je l’ai entendu.
  Imaginez-vous pour un moment, chers lecteurs, que vous êtes assis
  devant un pot de vin tout parfumé, et que c’est un vieux joueur de
  fifre qui vous parle.',

  'categorie' => 'work',
  'avatar' => '../images/icon-dar.png',
  'date' => -4090956808
];


$article1 = [
  'titre' => 'La chèvre de Monsieur Seguin',
  'auteur' => 'Alphonse Daudet',
  'texte' => 'Tu seras bien toujours le même, mon pauvre Gringoire !
Comment ! on t’offre une place de chroniqueur dans un bon journal
de Paris, et tu as l’aplomb de refuser... Mais regarde-toi, malheureux
garçon ! Regarde ce pourpoint troué, ces chausses en déroute, cette
face maigre qui crie la faim. Voilà pourtant où t’a conduit la passion
des belles rimes ! Voilà ce que t’ont valu dix ans de loyaux services
dans les pages du sire Apollo... Est-ce que tu n’as pas honte, à la fin ?
Fais-toi donc chroniqueur, imbécile ! fais- toi chroniqueur ! Tu gagneras
de beaux écus à la rose, tu auras ton couvert chez Brébant*, et tu pourras
te montrer les jours de première avec une plume neuve à ta barrette...
Non ? Tu ne veux pas ?... Tu prétends rester libre à ta guise jusqu’au
bout... Eh bien, écoute un peu l’histoire de la chèvre de M. Seguin. Tu
verras ce que l’on gagne à vouloir vivre libre.',
  'categorie' => 'team',
  'avatar' => '../images/icon-dar.png',
  'date' => -4090956808
];


$article2 = [
  'titre' => 'Le corbeau et le renard',
  'auteur' => 'Jean de La Fontaine',
  'texte' => 'Maître Corbeau, sur un arbre perché,<br/>
  Tenait en son bec un fromage.<br/>
  Maître Renard, par l\'odeur alléché,<br/>
  Lui tint à peu près ce langage :<br/>
  Et bonjour, Monsieur du Corbeau.<br/>
  Que vous êtes joli ! que vous me semblez beau !<br/>
  Sans mentir, si votre ramage<br/>
  Se rapporte à votre plumage,<br/>
  Vous êtes le Phénix des hôtes de ces bois.<br/>
  À ces mots, le Corbeau ne se sent pas de joie ;<br/>
  Et pour montrer sa belle voix,<br/>
  Il ouvre un large bec, laisse tomber sa proie.<br/>
  Le Renard s\'en saisit, et dit : Mon bon Monsieur,<br/>
  Apprenez que tout flatteur<br/>
  Vit aux dépens de celui qui l\'écoute.<br/>
  Cette leçon vaut bien un fromage, sans doute.<br/>
  Le Corbeau honteux et confus<br/>
  Jura, mais un peu tard, qu\'on ne l\'y prendrait plus.',
  'categorie' => 'team',
  'avatar' => '../images/icon-john.png',
  'date' => -10991724808
];

$article3 = [
  'titre' => 'PHP Hypertext Preprocessor',
  'auteur' => 'Wikipedia',
  'texte' => "PHP est un langage de script utilisé le plus souvent côté serveur : dans cette architecture, le serveur interprète le code PHP des pages web demandées et génère du code (HTML, XHTML, CSS par exemple) et des données (JPEG, GIF, PNG par exemple) pouvant être interprétés et rendus par un Navigateur web. PHP peut également générer d'autres formats comme le WML, le SVG et le PDF.<br/><br/>

  Il a été conçu pour permettre la création d'applications dynamiques, le plus souvent développées pour le Web. PHP est le plus souvent couplé à un serveur Apache bien qu'il puisse être installé sur la plupart des serveurs HTTP tels que IIS ou nginx. Ce couplage permet de récupérer des informations issues d'une base de données, d'un système de fichiers (contenu de fichiers et de l'arborescence) ou plus simplement des données envoyées par le navigateur afin d'être interprétées ou stockées pour une utilisation ultérieure.<br/><br/>
  
  C'est un langage peu typé et souple et donc facile à apprendre par un débutant mais, de ce fait, des failles de sécurité peuvent rapidement apparaître dans les applications. Pragmatique, PHP ne s'encombre pas de théorie et a tendance à choisir le chemin le plus direct. Néanmoins, le nom des fonctions (ainsi que le passage des arguments) ne respecte pas toujours une logique uniforme, ce qui peut être préjudiciable à l'apprentissage.<br/><br/>
  
  Son utilisation commence avec le traitement des formulaires puis par l'accès aux bases de données. L'accès aux bases de données est aisé une fois l'installation des modules correspondants effectuée sur le serveur. La force la plus évidente de ce langage est qu'il a permis au fil du temps la résolution aisée de problèmes autrefois compliqués et est devenu par conséquent un composant incontournable des offres d'hébergements.<br/><br/>
  
  Il est multi-plateforme : autant sur Linux qu'avec Windows il permet aisément de reconduire le même code sur un environnement à peu près semblable (prendre en compte les règles d'arborescences de répertoires qui peuvent changer).",

  'categorie' => 'work',
  'avatar' => '../images/icon-spr.png',
  'date' => 788914800
];


$article4 = [
  'titre' => 'La tristitude',
  'auteur' => 'Oldelaf',
  'texte' => 'La tristitude<br/>
  C\'est quand tu viens juste d\'avaler un cure-dent<br/>
  Quand tu te rends compte que ton père est Suisse-Allemand<br/>
  Quand un copain t\'appelle pour son déménagement<br/>
  Et ça fait mal<br/>
  La tristitude<br/>
  C\'est franchir le tunnel de Fourvière le 15 août<br/>
  Quand tu dois allez vivre à Nogent-le-Rotrou<br/>
  Quand ton coiffeur t\'apprends que t\'as des reflets roux<br/>
  Et ça fait mal<br/>
  La tristitude<br/>
  C\'est moi, c\'est toi<br/>
  C\'est nous, c\'est quoi<br/>
  C\'est un peu de détresse dans le creux de nos bras<br/>
  La tristitude<br/>
  C\'est hum, c\'est ouh<br/>
  C\'est eux, c\'est vous<br/>
  C\'est la vie qui te dis que ça ne vas pas du tout<br/>
  La tristitude<br/>
  C\'est quand t\'es choisis pour être gardien au hand-ball<br/>
  Quand t\'es dans la Mercos de la Princesse de Galle<br/>
  Quand le samedi soir c\'est ta fille qui joue sur Canal<br/>
  Et ça fait chier…<br/>
  ',

  'categorie' => 'team',
  'avatar' => '../images/icon-ohz.png',
  'date' => 1313704800
];

$article5 = [
  'titre' => 'Egoless programming',
  'auteur' => 'Wikipedia',
  'texte' => "La programmation sans ego (Egoless programming) est un style de programmation des ordinateurs dans lequel les facteurs personnels sont minimisés, de façon à améliorer la qualité. Les méthodes de coopération suggérées sont semblables à celles utilisés dans d'autres projets collectifs, comme Wikipédia.",

  'categorie' => 'news',
  'avatar' => '../images/icon-dar.png',
];

// création d'un tableau qui stocke tous nos articles
$articleList = [
  0 => $article0,
  1 => $article1,
  2 => $article2,
  3 => $article3,
  4 => $article4,
  5 => $article5,
];

// var_dump($articleList);