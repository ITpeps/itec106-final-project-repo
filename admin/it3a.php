<!-- used to view the records of student -->
<!-- used by admin only -->


<?php
include 'connection.php';
if(isset($_POST['submit'])) {
    $studentNumber = $_POST['studentNumber'];
    $studentName = $_POST['studentName'];
    $course = $_POST['course'];
    $year_section = $_POST['year_section'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $student = $_POST['student'];
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT3A</title>

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

    .select {
      margin-right: 555px;
    }

    .btn-info {
      background-color: orange;
      border-color: orange;
    }

    .btn-info:hover {
      background-color: orange;
      border-color: orange;
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
        <h2 class="title">STUDENT INFORMATION</h2>
       <p class="it-section">INFORMATION TECHNOLOGY 3A</p>
       <hr>
        <a class="btn btn-success" href="createforIT3A.php" role="button">
        <i class="bi bi-person-add"></i> New Student</a>

    
        <div class="btn-group justify-content-end">
        <button type="button" class="btn btn-primary dropdown-toggle select" data-bs-toggle="dropdown" aria-expanded="false">
        Select Section From IT 3rd Year
        </button>
        <ul class="dropdown-menu">
         <li><a class="dropdown-item" href="it3a.php">IT 3A</a></li>
          <li><a class="dropdown-item" href="it3b.php">IT 3B</a></li>
          <li><a class="dropdown-item" href="it3c.php">IT 3C</a></li>
          <!-- <li><a class="dropdown-item" href="admin.php">Admin</a></li> -->
        </ul>
      </div>
    

        <a class="btn btn-info justify-content-flex-end" href="admin.php" role="button">
        <i class="bi bi-person-add"></i> View Admin</a>
      
        <br>

        <div class="table-responsive">
        <table class="table table-hover table-sm">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Student Number</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Course</th>
                    <th scope="col">Year/Section</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Address</th>
                    <th scope="col">Email</th>
                    <th scope="col">Student</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>

            <tbody>

            <?php
         
            // this will read row from the database (studentinformation)
            $sql = "SELECT * FROM IT3A";
            $result = mysqli_query($con, $sql);

            if($result) {
              while($row = mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $studentNumber=$row['studentNumber'];
                $studentName=$row['studentName'];
                $course=$row['course'];
                $year_section=$row['year_section'];
                $contact=$row['contact'];
                $address=$row['address'];
                $email=$row['email'];
                $student=$row['student'];
                echo "  <tr>
                <td>$row[id]</td>
                <td>$row[studentNumber]</td>
                <td>$row[studentName]</td>
                <td>$row[course]</td>
                <td>$row[year_section]</td>
                <td>$row[contact]</td>
                <td>$row[address]</td>
                <td>$row[email]</td>
                <td>$row[student]</td>
                <td>
                
                <button>
                <a href='updateforIT3A.php?id=$row[id]'>
                <i class='bi bi-pencil-square'></i></a> </button>
                 &nbsp;
                  <button class='delete-btn'>
                  <a href='deleteforIT3A.php?id=$row[id]'>
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