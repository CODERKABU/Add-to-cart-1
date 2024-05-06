<?php

    require "connect.php";

   // session_start(); // this is mandatory if developer wants to create , delete, use or update session objects.

    $uid = $_REQUEST["utxt"];
    $pass = $_REQUEST["ptxt"];



    $qr="SELECT * FROM `reg` WHERE uid='$uid' and binary pass='$pass'";
    $res = mysqli_query($con,$qr);

    if($row=mysqli_fetch_array($res))
    {

        $_SESSION["userid"]=$row["uid"];  // sessions are stored on server
        $_SESSION["name"]=$row["nm"];

        header("location:product.php");
    }
    else
    {
        setcookie("msg","Invalid userid/password",time()+3600);
        header("location:login.php");

    }





?>