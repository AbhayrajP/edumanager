<!DOCTYPE html>
<head>
<title>Signup</title>
<link rel="stylesheet" href="C:\Users\Administrator\Desktop\edu manager\css\signup.css" />
</head>
</head>
<body>
<h1 align="center" style="font-family:Times New Roman">SIGNUP</h1>
<hr>
<center>
<fieldset >
<form method="post" action="dbsignup.php">
College Name : <input type="text" name="clgname" required><br><br>
Password : <input type="password" name="pass" required><br><br>
Confirm Password : <input type="password" name="cfpass" required> <br><br>
<input type="submit"  name="submit"><br><br>

</form>
</fieldset>
</center>
</body>
</html>
<?php
function fun(){
	echo "hi";
}

$con=mysqli_connect('localhost','root','password');
$db=mysqli_select_db($con,"details");
if(isset($_POST['submit']))
{
	$clgname=$_POST['clgname'];
	$pass=$_POST['pass'];
	$cfpass=$_POST['cfpass'];
	$clgname=stripcslashes($clgname);
	$pass=stripcslashes($pass);
	$cfpass=stripcslashes($cfpass);
	$clgname=mysqli_real_escape_string($con,$clgname);
	$pass=mysqli_real_escape_string($con,$pass);
	$cfpass=mysqli_real_escape_string($con,$cfpass);
	

		if($pass===$cfpass && $clgname!=="" && $pass!==""){
		$query="insert into college_details(clgname,password) values('$clgname','$pass')";
		if(mysqli_query($con,$query))
		
		{
			echo " <h3>registration successful</h3>";?>
		<input type='button' value='back to login' onClick="window.location.href='home.html'" >;	
		<?php	}
		}	
	
}

?>