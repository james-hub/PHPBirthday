<?php
$USERNAME = $_POST["USERNAME"];
$PASSWORD = $_POST["PASSWORD"];
$PASSWORD = md5($PASSWORD);
if($USERNAME && $PASSWORD) {
    setcookie ("cookuser");  
    setcookie ("cookpass"); 
    setcookie ("cookuser", $USERNAME); 
    setcookie ("cookpass", $PASSWORD); 
    header("Location: main/index.php");
    }
    else {
        include("config.php");
    echo($no_pass_or_user_error_message);
    }
?>
