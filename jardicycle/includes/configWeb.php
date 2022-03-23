<?php
/**==================================**/
/** Créé par : Eddy MERCIER **/
/** Date : 23/03/2022      **/
/** Défini les infos concernant le site Web     **/
/** @param IN : Néant                           **/
/** @param OUT :  Néant                           **/
/**==================================**/

/** Données pour les balises de l'entête, array multidimentionnel, une info par page XXX.php **/
$sitewebInfo = array(
'siteName' =>'JARDICYCLE',
'descriptionLight' =>'',
'description' => ['index' => '', 'profile' => ''],
'keywords' => ['index' => '', 'profile' => ''],
'author' => 'Eddy MERCIER',
'url' => 'jardinelle.ecojardinage.info/jardicycle/',
'FBid' => 'JardiCycle'
);
$sitewebInfo['urlWWW'] = $sitewebInfo['url']; //"www.".
// Récupère le nom de la page php chargée
$pageNameInfo = substr($_SERVER['PHP_SELF'], strripos($_SERVER['PHP_SELF'],'/')+1, (strripos($_SERVER['PHP_SELF'],'.php')-strripos($_SERVER['PHP_SELF'],'/')-1));

// Si on a pas de description pour la page en cours, on prend les info de la page index.php
if (!isset($sitewebInfo['description'][$pageNameInfo]) OR strlen($sitewebInfo['description'][$pageNameInfo])<1) { $sitewebInfo['description'][$pageNameInfo] = $sitewebInfo['description']['index'];}
if (!isset($sitewebInfo['keywords'][$pageNameInfo]) OR strlen($sitewebInfo['keywords'][$pageNameInfo])<1) { $sitewebInfo['keywords'][$pageNameInfo] = $sitewebInfo['keywords']['index'];}

if (stripos($_SERVER['DOCUMENT_ROOT'],"dev")>0) {
    $sitewebInfo['url']="dev.voxcultura.fun";
    $sitewebInfo['urlWWW']="dev.voxcultura.fun";
}
?>
