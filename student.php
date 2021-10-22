<?php
    include "config.php";
	if(isset($_POST['SUBMIT'])){
		$no   =$_POST['STUDENT_NO'];
		$name =$_POST['STUDENT_NAME'];
		$dob  =$_POST['STUDENT_DOB'];
		$doj  =$_POST['STUDENT_DOJ'];
		$password=$_POST['password'];
	}
    $sql = "INSERT INTO 'student' ('STUDENT_NO','STUDENT_NAME','STUDENT_DOB','STUDENT_DOJ','password') VALUES ('$no','$name','$dob','$doj','$password')";
	$result = $conn->query($sql);

    if($result == TRUE)
	{
		echo "New record created succesfully";
	}
	else
	{
		echo "Error";
	}

?>