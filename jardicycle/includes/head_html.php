<?php
/**==================================**/
/** Créé par : Eddy MERCIER **/
/** Date : 23/03/2022      **/
/** On place ICI le Code HTML que l'on trouve dans le Header des pages du site      **/
/** Des valeurs HTML, les link pour Bootstrap, différents script (Google Sign-in,...)...      **/
/**==================================**/
// Récupère les infos pour les balises 'meta'
include_once("configWeb.php");
?>
<?php // TODO: Changer contenu des balises META des pages dans configWeb.php?>
<?php // <meta http-equiv="Content-Type" content="text/html" > ?>
<meta charset="UTF-8" >
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
<meta name="description" content="<?php echo $sitewebInfo['description'][$pageNameInfo]; ?>">
<meta name="title" content="<?php echo $sitewebInfo['description'][$pageNameInfo]; ?>">
<meta name="keywords" content="<?php echo $sitewebInfo['keywords'][$pageNameInfo].$keywordsPage; ?>">
<meta name="author" content="<?php echo $sitewebInfo['author']; ?>">
<link rel="icon" type="image/ico" href="favicon.ico" title="JardiCycle" />
<?php //<!-- Fichier de style BootStrap --> ?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<?php // Fichier de style personnel ?>
<link rel="stylesheet" href="scss/style.scss"> <?php // Mon style Bootstrap ?>
<?php // Icones Matérial Design de Google (à la place des GlyphIcons) ?>
<script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule="" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.js"></script>

<!-- <script type="module" src="/includes/ionicons/ionicons.esm.js"></script> -->
<!-- <script nomodule src="/includes/ionicons/ionicons.js"></script> -->
<?php // Inclus les functions JS de base ?>
<!-- <script src="includes/myfunctions.js"></script> -->

<?php flush(); ?>
