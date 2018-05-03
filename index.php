<?php
// Start the session
session_start();
?>
<?php
include 'connect.php';
$movie_names=array();
$sql="select distinct movie_name from movie_details order by rating desc" ;
	$subject=$conn->query($sql);
	
	$i=-1;
	while($row=mysqli_fetch_array($subject))
	{
		$i++;
		$movie_names[$i]=$row[0];
	}
	
	$_SESSION["movie_list"]= $movie_names;
	
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MovieBuster</title>
	<!-- JQuery CDN -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

  
    <!-- Custom styles for this template -->
    <link href="css/new-age.min.css" rel="stylesheet">
	<style>
  
	.carousel-inner img {
		width: 100%;
		height: 90%;
	}
	.card-img-top{
		max-height:300px;
	}
	.shadow{
    -webkit-box-shadow: 0 14px 6px -6px #777;
       -moz-box-shadow: 0 14px 6px -6px #777;
            box-shadow: 0 14px 6px -6px #777;
	}
	.bg-sec{
	  background: #ed4264; /* fallback for old browsers */
	background: -webkit-linear-gradient(to right, #ed4264, #ffedbc); /* Chrome 10-25, Safari 5.1-6 */
	background: linear-gradient(to right, #ed4264, #ffedbc); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
	}
	#error-msg{
		color:red;
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

    <header class="masthead">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-lg-7 my-auto" >
            <div class="header-content mx-auto">
              <h1 class="mb-5">Book movie tickets online hassle free. Movie Buster is the easiest way to book movie tickets!</h1>
              <a href="#book" class="btn btn-outline btn-xl js-scroll-trigger">Book now</a>
            </div>
          </div>
          <div class="col-lg-5 my-auto" >
            <div id="demo" class="carousel slide" data-ride="carousel" data-interval="2200">
				<ul class="carousel-indicators">
					<li data-target="#demo" data-slide-to="0" class="active"></li>
					<li data-target="#demo" data-slide-to="1"></li>
					<li data-target="#demo" data-slide-to="2"></li>
				</ul>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="img/m1.jpg" alt="Movie-1" >
					  
					</div>
					<div class="carousel-item">
						<img src="img/m2.jpg" alt="Movie-2" >
				  
					</div>
					<div class="carousel-item">
						<img src="img/m3.jpg" alt="Movie-3" >
				   
					</div>
				</div>
				<a class="carousel-control-prev" href="#demo" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				</a>
				<a class="carousel-control-next" href="#demo" data-slide="next">
					<span class="carousel-control-next-icon"></span>
				</a>
			</div>
          </div>
        </div>
      </div>
    </header>

	<section class="features">
	<div class="container">
        <div class="section-heading text-center">
          <h2>Why should use Movie Buster ?</h2>
          <hr>
		  
        </div>
		<div class="row">
			<div class="col-lg-4 mx-auto">
			<div class="feature-item">
                    <i class="icon-credit-card text-primary"></i>
                    <h3>Swift Payment</h3>
                    <p class="text-muted">Digital payment mode makes ticket booking lightning fast!</p>
                  </div>
			</div>
			<div class="col-lg-4 mx-auto">
			<div class="feature-item">
                    <i class="icon-calendar text-primary"></i>
                    <h3>Early Booking</h3>
                    <p class="text-muted">One can book tickets 2 days prior to the show through MovieBuster!</p>
                  </div>
			</div>
			<div class="col-lg-4 mx-auto">
			<div class="feature-item">
                    <i class="icon-globe text-primary"></i>
                    <h3>Book from anywhere</h3>
                    <p class="text-muted">Users can book tickets from anywhere at anytime of the day</p>
                  </div>
			</div>
		</div>
	</div>
	</section>
    <section class="download bg-primary text-center" id="book">
     <div class="container">
        <div class="section-heading text-center">
          <h2>Latest Movies</h2>
          <hr>
		  <br>
        </div>
		
		<div class="row">
          <div class="col-md-3 mx-auto">
				<div class="card" >

				<!-- Image -->
					<img class="card-img-top shadow" src="movie_data/<?php echo $_SESSION['movie_list'][0]; ?>/poster.jpg" >

				<!-- Text Content -->
					<div class="card-body">
						<p class="card-text"><?php echo $_SESSION['movie_list'][0]; ?></p>
						<button type="button" class="btn btn-primary" onclick="booking()">
							Book Now
						</button>
					</div>

				</div>
          </div>
		  <div class="col-md-3 mx-auto">
				<div class="card" >

				<!-- Image -->
					<img class="card-img-top shadow" src="movie_data/<?php echo $_SESSION['movie_list'][1]; ?>/poster.jpg" >

				<!-- Text Content -->
					<div class="card-body">
						<p class="card-text"><?php echo $_SESSION['movie_list'][1]; ?></p>
						<button type="button" class="btn btn-primary" onclick="booking()">
							Book Now
						</button>
					</div>

				</div>
          </div>
		  <div class="col-md-3 mx-auto">
				<div class="card" >

				<!-- Image -->
					<img class="card-img-top shadow" src="movie_data/<?php echo $_SESSION['movie_list'][2]; ?>/poster.jpg" >

				<!-- Text Content -->
					<div class="card-body">
						<p class="card-text"><?php echo $_SESSION['movie_list'][2]; ?></p>
						<button type="button" class="btn btn-primary" onclick="booking()">
							Book Now
						</button>
					</div>

				</div>
          </div>
		  <div class="col-md-3 mx-auto">
				<div class="card" >

				<!-- Image -->
					<img class="card-img-top shadow" src="movie_data/<?php echo $_SESSION['movie_list'][3]; ?>/poster.jpg" >

				<!-- Text Content -->
					<div class="card-body">
						<p class="card-text"><?php echo $_SESSION['movie_list'][3]; ?></p>
						<button type="button" class="btn btn-primary" onclick="booking()">
							Book Now
						</button>
					</div>

				</div>
          </div>
        </div>
		<br/>
		<div class="row justify-content-end">
			
			<div class="col-lg-12 my-auto">
				<button type="button" class="btn btn-secondary" onclick="booking()">
						View More
				</button>
			</div>
			</div>
		</div>
      </div>
    </section>

	<section id="signup">
		<div class="container">
		<div class="section-heading text-center">
          <h2>Register now and start booking your tickets</h2>
          <hr>
		  <br>
        </div>
    <div class="row">
        <div class="col-md-4 col-lg-4 mx-auto">
                <div class="card card-body">
                    <h3 class="text-center mb-4">Sign-up</h3>
                    
                    <fieldset>
						<div class="form-group has-error">
                            <input class="form-control is-valid" placeholder="Full Name" name="fullName" id="fullname" type="text">
                        </div>
                        <div class="form-group has-error">
                            <input class="form-control is-valid" placeholder="E-mail Address" name="email" id="email" type="text">
                        </div>
                        <div class="form-group has-success">
                            <input class="form-control is-valid" placeholder="Password" name="password" value="" id="pass1" type="password">
                        </div>
                        <div class="form-group has-success">
                            <input class="form-control is-valid" placeholder="Confirm Password" name="password" id="pass2" value="" type="password">
                        </div>
                        
                        <input class="btn btn-lg btn-primary btn-block" value="Sign Me Up" onclick="signmeup()" type="submit">
                    </fieldset>
                </div>
        </div>
		
    </div>
</div>
	</section>
	<section class="bg-sec download text-center" id="signin">
		<div class="container ">
		<div class="section-heading text-center">
          <h2>Sign In</h2>
          <hr>
		  <br>
		  <br>
        </div>
			<div class="row">
				<div class="col-md-4 col-lg-4 mx-auto">
                <div class="card card-body">
                    <h3 class="text-center mb-4">Sign-in</h3>
                    
                    <fieldset>
                        <div class="form-group has-error">
                            <input class="form-control is-valid" placeholder="E-mail Address" id="semail" name="email" type="text">
							
                        </div>
						
                        <div class="form-group has-success">
                            <input class="form-control is-valid" placeholder="Password" id="spass" name="password" value="" type="password">
							<span id="error-msg"></span>
						</div>
                        
                        
                        <input class="btn btn-lg btn-primary btn-block" value="Sign In" onclick="signmein()" type="submit">
                    </fieldset>
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
	
<div class="modal fade" id="bookMovie" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Alert</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Please Sign In to Continue Booking
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="signinsucess" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Alert</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Sign In Sucessful
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="signupsucess" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Alert</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        SignUp Sucessful
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/new-age.min.js"></script>

  </body>
  <script>
  var user="";
  function booking()
  {
	  if(user!="")
			location.href='movie.php';
		else
	  $("#bookMovie").modal();
  }
	function signmein()
	{
		semail=$("#semail").val();
		spass=$("#spass").val();
		var swell=true;
		if(semail=="")
		{
			$("#semail").removeClass("is-valid");
			$("#semail").addClass("is-invalid");
			$("#error-msg").html("Please Provide the Email ID");
			swell=false;
		}
		if(spass=="")
		{
			$("#spass").removeClass("is-valid");
			$("#spass").addClass("is-invalid");
			$("#error-msg").html("Please provide the password");
			swell=false;
		}
		if((semail=="" )&&(spass==""))
		{
			$("#error-msg").html("Please provide the Email-ID and Password");
			swell=false;
		}
		if(swell==true)
		{
			$.ajaxSetup({async: false});
			$.post("signin.php",{
			email: $("#semail").val(),pass: $("#spass").val()
				},function(data,status){
					if(data==="1")
					{
						$("#semail").removeClass("is-valid");
						$("#semail").addClass("is-invalid");
						$("#spass").removeClass("is-valid");
						$("#spass").addClass("is-invalid");
						$("#error-msg").html("Invalid Username or Password");
					}
					else if(data==="0")
					{
						
						user=semail;
						$("#signinsucess").modal();
						location.href='movie.php';
					}
				});
		}
	}
	function signmeup()
	{
		fullname=$("#fullname").val();
		password=$("#pass1").val();
		cnfpassword=$("#pass2").val();
		email=$("#email").val();
		var specialChars = "<>@!#$%^&*()_+[]{}?:;|'\"\\,./~`-=";
		var check = function(string)
		{
					for(i = 0; i < specialChars.length;i++)
					{
					if(string.indexOf(specialChars[i]) > -1)
					{
					return true
					}
					}
					return false;
		}
		var alliswell=true;
		if($("#fullname").val()==="")
		{
			$("#fullname").removeClass("is-valid");
			$("#fullname").addClass("is-invalid");
			alert("*Name Required");
			alliswell=false;
		}
	
		if(password.length<6||password.search(/[a-z]/i) < 0||password.search(/[0-9]/) < 0||check($('#pass1').val()) == false)
		{
			$("#pass1").removeClass("is-valid");
			$("#pass2").removeClass("is-valid");
			$("#pass2").addClass("is-invalid");
			$("#pass1").addClass("is-invalid");
			alert("*Password must contain at least 6 characters including(1 letter,1 digit,1 special charcter)");
			alliswell=false;
		}
		if($("#pass2").val()==="")
		{
			$("#pass2").removeClass("is-valid");
			$("#pass2").addClass("is-invalid");
			alert("*Retype Password");
			alliswell=false;
		}
		if($("#pass1").val()!=$("#pass2").val())
		{
			$("#pass2").removeClass("is-valid");
			$("#pass2").addClass("is-invalid");
			alert("*Password mismatch");
			alliswell=false;
		}
		var emailRegex = '^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$';
		if(!email.match(emailRegex))
		{
			$("#email").removeClass("is-valid");
			$("#email").addClass("is-invalid");
			alert("*Invalid Email ID");
			alliswell=false;
		}
		if($("#email").val()==="")
		{
			$("#email").removeClass("is-valid");
			$("#email").addClass("is-invalid");
			alert("*Email ID Required");
			alliswell=false;
		}
		
		if(alliswell==true)
		{
			$.ajaxSetup({async: false});
			$.post("signup.php",{
			fullname: $("#fullname").val(),emailid: $("#email").val(),password: $("#pass1").val()
					},function(data,status){
						
						
						if(data==="2"){
							$("#email").removeClass("is-valid");
							$("#email").addClass("is-invalid");
							alert("*Account with this Email ID Exist");
							alliswell=false;
						}
					});
		}
		if(alliswell==true)
			$("#signupsucess").modal();

	}
	
  </script>

</html>
