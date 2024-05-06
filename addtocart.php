<?php

    require "connect.php";

    $uid=$_SESSION["userid"];
    $dt="26-04-2024";

    $pid = $_GET["pid"];
    $pr = $_GET["prc"];
    $qty=1;
    $cid="";
  //  echo $pid." -- ".$pr;

    $qr1="SELECT count(*)  cnt , cid  FROM cart where uid='$uid' and stat='ongoing'";
    $res=mysqli_query($con,$qr1);
    $row = mysqli_fetch_array($res);

    if($row["cnt"]==1)
    {

        $cid=$row["cid"];

    }
    else
    {

        $qr="insert into cart (uid,dt,stat) values ('$uid','$dt','ongoing')";
        mysqli_query($con,$qr);

        $cid = mysqli_insert_id($con);
    } 
    if($cid>0)
    {

        $qr3="SELECT count(*) as cnt FROM `cartdetail` WHERE cid=$cid  and pid=$pid";
        $res3=mysqli_query($con,$qr3);
        $row3 = mysqli_fetch_array($res3);

        if($row3["cnt"]==0)
        {
            $qr2="insert into cartdetail (cid,pid,qty,price) values ($cid,$pid,$qty,$pr)";
            mysqli_query($con,$qr2);
        }
        else
        {
            $qr2="update cartdetail set qty=qty+1 where cid=$cid and pid=$pid";
            mysqli_query($con,$qr2);

        }    
    }



?>