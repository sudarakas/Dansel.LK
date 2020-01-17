<!DOCTYPE html>
<head>

<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>My Account</title>

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="/css/colors/color.css" id="colors">

</head>

<body>
<div id="wrapper">

<?=$this->include('partials/nav')?>

<!-- Titlebar
================================================== -->
<div id="titlebar" class="single">
<div class="row">
	<div class="container">
    <div class="column">
		<div class="sixteen columns">
			<h2>My Account</h2>
			<nav id="breadcrumbs">
				<ul>
					<li>You are here:</li>
					<li><a href="#">Home</a></li>
					<li>My Account</li>
				</ul>
			</nav>
		</div>
        </div>
        <div class="tab" style="float: right;">

<ul class="tabs-nav">
    <li><a href="/my-account/profile"><i class="fa fa-user"></i> Create Your Profile</a></li>
    <li><a href="/logout"><i class="fa fa-lock"></i> Logout</a></li>
</ul>
</div>
	</div>
</div>
</div>


<!-- Content
================================================== -->

<!-- Container -->

<div class="container">

	<div class="my-account">

		<div class="tabs-container">
        <!-- Register -->
				<div class="tab-content" id="tab2" style="display: none;">
					<h3 class="margin-bottom-10 margin-top-10">Register</h3>

					<form action="/my-accountreg/register" method="post" class="register">

						<p class="form-row form-row-wide">
							<label for="reg_email">Email Address:</label>
							<input type="email" class="input-text" name="email" id="reg_email" value="" />
						</p>


						<p class="form-row form-row-wide">
							<label for="reg_password">Password:</label>
							<input type="password" class="input-text" name="password" id="reg_password" />
						</p>

						<p class="form-row form-row-wide">
							<label for="reg_password2">Repeat Password:</label>
							<input type="password" class="input-text" name="confirm_password" id="reg_password2" />
						</p>


						<p class="form-row">
							<input type="submit" class="button" name="register" value="Register" />
						</p>

					</form>

        </div>
		</div>
	</div>
</div>

<?=$this->include('partials/footer')?>

<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>

</div>
<!-- Wrapper / End -->




<!-- Scripts
================================================== -->
<script src="/scripts/jquery-2.1.3.min.js"></script>
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