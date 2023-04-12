
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body bgcolor="pink">
	<form action="" method="POST">
	<center>LOGIN<br>
	<input type="text" name="username" placeholder="username"><br><br>
	<input type="password" name="password" placeholder="password"><br><br>
	<input type="submit" name="login" value="login">
	</center>
	</form>

</body>
</html>
<?php
$conn= new mysqli("localhost","root","","kaine_fc");
if (isset($_POST['login'])) {
	$username=$_POST['username'];
	$password=$_POST['password'];
	$check = $conn->query("SELECT * FROM users WHERE U_name='$username'");
	if (!$check->num_rows){
		alert("incorect username and password");
	}else{
		$user =$check->fetch_assoc();
		if ($username['U_password']) {
			header("location: manager.php");
		}else{
			alert("incorect password");
		}
	}
}
?>