<?php
$aan = "anher@localhost";
$ontwerp = "wachtwoord resetten";
$headers = "Form: " . "webmaster@localhost" . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charest=ISO-8859-1\r\n";

$bericht = "<html><body><p>Hello</p></body></html>";
mail($aan,$ontwerp,$bericht,$headers);