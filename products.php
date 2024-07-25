
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
    body
    .navbar {
      height: 80px; /* Adjust the height as needed */
      position: sticky; /* Make the navbar sticky */
      top: 0; /* Stick it to the top of the viewport */
      z-index: 100; /* Ensure it's above other elements */
      font-size: 20px;
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
        width: 100%;
        height: 100vh;
        padding: 0 8px;
    }
    .row{
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        grid-gap: 30px;
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
        width: 250px;
        height: 290px;
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
    
    <div class="container">
  <h1 style="text-align: center; padding: 40px; font-size: 40px; font-weight: bold; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Products</h1>
  <div class="row">
    <?php
      include("connection.php");

      // Query to retrieve data from products_table
      $query = "SELECT * FROM products_table";
      $result = $conn->query($query);

      $count = 0;
      while ($row = $result->fetch_assoc()) {
        $name = $row["name"];
        $price = $row["price"];
        $description = $row["description"];
        $imagePath = $row["image"];

        // Display data in a div called products
        echo "<div class='col-md-3'>";
        echo "<div class='products'>";
        echo "<img src='$imagePath' alt='$name' width='100' height='100'>";
        echo "<h2>$name</h2>";
        echo "<p>Price: $price</p>";
        echo "<p>Description: $description</p>";
        echo "<a href=''><button class='btn btn-warning'><i class='fa fa-cart-shopping'></i></button></a>";
        echo "</div>";
        echo "</div>";

        $count++;
        if ($count % 4 == 0) {
          echo "</div><div class='row'>";
        }
      }
   ?>
  </div>
</div>
  
  
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>
