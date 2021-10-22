<?php
    include "config.php";
	if(isset($_GET['no'])){
		$no = $_GET['STUDENT_NO'];
		
	    $sql = "DELETE FROM 'student' WHERE 'STUDENT_NO'='$no'";
		$result=$con->query($sql);
		if($result==TRUE)
		{
			echo "record deleted successfully";
		}
		else
		{
			echo "ERROR";
		}
	}

?>