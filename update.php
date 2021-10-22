<?php 
    include "config.php";
	if(isset($_POST['update'])){
	    $no   =$_POST['STUDENT_NO'];
		$name =$_POST['STUDENT_NAME'];
		$dob  =$_POST['STUDENT_DOB'];
		$doj  =$_POST['STUDENT_DOJ'];
		
		$sql="UPDATE 'student' SET 'STUDENT_NAME'='$name','STUDENT_DOB'='$dob','STUDENT_DOJ'='$doj' WHERE 'STUDENT_NO'='$no'";
		$result = $con->query($sql);
		if($result == TRUE){
			echo "Record updated succesfully";
		}
		else
		{
			echo "Error";
		}
	}
	if(isset($_GET['no']))
	{
		$no=$_GET['no'];
		$sql="SELECT *FROM 'student' WHERE 'STUDENT_NO'='$no'";
		$result=$con->query($sql);
		if($result->num_rows>0)
		{
			while($row=$result->fetch_assoc())
			{
				$no   =$_POST['STUDENT_NO'];
		        $name =$_POST['STUDENT_NAME'];
		        $dob  =$_POST['STUDENT_DOB'];
		        $doj  =$_POST['STUDENT_DOJ'];
			}
		}
	}
?>