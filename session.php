<?php
	session_start();
	include ('connection.php');
	session_set_cookie_params(432000);
	$user_check = htmlspecialchars($_SESSION['login_user']);
	$user_sql = mysqli_query($conn, "SELECT * FROM admin WHERE Username = '$user_check'");
	$user_row = mysqli_fetch_assoc($user_sql);

	$id = htmlspecialchars($user_row['ID']);
	$lastname = htmlspecialchars($user_row['LastName']);
	$firstname = htmlspecialchars($user_row['FirstName']);
	$midname = htmlspecialchars($user_row['Midname']);
	$name = htmlspecialchars($user_row['FirstName']) . " " . htmlspecialchars($user_row['LastName']);
	$fullname = htmlspecialchars($user_row['FirstName']) . " " . htmlspecialchars($user_row['Midname']) . " " . htmlspecialchars($user_row['LastName']);
	$username = htmlspecialchars($user_row['Username']);
	$password = htmlspecialchars($user_row['Password']);

	if (!isset($_SESSION['login_user'])) {
		header('location: index.php');
	}
?>