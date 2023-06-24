<!-- deleting information of student -->

<!-- admin is the only one who can delete information of student -->

<?php 
include 'connection.php';

if(isset($_GET['id'])) {
    $id=$_GET['id'];

    $sql = "DELETE FROM IT3B WHERE id=$id";
    $result=mysqli_query($con, $sql);

    if($result){
        echo "<script language= 'javascript'>alert('Record has been Deleted!')</script>";
        echo "<script> window.location.href='it3b.php'; </script>";
    } else {
        die(mysqli_error($con));
    }
}



 
?>