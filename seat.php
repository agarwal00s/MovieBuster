<?php 
// Start the session
	session_start();
	$movie_name=$_SESSION['moname'];
	$movie_hall=$_SESSION['tname'];
	$movie_time=$_SESSION['mtime'];
	$movie_time = substr($movie_time, 0, -3);
	$movie_day=$_SESSION['dayno'];
	
	
	
	
	
	
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
	
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		
		
		<script src="js/modernizr-custom.js"></script>
		<!-- JQuery CDN -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		<style>
			
		</style>
	</head>
	<body>
		<header class="header">
			<h1 class="header__title">Cinema Layout</h1>
			<p class="note note--screen">Please view on a larger screen</p>
			
		</header>
		<div class="container">
			<div class="cube">
				<div class="cube__side cube__side--front"></div>
				<div class="cube__side cube__side--back">
					<div class="screen">
						<img style="height:100%;width:100%;" src="movie_data/<?php echo $movie_name ?>/back.jpg" />
						<div class="intro intro--shown">
							<div class="intro__side">
								<h2 class="intro__title">
									<span class="intro__down"><?php echo $movie_name; ?> </span><br/><span>Hall: <?php echo $movie_hall; ?> Time:<?php echo $movie_time; ?> </span>
								</h2>
							</div>
							<div class="intro__side">
								<button class="action action--seats">Select your seats</button>
							</div>
						</div>
					</div>
				</div>
				<div class="cube__side cube__side--left"></div>
				<div class="cube__side cube__side--right"></div>
				<div class="cube__side cube__side--top"></div>
				<div class="rows rows--large">
					<div class="row">
						<div data-seat="A1" class="row__seat"></div>
						<div data-seat="A2" class="row__seat"></div>
						<div data-seat="A3" class="row__seat"></div>
						<div data-seat="A4" class="row__seat"></div>
						<div data-seat="A5" class="row__seat"></div>
						<div data-seat="A6" class="row__seat"></div>
						<div data-seat="A7" class="row__seat"></div>
						<div data-seat="A8" class="row__seat"></div>
						<div data-seat="A9" class="row__seat"></div>
						<div data-seat="A10" class="row__seat"></div>
						<div data-seat="A11" class="row__seat"></div>
						<div data-seat="A12" class="row__seat"></div>
						<div data-seat="A13" class="row__seat"></div>
						<div data-seat="A14" class="row__seat"></div>
						<div data-seat="A15" class="row__seat"></div>
						<div data-seat="A16" class="row__seat"></div>
						<div data-seat="A17" class="row__seat"></div>
						<div data-seat="A18" class="row__seat"></div>
					</div>
					<div class="row">
						<div data-seat="B1" class="row__seat"></div>
						<div data-seat="B2" class="row__seat"></div>
						<div data-seat="B3" class="row__seat"></div>
						<div data-seat="B4" class="row__seat"></div>
						<div data-seat="B5" class="row__seat"></div>
						<div data-seat="B6" class="row__seat"></div>
						<div data-seat="B7" class="row__seat"></div>
						<div data-seat="B8" class="row__seat"></div>
						<div data-seat="B9" class="row__seat"></div>
						<div data-seat="B10" class="row__seat"></div>
						<div data-seat="B11" class="row__seat"></div>
						<div data-seat="B12" class="row__seat"></div>
						<div data-seat="B13" class="row__seat"></div>
						<div data-seat="B14" class="row__seat"></div>
						<div data-seat="B15" class="row__seat"></div>
						<div data-seat="B16" class="row__seat"></div>
						<div data-seat="B17" class="row__seat"></div>
						<div data-seat="B18" class="row__seat"></div>
					</div>
					<div class="row">
						<div data-seat="C1" class="row__seat"></div>
						<div data-seat="C2" class="row__seat"></div>
						<div data-seat="C3" class="row__seat"></div>
						<div data-seat="C4" class="row__seat"></div>
						<div data-seat="C5" class="row__seat"></div>
						<div data-seat="C6" class="row__seat"></div>
						<div data-seat="C7" class="row__seat"></div>
						<div data-seat="C8" class="row__seat"></div>
						<div data-seat="C9" class="row__seat"></div>
						<div data-seat="C10" class="row__seat"></div>
						<div data-seat="C11" class="row__seat"></div>
						<div data-seat="C12" class="row__seat"></div>
						<div data-seat="C13" class="row__seat"></div>
						<div data-seat="C14" class="row__seat"></div>
						<div data-seat="C15" class="row__seat"></div>
						<div data-seat="C16" class="row__seat"></div>
						<div data-seat="C17" class="row__seat"></div>
						<div data-seat="C18" class="row__seat"></div>
					</div>
					<div class="row">
						<div data-seat="D1" class="row__seat"></div>
						<div data-seat="D2" class="row__seat"></div>
						<div data-seat="D3" class="row__seat"></div>
						<div data-seat="D4" class="row__seat"></div>
						<div data-seat="D5" class="row__seat"></div>
						<div data-seat="D6" class="row__seat"></div>
						<div data-seat="D7" class="row__seat"></div>
						<div data-seat="D8" class="row__seat"></div>
						<div data-seat="D9" class="row__seat"></div>
						<div data-seat="D10" class="row__seat"></div>
						<div data-seat="D11" class="row__seat"></div>
						<div data-seat="D12" class="row__seat"></div>
						<div data-seat="D13" class="row__seat"></div>
						<div data-seat="D14" class="row__seat"></div>
						<div data-seat="D15" class="row__seat"></div>
						<div data-seat="D16" class="row__seat"></div>
						<div data-seat="D17" class="row__seat"></div>
						<div data-seat="D18" class="row__seat"></div>
					</div>
					<div class="row">
						<div data-seat="E1" class="row__seat"></div>
						<div data-seat="E2" class="row__seat"></div>
						<div data-seat="E3" class="row__seat"></div>
						<div data-seat="E4" class="row__seat"></div>
						<div data-seat="E5" class="row__seat"></div>
						<div data-seat="E6" class="row__seat"></div>
						<div data-seat="E7" class="row__seat"></div>
						<div data-seat="E8" class="row__seat"></div>
						<div data-seat="E9" class="row__seat"></div>
						<div data-seat="E10" class="row__seat"></div>
						<div data-seat="E11" class="row__seat"></div>
						<div data-seat="E12" class="row__seat"></div>
						<div data-seat="E13" class="row__seat"></div>
						<div data-seat="E14" class="row__seat"></div>
						<div data-seat="E15" class="row__seat"></div>
						<div data-seat="E16" class="row__seat"></div>
						<div data-seat="E17" class="row__seat"></div>
						<div data-seat="E18" class="row__seat"></div>
					</div>
					<div class="row">
						<div data-seat="F1" class="row__seat"></div>
						<div data-seat="F2" class="row__seat"></div>
						<div data-seat="F3" class="row__seat"></div>
						<div data-seat="F4" class="row__seat"></div>
						<div data-seat="F5" class="row__seat"></div>
						<div data-seat="F6" class="row__seat"></div>
						<div data-seat="F7" class="row__seat"></div>
						<div data-seat="F8" class="row__seat"></div>
						<div data-seat="F9" class="row__seat"></div>
						<div data-seat="F10" class="row__seat"></div>
						<div data-seat="F11" class="row__seat"></div>
						<div data-seat="F12" class="row__seat"></div>
						<div data-seat="F13" class="row__seat"></div>
						<div data-seat="F14" class="row__seat"></div>
						<div data-seat="F15" class="row__seat"></div>
						<div data-seat="F16" class="row__seat"></div>
						<div data-seat="F17" class="row__seat"></div>
						<div data-seat="F18" class="row__seat"></div>
					</div>
					<div class="row">
						<div data-seat="G1" class="row__seat"></div>
						<div data-seat="G2" class="row__seat"></div>
						<div data-seat="G3" class="row__seat"></div>
						<div data-seat="G4" class="row__seat"></div>
						<div data-seat="G5" class="row__seat"></div>
						<div data-seat="G6" class="row__seat"></div>
						<div data-seat="G7" class="row__seat"></div>
						<div data-seat="G8" class="row__seat"></div>
						<div data-seat="G9" class="row__seat"></div>
						<div data-seat="G10" class="row__seat"></div>
						<div data-seat="G11" class="row__seat"></div>
						<div data-seat="G12" class="row__seat"></div>
						<div data-seat="G13" class="row__seat"></div>
						<div data-seat="G14" class="row__seat"></div>
						<div data-seat="G15" class="row__seat"></div>
						<div data-seat="G16" class="row__seat"></div>
						<div data-seat="G17" class="row__seat"></div>
						<div data-seat="G18" class="row__seat"></div>
					</div>
					<div class="row">
						<div data-seat="H1" class="row__seat"></div>
						<div data-seat="H2" class="row__seat"></div>
						<div data-seat="H3" class="row__seat"></div>
						<div data-seat="H4" class="row__seat"></div>
						<div data-seat="H5" class="row__seat"></div>
						<div data-seat="H6" class="row__seat"></div>
						<div data-seat="H7" class="row__seat"></div>
						<div data-seat="H8" class="row__seat"></div>
						<div data-seat="H9" class="row__seat"></div>
						<div data-seat="H10" class="row__seat"></div>
						<div data-seat="H11" class="row__seat"></div>
						<div data-seat="H12" class="row__seat"></div>
						<div data-seat="H13" class="row__seat"></div>
						<div data-seat="H14" class="row__seat"></div>
						<div data-seat="H15" class="row__seat"></div>
						<div data-seat="H16" class="row__seat"></div>
						<div data-seat="H17" class="row__seat"></div>
						<div data-seat="H18" class="row__seat"></div>
					</div>
					<div class="row">
						<div data-seat="I1" class="row__seat"></div>
						<div data-seat="I2" class="row__seat"></div>
						<div data-seat="I3" class="row__seat"></div>
						<div data-seat="I4" class="row__seat"></div>
						<div data-seat="I5" class="row__seat"></div>
						<div data-seat="I6" class="row__seat"></div>
						<div data-seat="I7" class="row__seat"></div>
						<div data-seat="I8" class="row__seat"></div>
						<div data-seat="I9" class="row__seat"></div>
						<div data-seat="I10" class="row__seat"></div>
						<div data-seat="I11" class="row__seat"></div>
						<div data-seat="I12" class="row__seat"></div>
						<div data-seat="I13" class="row__seat"></div>
						<div data-seat="I14" class="row__seat"></div>
						<div data-seat="I15" class="row__seat"></div>
						<div data-seat="I16" class="row__seat"></div>
						<div data-seat="I17" class="row__seat"></div>
						<div data-seat="I18" class="row__seat"></div>
					</div>
					<div class="row">
						<div data-seat="J1" class="row__seat"></div>
						<div data-seat="J2" class="row__seat"></div>
						<div data-seat="J3" class="row__seat"></div>
						<div data-seat="J4" class="row__seat"></div>
						<div data-seat="J5" class="row__seat"></div>
						<div data-seat="J6" class="row__seat"></div>
						<div data-seat="J7" class="row__seat"></div>
						<div data-seat="J8" class="row__seat"></div>
						<div data-seat="J9" class="row__seat"></div>
						<div data-seat="J10" class="row__seat"></div>
						<div data-seat="J11" class="row__seat"></div>
						<div data-seat="J12" class="row__seat"></div>
						<div data-seat="J13" class="row__seat"></div>
						<div data-seat="J14" class="row__seat"></div>
						<div data-seat="J15" class="row__seat"></div>
						<div data-seat="J16" class="row__seat"></div>
						<div data-seat="J17" class="row__seat"></div>
						<div data-seat="J18" class="row__seat"></div>
					</div>
					<div class="row">
						<div data-seat="K1" class="row__seat"></div>
						<div data-seat="K2" class="row__seat"></div>
						<div data-seat="K3" class="row__seat"></div>
						<div data-seat="K4" class="row__seat"></div>
						<div data-seat="K5" class="row__seat"></div>
						<div data-seat="K6" class="row__seat"></div>
						<div data-seat="K7" class="row__seat"></div>
						<div data-seat="K8" class="row__seat"></div>
						<div data-seat="K9" class="row__seat"></div>
						<div data-seat="K10" class="row__seat"></div>
						<div data-seat="K11" class="row__seat"></div>
						<div data-seat="K12" class="row__seat"></div>
						<div data-seat="K13" class="row__seat"></div>
						<div data-seat="K14" class="row__seat"></div>
						<div data-seat="K15" class="row__seat"></div>
						<div data-seat="K16" class="row__seat"></div>
						<div data-seat="K17" class="row__seat"></div>
						<div data-seat="K18" class="row__seat"></div>
					</div>
					<div class="row">
						<div data-seat="L1" class="row__seat"></div>
						<div data-seat="L2" class="row__seat"></div>
						<div data-seat="L3" class="row__seat"></div>
						<div data-seat="L4" class="row__seat"></div>
						<div data-seat="L5" class="row__seat"></div>
						<div data-seat="L6" class="row__seat"></div>
						<div data-seat="L7" class="row__seat"></div>
						<div data-seat="L8" class="row__seat"></div>
						<div data-seat="L9" class="row__seat"></div>
						<div data-seat="L10" class="row__seat"></div>
						<div data-seat="L11" class="row__seat"></div>
						<div data-seat="L12" class="row__seat"></div>
						<div data-seat="L13" class="row__seat"></div>
						<div data-seat="L14" class="row__seat"></div>
						<div data-seat="L15" class="row__seat"></div>
						<div data-seat="L16" class="row__seat"></div>
						<div data-seat="L17" class="row__seat"></div>
						<div data-seat="L18" class="row__seat"></div>
					</div>
					<div class="row">
						<div data-seat="M1" class="row__seat"></div>
						<div data-seat="M2" class="row__seat"></div>
						<div data-seat="M3" class="row__seat"></div>
						<div data-seat="M4" class="row__seat"></div>
						<div data-seat="M5" class="row__seat"></div>
						<div data-seat="M6" class="row__seat"></div>
						<div data-seat="M7" class="row__seat"></div>
						<div data-seat="M8" class="row__seat"></div>
						<div data-seat="M9" class="row__seat"></div>
						<div data-seat="M10" class="row__seat"></div>
						<div data-seat="M11" class="row__seat"></div>
						<div data-seat="M12" class="row__seat"></div>
						<div data-seat="M13" class="row__seat"></div>
						<div data-seat="M14" class="row__seat"></div>
						<div data-seat="M15" class="row__seat"></div>
						<div data-seat="M16" class="row__seat"></div>
						<div data-seat="M17" class="row__seat"></div>
						<div data-seat="M18" class="row__seat"></div>
					</div>
					
				</div>
				<!-- /rows -->
			</div><!-- /cube -->
		</div><!-- /container -->
		<div class="plan">
			<h3 class="plan__title">Seating Plan</h3>
			<div class="rows rows--mini">
				<div class="row">
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="A1" data-price="90" data-tooltip="A1"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="A2" data-price="90"  data-tooltip="A2"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="A3" data-price="90"  data-tooltip="A3"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="A4" data-price="90"  data-tooltip="A4"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="A5" data-price="90"  data-tooltip="A5"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="A6" data-price="90"  data-tooltip="A6"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="A7" data-price="90"  data-tooltip="A7"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="A8" data-price="90"  data-tooltip="A8"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="A9" data-price="90"  data-tooltip="A9"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="A10" data-price="90" data-tooltip="A10" ></div>
					<div class="row__seat tooltip"  onclick="selectedSeat(this);" id="A11" data-price="90" data-tooltip="A11"></div>
					<div class="row__seat tooltip"  onclick="selectedSeat(this);" id="A12" data-price="90" data-tooltip="A12"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="A13" data-price="90"  data-tooltip="A13"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="A14" data-price="90"  data-tooltip="A14"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="A15" data-price="90"  data-tooltip="A15"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="A16" data-price="90"  data-tooltip="A16"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="A17" data-price="90"  data-tooltip="A17"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="A18" data-price="90"  data-tooltip="A18"></div>
				</div>
				<div class="row">
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="B1" data-price="100"   data-tooltip="B1"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="B2" data-price="100"   data-tooltip="B2"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="B3" data-price="100"   data-tooltip="B3"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="B4" data-price="100"   data-tooltip="B4"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="B5" data-price="100"   data-tooltip="B5"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="B6" data-price="100"   data-tooltip="B6"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="B7" data-price="100"   data-tooltip="B7"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="B8" data-price="100"   data-tooltip="B8"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="B9" data-price="100"   data-tooltip="B9"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="B10" data-price="100"  data-tooltip="B10"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="B11" data-price="100"   data-tooltip="B11"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="B12" data-price="100"   data-tooltip="B12"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="B13" data-price="100"   data-tooltip="B13"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="B14" data-price="100"   data-tooltip="B14"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="B15" data-price="100"   data-tooltip="B15"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="B16" data-price="100"   data-tooltip="B16"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="B17" data-price="100"   data-tooltip="B17"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="B18" data-price="100"   data-tooltip="B18"></div>
				</div>
				<div class="row">
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="C1" data-price="110" data-tooltip="C1"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="C2" data-price="110"  data-tooltip="C2"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="C3" data-price="110"  data-tooltip="C3"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="C4" data-price="110"  data-tooltip="C4"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="C5" data-price="110" data-tooltip="C5" ></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="C6" data-price="110" data-tooltip="C6"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="C7" data-price="110" data-tooltip="C7"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="C8" data-price="110"  data-tooltip="C8"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="C9" data-price="110"  data-tooltip="C9"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="C10" data-price="110"  data-tooltip="C10"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="C11" data-price="110"  data-tooltip="C11"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="C12" data-price="110"  data-tooltip="C12"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="C13" data-price="110"  data-tooltip="C13"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="C14" data-price="110"  data-tooltip="C14"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="C15" data-price="110"  data-tooltip="C15"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="C16" data-price="110"  data-tooltip="C16"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="C17" data-price="110"  data-tooltip="C17"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="C18" data-price="110"  data-tooltip="C18"></div>
				</div>
				<div class="row">
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="D1" data-price="120" data-tooltip="D1"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="D2" data-price="120"data-tooltip="D2"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="D3" data-price="120" data-tooltip="D3"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="D4" data-price="120" data-tooltip="D4"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="D5" data-price="120" data-tooltip="D5"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="D6" data-price="120" data-tooltip="D6"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="D7" data-price="120" data-tooltip="D7"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="D8" data-price="120" data-tooltip="D8"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="D9" data-price="120" data-tooltip="D9"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="D10" data-price="120" data-tooltip="D10"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="D11" data-price="120" data-tooltip="D11"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="D12" data-price="120" data-tooltip="D12"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="D13" data-price="120" data-tooltip="D13"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="D14" data-price="120" data-tooltip="D14"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="D15" data-price="120" data-tooltip="D15"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="D16" data-price="120" data-tooltip="D16"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="D17" data-price="120" data-tooltip="D17"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="D18" data-price="120" data-tooltip="D18"></div>
				</div>
				<div class="row">
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="E1" data-price="130"data-tooltip="E1"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="E2" data-price="130"data-tooltip="E2"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="E3" data-price="130"data-tooltip="E3"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="E4" data-price="130"data-tooltip="E4"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="E5" data-price="130"data-tooltip="E5"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="E6" data-price="130"data-tooltip="E6"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="E7" data-price="130"data-tooltip="E7"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="E8" data-price="130"data-tooltip="E8"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="E9" data-price="130"data-tooltip="E9"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="E10" data-price="130"data-tooltip="E10"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="E11" data-price="130"data-tooltip="E11"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="E12" data-price="130"data-tooltip="E12"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="E13" data-price="130"data-tooltip="E13"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="E14" data-price="130"data-tooltip="E14"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="E15" data-price="130"data-tooltip="E15"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="E16" data-price="130"data-tooltip="E16"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="E17" data-price="130"data-tooltip="E17"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="E18" data-price="130"data-tooltip="E18"></div>
				</div>
				<div class="row">
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="F1" data-price="140"data-tooltip="F1"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="F2" data-price="140"data-tooltip="F2"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="F3" data-price="140"data-tooltip="F3"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="F4" data-price="140"data-tooltip="F4"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="F5" data-price="140"data-tooltip="F5"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="F6" data-price="140"data-tooltip="F6"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="F7" data-price="140"data-tooltip="F7"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="F8" data-price="140"data-tooltip="F8"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="F9" data-price="140"data-tooltip="F9"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="F10" data-price="140"data-tooltip="F10"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="F11" data-price="140"data-tooltip="F11"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="F12" data-price="140"data-tooltip="F12"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="F13" data-price="140"data-tooltip="F13"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="F14" data-price="140"data-tooltip="F14"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="F15" data-price="140"data-tooltip="F15"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="F16" data-price="140"data-tooltip="F16"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="F17" data-price="140"data-tooltip="F17"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="F18" data-price="140"data-tooltip="F18"></div>
				</div>
				<div class="row">
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="G1" data-price="150"data-tooltip="G1"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="G2" data-price="150"data-tooltip="G2"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="G3" data-price="150"data-tooltip="G3"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="G4" data-price="150"data-tooltip="G4"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="G5" data-price="150"data-tooltip="G5"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="G6" data-price="150"data-tooltip="G6"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="G6" data-price="150"data-tooltip="G7"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="G6" data-price="150"data-tooltip="G8"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="G9" data-price="150"data-tooltip="G9"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="G10" data-price="150"data-tooltip="G10"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="G11" data-price="150"data-tooltip="G11"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="G12" data-price="150"data-tooltip="G12"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="G13" data-price="150"data-tooltip="G13"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="G14" data-price="150"data-tooltip="G14"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="G15" data-price="150"data-tooltip="G15"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="G16" data-price="150"data-tooltip="G16"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="G17" data-price="150"data-tooltip="G17"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="G18" data-price="150"data-tooltip="G18"></div>
				</div>
				<div class="row">
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="H1" data-price="160"data-tooltip="H1"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="H2" data-price="160"data-tooltip="H2"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="H3" data-price="160"data-tooltip="H3"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="H4" data-price="160"data-tooltip="H4"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="H5" data-price="160"data-tooltip="H5"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="H6" data-price="160"data-tooltip="H6"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="H7" data-price="160"data-tooltip="H7"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="H8" data-price="160"data-tooltip="H8"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="H9" data-price="160"data-tooltip="H9"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="H10" data-price="160"data-tooltip="H10"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="H11" data-price="160"data-tooltip="H11"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="H12" data-price="160"data-tooltip="H12"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="H13" data-price="160"data-tooltip="H13"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="H14" data-price="160"data-tooltip="H14"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="H15" data-price="160"data-tooltip="H15"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="H16" data-price="160"data-tooltip="H16"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="H17" data-price="160"data-tooltip="H17"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="H18" data-price="160"data-tooltip="H18"></div>
				</div>
				<div class="row">
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="I1" data-price="170"data-tooltip="I1"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="I2" data-price="170"data-tooltip="I2"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="I3" data-price="170"data-tooltip="I3"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="I4" data-price="170"data-tooltip="I4"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="I5" data-price="170" data-tooltip="I5"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="I6" data-price="170" data-tooltip="I6"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="I7" data-price="170" data-tooltip="I7"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="I8" data-price="170" data-tooltip="I8"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="I9" data-price="170" data-tooltip="I9"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="I10" data-price="170" data-tooltip="I10"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="I11" data-price="170" data-tooltip="I11"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="I12" data-price="170" data-tooltip="I12"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="I13" data-price="170" data-tooltip="I13"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="I14" data-price="170" data-tooltip="I14"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="I15" data-price="170" data-tooltip="I15"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="I16" data-price="170" data-tooltip="I16"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="I17" data-price="170" data-tooltip="I17"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="I18" data-price="170" data-tooltip="I18"></div>
				</div>
				<div class="row">
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="J1" data-price="180"data-tooltip="J1"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="J2" data-price="180"data-tooltip="J2"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="J3" data-price="180"data-tooltip="J3"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="J4" data-price="180"data-tooltip="J4"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="J5" data-price="180"data-tooltip="J5"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="J6" data-price="180"data-tooltip="J6"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="J7" data-price="180"data-tooltip="J7"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="J8" data-price="180"data-tooltip="J8"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="J9" data-price="180"data-tooltip="J9"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="J10" data-price="180"data-tooltip="J10"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="J11" data-price="180"data-tooltip="J11"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="J12" data-price="180"data-tooltip="J12"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="J13" data-price="180"data-tooltip="J13"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="J14" data-price="180"data-tooltip="J14"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="J15" data-price="180"data-tooltip="J15"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="J16" data-price="180"data-tooltip="J16"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="J17" data-price="180"data-tooltip="J17"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="J18" data-price="180"data-tooltip="J18"></div>
				</div>
				<div class="row">
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="K1" data-price="190"data-tooltip="K1"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="K2" data-price="190"data-tooltip="K2"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="K3" data-price="190"data-tooltip="K3"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="K4" data-price="190"data-tooltip="K4"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="K5" data-price="190"data-tooltip="K5"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="K6" data-price="190"data-tooltip="K6"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="K7" data-price="190"data-tooltip="K7"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="K8" data-price="190"data-tooltip="K8"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="K9" data-price="190"data-tooltip="K9"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="K10" data-price="190"data-tooltip="K10"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="K11" data-price="190"data-tooltip="K11"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="K12" data-price="190"data-tooltip="K12"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="K13" data-price="190"data-tooltip="K13"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="K14" data-price="190"data-tooltip="K14"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="K15" data-price="190"data-tooltip="K15"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="K16" data-price="190"data-tooltip="K16"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="K17" data-price="190"data-tooltip="K17"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="K18" data-price="190"data-tooltip="K18"></div>
				</div>
				<div class="row">
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="L1" data-price="190"data-tooltip="L1"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="L2" data-price="190"data-tooltip="L2"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="L3" data-price="190"data-tooltip="L3"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="L4" data-price="190"data-tooltip="L4"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="L5" data-price="190"data-tooltip="L5"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="L6" data-price="190"data-tooltip="L6"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="L7" data-price="190"data-tooltip="L7"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="L8" data-price="190"data-tooltip="L8"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="L9" data-price="190"data-tooltip="L9"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="L10" data-price="190"data-tooltip="L10"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="L11" data-price="190"data-tooltip="L11"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="L12" data-price="190"data-tooltip="L12"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="L13" data-price="190"data-tooltip="L13"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="L14" data-price="190"data-tooltip="L14"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="L15" data-price="190"data-tooltip="L15"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="L16" data-price="190"data-tooltip="L16"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="L17" data-price="190"data-tooltip="L17"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="L18" data-price="190"data-tooltip="L18"></div>
				</div>
				<div class="row">
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="M1" data-price="200"data-tooltip="M1"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="M2" data-price="200"data-tooltip="M2"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="M3" data-price="200"data-tooltip="M3"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="M4" data-price="200"data-tooltip="M4"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="M5" data-price="200"data-tooltip="M5"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="M6" data-price="200"data-tooltip="M6"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="M7" data-price="200"data-tooltip="M7"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="M8" data-price="200"data-tooltip="M8"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="M9" data-price="200"data-tooltip="M9"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="M10" data-price="200"data-tooltip="M10"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="M11" data-price="200"data-tooltip="M11"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="M12" data-price="200"data-tooltip="M12"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="M13" data-price="200"data-tooltip="M13"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="M14" data-price="2000"data-tooltip="M14"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="M15" data-price="2000"data-tooltip="M15"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="M16" data-price="2000"data-tooltip="M16"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="M17" data-price="2000"data-tooltip="M17"></div>
					<div class="row__seat tooltip" onclick="selectedSeat(this);" id="M18" data-price="2000"data-tooltip="M18"></div>
				</div>
				
				
				
				
				
			</div>
			<!-- /rows -->
			<ul class="legend">
				<li class="legend__item legend__item--free">Free</li>
				<li class="legend__item legend__item--reserved">Reserved</li>
				<li class="legend__item legend__item--selected">Selected</li>
			</ul>
		<button class="action action--buy" onclick="myBuy()" >Buy tickets</button>
		
		</div><!-- /plan -->
		<button class="action action--lookaround action--disabled" arial-label="Unlook View"></button>
		<script src="js/classie.js"></script>
		<script src="js/main.js"></script>
		
	</body>
	
		
	
	<script>
	var name;
		var cost=0;
		var tickets="";
		function selectedSeat(el)
		{
			var id=el.id;
			var price=parseInt(el.dataset.price,10);
			if(el.classList.contains("row__seat--selected"))
			{
				cost=cost-price;
				tickets=tickets.replace(id,"");
			}
			else
			{
				cost=cost+price;
				tickets=tickets+" "+id;
			}
			
			
			alert("price:"+price);
		}
		
		function myBuy()
		{
			
			localStorage.setItem('tickets',tickets);
			localStorage.setItem('cost',cost);
			
			
			window.location.href = "payment.php";

		}
		
	
	
        function run(){
            
			$('#'+name).removeClass("tooltip");
			$('#'+name).addClass("row__seat--reserved");
        }
    	

		
	</script>
</html>
<?php
	session_start();
	$mname=$_SESSION['moname'];
	$day=$_SESSION['dayno'];
	$time=$_SESSION['mtime'];
	$thname=$_SESSION['tname'];
	$conn=new mysqli("localhost","root","","movie");
	$sql="select seat_booked from movie_details where movie_name='".$mname."' and day_no=".$day." and movie_time='".$time."' and theater_name='".$thname."'";
	$row=$conn->query($sql);
	$us=mysqli_fetch_array($row);
	$a=explode(".",$us[0]);
	
	foreach($a as $s)
	{
		echo '<script>';
		echo 'var name = ' . json_encode($s) . ';';
		echo '</script>';
		echo '<script type="text/javascript">    run();      </script>';
	}
?>