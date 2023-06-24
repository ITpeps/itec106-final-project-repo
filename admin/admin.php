<!-- view admin accounts  -->

<?php
include 'connection.php';
if(isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<style>
    .for-forms {
        background-color: lightblue;
        padding: 20px;
        border-radius: 10px;
    }

    .btn {
        margin-top: 10px;
    }
    a {
     text-decoration: none;
     color: white;
    }

    a:hover {
      color: white;
    }

    .title {
      margin-top:10px;
        text-align: center;
    }

    .it-section {
        font-size: 15px;
        text-align: center;
    }
    
    th {
      font-size: 14px;
    }

    td {
      font-size: 14px;
    }

    table {
      margin-top:20px;
    }

    i {
      color: black;
      padding: 5px;
    }

    button {
      background: lightgreen;
      border: none;
      border-radius: 5px;
    }

    
    .delete-btn {
      background: red;
      border: none;
      border-radius: 5px;
    }

    .delete-btn i {
      color: white;
    }

    .bi-person-add {
      color: white;
    }

    .exit {
        margin-right: 890px;
    }
</style>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #e3f2fd;">
      <div class="container">
          <a class="navbar-brand" href="#">Student Information</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <!-- <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="new_admin.php">Add New Admin</a>
                </li>
              </ul> -->

              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="home.php">Logout</a>
                </li>
              </ul>

        </div>
      </div>
    </nav>
  </header>

    <div class="container mb-5">
        <h2 class="title">ADMIN</h2>
       <p class="it-section">INFORMATION TECHNOLOGY</p>
       <hr>



        <a class="btn btn-warning exit" href="it3a.php" role="button">
        <i class="bi bi-box-arrow-left"></i> Exit</a>

        <a class="btn btn-success" href="new_admin.php" role="button">
        <i class="bi bi-person-add"></i> New Admin</a>

    

        <div class="table-responsive">
        <table class="table table-hover table-sm">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Action</th>
                   
                </tr>
            </thead>

            <tbody>

            <?php
         
            // this will read row from the database (studentinformation)
            $sql = "SELECT * FROM insert_admin";
            $result = mysqli_query($con, $sql);

            if($result) {
              while($row = mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $email=$row['email'];
                $pass=$row['pass'];
              
                echo "  <tr>
                <td>$row[id]</td>
                <td>$row[email]</td>
                <td>$row[pass]</td>
              
                <td>
                
               
                  <button class='delete-btn'>
                  <a href='delete.php?id=$row[id]'>
                  <i class='bi bi-trash-fill'></i>
                  </a> </button>
                </td>
            </tr>
                ";
                
            }
          }
          
            ?>

              
            </tbody>
        </table>
    </div>
        </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
crossorigin="anonymous"></script>    
</body>
</html>