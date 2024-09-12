<?php 
  @include 'connection.php';

  if(isset($_POST['add_to_cart'])){

    $product_id= $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = 1;
 
    $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");
 
    if(mysqli_num_rows($select_cart) > 0){
       $message[] = 'product already added to cart';
    }else{
      $insert_product = mysqli_query($conn, "INSERT INTO `cart`(id, name, price, image, quantity) VALUES('$product_id', '$product_name', '$product_price', '$product_image', '$product_quantity')");
       $message[] = 'product added to cart succesfully';
    }
 
 }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>E-COMMERCE </title>
 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  
<style>
    
    .navbar{
      height: 80px; /* Adjust the height as needed */
      position: sticky; /* Make the navbar sticky */
      top: 0; /* Stick it to the top of the viewport */
      z-index: 100; /* Ensure it's above other elements */
      font-size: 20px;
      width: 100vw;
    }
    nav{
        padding-top: 15px; /* Adjust the top padding as needed to vertically center the content */
        padding-bottom: 15px; /* Adjust the bottom padding as needed to vertically center the content */ 
    }
    .navbar-right {
    margin-left: 30%;
    }
   .banner{
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: start;
    align-items: start;
    background-image: url(images/PETS13.jpg);
    height: 75vh;
    background-size: contain;
    background-position: left;
    background-repeat: no-repeat;
    border-radius: 0.4cm;
    font-family: 'Times New Roman', Times, serif;
    }
    .banner h4{
        font-weight: 700;
        font-family: ;
        text-align: left;
        margin-top: 50px;
        color: white;
    }
    .banner p{
        text-align: center;
        color: white;
        font-size: 15px;
        font-family: 'Times New Roman', Times, serif;
        margin-top: 20px;  
    }
    .container-fluid{
        display: flex;
        background-color: #f1eef0;
        padding-top: 20px;
    }
    .outer {
        width: 40%;
        display: flex;
        flex-wrap: wrap;
        overflow-y: auto;
        height: 400px;
    }
    .inner {
        flex: 0 0 50%; /* adjust the width to your desired value */
        margin-bottom: 1rem;
    }
    .deals{
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
    *{
    margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'poppins', sans-serif;
    }
    .container{
      
        width: 100vw;
        height: 100vh;
        padding: 0 8px;
    }
    
    .products-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      gap: 10px;
    }

    .product-box {
      width: 25%;
      padding: 20px;
      box-sizing: border-box;
    }
    .products{
        text-align: center;
        padding: 25px 10px;
        border-radius: 5px;
        font-size: 14px;
        cursor: pointer;
        background: transparent;
        transition: transform 0.5s,background 0.5s;
        color: black;
        text-decoration: none;
        width: fit-content;
        height: fit-content;
        
    }
    .products h6{
        font-weight: 600;
        margin-bottom: 8px;
        font-family: 'Times New Roman', Times, serif;
    }
    .products p{
        font-family: 'Times New Roman', Times, serif;

    }
    .products:hover{
        background: #0745FF;
        color: #fff;
        transform: scale(1.05);
    }

    .wrapper{
        padding-top: 2cm;
    }
    .navbar{
    
    font-family:'Times New Roman', Times, serif:
  }
  nav{
    font-family: 'Times New Roman', Times, serif;
    font-size: 20px;
  }
  a{
    font-family: 'Times New Roman', Times, serif;
  }
  .products button{
    width: 100%;
  }
  
</style>
</head>
<body>
    <?php include('navbar.php') ?>

    <?php
    if(isset($message)){
      foreach($message as $message){
          echo '<button class="btn btn-danger"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </button>';
      };
    };
    ?>
    
    <div class="container">
   <h1 style="text-align: center; padding: 40px; font-size: 40px; font-weight: bold; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Products</h1>
  
    <div class="products-container">
      <?php
        $select_products = mysqli_query($conn, "SELECT * FROM `products_table`");
        if(mysqli_num_rows($select_products) > 0){
           while($fetch_product = mysqli_fetch_assoc($select_products)){
      ?>
      <div class="product-box">
        <form action="" method="post">
          <div class="products">
              <img src="<?php echo $fetch_product['image']; ?>" alt="" height="290px" width="270px">
              <h3><?php echo $fetch_product['name']; ?></h3>
              <div class="description"><?php echo $fetch_product['description']; ?>/-</div>
              <div class="price">$<?php echo $fetch_product['price']; ?>/-</div>
              <input type="hidden" name="product_id" value="<?php echo $fetch_product['no']; ?>">
              <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
              <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
              <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
              <input type="submit" class="btn btn-warning" value="add to cart" name="add_to_cart">
          </div>
        </form>
      </div>
      <?php
           };
        };
      ?>
    </div>
  </div>
  
  
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>
