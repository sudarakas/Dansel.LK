<header>
<div class="container">
	<div class="sixteen columns">

		<!-- Logo -->
		<div id="logo">
			<h1><a href="/"><img src="images/logo.png" alt="Work Scout" /></a></h1>
		</div>

		<!-- Menu -->
		<nav id="navigation" class="menu">
			<ul id="responsive">

				<li><a href="/" id="current">Home</a></li>
				<li><a href="#">Dansel</a></li>
				<li><a href="#">Categories</a>
					<ul>
						<li><a href="browse-jobs.html">Food</a></li>
						<li><a href="browse-categories.html">Ice Cream</a></li>
						<li><a href="add-resume.html">Beverage</a></li>
						<li><a href="manage-resumes.html">Pooja Baanda</a></li>
						<li><a href="job-alerts.html">Other</a></li>
					</ul>
				</li>

				<li><a href="#">About Us</a>
					<ul>
						<li><a href="/dansel/add">Services</a></li>
						<li><a href="manage-jobs.html">About</a></li>
					</ul>
				</li>

				<li><a href="/contact-us">Contact Us</a></li>
			</ul>


			<ul class="float-right">
				<?php
					$session = session()->start();
					if(isset($_SESSION['id'])){
						echo "<li><a href='/logout'><i class='fa fa-user'></i> Log Out</a></li>";
					}else{
						echo "<li><a href='/my-account#tab2'><i class='fa fa-user'></i> Sign Up</a></li>
							  <li><a href='/my-account'><i class='fa fa-lock'></i> Log In</a></li>";	
					}
				?>
			</ul>

		</nav>

		<!-- Navigation -->
		<div id="mobile-navigation">
			<a href="#menu" class="menu-trigger"><i class="fa fa-reorder"></i> Menu</a>
		</div>

	</div>
</div>
</header>
<div class="clearfix"></div>
