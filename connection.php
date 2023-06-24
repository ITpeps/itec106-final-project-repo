<!-- to connect database -->

<?php

	$con = new mysqli('localhost', 'root', '', 'studentinformation');
	if(!$con){
        die(mysqli_error($con));

    }
?>