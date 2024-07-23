<?php
    include('connection.php');
    $sqldelete = mysqli_query($conn, "DELETE FROM products_table WHERE no='".$_GET['id']."'");
    
    if($sqldelete){
        $response="Product deleted successfully";
        header('location:update_products_services.php');
    }
        

    
?>