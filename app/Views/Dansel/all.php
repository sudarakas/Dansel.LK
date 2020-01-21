<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>Work Scout</title>

   <!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="/css/bootstrap.css">
<link rel="stylesheet" href="/css/colors/color.css" id="colors">
</head>

<body>
<div id="wrapper">
    <?=$this->include('partials/nav')?>


<!-- Titlebar
================================================== -->
<div id="titlebar">
	<div class="container">
		<div class="ten columns">
			<span>We found 1,412 jobs matching:</span>
			<h2>Web, Software & IT</h2>
		</div>

		<div class="six columns">
			<a href="add-job.html" class="button">Post a Job, It’s Free!</a>
		</div>

	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
	<!-- Recent Jobs -->
	<div class="eleven columns">
	<div class="padding-right">
		
		<form action="/dansel/search" method="post" class="list-search">
			<button type="submit"><i class="fa fa-search"></i></button>
			<input type="text" name="search" placeholder="Keyword, City or Poya Day" value=""/>
			<div class="clearfix"></div>
		</form>

		<ul class="job-list full">
            <?php 
               foreach($dansels as $record){
                echo "<li><a href='job-page.html'>
                <img src='images/job-list-logo-01.png' alt=''>
                <div class='job-list-content'>
                    <h4>$record->title</span></h4>
                    <div class='job-icons'>
                        <span><i class='fa fa-briefcase'></i> $record->poya_date</span>
                        <span><i class='fa fa-map-marker'></i> $record->city</span>
                        <span><i class='fa fa-money'></i> $record->opening_time</span>
                    </div>
                    <p>The SEO/SEM Specialist will work with industry leaders and top retailers to define and deliver best practices through innovative SEO methodologies.</p>
                </div>
                </a>
                <div class='clearfix'></div>
            </li>";
               }        
            ?>

			
		</ul>
		<div class="clearfix"></div>

		<div class="pagination-container">
			<nav class="pagination">
				<ul>
                <?= $pager->links() ?>
				</ul>
			</nav>
		</div>

	</div>
	</div>


	<!-- Widgets -->
	<div class="five columns">

		<!-- Sort by -->
		<div class="widget">
			<h4>Sort by</h4>

			<!-- Select -->
			<select data-placeholder="Choose Category" class="chosen-select-no-single">
				<option selected="selected" value="recent">Newest</option>
				<option value="oldest">Oldest</option>
				<option value="expiry">Expiring Soon</option>
				<option value="ratehigh">Hourly Rate – Highest First</option>
				<option value="ratelow">Hourly Rate – Lowest First</option>
			</select>

		</div>

		<!-- Location -->
		<div class="widget">
			<h4>Location</h4>
			<form action="#" method="get">
				<input type="text" placeholder="State / Province" value=""/>
				<input type="text" placeholder="City" value=""/>

				<input type="text" class="miles" placeholder="Miles" value=""/>
				<label for="zip-code" class="from">from</label>
				<input type="text" id="zip-code" class="zip-code" placeholder="Zip-Code" value=""/><br>

				<button class="button">Filter</button>
			</form>
		</div>

		<!-- Job Type -->
		<div class="widget">
			<h4>Job Type</h4>

			<ul class="checkboxes">
				<li>
					<input id="check-1" type="checkbox" name="check" value="check-1" checked>
					<label for="check-1">Any Type</label>
				</li>
				<li>
					<input id="check-2" type="checkbox" name="check" value="check-2">
					<label for="check-2">Full-Time <span>(312)</span></label>
				</li>
				<li>
					<input id="check-3" type="checkbox" name="check" value="check-3">
					<label for="check-3">Part-Time <span>(269)</span></label>
				</li>
				<li>
					<input id="check-4" type="checkbox" name="check" value="check-4">
					<label for="check-4">Internship <span>(46)</span></label>
				</li>
				<li>
					<input id="check-5" type="checkbox" name="check" value="check-5">
					<label for="check-5">Freelance <span>(119)</span></label>
				</li>
			</ul>

		</div>

		<!-- Rate/Hr -->
		<div class="widget">
			<h4>Rate / Hr</h4>

			<ul class="checkboxes">
				<li>
					<input id="check-6" type="checkbox" name="check" value="check-6" checked>
					<label for="check-6">Any Rate</label>
				</li>
				<li>
					<input id="check-7" type="checkbox" name="check" value="check-7">
					<label for="check-7">$0 - $25 <span>(231)</span></label>
				</li>
				<li>
					<input id="check-8" type="checkbox" name="check" value="check-8">
					<label for="check-8">$25 - $50 <span>(297)</span></label>
				</li>
				<li>
					<input id="check-9" type="checkbox" name="check" value="check-9">
					<label for="check-9">$50 - $100 <span>(78)</span></label>
				</li>
				<li>
					<input id="check-10" type="checkbox" name="check" value="check-10">
					<label for="check-10">$100 - $200 <span>(98)</span></label>
				</li>
				<li>
					<input id="check-11" type="checkbox" name="check" value="check-11">
					<label for="check-11">$200+ <span>(21)</span></label>
				</li>
			</ul>

		</div>



	</div>
	<!-- Widgets / End -->


</div>

<?=$this->include('partials/footer')?>
<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>

</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<script src="/scripts/jquery-2.1.3.min.js"></script>
<script src="/scripts/bootstrap.js"></script>
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