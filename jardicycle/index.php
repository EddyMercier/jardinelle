<?php
//include "includes/pre_html.php";
//if (!isset($_SESSION['user']['id'])){ header('Location: index.php');}
?>
<!DOCTYPE html>
<html>
<head>
<?php
    include_once "includes/head_html.php";
    // Récupère le fichier pour les langues (selon la langue du navigateur)
    //include_once "includes/include_language.php";
    // Récupère les fonctions personnalisées
    // include_once "includes/myfunctions.php";
?>
<script type="text/javascript">
// Vérifie si le navigateur prend la camera en charge
if ('mediaDevices' in navigator && 'getUserMedia' in navigator.mediaDevices) {
    var noCamera = 1;
    navigator.mediaDevices.getUserMedia({video: true})
    console.log("Module camera OK");
    } else {var noCamera = 0;}
</script>
    <title>JardiCycle</title>
</head>
<?php // ----------------------------- BODY ---------------------------- ?>
<body>
    <?php // include_once 'includes/body_html.php' ?>
    <div class="container-fluid">
        <header>
            <a href="index.php"><img src="images/logo_jardicycle.png" alt="" class="img-fluid center-block"></a>
        </header>
        <section>
            <div id="noCameraDIV">
            </div>
<?php
$bodyUrl = $_GET['b'];
echo $bodyUrl."<br />";
if (strlen($bodyUrl)>2) {
    include_once('b_'.$_GET['b'].'.php');
} else {
?>
        <div class="text-center">
            <h2>Faite votre choix</h2>
            <div class="">
                <a type="button" class="btn btn-primary" href="index.php?b=input"><h3>Encodage</h3></a>
            </div>
            <br />
            <div class="">
                <a type="button" class="btn btn-primary" href="index.php?b=collecte"><h3>Tournée</h3></a>
            </div>
        </div>

<?php
}
?>

        </section>
        <footer>
            <br />
        </footer>
    </div>

<?php // ----------------------------- FOOT ---------------------------- ?>
<?php include_once "includes/foot_html.php"; ?>
<script src="includes/html5-qrcode.min.js"></script>

<script type="text/javascript">
$(document).ready(function () {
    if(noCamera==1){
        $('#noCameraDIV').html('<h3 class="text-success text-center">Caméra disponible !</h3>');

        // $.getScript('includes/html5-qrcode.min.js', function(){
        //     console.log('Script QRCode loaded !');
        // });

    } else {$('#noCameraDIV').html('<h3 class="text-danger text-center">Caméra NON disponible !</h3>');}


    function onScanSuccess(decodedText, decodedResult) {
        // Handle on success condition with the decoded text or result.
        // console.log(`Scan result: ${decodedText}`, decodedResult);
        console.log(decodedText);
        html5QrcodeScanner.clear();
        $('#QRCode_value').html(decodedText);
        <?php // Relance la page avec le numéro du User ?>
        window.location.assign("index.php?b=collecte&id="+decodedText);
    }

    // Lance la Classe pour créer la variable QRCode
    var html5QrcodeScanner = new Html5QrcodeScanner("reader", { fps: 12, qrbox: 250 }); //, rememberLastUsedCamera: true
        // var widthReader = screen.width;
        // $('#aa').html(widthReader);
        // console.log('-->'+widthReader);

    $('#scannerBtn').click(function(){
        // Click sur "scaner" On lance le scan
        html5QrcodeScanner.render(onScanSuccess);
        console.log('click scan');
    });

    $('#circuitBtn').click(function(){
        // Click sur "circuit", on stop le scan
        html5QrcodeScanner.clear();
        console.log('stop scan');
    });

    // Si on a un userId (=redirection du scan, on ouvre la fenêtre de l'utilisateur)
    idUser = '<?php echo $_GET['id'] ?>';
    if(idUser =! ''){
        $('#collapseCircuit').collapse('show');


    }


});
// window.history.replaceState("https://<?php echo $sitewebInfo['urlWWW']; ?>", "JardiCycle", "/index.php");

</script>
<?php




 ?>
</body>
</html>
