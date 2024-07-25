<?php
  include('connection.php');
 
  $sql = "SELECT * FROM products_table";
  $result=$conn->query($sql);
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
        font-family: 'Times New Roman', Times, serif:
        }
        .nav {
        padding-top: 15px;
        /* Adjust the top padding as needed to vertically center the content */
        padding-bottom: 15px;
        /* Adjust the bottom padding as needed to vertically center the content */

        }
        .navbar-right {
            margin-left: 30%;

        }

        nav {
            font-family: 'Times New Roman', Times, serif;
            font-size: 20px;
        }
        .card_header{
            margin-top: 20px;
        }
    </style>
</head>

<body>

  <?php include('navbar.php') ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="card-header bg-dark text-white text-center"style="height: 50px; margin-top: 20px;" >
                  <a href="admin.php"><Button class="float-start btn btn-warning">Back</Button></a>
                    <span class="align-middle">Products & Services</span>
                    <span class="float-end"><a href="add_products_services.php"><button class="btn btn-warning" >Add Product/Service</button>

                    </a></span>
                </div>    
            </div>
        </div>
       

        <table class="table table-striped table-hover table-responsive"  >
            <thead>
                <tr>
                    <th scope="col">no.</th>   
                    <th scope="col">Product/service name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php if ($result && $result->num_rows > 0) { ?>
              <?php while ($fetchrecord = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $fetchrecord['no'] ?></td>
                    <td><?php echo $fetchrecord['name']?></td>
                    <td><?php echo $fetchrecord['price']?></td>    
                    <td><?php echo $fetchrecord['description']?></td>                  
              
                    <td>
                        <a href="edit_products_services.php?id=<?php echo $fetchrecord['no']?>" class="btn btn-primary btn-sm">
                        <i class="fa fa-edit"></i>
                        </a>
                        <a href="process_delete_product.php?id=<?php echo $fetchrecord['no']?>" class="btn btn-danger btn-sm">
                        <i class="fa fa-trash"></i>   
                        </a>
                    </td>
                </tr>
                <?php } ?>
                <?php } ?>
            </tbody>
        </table>   
    </div>

  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>

</body>

</html>