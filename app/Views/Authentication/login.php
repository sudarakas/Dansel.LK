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
	<div class="container">

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
</div>


<!-- Content
================================================== -->

<!-- Container -->
<div class="container">

	<div class="my-account">

		<ul class="tabs-nav">
			<li class=""><a href="/my-account/login">Login</a></li>
			<li><a href="/my-account/registration">Register</a></li>
		</ul>

		<div class="tabs-container">

        	<!-- Login -->
			<div class="tab-content" id="tab1" style="display: none;">

<h3 class="margin-bottom-10 margin-top-10">Login</h3>

<form action="/auth/login" method="post" class="login">


    <p class="form-row form-row-wide">
        <label for="username">Username or Email Address:</label>
        <input type="email" class="input-text" name="email" id="email" value="" />
    </p>
    <?php
         if(\Config\Services::validation()->hasError('email'))
          {
         echo $validation->showError('email');
           }
     ?>

    <p class="form-row form-row-wide">
        <label for="password">Password:</label>
        <input class="input-text" type="password" name="password" id="password" />
    </p>
    <?php
        if(\Config\Services::validation()->hasError('password'))
     {
          echo $validation->showError('password');
     }
     ?>

    <p class="form-row">
        <input type="submit" class="button" name="login" value="Login" />

        <label for="rememberme" class="rememberme">
        <input name="rememberme" type="checkbox" id="rememberme" value="forever" /> Remember Me</label>
    </p>

    <p class="lost_password">
        <a href="#" >Lost Your Password?</a>
    </p>


</form>
</div>

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