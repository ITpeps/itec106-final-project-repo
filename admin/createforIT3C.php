<!-- to read the information -->

<!-- admin use to add new record of student by each section -->
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


$sql = "INSERT INTO IT3C (studentNumber,studentName,course,year_section,contact,address, email, student)
 values('$studentNumber', '$studentName', '$course', '$year_section', '$contact', '$address', '$email', '$student')";

$result = mysqli_query($con, $sql);

if($result) {
    echo "<script language = 'javascript'>alert ('New Record has been inserted!')</script>";
    echo "<script> window.location.href='IT3C.php'; </script>";
} else {
    die(mysqli_error($con));
}

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Student Information</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
   
</head>

<body>

    <div class="container my-5">
    <h3>Add Student Information</h3>
        <hr>
            <form method="POST">
                <div class="row mb-3">
                    <label class="col-sm-3 form label">Student Number</label>
                    <div class="col sm-6">
                        <input type="text" class="form-control" name="studentNumber" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-3 form label">Student Name</label>
                    <div class="col sm-6">
                        <input type="text" class="form-control" name="studentName" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-3 form label">Course</label>
                    <div class="col sm-6">
                        <input type="text" class="form-control" name="course"  required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-3 form label">Year/Section</label>
                    <div class="col sm-6">
                        <input type="text" class="form-control" name="year_section" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-3 form label">Contact</label>
                    <div class="col sm-6">
                        <input type="text" class="form-control" name="contact" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-3 form label">Address</label>
                    <div class="col sm-6">
                        <input type="text" class="form-control" name="address" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-3 form label">Email</label>
                    <div class="col sm-6">
                        <input type="text" class="form-control" name="email"required >
                    </div>
                </div>

                <div class="row mb-3">
                <label class="col-sm-3 form label">Student</label>
                <div class="col sm-6">
                <select class="form-select" aria-label="Default select example" name="student" required>
                        <option value="Regular">Regular</option>
                        <option value="Irregular">Irregular</option>
                        <option value="Transferee">Transferee</option>
                </select>
                </div>
                </div>


                <div class="row mb-3">
                    <div class="offset-sm-3 col-sm-3 d-grid">
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </div>

                    <div class="col-sm-3 d-grid">
                        <a class="btn btn-outline-primary" href="it3c.php" role="button">Cancel</a>
                    </div>
            </form>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>