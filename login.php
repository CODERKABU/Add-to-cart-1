<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <form name="frm1" method="post" action="ProcessLogin.php">


        UserID :<input type="text" name="utxt" /><br/>
        Password :<input type="password" name="ptxt" /><br/>
        <input type="submit" name="lgn" value="Login" /><br/>        


    <form><br>

    <?php

        if(isset($_COOKIE["msg"]))
        {
            echo $_COOKIE["msg"];

            setcookie("msg","",time()-3600);
        }

?>



</body>
</html>