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



</body>
</html>
<?php


$con=mysqli_connect('localhost','root','password');
$db=mysqli_select_db($con,"details");
	$rollno=$_SESSION['rno'];
	$res=mysqli_query($con,"select * from student_details where rollno='$rollno'")or die("Failed to query database ");
		$row=mysqli_fetch_assoc($res);

   		echo"<center>";
   		echo"student name : ".$row['stuname'];
   		echo"<br><br>";
   		echo"roll no : ".$row['rollno'];
   		echo"<br><br>";
   		echo"Father's name : ".$row['fname'];
   		echo"<br><br>";
   		echo"Mother's name : ".$row['mname'];
   		echo"<br><br>";
   		echo"Gender : ".$row['gender'];
   		echo"<br><br>";
   		echo"Quota : ".$row['quota'];
   		echo"<br><br>";
   		echo"student name : ".$row['stuname'];
   		echo"<br><br>";
   		echo"Yearly fees : ".$row['yfees'];
   		echo"<br><br>";
   		echo"Student's contact no : ".$row['stno'];
   		echo"<br><br>";
   		echo"Father's/Guardian's contact no : ".$row['fgno'];
   		echo"<br><br>";
   		  
           //foreach ($row as $key => $value)
//{
  //echo "<p>$key : $value</p>";
//}
 echo"</style></center>";
?>
           <center>
<fieldset >


<input type="button" onClick="window.location.href='welcome.html'" value="back to home page" name="home">
</fieldset>

</center>
<?php

mysqli_close($con);

?>