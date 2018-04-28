<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="en">

  <head>
	
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MovieBuster</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
	
	
	
    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/new-age.min.css" rel="stylesheet">
	<style>
	.card{
		box-shadow: 0 8px 16px 4px rgba(0,0,0,0.2);
	}
	.bg-color{
		background:#FFa646;
	}
	
	section .section-heading h2{
		color:white;
	}

	
  </style>
  </head>

  <body id="page-top">

    <!-- Navigation -->
    
	<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top " id="mainNav">
      <div class="container">
        <a class="navbar-brand " href="#page-top">Movie Buster</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" style="color:black" href="#book">Book</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" style="color:black" href="#signup">Sign Up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" style="color:black" href="#signin">Sign In</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
	
	
	
    <main role="main">
		
    <?php
	include 'movie_2.php';
	?>

    <footer>
      <div class="container">
        <p>&copy; Our Website 2018. All Rights Reserved.</p>
        <ul class="list-inline">
          <li class="list-inline-item">
            <a href="#">Privacy</a>
          </li>
          <li class="list-inline-item">
            <a href="#">Terms</a>
          </li>
          <li class="list-inline-item">
            <a href="#">FAQ</a>
          </li>
        </ul>
      </div>
    </footer>
	</main>
    <!-- Bootstrap core JavaScript -->
	<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  

    <!-- Custom scripts for this template 	-->
    <script src="js/new-age.min.js"></script>

	

  </body>
 
	<script>
	function myfun(a,b,c,d)
		{
			$.post("session.php",{
				moviename: a ,theatername:b,movietime:c ,dayn:d 
					},function(data,status){
						
						}
					);
			
			window.location.href="http://localhost/MOVIE/seat.php";
		}
	</script>
</html>
