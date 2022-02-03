<?php

$conn= mysqli_connect("localhost","root","","grocery");
if(!$conn)
{
    echo "Error in establishing connection";
}


$name=$_POST['name'];
$brand=$_POST['brand'];
$category=$_POST['category'];
$price=$_POST['price'];



$sql = "INSERT INTO product(product_name,category,brand,price) VALUES ('$name','$category','$brand','$price')";

//echo $sql;

if(mysqli_query($conn,$sql))
{
     ?>
    <script>
        alert("Product Added");
        window.location.replace('index.php');
    </script>
   <?php
    
}
?>

