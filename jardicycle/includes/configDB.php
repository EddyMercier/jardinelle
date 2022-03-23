<?php
/**==================================**/
/** Créé par : Eddy MERCIER **/
/** Date : 23/03/2022      **/
/** Place les infos de connection à la DB     **/
/** @param IN : Néant                           **/
/** @param OUT :  Néant                           **/
/**==================================**/

/** Données pour accès à la base de données **/

$pdoInfo   = array(
'dbType'   => "mysql",
// 'host'     => "mysql.s803.sureserver.com",
// 'dbName'   => "composta_cba",
//'host'     => "mysql.s805.sureserver.com",
'host'     => "localhost",
'dbName'   => "ecojard_jardinelle",
'charset'  => 'UTF8',
'user'     => "jardi",
'pass'     => "nadege6001");

if (stripos($_SERVER['DOCUMENT_ROOT'],"dev")>0) {
    $pdoInfo['dbName']="voxcultura_devvox";
    $pdoInfo['user']="aaa";
    $pdoInfo['pass']="xxx";
}
// --------------------------------------
// REVIEW: A retirer après debogage
//sélectionne la DB selon l'origine
 if (strstr($_SERVER["HTTP_HOST"],"localhost")!==false){
//     // id pour Teddy
     $pdoInfo['host'] = "mysql.s463.sureserver.com";
// } else {
//     // id pour VoxCultura
    }
// --------------------------------------

//$pboinfp['pdohost'] = $dbType.':host='.$host.';dbname='.$dbName;
$pdoInfo['pdohost'] = $pdoInfo['dbType'].':host='.$pdoInfo['host'].';dbname='.$pdoInfo['dbName']; //.';charset='.$pdoInfo['charset']

/** Fixe l'heure locale = serveur +6 heures **/
$now = date("Y-m-d H:m:s",strtotime("+1 hours"));
$maintenant = $now;)
?>
