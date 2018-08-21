<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="IE=edge">
    <meta name="author" charset="CCS Bulletin Board">
	<title>CCS Bulletin Board</title>
	<link rel="stylesheet"  href="css/bootstrap.min.css" />
	<link rel="stylesheet"  href="css/bootstrap.css" />
	<link rel="stylesheet" href="css/mdb.min.css">
	<link rel="stylesheet" href="css/mdb.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="Images/CCSLogo.png">
</head>
<body>
    <nav class="navbar navbar-expand-lg mdb-color darken-4 fixed-top">
        <a class="navbar-brand" href="#"><img src="Images/CCSLogo.png" alt="CCS Logo" height="30" width="30" ></a>
        <button type="button" class="navbar-toggler teal lighten-4" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle Navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="index.php"><span class="fa fa-home"></span> Home<span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" data-toggle="modal" data-target="#loginModal"><span class="fa fa-sign-in"></span> Login</a>
                </li>
            </ul>
        </div>
    </nav>
	<!--Carousel Wrapper-->
<div id="ccs_carousel" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#ccs_carousel" data-slide-to="0" class="active"></li>
        <li data-target="#ccs_carousel" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
      <div class="slide">
        <img src="Images/News2.png" alt="Theology" width="1370" height="770">
        <div class="carousel-caption">
          <div>
            <h1>College of Computer Studies<br>Online Bulletin Board</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
        <div class="slide">
          <img src="Images/News.png" alt="Event" width="1370" height="770">
          <div class="carousel-caption">
            <div>
                <h1>College of Computer Studies<br>Online Bulletin Board</h1>
            </div>
          </div>
        </div>
    </div>
    
    </div>
    <a class="carousel-control-prev" href="#ccs_carousel" role="button" data-slide="prev">
        <span class="fa fa-chevron-left fa-2x" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#ccs_carousel" role="button" data-slide="next">
        <span class="fa fa-chevron-right fa-2x" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content cyan lighten-4">
            <div class="modal-header text-center stylish-color">
                <h4 class="modal-title w-100 font-weight-bold text-white"><span class="fa fa-sign-in"></span> Log In </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <p class="text-center">Note: Only an administrator can operate this system</p>
            <div class="modal-body mx-3">
                <form action="login.php" method="post">
                    <div class="md-form mb-5">
                        <i class="fa fa-user prefix dark-text"></i>
                        <input type="text" name="username" id="username" class="form-control" required>
                        <label data-error="wrong" data-success="right" for="username">Username</label>
                    </div>
                    <div class="md-form mb-4">
                        <i class="fa fa-lock prefix dark-text"></i>
                        <input type="password" name="password" id="password" class="form-control" required>
                        <label data-error="wrong" data-success="right" for="password">Password</label>
                        <a class="btn btn-default" id="show_pass" href="#"><span class="fa fa-eye"></span> Show</a>
                        <button type="submit" class="btn btn-primary pull-right" name="login" data-loading-text="Logging in.."><span class="fa fa-sign-in"></span> Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div style="padding: 15px 0;" class="mdb-color darken-4 text-white text-center">
    <h6 class="col-lg-12">Develop by Computer Science Society &copy 2018. All Rights Reserved</h6>
</div>
<script>

function show() {
    var p = document.getElementById('password');
    p.setAttribute('type', 'text');
}
function hide() {
    var p = document.getElementById('password');
    p.setAttribute('type', 'password');
}
var pwShown = 0;
document.getElementById("show_pass").addEventListener("click", function () {
    if (pwShown == 0) {
        pwShown = 1;
        show();
    } else {
        pwShown = 0;
        hide();
        }
    }, false);
</script>
<script type="text/javascript" src="js/carousel.js"></script>
<script type="text/javascript" src="js/mdb.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/mdb.min.js"></script>
</body>
</html>