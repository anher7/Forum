<style>
    body{
        background-image: url("design/Imgs/Alfa.jpg");
        background-repeat: no-repeat;
    }
    #page-wrapper{
        width: 50%;
        border: solid aliceblue 5px;
        position: absolute;
        bottom: 70%;
        right:25%;
    background-color: #3f4246;
        padding-top: 3%;
    }
    form{
        color: antiquewhite;

    }
    a{
        background-color: black;
        color: azure;
        text-decoration: none;
    }
</style>
<center>
<div id="page-wrapper">
    <div id="meldingen">
    </div>
    <form name="inloggen" method="post"
          enctype="multipart/form-data" action="">
        Email : &nbsp;&nbsp;&nbsp;<input required type="email" name="email"
        placeholder="blabla@email.com"/><br>
        Password: <input required type="password" name="password" /><br>
        <input type="hidden" name="submit" value="true"/>
       <center> <input type="submit" id="submit" name="submit" value="Inloggen"/></center><br>

        <a href="Registeratie.php">Aanmelden</a><br>
        <a href="pages/resetten.php">Password vergeten?</a>
    </form>
</div>
</center>


<?php

    include_once "database.php";

if (isset($_POST["submit"])){
    $error =
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);


    try{
        $sql = "SELECT Email, Password FROM alfa.user WHERE Email='".$email."' AND Password='".$password."' LIMIT 1";

    $stmt = $db->prepare($sql); $stmt->execute(array($email));
    $result = $stmt->fetch(PDO::FETCH_ASSOC);


    if ($result){
        $hash = $result["password"];
        if ($password_verify($password,$hash)){
            $mijnSession = session_id();
            $_SESSION["ID"] = $mijnSession;
            $_SESSION["USER"] = $result["name"];
            $_SESSION["Email"] = $result["email"];
            $SESSION["STATUS"] = 1; $_SESSION["User_ID"] = $result["ID"];
            echo "<script>location.href='index.php?page=welcom';</script>";
        }else{
            $error.= "inloggegevens ongeldig.<br>";
        }
    }else{
        $error.= "inloggegevens ongeldig.<br>";
    }
    }catch (PDOException $e){
        echo $e->getMessage();
    }
}
//echo "<div id='meldingen'>".$error."</div>";
?>