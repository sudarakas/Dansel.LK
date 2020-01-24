<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<title>Dansel.LK</title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<?= service('alerts')->css(); ?>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/colors/color.css" id="colors">
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
</head>

<body>
<div id="wrapper">
<?=$this->include('partials/nav')?>
<!-- Banner
================================================== -->
<div id="banner" style="background: url(images/banner-home-01.jpg)">
	<div class="container">
		<div class="sixteen columns">

			<div class="search-container">

				<!-- Form -->
				<h2>Find Dansel</h2>
				<form action="/dansel/search" method="post">
				<input type="text" name="search" class="ico-01" placeholder="Keyword, City or Poya Day"/>
				<button type="submit"><i class="fa fa-search"></i></button>
				</form>

				<!-- Browse Jobs -->
				<div class="browse-jobs">
					Sri Lankan First Online Dansel Directory :)
				</div>

				<!-- Announce -->
				<div class="announce">
					We’ve over <strong>15,000</strong> dansel listing!
				</div>

			</div>

		</div>
	</div>
</div>


<!-- Content
================================================== -->

<!-- Categories -->
<div class="container">
	<div class="sixteen columns">
		<h3 class="margin-bottom-25">Popular Categories</h3>
		<ul id="popular-categories">
			<li><a href="/dansel/all/food"><i class="fa fa-cutlery"></i>Food</a></li>
			<li><a href="/dansel/all/ice"><i class="fa fa-yelp"></i>Ice Cream</a></li>
			<li><a href="/dansel/all/beverage"><i class="fa fa-coffee"></i>Beverage</a></li>
			<li><a href="/dansel/all/pooja"><i class="fa fa-bullseye"></i>Pooja Baanda</a></li>
		</ul>

		<div class="clearfix"></div>
		<div class="margin-top-30"></div>

		<a href="/dansel/all" class="button centered">Browse All</a>
		<div class="margin-bottom-50"></div>
	</div>
</div>


<div class="container">

	<div class="eleven columns">
	<div class="padding-right">
		<h3 class="margin-bottom-25">Upcoming Dansel</h3>
		<ul class="job-list">
		<?php 
               foreach($data as $record){
                echo "<li><a href='/dansel/$record->id'>
                <img src='images/job-list-logo-01.png' alt=''>
                <div class='job-list-content'>
                    <h4>$record->title</span></h4>
                    <div class='job-icons'>
                        <span><i class='fa fa-cutlery'></i> $record->poya_date</span>
                        <span><i class='fa fa-map-marker'></i> $record->city</span>
                        <span><i class='fa fa-money'></i> $record->opening_time</span>
                    </div>
					<p>";
				echo substr($record->description,0,150);
				echo "</p>
                </div>
                </a>
                <div class='clearfix'></div>
            </li>";
               }        
            ?>
		</ul>

		<a href="browse-jobs.html" class="button centered"><i class="fa fa-plus-circle"></i> Show More Jobs</a>
		<div class="margin-bottom-55"></div>
	</div>
	</div>

	<!-- Job Spotlight -->
	<div class="five columns">
		<h3 class="margin-bottom-5">Top Contributors</h3>

		<!-- Navigation -->
		<div class="showbiz-navigation">
			<div id="showbiz_left_1" class="sb-navigation-left"><i class="fa fa-angle-left"></i></div>
			<div id="showbiz_right_1" class="sb-navigation-right"><i class="fa fa-angle-right"></i></div>
		</div>
		<div class="clearfix"></div>

		<!-- Showbiz Container -->
		<div id="job-spotlight" class="showbiz-container">
			<div class="showbiz" data-left="#showbiz_left_1" data-right="#showbiz_right_1" data-play="#showbiz_play_1" >
				<div class="overflowholder">

					<ul>

						<li>
							<div class="job-spotlight">
								<a href="#"><h4>Social Media: Advertising Coordinator <span class="part-time">Part-Time</span></h4></a>
								<span><i class="fa fa-briefcase"></i> Mates</span>
								<span><i class="fa fa-map-marker"></i> New York</span>
								<span><i class="fa fa-money"></i> $20 / hour</span>
								<p>As advertising & content coordinator, you will support our social media team in producing high quality social content for a range of media channels.</p>
								<a href="job-page.html" class="button">Apply For This Job</a>
							</div>
						</li>

						<li>
							<div class="job-spotlight">
								<a href="#"><h4>Prestashop / WooCommerce Product Listing <span class="freelance">Freelance</span></h4></a>
								<span><i class="fa fa-briefcase"></i> King</span>
								<span><i class="fa fa-map-marker"></i> London</span>
								<span><i class="fa fa-money"></i> $25 / hour</span>
								<p>Etiam suscipit tellus ante, sit amet hendrerit magna varius in. Pellentesque lorem quis enim venenatis pellentesque.</p>
								<a href="job-page.html" class="button">Apply For This Job</a>
							</div>
						</li>

						<li>
							<div class="job-spotlight">
								<a href="#"><h4>Logo Design <span class="freelance">Freelance</span></h4></a>
								<span><i class="fa fa-briefcase"></i> Hexagon</span>
								<span><i class="fa fa-map-marker"></i> Sydney</span>
								<span><i class="fa fa-money"></i> $10 / hour</span>
								<p>Proin ligula neque, pretium et ipsum eget, mattis commodo dolor. Etiam tincidunt libero quis commodo.</p>
								<a href="job-page.html" class="button">Apply For This Job</a>
							</div>
						</li>


					</ul>
					<div class="clearfix"></div>

				</div>
				<div class="clearfix"></div>
			</div>
		</div>

	</div>
</div>

<!-- Infobox -->
<div class="infobox">
	<div class="container">
		<div class="sixteen columns">Let the world know your Dansela<a href="my-account.html">Post Now</a></div>
	</div>
</div>


<!-- Recent Posts -->
<div class="container">
	<div class="sixteen columns">
		<h3 class="margin-bottom-25">Most Popular Dansel</h3>
	</div>
	

<?php 
foreach($top as $record){
	echo "<div class='one-third column'>

	<!-- Post #1 -->
	<div class='recent-post'>
		<div class='recent-post-img'><a href='/dansel/$record->id'><img src='images/recent-post-01.jpg' alt=''></a><div class='hover-icon'></div></div>
		<a href='/dansel/$record->id'><h4>$record->title</h4></a>
		<div class='meta-tags'>
			<span>$record->opening_time</span>
			<span><a href='#'>$record->time Time</a></span>
		</div>
		<p>";
	echo substr($record->description,0,250);
	echo "</p>
		<a href='/dansel/$record->id' class='button'>Read More</a>
	</div>

</div>";
}
?>
	

</div>
<?=$this->include('partials/footer')?>
<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>

</div>
<!-- Wrapper / End -->
<?= service('alerts')->display(); ?>

<!-- /scripts
================================================== -->
<script src="/scripts/jquery-2.1.3.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->

<script src="/scripts/custom.js"></script>
<script src="/scripts/jquery.superfish.js"></script>
<script src="/scripts/jquery.themepunch.tools.min.js"></script>
<script src="/scripts/jquery.themepunch.revolution.min.js"></script>
<script src="/scripts/jquery.themepunch.showbizpro.min.js"></script>
<script src="/scripts/jquery.flexslider-min.js"></script>
<script src="/scripts/chosen.jquery.min.js"></script>
<script src="/scripts/jquery.magnific-popup.min.js"></script>
<script src="/scripts/waypoints.min.js"></script>
<script src="/scripts/jquery.counterup.min.js"></script>
<script src="/scripts/jquery.jpanelmenu.js"></script>
<script src="/scripts/stacktable.js"></script>



</body>
</html>
