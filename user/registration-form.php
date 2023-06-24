<!-- the admin will register here to access the information of the student -->

<?php

include 'connection.php';

if(isset($_POST['submit'])){
   $email = mysqli_real_escape_string($con, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);


   $sql = " SELECT * FROM insert_admin WHERE email = '$email' && pass = '$pass' ";

   $result = mysqli_query($con, $sql);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $sql = "INSERT INTO insert_admin (email, pass) VALUES('$email','$pass')";
         mysqli_query($con, $sql);
         header('location:login-form.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Register</title>
   <link rel="stylesheet" href="register.css">

</head>
<body>
<div class="form-container">
   <form action="" method="post">
      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" placeholder="enter your email" required>
      <input type="password" name="password" placeholder="enter your password" required>
      <input type="password" name="cpassword" placeholder="confirm your password" required>
      <input type="submit" name="submit" href="admin.php" value="REGISTER" class="form-btn">
      <p>Already have an account? <a href="login-form.php">Login</a></p>
   </form>
</div>
</body>
</html>