<?php
    session_start();

    session_destroy();

    setcookie("msg","Successfully logged out!",time()+3600);

    header("location:login.php");


?>