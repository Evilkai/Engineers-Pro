<?php 
	include('data1.php');

	if (!isLoggedIn()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: signin.php');
	}

?>


<!DOCTYPE html>
<html>

<head>    
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-144573519-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-144573519-1');
</script>

   
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
  <link rel="icon" href="assets/app/icons8-engineering-96.png">
  <title>Semester 4th</title>
  <meta name="description" content="Free Educational Website.">
  <meta name="keywords" content="Engineers Pro">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/navbar-ontop.js"></script>
  <script src="js/animate-in.js"></script>
</head>

<body>
   <nav class="navbar navbar-expand-md navbar-inverse fixed-top bg-black ">
    <div class="container">
      <a class="navbar-brand text-white3" href="users.php">🅴🅽🅶🅸🅽🅴🅴🆁🆂 🅿🆁🅾</a>
<button class="navbar-toggler navbar-toggler-right custom-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar4">
        <span class="navbar-toggler-icon"></span>
    </button>
	 <div class="navbar-collapse collapse text-center justify-content-end" id="collapsingNavbar4">
       <div class="dropdown-divider"></div>
         <a class="btn navbar-btn ml-md-2 btn-light text-white1" href="upload.php" >Upload</a>
		<a class="btn navbar-btn ml-md-2 btn-light1 text-white1" href="download1.php" >Download</a>
		<ul class="navbar-nav">
		<li class="nav-item mx-2"><a class="nav-link text-white3" href="about1.php">About Us</a></li>
          <li class="nav-item mx-2"><a class="nav-link text-white3" href="logout.php">Logout</a></li>
          
		</ul>
      </div>
    </div>
  </nav>
   <div class="py-5 text-center" style="background-image: url('assets/app/Background M3 login for M1 by andreascy on DeviantArt.jpg');background-size:cover;">
    <div class="container">
      <div class="row">
        <div class="mx-auto col-md-12 p-4">
          <h1 class="mb-3">Download Page</h1>
        </div>
      </div>
	  <div class="row d-flex justify-content-center">
	  	      	  <?php
$dir = "upload/4th/";

// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
		 if ($file != "." && $file != "..") {
     $files = '<a href="'.$dir. ''. $file .'"><h7><b>' . $file . '</b></h7></a>';
	echo   ' <div class="col-lg-3 col-6 p-4 text-center"><img class="img-fluid d-block mb-3 mx-auto" src="assets/app/pdf.png" width="100" alt="Card image cap">'. $files .'</div>';
	
    }
    
  }
}
closedir($dh);
}
?>
</div>
</div>
</div>

  <div class="py-0">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-3 text-center">
          <p>© Copyright 2018 Engineers Pro - All rights reserved.</p>
        </div>
      </div>
    </div>


  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <script src="js/smooth-scroll.js"></script>
</body>

</html>