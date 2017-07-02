<!DOCTYPE html>
<html lang="nl">
<head>
    <meta http-equiv="content-type"
          content="text/html"
          charset="utf-8" />
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <script src='captcha.js'></script>
</head>
<style>
    form{
        border: solid 2px;


    }
    input{
        border: solid 2px;
        margin-bottom: 3%;
        font-size: 15pt;
        margin-left: 5%;
        display: block;

    }
    html{
        background-color: aqua;
        font-size: 15pt;
    }
    body{
        border: solid 5px deepskyblue;
    }
    label{
        display: inline-block;
        float: left;
        clear: right;
        width: 250px;
        text-align: right;
    }
</style>
<body>
<center>
    <form name="register" method="post">
    <label>Achternaam</label>
    <input type="text" name="naam">
    <br>
        <label>Voornaam</label>
    <input type="text" name="Voornaam">
    <br>
        <label>Adres</label>
    <input type="text" name="Adres">
    <br>
        <label>Postcode</label>
    <input type="text" name="Postcode">
    <br>
        <label>Plaats</label>
    <input type="text" name="Plaats">
    <br>
    <label>E-mailadres</label>
    <input type="text" name="E-mail">
    <br>


    <br>

        <div class="g-recaptcha" data-sitekey="6LenTicUAAAAAKCJ1uT3pWgbR0Hl8ZMHOpJY2Tkq"></div>

        <input type="submit" name="submit" value="Versturen">
</center>
</form>
</body>
</html>

<?php

    $name = $_POST["naam"];
    $firstname= $_POST["Voornaam"];
    $address = $_POST["Adres"];
    $postcode = $_POST["Postcode"];
    $plaats = $_POST["Plaats"];
    $email = $_POST["E-mail"];

