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
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="products.php">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.php">Services</a>
          </li>

          <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>
          <li class="nav-item dropdown">
            <a href="cart.php" class="nav-link">Cart <span style="color: blue; background-color: yellow;"><b><?php echo $row_count; ?></b></span> </a>

          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="products2.php">products2</a>
          </li>
        </ul>
        <ul class="navbar-nav navbar-right">
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="signup.php">SignUp</a>
          </li>
        </ul>
      </div>
    </div>
    </nav>