<?php // Fichier JavaScript JQuery Doit être lu AVANT Bootstrap ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<?php // Fichier JavaScript Popper/Tooltips AVANT bootstrap ?>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" crossorigin="anonymous"></script> -->
<?php // <script src="https://unpkg.com/@popperjs/core@2" crossorigin="anonymous"></script> ?>
<?php // Fichier JavaScript BootStrap ?>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
<?php flush(); ?>
<script type="text/javascript">
    $(document).ready(function () {
        var expireCookie = new Date();
        expireCookie = new Date(expireCookie.getTime() + 27776000000);

    });
</script>
<noscript>
</noscript>
<?php
// Vérifie si on a le mot "debug" dans l'adresse
if (stripos($_SERVER['QUERY_STRING'], '$debug')>0) { //  ()(@$_SESSION['user']['id']<2) AND isset($_SESSION['user']['id'])) &&

echo "<style>p.debugSmall {font-size: .8rem; line-height: .75rem;}</style>";
    echo "<p class='debugSmall'><small>";
    echo "-----------------------------<br>";
    echo chr(36)."_SESSION<br>";
    echo "session = ".session_id()."<br />";
    print_recursive($_SESSION, true);
    echo "<br>";

    echo "-----------------------------<br>";
    echo chr(36)."_POST<br>";
    print_recursive($_POST, true);
    echo "<br>";

    echo "-----------------------------<br>";
    echo chr(36)."_GET<br>";
    print_recursive($_GET, true);
    echo "<br>";

    echo "-----------------------------<br>";
    echo chr(36)."_SERVER<br>";
    print_recursive($_SERVER, true);
    echo "<br>";
    echo "</small></p>";
}
 ?>
