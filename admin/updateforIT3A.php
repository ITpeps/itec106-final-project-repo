<!-- used by admin to update the student record -->

<!-- to read the information -->

<?php
include 'connection.php';
$id=$_GET['id'];

$sql="SELECT * FROM IT3A WHERE id=$id"; //use to display student information with the table
$result = mysqli_query($con, $sql);
$row=mysqli_fetch_assoc($result);

$studentNumber=$row['studentNumber'];
$studentName=$row['studentName'];
$course=$row['course'];
$year_section=$row['year_section'];
$contact=$row['contact'];
$address=$row['address'];
$email = $row['email'];
$student = $row['student'];

if(isset($_POST['submit'])) {       //use to update the student information
    $studentNumber = $_POST['studentNumber'];
    $studentName = $_POST['studentName'];
    $course = $_POST['course'];
    $year_section = $_POST['year_section'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $student = $_POST['student'];

$sql = "UPDATE IT3A set id=$id, studentNumber='$studentNumber', studentName='$studentName', course='$course', 
year_section='$year_section', contact='$contact', address='$address', email='$email', student='$student' 
WHERE id=$id";

$result = mysqli_query($con, $sql);

if($result) {
    echo "<script language = 'javascript'>alert ('Record has been updated!')</script>"; //js use alert to notufy the admin that he/she updated the student information
    echo "<script> window.location.href='it3a.php'; </script>";                         //admin will be back to IT3A information
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
    <title>Update IT 3A</title>

    <!-- style.css -->
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
   
</head>
<body>
    <div class="container my-5">
    <h3>Update Student Information</h3>
        <hr>
            <form method="POST">
                <div class="row mb-3">
                    <label class="col-sm-2 form label">Student Number</label>
                    <div class="col sm-6">
                        <input type="text" class="form-control" name="studentNumber"  value="<?php echo $studentNumber;?>" >
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 form label">Student Name</label>
                    <div class="col sm-6">
                        <input type="text" class="form-control" name="studentName"  value="<?php echo $studentName;?>">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 form label">Course</label>
                    <div class="col sm-6">
                        <input type="text" class="form-control" name="course"  value="<?php echo $course;?>">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 form label">Year/Section</label>
                    <div class="col sm-6">
                        <input type="text" class="form-control" name="year_section"  value="<?php echo $year_section;?>">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 form label">Contact</label>
                    <div class="col sm-6">
                        <input type="text" class="form-control" name="contact"  value="<?php echo $contact;?>">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 form label">Address</label>
                    <div class="col sm-6">
                        <input type="text" class="form-control" name="address"  value="<?php echo $address;?>" >
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 form label">Email</label>
                    <div class="col sm-6">
                        <input type="text" class="form-control" name="email" value="<?php echo $email;?>" >
                    </div>
                </div>

                <div class="row mb-3">
                      <label class="col-sm-2 form label">Student</label>
                <div class="col sm-6">
                <select class="form-select" aria-label="Default select example" name="student" value="<?php echo $student;?>">
                        <option selected>Select....</option>
                        <option value="value="<?php echo $student;?>">Regular</option>
                        <option value="Irregular">Irregular</option>
                        <option value="Transferee">Transferee</option>
                </select>
                </div>
                </div>

                <div class="row mb-3">
                    <div class="offset-sm-3 col-sm-3 d-grid">
                        <input type="submit" class="btn btn-primary" name="submit" value="Update">
                    </div>

                    <div class="col-sm-3 d-grid">
                        <a class="btn btn-outline-primary" href="it3a.php" role="button">Cancel</a>
                    </div>
            </form>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>