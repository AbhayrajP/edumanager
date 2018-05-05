<?php
session_start();
?>

<!DOCTYPE html>
<head>
<title>Student Details</title>
<link rel="stylesheet" href="css\studentdetails.css" />
</head>
<body>
<h1 align="center" style="font-family:Times New Roman">Student Details</h1>
<hr>
<center>
<fieldset>
<form action="student details.php,student details2.php" method="post">
Roll no:<input type="text" name="rollno"><br><br>
<input type="submit"  value="submit" name="submit">
</fieldset>
</form>
</center>


</body>
</html>
<?php

$con=mysqli_connect('localhost','root','password');
$db=mysqli_select_db($con,"details");
if(isset($_POST['submit']))
{
	$rollno=$_POST['rollno'];
	$rollno=stripcslashes($rollno);;
	$rollno=mysqli_real_escape_string($con,$rollno);
	
	$_SESSION['rno']=$rollno;
	if($rollno==""){
		echo "<script>alert('enter roll no');</script>";
		exit();
	}

	
	else{
		$res=mysqli_query($con,"select * from student_details where rollno='$rollno'")or die("Failed to query database ".mysqli_error());
		$row=mysqli_fetch_array($res);

		if($row['rollno']==$rollno)
		{

	
			header('Location:student details2.php');
		}	
		else
		{
			echo"<h3>invalid roll no.<h3>";
		}
	}
}
mysqli_close($con);



?>