<?php
$response="";
  include("connection.php");

  if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $price = $_POST["price"];
    $description = $_POST["description"];
    $image = $_FILES['image1']['tmp_name'];
    $imagePath = 'uploads/' . $_FILES['image1']['name'];
    move_uploaded_file($image, $imagePath);

    $insertData = $conn->prepare("INSERT INTO products_table(name, price, description, image) VALUES (?, ?, ?, ?)");
    $insertData->bind_param("ssss", $name, $price, $description, $imagePath);

    if($insertData->execute()){
      $response = "data inserted succesfully";
    } else {
      $error = "Data not inserted";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>E-COMMERCE </title>
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
      
      padding-bottom: 15px;
      

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
  <?php include('navbar.php') ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-header bg-dark text-white text-center" style="height: 50px; text-align: center;" >
                    <span class="align-middle" >Add products & Services </span>
                </div>
            </div>
        </div>
      <div class="response">
        <span class="btn btn-success">
          <?php echo $response; ?> </span>
          
      </div>
      <form method="POST" action="add_products_services.php" enctype="multipart/form-data">
        <div class="input">
            <label for="name" class="label">Product/service name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter product/sevice name...">
        </div>
        <div class="input">
            <label for="price" class="label">Product/service price</label>
            <input type="number" class="form-control" name="price" placeholder="Enter product/sevice price">
        </div>
        <div class="input">
          <label for="description" class="label">Product/service description</label>
          <input type="text" class="form-control" name="description" placeholder="Enter product/sevice description">
        </div>
        <div class="input">
            <label for="price" class="label">Product/service Image</label>
            <input type="file" class="form-control" name="image1" placeholder="">
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