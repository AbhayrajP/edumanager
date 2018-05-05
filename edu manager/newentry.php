<!DOCTYPE html>
<head>
<title>New Entry</title>
<link rel="stylesheet" href="css\newentry.css" />
</head>
<body>
<h1 align="center" style="font-family:">NEW ENTRY</h1>
<hr>
<center>
<fieldset >
<form action="newentry.php" method="post">
Student Name : <input type="text" name="stuname" placeholder="student name"><br><br>

<ab>Roll.no</ab> : <style>ab{padding-left:40};</style><input type="text" name="roll.no" placeholder="roll no."><br><br>
Father's Name  : <input type="text" name="fname" placeholder="Father's name"><br><br>
Mother's Name  : <input type="text" name="mname" placeholder="Mother's name"><br><br>
Gender: <input type="radio" value="male" name="gender">Male <input type="radio" value="female" name="gender">Female<br><br>
Quota: 
<select name="quota" >
<option value=""></option>

<option value="Counselling">Counselling</option>
<option value="Management">Management</option>
<option value="Others">Others</option>
</select> <br><br>
Yearly fees:<input type="text" name="yfees"><br><br>
Student's contact no :<input type="text" name="stno"><br><br>
<de>Father's/Guardian's contact no :<style>de{padding:105px}	</style><input type="text" name="fgno"></de><br><br>
<ef>Mother's contact no</ef>:<style>ef{padding-left:1}</style><input type="text" name="mno"><br><br>
Address:<textarea  type="text" name="address"></textarea><br><br>



<input type="submit" name="submit"><br><br>
</form>
</fieldset>
</center>
</body>
</html>

<?php


$con=mysqli_connect('localhost','root','password');
$db=mysqli_select_db($con,"details");
if(isset($_POST['submit']))
{
	$stuname=$_POST['stuname'];
	$rollno=$_POST['rollno'];
	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$gender=$_POST['gender'];
	$quota=$_POST['quota'];
	$yfees=$_POST['yfees'];
	$stno=$_POST['stno'];
	$fgno=$_POST['fgno'];
	$address=$_POST['address'];
	$stuname=stripcslashes($stuname);
	$rollno=stripcslashes($rollno);
	$fname=stripcslashes($fname);
	$mname=stripcslashes($mname);
	$gender=stripcslashes($gender);
	$quota=stripcslashes($quota);
	$yfees=stripcslashes($yfees);
	$stno=stripcslashes($stno);
	$fgno=stripcslashes($fgno);
	$address=stripcslashes($address);
	$stuname=mysqli_real_escape_string($con,$stuname);
	$rollno=mysqli_real_escape_string($con,$rollno);
	$fname=mysqli_real_escape_string($con,$fname);
	$mname=mysqli_real_escape_string($con,$mname);
	$gender=mysqli_real_escape_string($con,$gender);
	$quota=mysqli_real_escape_string($con,$quota);
	$yfees=mysqli_real_escape_string($con,$yfees);
	$stno=mysqli_real_escape_string($con,$stno);
	$fgno=mysqli_real_escape_string($con,$fgno);
	$address=mysqli_real_escape_string($con,$address);
	if($stuname=="" || $rollno=="" || $fname=="" || $mname=="" ||$gender=="" || $quota=="" ||$yfees=="" || $stno=="" || $fgno=="" || $address=="" ){
		echo "<script>alert('Please fill all fields');</script>";
		exit();
	}

	else{
		$res="insert into student_details(stuname,rollno,fname,mname,gender,quota,yfees,stno,fgno,address) values('$stuname','$rollno','$fname','$mname','$gender','$quota','$yfees','$stno','$fgno','$address')";
		

		if(mysqli_query($con,$res))
		
		{
			echo " <h3>student details recorded successfully!!</h3>";?>
			
		<input type='button' value='back to welcomepage' onClick="window.location.href='welcome.html'" >	
		<?php	}
		}	
	
}

?>

<!--$res=mysqli_query($con,"select * from student_details where stuname='$stuname' and rollno='$
//rollno' and fname='$fname' and mname='$mname' and gender='$gender' and quota='$quota' and //fees='$
//yfees' and stno='$stno' and fgno='$fgno' and address='$address'")or die("Failed to query 
//database ".mysqli_error());
-->
