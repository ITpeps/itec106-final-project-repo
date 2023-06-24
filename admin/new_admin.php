<!-- adding new admin -->

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
         header('location:admin.php');
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
   <title>Add New Admin</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="register.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>SUBMIT</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <!-- <input type="text" name="name" required placeholder="enter your name"> -->
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="password" name="cpassword" required placeholder="confirm your password">
      <!-- <select name="user_type">
         <option value="user">user</option>
         <option value="admin">admin</option>
      </select> -->

      <input type="submit" name="submit" href="admin.php" value="ADD NEW ADMIN" class="form-btn"><a href="admin.php"></a>
    
   </form>

</div>

</body>
</html>