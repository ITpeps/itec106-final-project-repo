<!-- once student click the student button it goes here
        and then the student will choose his/her section
        to add information -->

<!-- the student button from the homepage will go here by this page -->


<!-- to read the information -->

<?php
include 'connection.php';
if(isset($_POST['submit'])) {
    $studentNumber = $_POST['studentNumber'];
    $studentName = $_POST['studentName'];
    $course = $_POST['course'];
    $year_section = $_POST['year_section'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome, Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
   
</head>
<body>
    <div class="container my-5">
        <h1>Student Information</h1>
        <p>Cavite State University-Silang Campus</p>
        <div class="btn-group">
            <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            Select Section From IT 3rd Year
            </button>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="addnew_student3A.php">IT 3A</a></li>
            <li><a class="dropdown-item" href="addnew_student3B.php">IT 3B</a></li>
            <li><a class="dropdown-item" href="addnew_student3C.php">IT 3C</a></li>
            </ul>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>
</body>
</html>