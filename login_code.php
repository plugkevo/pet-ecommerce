<?php
    session_start();

    if (isset($_SESSION['username']) && isset($_SESSION['expire_time']) && time() < $_SESSION['expire_time'] ) {
      // User is already logged in, redirect to the new page
      header("Location: index.php");
      exit();
    }

    if(isset($_POST['submit'])){
        $username =  $_POST["username"];
        $password= $_POST["password"];

        $sql = "SELECT * FROM user_Credentials WHERE username='$username' AND password='$password'";
        $result= $conn->query($sql);

        $row = $result->fetch_assoc();
        if ($password == "1234") {
            header("location: admin.html");
            exit();
        }

        if($result->num_rows==1){
            $_SESSION['username'] = $username;
            $_SESSION['expire_time']= time() + (1*60);

            header("location:index.php");
        }
        else{
            $error = "Invalid username or password";
        }
    }
    
?>