<?php
	
	$conn=mysqli_connect("localhost","root","","movie");
	$sql="select distinct movie_name from movie_details ";
	
	$row=$conn->query($sql);
	$i=-1;
	
	
	while($s=mysqli_fetch_array($row))
	{
		$i++;
		$path='./movie_data/'.$s[0].'/synopsis.txt';
		$fh = fopen($path,'r');
		$synopsis='';
		while ($line = fgets($fh)) {
			$synopsis=$synopsis.$line;
			
		}
		$ratingSql="select rating from movie_details where movie_name='".$s[0]."'";
		$ratingRow=$conn->query($ratingSql);
		$rating=mysqli_fetch_array($ratingRow);
		
	if($i%2==0)
		echo '<section class="bg-color">';
	else
		echo '<section class="bg-info">';
		
		echo '<div class="container">
			
			<div class="section-heading text-center text-dark">
				<h2>'.$s[0].'</h2>
				<hr>
				<br>
			</div>
			<div class="card-group">
				<div class="card">
					<img class="card-img-top" src="movie_data/'.$s[0].'/back.jpg" alt="Card image cap" height="300">
					<div class="card-body">
						<h5 class="card-title"><b>Synopsis</b></h5>
						<p class="card-text"><small>'.$synopsis.'</small></p>
						<p class="card-text"><small class="text-muted">Rating : '.$rating[0].'/5</small></p>
					</div>
				</div>
  
				<div class="card">
    
					<div class="card-body">
						<h3 class="card-title"><b>'.$s[0].'</b></h3>
						<div class="row">
							<div class="col-lg-12">
								<nav>
									<div class="nav nav-tabs" id="nav-tab" role="tablist">
										<a class="nav-item nav-link active" id="nav-today-tab" data-toggle="tab" href="#nav-today'.$i.'" role="tab" aria-controls="nav-today" aria-selected="true">Today</a>
										<a class="nav-item nav-link" id="nav-tomorrow-tab" data-toggle="tab" href="#nav-tomorrow'.$i.'" role="tab" aria-controls="nav-tomorrow" aria-selected="false">Tomorrow</a>
										<a class="nav-item nav-link" id="nav-dayAfterTomorrow-tab" data-toggle="tab" href="#nav-dayAfterTomorrow'.$i.'" role="tab" aria-controls="nav-dayAfterTomorrow" aria-selected="false">Day After tomorrow</a>
									</div>
								</nav>
							<div class="tab-content" id="nav-tabContent">';
							echo '<div class="tab-pane fade show active" id="nav-today'.$i.'" role="tabpanel" aria-labelledby="nav-today-tab">
									<ul class="list-group list-group-flush">';
									$sql1="select distinct theater_name from movie_details where movie_name='".$s[0]."' and day_no=1";
									$row1=$conn->query($sql1);
									while($b=mysqli_fetch_array($row1))
									{
										
										echo 
										'
									
										
										<li class="list-group-item">
											<div class="row">
												<div class="col-lg-3">
													'.$b[0].'
												</div>';
												$sql2="select movie_time from movie_details where movie_name='".$s[0]."' and day_no=1 and theater_name='".$b[0]."'";
												$row2=$conn->query($sql2);
												while($a=mysqli_fetch_array($row2))
												{
														echo '<div class="col-lg-3">
														<button type="button" class="btn btn-outline-dark btn-sm" onclick="myfun(\''.$s[0].'\',\''.$b[0].'\',\''.$a[0].'\',1)">'.$a[0].'</button>
														</div>';
												}
											echo '</div>
										</li>';
									
								unset($row2);
										unset($a);
										unset($sql2);
									}
									echo '</ul>
								</div>';
							echo '<div class="tab-pane fade" id="nav-tomorrow'.$i.'" role="tabpanel" aria-labelledby="nav-tomorrow-tab">
							<ul class="list-group list-group-flush">';
							unset($sql1);
							unset($row1);
							unset($b);
								$sql1="select distinct theater_name from movie_details where movie_name='".$s[0]."' and day_no=2";
									$row1=$conn->query($sql1);
									while($b=mysqli_fetch_array($row1))
									{
										unset($row2);
										unset($a);
										unset($sql2);
										
										echo 
										'
									
									
										
										<li class="list-group-item">
											<div class="row">
												<div class="col-lg-3">
													'.$b[0].'
												</div>';
												$sql2="select movie_time from movie_details where movie_name='".$s[0]."' and day_no=2 and theater_name='".$b[0]."'";
												$row2=$conn->query($sql2);
												while($a=mysqli_fetch_array($row2))
												{
												 echo '<div class="col-lg-3">
													<button type="button" class="btn btn-outline-dark btn-sm" onclick="myfun(\''.$s[0].'\',\''.$b[0].'\',\''.$a[0].'\',2)">'.$a[0].'</button>
												</div>';
												}
											echo '</div>
										</li>
										';
									}
									echo '</ul>
								</div>';
							echo '<div class="tab-pane fade" id="nav-dayAfterTomorrow'.$i.'" role="tabpanel" aria-labelledby="nav-dayAfterTomorrow-tab">
							<ul class="list-group list-group-flush">';
							unset($sql1);
							unset($row1);
							unset($b);
								$sql1="select distinct theater_name from movie_details where movie_name='".$s[0]."' and day_no=3";
									$row1=$conn->query($sql1);
									while($b=mysqli_fetch_array($row1))
									{
										unset($sql2);
										
										unset($row2);
										unset($a);
										echo 
										'
									
									
										
										<li class="list-group-item">
											<div class="row">
												<div class="col-lg-3">
													'.$b[0].'
												</div>';
												$sql2="select movie_time from movie_details where movie_name='".$s[0]."' and day_no=3 and theater_name='".$b[0]."'";
												$row2=$conn->query($sql2);
												while($a=mysqli_fetch_array($row2))
												{
												 echo '<div class="col-lg-3">
													<button type="button" class="btn btn-outline-dark btn-sm" onclick="myfun(\''.$s[0].'\',\''.$b[0].'\',\''.$a[0].'\',3)">'.$a[0].'</button>
												</div>';
												}
											echo '</div>
										</li>'
										
									;
									}
									echo '</ul>
								</div>';
						echo '</div>
				
				</div>
			</div>
					</div>
				</div>
			</div>
		</div>
	</section>';
	fclose($fh);
	}
	mysqli_close($conn);
	?>	