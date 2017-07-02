<?php
if(isset($_SESSION["ID"]) && $_SESSION["STATUS"]===1){
    echo "<h1 id='meldingen'>Welkom</h1>";
}else{
        echo "<script>
    alert('u moet ingelogd zijn om deze pagina te bekijken');
    location.href='index.php';</script>";
    }
?>