<!DOCTYPE html>
<head>
<title>Edu Manger</title>
<link rel="stylesheet" href="C:\xampp\htdocs\edu manager\css\home.css" />
</head>
<body>
<h1 align="center" style="font-family:Times New Roman">Edu Manager</h1>
<hr>
<center>
<fieldset >
<form action="db1.php" method="post">
College name:<input type="text" name="clgname" required maxlength="40"><br><br>
Password:	<input type="password" name="password" required><br><br>

<input type="submit"  value="Login" name="login">

</form>
<input type="button" onclick="window.location.href='signup.html'" value="Signup" name="signup">

</fieldset>
</center>


</body>
</html>
<?php


$con=mysqli_connect('localhost','root','password');
$db=mysqli_select_db($con,"details");
if(isset($_POST['login']))
{
	$clgname=$_POST['clgname'];
	$password=$_POST['password'];
	$clgname=stripcslashes($clgname);
	$password=stripcslashes($password);
	$clgname=mysqli_real_escape_string($con,$clgname);
	$password=mysqli_real_escape_string($con,$password);
	
	if($clgname==""){
		echo "<script>alert('enter college name');</script>";
		exit();
	}

	if($password==""){
		echo "<script>alert('enter password');</script>";
		exit();
	}
	else{
		$res=mysqli_query($con,"select * from college_details where clgname='$clgname' and password='$password'")or die("Failed to query database ".mysqli_error());
		$row=mysqli_fetch_array($res);

		if($row['clgname']==$clgname && $row['password']==$password)
		{
			header('Location:welcome.html');
		}	
		else
		{
			header('Location:home.html');
		}
	}
}
mysqli_close($con);

?>