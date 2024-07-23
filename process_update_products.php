<?php
    require_once('connection.php');

    if(isset($_POST['submit'])){
        
        $name=$_POST['name'];
        $price=$_POST['price'];
        $description=$_POST['description'];
        $image=$_POST['image'];
    }
    $updateRecord= mysqli_query($conn, "UPDATE products_table SET name='$name', price='$price', description='$description', image='$image'
    WHERE no ='".$_GET['id']."' ");
    
    if($updateRecord){
        $response="Data updated successfully";
    }
?>