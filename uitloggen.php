<?php
 if(isset($_SESSION["ID"]) && $_SESSION["STATUS"] === 1) {
     $_SESSION["ID"] = "";
     $_SESSION["USER"] = "";
     $_SESSION["STATUS"] = 0;
     $_SESSION["EMAIL"] = "";
     #close ther connection
     $db = null;

        echo "<script>location.href='index.php?page=inloggen';</script>";
 }