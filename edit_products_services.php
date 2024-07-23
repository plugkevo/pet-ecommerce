<?php
  include('connection.php');

  $queryrecord = mysqli_query($conn, "SELECT* FROM products_table WHERE no='".$_GET['id']."'");
  while($fetchrecord = mysqli_fetch_array($queryrecord)){
    $id= $fetchrecord['no'];
    $name =$fetchrecord['name'];
    $price =$fetchrecord['price'];
    $description =$fetchrecord['description'];
    $image =$fetchrecord['image'];
  }

  require_once("process_update_products.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>E-COMMERCE</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>


  <style>
    body {}

    .navbar {
      height: 80px;
      /* Adjust the height as needed */
      position: sticky;
      /* Make the navbar sticky */
      top: 0;
      /* Stick it to the top of the viewport */
      z-index: 100;
      /* Ensure it's above other elements */
    }
    .nav {
      padding-top: 15px;
      /* Adjust the top padding as needed to vertically center the content */
      padding-bottom: 15px;
      /* Adjust the bottom padding as needed to vertically center the content */

    }
    .navbar-right {
      margin-left: 20%;

    }
    .navbar {
        font-family: 'Times New Roman', Times, serif:
        }

        nav {
        font-family: 'Times New Roman', Times, serif;
        font-size: 20px;
        }
        .container-fluid{
            margin-top: 30px;
        }
    .input{
        margin-left: 5%;
        width: 30%;
        margin-top: 15px;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
    <div class="container">
      <a class="navbar-brand" href="#" style="font-size: 30px;">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse headings" id="navbarNavDropdown">
        <ul class="navbar-nav" style="margin-left: 30%;">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="products.html">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.html">Services</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="cart.html">Cart</a>
          </li>
        </ul>
        <ul class="navbar-nav navbar-right">
          <li class="nav-item">
            <a class="nav-link" href="login.html">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="signup.html">SignUp</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-header bg-dark text-white text-center" style="height: 50px; text-align: center;" >
                    <span class="align-middle" >Edit products & Services </span>
                </div>
            </div>
        </div>
      <form method="POST" action="edit_products_services.php?id=<?php echo $id ?>">
      <div class="response">
          <span class="btn btn-success"><?php echo $response?></span>
        </div>
        <div class="input">
            <label for="name" class="label">Product/service name</label>
            <input type="text" class="form-control" value="<?php echo $name?>" name="name" placeholder="Enter product/sevice name...">
        </div>
        <div class="input">
            <label for="price" class="label">Product/service price</label>
            <input type="number" class="form-control"  value="<?php echo $price  ?>" name="price" placeholder="Enter product/sevice price">
        </div>
        <div class="input">
          <label for="description" class="label">Product/service description</label>
          <input type="text" class="form-control"  value="<?php echo $description ?>" name="description" placeholder="Enter product/sevice description">
        </div>
        <div class="input">
          <img src=" <?php echo $image ?>" alt="">
        </div>
        <div class="input">
            <label for="price" class="label">Product/service Image</label>
            <input type="file" class="form-control"  value="<?php echo $image ?>" name="image" placeholder="">
        </div>
        <div class="input">
            <button class="btn btn-primary float-end" name="submit">Enter</button>
        </div>
      </form> 
    </div>

  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>

</body>

</html>