<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <script>

        function addToCart(c1,c2)
        {
            proid=c1.value;
            price=c2.value;

       //     alert(proid+" "+price);

            obj = new XMLHttpRequest();

            obj.onload = function(){

                  resp1 = obj.responseText;
                  alert(resp1);  

            }

            obj.open("GET","addtocart.php?pid="+proid+"&prc="+price,true);

            obj.send();    

        }

    </script>    

</head>
<body>

<?php  require "connect.php" ?>
Welcome <?php 

echo $_SESSION["name"];

?>
    <form>
       

        <img src="proimages/iphone15.jpg" height="100" width="100" />
        <input type="hidden" name="pro1" value="1" /><br/>
        <input type="text" name="price1" value="100000.50" readonly /><br/>
        <input type="button" name="btn1" value="Add to Cart" onclick="addToCart(pro1,price1)" /><br/>

        <img src="proimages/samsung.jpg" height="100" width="100" />
        <input type="hidden" name="pro2" value="2" /><br/>
        <input type="text" name="price2" value="95000.50" readonly /><br/>
        <input type="button" name="btn2" value="Add to Cart" onclick="addToCart(pro2,price2)" /><br/>

        <br/><a href="logout.php">Click to logout</a>

</form>


    
</body>
</html>