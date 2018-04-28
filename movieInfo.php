<?php
	session_start();
	
	
	
?>
<!DOCTYPE html>
<html lang="en">

  <head>

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

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="device-mockups/device-mockups.min.css">

    <!-- Custom styles for this template -->
    <link href="css/new-age.min.css" rel="stylesheet">
	<style>
  
	
		.bg-image-full {
			
			/* The image used */
			background-image: url("movie_data/JusticeLeagueDawnOfJustice/back.jpg");

			/* Full height */
			height: 40%; 

			/* Center and scale the image nicely */
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
		}
		.bg-synopsis{
		background-image: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%);
		}
		

  </style>
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Movie Buster</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#book">Book</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#signup">Sign Up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#signin">Sign In</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
	<section class="bg-image-full">
		
	</section>

    <section class="py-5 download bg-primary">
      <div class="container">
        <h1><b>Justice League : Dawn of justice </b></h1>
        <p class="lead">Synopsis</p>
		<p>Fueled by his restored faith in humanity and inspired by Superman's selfless act, Bruce Wayne enlists newfound ally Diana Prince to face an even greater threat. Together, Batman and Wonder Woman work quickly to recruit a team to stand against this newly awakened enemy. Despite the formation of an unprecedented league of heroes -- Batman, Wonder Woman, Aquaman, Cyborg and the Flash -- it may be too late to save the planet from an assault of catastrophic proportions.</p>
      </div>
    </section>
	<section class="bg-cinemas">
	<div class="section-heading text-center">
          <h2>Select your screen date and show times here</h2>
		  <br>
    </div>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<nav>
						<div class="nav nav-tabs" id="nav-tab" role="tablist">
							<a class="nav-item nav-link active" id="nav-today-tab" data-toggle="tab" href="#nav-today" role="tab" aria-controls="nav-today" aria-selected="true">Today</a>
							<a class="nav-item nav-link" id="nav-tomorrow-tab" data-toggle="tab" href="#nav-tomorrow" role="tab" aria-controls="nav-tomorrow" aria-selected="false">Tomorrow</a>
							<a class="nav-item nav-link" id="nav-dayAfterTomorrow-tab" data-toggle="tab" href="#nav-dayAfterTomorrow" role="tab" aria-controls="nav-dayAfterTomorrow" aria-selected="false">Day After tomorrow</a>
						</div>
					</nav>
						<div class="tab-content" id="nav-tabContent">
							<div class="tab-pane fade show active" id="nav-today" role="tabpanel" aria-labelledby="nav-today-tab">
								<ul class="list-group list-group-flush">
									<li class="list-group-item">
										<div class="row">
											<div class="col-lg-3">
												Cinepolis Mall
											</div>
											<div class="col-lg-3">
												<button type="button" class="btn btn-outline-dark btn-sm">9:15 AM</button>
											</div>
											<div class="col-lg-3">
												<button type="button" class="btn btn-outline-dark btn-sm">3:30 PM</button>
											</div>
											<div class="col-lg-3">
												<button type="button" class="btn btn-outline-dark btn-sm">7:30 PM</button>
											</div>
											
										</div>
									</li>
									<li class="list-group-item">
										<div class="row">
											<div class="col-lg-3">
												Quest Mall
											</div>
											<div class="col-lg-3">
												<button type="button" class="btn btn-outline-dark btn-sm">9:15 AM</button>
											</div>
											<div class="col-lg-3">
												<button type="button" class="btn btn-outline-dark btn-sm">3:30 PM</button>
											</div>
											
											
										</div>
									</li>
									<li class="list-group-item">
										<div class="row">
											<div class="col-lg-3">
												Inox Forum Mall
											</div>
											<div class="col-lg-3">
												<button type="button" class="btn btn-outline-dark btn-sm">9:15 AM</button>
											</div>
										</div>
									</li>
									<li class="list-group-item">
										<div class="row">
											<div class="col-lg-3">
												Cinepolis Acropolis Mall
											</div>
											<div class="col-lg-3">
												<button type="button" class="btn btn-outline-dark btn-sm">9:15 AM</button>
											</div>
											<div class="col-lg-3">
												<button type="button" class="btn btn-outline-dark btn-sm">3:30 PM</button>
											</div>
											<div class="col-lg-3">
												<button type="button" class="btn btn-outline-dark btn-sm">7:30 PM</button>
											</div>
											
										</div>
									</li>
								</ul>
							</div>
							<div class="tab-pane fade" id="nav-tomorrow" role="tabpanel" aria-labelledby="nav-tomorrow-tab">
								<ul class="list-group list-group-flush">
									
									
									<li class="list-group-item">
										<div class="row">
											<div class="col-lg-3">
												Inox Forum Mall
											</div>
											<div class="col-lg-3">
												<button type="button" class="btn btn-outline-dark btn-sm">9:15 AM</button>
											</div>
										</div>
									</li>
									<li class="list-group-item">
										<div class="row">
											<div class="col-lg-3">
												Cinepolis Acropolis Mall
											</div>
											<div class="col-lg-3">
												<button type="button" class="btn btn-outline-dark btn-sm">9:15 AM</button>
											</div>
											<div class="col-lg-3">
												<button type="button" class="btn btn-outline-dark btn-sm">3:30 PM</button>
											</div>
											<div class="col-lg-3">
												<button type="button" class="btn btn-outline-dark btn-sm">7:30 PM</button>
											</div>
											
										</div>
									</li>
								</ul>
							</div>
							<div class="tab-pane fade" id="nav-dayAfterTomorrow" role="tabpanel" aria-labelledby="nav-dayAfterTomorrow-tab">
								<ul class="list-group list-group-flush">
									<li class="list-group-item">
										<div class="row">
											<div class="col-lg-3">
												Cinepolis Mall
											</div>
											<div class="col-lg-3">
												<button type="button" class="btn btn-outline-dark btn-sm">9:15 AM</button>
											</div>
											<div class="col-lg-3">
												<button type="button" class="btn btn-outline-dark btn-sm">3:30 PM</button>
											</div>
											<div class="col-lg-3">
												<button type="button" class="btn btn-outline-dark btn-sm">7:30 PM</button>
											</div>
											
										</div>
									</li>
									<li class="list-group-item">
										<div class="row">
											<div class="col-lg-3">
												Quest Mall
											</div>
											<div class="col-lg-3">
												<button type="button" class="btn btn-outline-dark btn-sm">9:15 AM</button>
											</div>
											<div class="col-lg-3">
												<button type="button" class="btn btn-outline-dark btn-sm">3:30 PM</button>
											</div>
											
											
										</div>
									</li>
									<li class="list-group-item">
										<div class="row">
											<div class="col-lg-3">
												Inox Forum Mall
											</div>
											<div class="col-lg-3">
												<button type="button" class="btn btn-outline-dark btn-sm">9:15 AM</button>
											</div>
										</div>
									</li>
									
								</ul>
							</div>
						</div>
				
				</div>
			</div>
		</div>
	</section>

    

    <footer>
      <div class="container">
        <p>&copy; Your Website 2018. All Rights Reserved.</p>
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
	
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/new-age.min.js"></script>

  </body>

</html>
