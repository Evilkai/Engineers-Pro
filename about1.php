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
  <title>About Us</title>
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
        <div class="mx-auto col-md-12">
          <h1 class="mb-3">Meet&nbsp;the team</h1>
        </div>
      </div>
      <div class="row d-flex justify-content-center">
        <div class="col-lg-3 col-6 p-4"> <img class="img-fluid d-block mb-3 mx-auto rounded-circle" src="assets/app/jk2.jpeg" width="150" alt="Card image cap">
          <h4> <b>Jatin Kumar</b> </h4>
          <h6><b>Founder, Web-Designer and Web Developer</b></h6>
          <p class="mb-0"> <i>"There are three responses to a piece of design – yes, no, and WOW! Wow is the one to aim for."</i> </p>
        </div>
        <div class="col-lg-3 col-6 p-4"> <img class="img-fluid d-block mb-3 mx-auto rounded-circle" src="assets/app/harsh2.jpeg" width="150" alt="Card image cap">
          <h4> <b>Harsh Srivastav</b> </h4>
          <h6><b>ShareHolder</b></h6>
          <p class="mb-0"> <i>"A designer knows he has achieved perfection not when there is nothing left to add, but when there is nothing left to take away."</i> </p>
        </div>
        <div class="col-lg-3 col-6 p-4"> <img class="img-fluid d-block mb-3 mx-auto rounded-circle" src="assets/app/ankit.jpeg" width="150">
          <h4> <b>Ankit Chauhan</b> </h4>
          <h6><b>Co-Founder</b></h6>
          <p class="mb-0"> <i>"Technology over technique produces emotionless design."</i> </p>
        </div>
        <div class="col-lg-3 col-6 p-4"> <img class="img-fluid d-block mb-3 mx-auto rounded-circle" src="assets/app/parashar.jpeg" width="150">
          <h4> <b>Harsh Parashar</b> </h4>
          <h6><b>Co-Founder</b></h6>
          <p class="mb-0"> <i>"If you think math is hard, try web design."</i> </p>
        </div>
      </div>
      <div class="row d-flex justify-content-center">
        <div class="col-lg-3 col-6 p-4"> <img class="img-fluid d-block mb-3 mx-auto rounded-circle" src="assets/app/akul.jpeg" width="150" alt="Card image cap">
          <h4> <b>Akul Sharma</b> </h4>
          <h6><b>System Manager</b></h6>
        </div>
        <div class="col-lg-3 col-6 p-4"> <img class="img-fluid d-block mb-3 mx-auto rounded-circle" src="assets/app/visvendra.jpeg" width="150" alt="Card image cap">
          <h4> <b>Visvendra Singh</b> </h4>
          <h6><b>General Manager</b></h6>
        </div>
        <div class="col-lg-3 col-6 p-4"> <img class="img-fluid d-block mb-3 mx-auto rounded-circle" src="assets/app/sumit.jpeg" width="150" alt="Card image cap">
          <h4> <b>Sumit Kumar Singh</b> </h4>
          <h6><b>Accounts Manager</b></h6>
        </div>
         <div class="col-lg-3 col-6 p-4"> <img class="img-fluid d-block mb-3 mx-auto rounded-circle" src="assets/app/mintu.jpeg" width="150" alt="Card image cap">
          <h4> <b>Mintu Biswas</b> </h4>
          <h6><b>Tester</b></h6>
        </div>
      </div>
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
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>