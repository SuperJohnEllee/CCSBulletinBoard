<?php
	session_start();
	include ('connection.php');

	//define variables
	$username = htmlspecialchars($_POST['username']);
	$password = htmlspecialchars($_POST['password']);

	//Protect form SQL Injection
	$user = stripslashes($username); //removes backslashes
	$pass = stripslashes($password);
	$user = mysqli_real_escape_string($conn, $user); //escapes string
	$pass = mysqli_real_escape_string($conn, $pass);

	$user_check = "SELECT * FROM admin WHERE Username = '$user'";
	$user_res = mysqli_query($conn, $user_check);
	$user_count = mysqli_num_rows($user_res);
	$user_row = mysqli_fetch_assoc($user_res);
	$res_pass = htmlspecialchars($user_row['Password']);

	if ($user_count > 0) {
		if ($pass == $res_pass) {
			$_SESSION['login_user'] = $user;
			header("location: dashboard.php");
		} else {
			echo "<script>
				alert('Incorrect Password');
				window.open('index.php', '_self');
			</script>";
		}
	} else {
			echo "<script>
				alert('Invalid Username');
				window.open('index.php', '_self');
			</script>";
	}
?>