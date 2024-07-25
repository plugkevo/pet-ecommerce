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
        height: 75vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: rgb(251, 239, 224);
    }
    .main-content{
        margin-top: 30px;
        width: 500PX;
        font-family: 'Times New Roman', Times, serif;
        border-radius: 0.5cm;
        background-color: white;
        margin-bottom: 15px;
    }
    .method{
        display: flex;
        margin: 10px;
    }

    img{
        height: 60px;
        width: 60px;
        border-radius: 0.2cm;
    }
    .radiobtn{
        margin-left: 200px;
    }
    button{
        margin-right: 30px;
    }
  </style>
</head>

<body>
  <?php include('navbar.php') ?>

  <div class="header-fluid">
    <div class="row">
        <div class="col-lg-12 ">
            <div class="card-header bg-dark text-white text-center"style="height: 50px; margin-top: 20px;" >
                <span class="align-middle">PAYMENT</span>
                </a>
            </div>    
        </div>
    </div>
  </div>
  <div class="container-fluid">
    
    <div class="main-content shadow">
        <span style="margin: 10px; text-align: center;"><h6>Select your payment method of choice</h6></span>
        <div class="method">
            <div class="image">
                <img src="images/mpesa.png" alt="">
            </div>
            <div class="radiobtn">
                <label for="male"> M-PESA</label>
                <input type="radio" id="male" name="gender" value="male" class="">
            </div>         
        </div>
        <div class="method">
            <div class="image">
                <img src="images/paypal.jpg" alt="">
            </div>
            <div class="radiobtn">
                <label for="male"> PAYPAL</label>
                <input type="radio" id="male" name="gender" value="male" class="">
            </div>         
        </div>
        <div class="method">
            <div class="image">
                <img src="images/visa.png" alt="">
            </div>
            <div class="radiobtn">
                <label for="male"> Debit Card</label>
                <input type="radio" id="male" name="gender" value="male" class="">
            </div>         
        </div>
        <div class="method float-end">
            <button class="btn btn-warning">Checkout</button>     
        </div>
        
        
    </div>
  </div>

  
  
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>

</body>

</html>
