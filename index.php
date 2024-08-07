<?php
  include("connection.php");
  
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

    .container-fluid {
      width: 100vw;
      background-size: cover;
      /* Cover the entire viewport with the background image */
      background-repeat: no-repeat;
      /* Prevent background image from repeating */
      background-attachment: fixed;
      opacity: 0.9;
      background-color: #f1eef0;

    }

    /* CSS */
    .intro {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100%;
      /* adjust to the desired height */
    }

    .intro h3 {
      font-size: 30px;
      font-family: 'Times New Roman', Times, serif;
      text-align: center;
    }

    .intro strong {
      font-weight: bold;
    }

    .explore a h4 {

      font-size: 30px;
    }

    .navbar-right {
      margin-left: 30%;

    }

    .navbar {

      font-family: 'Times New Roman', Times, serif:
    }

    nav {
      font-family: 'Times New Roman', Times, serif;
      font-size: 20px;
    }

    .middle {
      display: flex;
      margin-left: 10%;
      margin-top: 30px;
    }

    .faqs {
      padding-top: 10px;
      border-radius: 0.4cm;
      text-align: center;
    }

    .right {
      background-color: whitesmoke;
      border-radius: 0.5cm;
    }

    .top {
      margin-top: 2%;
      font-family: 'Times New Roman', Times, serif;
      margin-left: 30px;
    }

    .outer {
      display: flex;
      /* displays flex-items (children) inline */
      overflow-x: auto;
      margin-top: ;
    }

    .inner {
      flex: 0 0 20%;
      /* doesn't grow nor shrink, initial width set to 25% of the parent's */
      background-color: rgb(237, 243, 243);
      border-radius: 0.4cm;
      margin-right: 7px;
      display: flex;
      justify-content: center;
      height: 230px;
    }

    .products {
      padding-top: 20px;
    }

    .footer {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100%;
      /* adjust to the desired height */
    }

    .subscribe {
      margin-top: 4%;
    }
  </style>
</head>

<body>

  <?php include('navbar.php') ?>

  <div class="container-fluid">
    <img src="" alt="">
    <div class="row">
      <div class="col-lg-3">
        <div class="intro">
          <h3>
            <strong>Invest in their happiness, invest <br>in their health. Discover a world <br>of pet products to
              nurture the special bond you share.</strong>
          </h3>
        </div>
      </div>
      <div class="col-lg middle " style="margin-top: 30px ">
        <div class="explore" style="">
          <img src="images/shampoo2.jpeg" height="150px" width="" style="border-radius: ; alt="">          
          <img src=" images/shampoo3.jpeg" height="" width="" style="border-radius: 10%;" alt="">
          <br>
          <img src="images/shampoo.jpeg" height="" width="" style="border-radius: 10%;" alt="">
        </div>
        <div class="col-md shadow right" style="margin-left: 5%;">
          <div class="faqs">
            <h4><u>FAQs</u></h4>
            <ul>
              <li>What kind of food is best for my pet?</li>
              <li>How much exercise does my pet need?</li>
              <li>How can I keep my pet's teeth clean?</li>
              <li>How often should I take my pet for a checkup?</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <br>

  </div>
  <div class="top">
    <h4><b>Top Selling Items</b></h4>
  </div>
  <div class="outer">
    <div class="inner">
      <div class="col-lg-3 products">
        <img src="images/dogfood1.jpeg" height="100px" width="100px" style="border-radius: 0.3cm;" alt="">
        <h5>Cat food</h5>
        <div class="icons" style="display: flex;">
          <a href="" style="color: inherit; text-decoration: none;">Ksh 990</a>
        </div>
      </div>
    </div>
    <div class="inner">
      <div class="col-lg-3 products">
        <img src="images/shampoo3.jpeg" height="100px" width="100px" style="border-radius: 0.3cm;" alt="">
        <h5> Dog Shampoo</h5>
        <div class="icons" style="display: flex;">
          <a href="" style="color: inherit; text-decoration: none;">Ksh 990</a>
        </div>
      </div>
    </div>
    <div class="inner">
      <div class="col-lg-3 products">
        <img src="images/shampoo2.jpeg" height="100px" width="100px" style="border-radius: 0.3cm;" alt="">
        <h5>Cat Shampoo</h5>
        <div class="icons" style="display: flex;">
          <a href="" style="color: inherit; text-decoration: none;">Ksh 890</a>
        </div>
      </div>
    </div>
    <div class="inner">
      <div class="col-lg-3 products">
        <img src="images/dogfood4.jpeg" height="100px" width="100px" style="border-radius: 0.3cm;" alt="">
        <h5>Dog Food</h5>
        <div class="icons" style="display: flex;">
          <a href="" style="color: inherit; text-decoration: none;">Ksh 1990</a>
        </div>
      </div>
    </div>
    <div class="inner">
      <div class="col-lg-3 products">
        <img src="images/shampoo1.jpeg" height="100px" width="100px" style="border-radius: 0.3cm;" alt="">
        <h5>Shampoo</h5>
        <div class="icons" style="display: flex;">
          <a href="" style="color: inherit; text-decoration: none;">Ksh 990</a>
        </div>
      </div>
    </div>
    <div class="inner">
      <div class="col-lg-3 products">
        <img src="images/dogfood2.jpeg" height="100px" width="100px" style="border-radius: 0.3cm;" alt="">
        <h5>Dog food</h5>
        <div class="icons" style="display: flex;">
          <a href="" style="color: inherit; text-decoration: none;">Ksh 8790</a>
        </div>
      </div>
    </div>
    <div class="inner">
      <div class="col-lg-3 products">
        <img src="images/shampoo3.jpeg" height="100px" width="100px" style="border-radius: 0.3cm;" alt="">
        <h5>Shampoo</h5>
        <div class="icons" style="display: flex;">
          <a href="" style="color: inherit; text-decoration: none;">Ksh 990</a>
        </div>
      </div>
    </div>
  </div>
  <footer>
    <div class="footer">
      <div class="subscribe">
        <h4>Subscribe to Get Notified on offers</h4>
        <label for="email">
          <input type="text" class="form-control" placeholder="Email...">
        </label>
        <button class="btn btn-primary">Submit</button>
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>

</body>

</html>