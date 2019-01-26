<?php session_start(); ?>
<?php
    extract($_POST); 
    extract($_GET);
    
    $temp = file("credentials.config");
    for ($i = 0; $i < count($temp); $i++){
        $valid = explode(",", $temp[$i]);
        if ($email == trim($valid[0]) && $password == trim($valid[1])){
            $_SESSION["login"] = 1;
            header("Location: index.php"); die();
        }
    }

    if(isset($logout)){
        session_destroy();
        header("Location: login.php?error=logout"); die();
    } else{
        header("Location: login.php?error=Incorrect E-mail or password."); die();
    }

?>