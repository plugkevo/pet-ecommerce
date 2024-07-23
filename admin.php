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
      /* Adjust the top padding as needed to vertically center the content */
      padding-bottom: 15px;
      /* Adjust the bottom padding as needed to vertically center the content */

    }

    

    /* CSS */
    

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
    .card-header{
        margin-top: 30px;
    }
  </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
    <div class="container-fluid">
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
                    <span class="align-middle" >Admin Panel</span>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-3 ">
                <div class="card-header bg-dark text-white text-center">
                    <span class="align-middle">Update Products</span>
                </div>
                <div class="card-body">
                    <span><p>Click to update products </p></span>
                    <a href="update_products_services.php">
                        <button> <i class="fa fa-edit"></i></button>
                    </a>
                </div>
                <div class="card-footer shadow-none p-3 mb-5 bg-light rounded"></div>
            </div>
            <div class="col-lg-3 ">
                <div class="card-header bg-dark text-white text-center"style="height: 50px;" >
                    <span class="align-middle">Update Services</span>
                </div>
                <div class="card-body">
                    <span><p>Click to update services </p></span>
                        <a href="update_products_services.php">
                        <button> <i class="fa fa-edit"></i></button>
                    </a>
                </div>
                <div class="card-footer shadow-none p-3 mb-5 bg-light rounded"></div>
            </div>
            <div class="col-lg-3 ">
                <div class="card-header bg-dark text-white text-center"style="height: 50px;" >
                    <span class="align-middle">Approve Product Order</span>
                </div>
                <div class="card-body">
                    <span><p>Click to approve products </p></span>
                    <a href="approve_products_services.php">
                        <button> <i class="fa fa-edit"></i></button>
                    </a>
                </div>
                <div class="card-footer shadow-none p-3 mb-5 bg-light rounded"></div>
            </div>
            <div class="col-lg-3 ">
                <div class="card-header bg-dark text-white text-center"style="height: 50px;" >
                    <span class="align-middle">Approve Service Request</span>
                </div>
                <div class="card-body   ">
                    <span><p>Click to approve Services </p></span>
                    <a href="approve_products_services.php">
                        <button> <i class="fa fa-edit"></i></button>
                    </a>
                </div>
                <div class="card-footer shadow-none p-3 mb-5 bg-light rounded"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 ">
                <div class="card-header bg-dark text-white text-center"style="height: 50px;" >
                    <span class="align-middle">Purchase History</span>
                </div>
                <div class="card-body   ">
                    <table class="table table-striped table-hover table-responsive"  >
                        <thead>
                            <tr>
                                <th scope="col">no.</th>
                                <th scope="col">Type</th>
                                <th scope="col">Product/service name</th>
                                <th scope="col">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Product</td>
                                <td>Dog Food</td>
                                <td>4999</td>                  
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Service</td>
                                <td>Veterinary services</td>
                                <td>3500</td>                  
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer shadow-none p-3 mb-5 bg-light rounded"></div>
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