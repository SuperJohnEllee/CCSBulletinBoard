<!DOCTYPE html>
<?php
	include ('session.php');
	include ('connection.php');
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="IE=edge">
	<title>CCS Bulletin Board</title>
	<link rel="stylesheet"  href="css/bootstrap.min.css" />
	<link rel="stylesheet"  href="css/bootstrap.css" />
	<link rel="stylesheet" href="css/mdb.min.css">
	<link rel="stylesheet" href="css/mdb.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="Images/CCSLogo.png">
</head>
<body class="teal lighten-4">
	   <nav class="navbar navbar-expand-lg navbar-dark teal darken-3 fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none"><?php echo htmlspecialchars($username); ?></span>
        <span class="d-none d-lg-block">
          <img class="img-fluid mx-auto mb-2" src="Images/CCSLogo.png" alt="">
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#"><span class="fa fa-dashboard"></span> Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><span class="fa fa-users"></span> Manage Admin</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href=""><span class="fa fa-newspaper-o"></span> Manage News</a>
          </li>   
          <li class="nav-item">
            <a class="nav-link" href="admin-profile.php?<?php echo htmlspecialchars($username); ?>"><span class="fa fa-user"></span> Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php"><span class="fa fa-sign-out"></span> Logout</a>
          </li>
        </ul>
      </div>
    </nav>
	<div class="container">
		<div class="page-header">
			<h2>Hello, <?php echo htmlspecialchars($name); ?></h2>
		</div>
    <h4 class="mt-5 text-center">College of Computer Studies<br>Online Bulletin Board</h4>
	</div>

<script type="text/javascript" src="js/carousel.js"></script>
<script type="text/javascript" src="js/mdb.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/mdb.min.js"></script>
</body>
</html>