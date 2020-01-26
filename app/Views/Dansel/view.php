<!DOCTYPE html>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<head>

    <!-- Basic Page Needs
================================================== -->
    <meta charset="utf-8">
    <title><?php
                
            echo $data->title;
                
            ?>
    </title>

    <!-- Mobile Specific Metas
================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
================================================== -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/colors/color.css" id="colors">
    <style>
        #map {
            height: 300px;
            margin-bottom: 3%;
            margin-left: -0.1%;
        }
    </style>
</head>

<body>
    <div id="wrapper">
        <?=$this->include('partials/nav')?>


<!-- Titlebar
================================================== -->
<div id="titlebar" class="photo-bg" style='background: url(<?php $path='';
 echo (WRITEPATH.'uploads\images\\'.$data->image);
 ?>)'>
	<div class="container">
		<div class="ten columns">
			<span>
        <a href="browse-jobs.html"><?php echo $data->category; ?></a></span>  
            <h2> <?php echo $data->title; ?> <span class='full-time'><?php echo $data->opening_date; ?></span></h2>";	
		</div>

		<div class="six columns">
			<a href="#" class="button white"><i class="fa fa-star"></i> <?php echo $data->poya_date; ?></a>
		</div>
	
	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
	
	<!-- Recent Jobs -->
	<div class="eleven columns">
	<div class="padding-right">
		
		<!-- Company Info -->
		<div class="company-info">
			<img src="images/company-logo.png" alt="">
			<div class="content">
				<h4><?php echo $data->title; ?></h4>
				<span><a href="#"><i class="fa fa-link"></i><?php echo $data->category; ?></a></span>
				<span><a href="#"><i class="fa fa-twitter"></i> @<?php echo $data->city; ?></a></span>
			</div>
			<div class="clearfix"></div>
		</div>

		<p class="margin-reset">
		<?php echo $data->description; ?>
		</p>
		<br>
		<div class='six columns'>
			<a href='' style='text-decoration:none;background:#03fc73;color:#ffffff' class='button white' data-toggle='modal' data-target='#myModal'></i>Add Comment</a>
		</div>
	</div>
	</div>


	<!-- Widgets -->
	<div class="five columns">

		<!-- Sort by -->
		<div class="widget">
			<h4>Overview</h4>

			<div class="job-overview">
				
				<ul>
					<li>
						<i class="fa fa-map-marker"></i>
						<div>
							<strong>Location:</strong>
							<span><?php echo $data->address; ?></span>
						</div>
					</li>
					<li>
						<i class="fa fa-user"></i>
						<div>
							<strong>Organizing Team:</strong>
							<span><?php echo $data->organizing_team; ?></span>
							<span><?php echo $data->organizing_number; ?></span>
						</div>
					</li>
					<li>
						<i class="fa fa-clock-o"></i>
						<div>
							<strong>Hours:</strong>
							<span>From: <?php echo $data->opening_time; ?></span>
							<span>To: <?php echo $data->end_time; ?></span>
						</div>
					</li>
					<li>
						<i class="fa fa-money"></i>
						<div>
							<strong>Category:</strong>
							<span><?php echo $data->category; ?></span>
						</div>
					</li>
				</ul>


				<a href="#small-dialog" class="popup-with-zoom-anim button">Set Direction</a>

				<div id="small-dialog" class="zoom-anim-dialog mfp-hide apply-popup">
					<div class="small-dialog-headline">
						<h2>Apply For This Job</h2>
					</div>

					<div class="small-dialog-content">
						<form action="#" method="get" >
							<input type="text" placeholder="Full Name" value=""/>
							<input type="text" placeholder="Email Address" value=""/>
							<textarea placeholder="Your message / cover letter sent to the employer"></textarea>

							<!-- Upload CV -->
							<div class="upload-info"><strong>Upload your CV (optional)</strong> <span>Max. file size: 5MB</span></div>
							<div class="clearfix"></div>

							<label class="upload-btn">
							    <input type="file" multiple />
							    <i class="fa fa-upload"></i> Browse
							</label>
							<span class="fake-input">No file selected</span>

							<div class="divider"></div>

							<button class="send">Send Application</button>
						</form>
					</div>
					
				</div>

			</div>

		</div>

	</div>
	<!-- Widgets / End -->

	<!-- Add comment model-->
		<!-- Modal -->
		<div id="myModal" class="modal fade" role="dialog">
				<div class="modal-dialog">

					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Post Your Comment Here</h4>
						</div>
						<div class="modal-body">
							<?php 
								echo "	
									<form method='post' name='contactform' id='contactform' action='/dansel/comment/$data->id'>
										<fieldset>
											<div><input name='id' type='text' id='name' value='$data->id' style='display:none;' required/>
											<div>
												<label>Name:</label>
												<input name='name' type='text' id='name' required/>
											</div>
											<div>
												<label >Email: <span>*</span></label>
												<input name='email' required type='email' id='email' pattern='^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$' />
											</div>
											<div>
												<label>Comment: <span>*</span></label>
												<textarea name='comment' cols='40' rows='3' id='comment' spellcheck='true' required></textarea>
											</div>
										</fieldset>
										<div id='result'></div>
										<br>
										

										<input type='submit' class='submit' id='submit' value='Post Comment'  styel='margin-top:15px;'/>
										<div class='clearfix'></div>
										<div class='margin-bottom-40'></div>
									</form>";
							?>
						</div>
					</div>

				</div>
			</div>
	<!-- End of Add Comment model-->


</div>

<?=$this->include('partials/footer')?>
<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>

</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<script src="scripts/jquery-2.1.3.min.js"></script>
<script src="scripts/custom.js"></script>
<script src="scripts/jquery.superfish.js"></script>
<script src="scripts/jquery.themepunch.tools.min.js"></script>
<script src="scripts/jquery.themepunch.revolution.min.js"></script>
<script src="scripts/jquery.themepunch.showbizpro.min.js"></script>
<script src="scripts/jquery.flexslider-min.js"></script>
<script src="scripts/chosen.jquery.min.js"></script>
<script src="scripts/jquery.magnific-popup.min.js"></script>
<script src="scripts/waypoints.min.js"></script>
<script src="scripts/jquery.counterup.min.js"></script>
<script src="scripts/jquery.jpanelmenu.js"></script>
<script src="scripts/stacktable.js"></script>


</body>
</html>