<!-- admin used this login to check the information of the student -->


<?php

include 'connection.php';

session_start();

if(isset($_POST['submit'])){
   $email = mysqli_real_escape_string($con, $_POST['email']);
   $pass = md5($_POST['password']);


   $sql = " SELECT * FROM insert_admin WHERE email = '$email' && pass = '$pass' ";

   $result = mysqli_query($con, $sql);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);
      header('location:it3a.php');
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Login</title>
   <!-- custom css file link  -->
   <link rel="stylesheet" href="login.css">
</head>
<body>
        <div class="form-container">
        <form action="" method="post">
            <h3>LOGIN</h3>
            <?php
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                };
            };
            ?>
            <input type="email" name="email" required placeholder="enter your email">
            <br>
            <input type="password" name="password" required placeholder="enter your password">
            <br>
            <input type="submit" name="submit" value="LOGIN" class="form-btn">
            <br>
        </form>
        </div>
</body>
</html>