<?php
   session_start();
   if(isset($_SESSION['username']) && isset($_SESSION['expire_time']) && time()< $_SESSION['expire_time']){
    header("location: index.php");
    exit();
   }
    
   if(isset($_POST['submit'])){
    //Getting the data
    $username =$_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
   
    //checking if username is taken
   $sql= "SELECT username FROM user_credentials WHERE username='$username'";
   $result = $conn->query($sql);

   if($result->num_rows > 0){
    $error ="username already taken";
   }
   else{
    $insertData=mysqli_query($conn, "INSERT INTO user_credentials (username, email, password) VALUES('$username', '$email', '$password')");
    if($insertData){
        $response = "User created Successfully";
        $_SESSION['signup_completed']=true;
        header("location:index.php");
        }

    else{
        $error = "user not created";
    }
   }
   }
?>