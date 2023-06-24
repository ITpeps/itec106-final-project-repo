<!-- used for deleting admin record -->

<?php 
include 'connection.php';

if(isset($_GET['id'])) {
    $id=$_GET['id'];

    $sql = "DELETE FROM insert_admin WHERE id=$id";
    $result=mysqli_query($con, $sql);

    if($result){
        echo "<script language= 'javascript'>alert('Record has been Deleted!')</script>";
        echo "<script> window.location.href='admin.php'; </script>";
    } else {
        die(mysqli_error($con));
    }
}

?>