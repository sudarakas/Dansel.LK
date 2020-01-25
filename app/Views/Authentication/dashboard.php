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
		</div>

	<div class="tab" style="float: right;">

	<ul class="tabs-nav">
		<li><a href="/my-account/profile"><i class="fa fa-user"></i> Edit Your Profile</a></li>
		
	</ul>
	</div>

	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
	<!-- Recent Jobs -->
	<div class="thirteen columns">
	<div class="padding-right">
		<table class= "table table-hover" id="filterTable">
		<thead>	
			<th>Name</td>
			<th>Location</th>
			<th>Date</th>
			<th>Edit Dasel</th>
			<th>Delete Dansel</th>
			
		</thead>		
			
		<tbody>
		<?php
			foreach($dansels as $record){	
			echo "
			<tr>	
				<td>$record->title</td>
				<td>$record->city</td>
				<td>$record->poya_date</td>
				<td><a href='/dansel/edit/$record->id' target='_blank' rel='noopener noreferrer'>Edit</a></td>
				<td><a href='/dansel/edit/$record->id' rel='noopener noreferrer'>Delete</a></td>
			</tr>
			";
			}
		?>
		</tbody>
							
	</table>
		<div class="clearfix"></div>

		<div class="pagination-container">
			<nav class="pagination">
				<ul>
                
				</ul>
			</nav>

			<!-- <nav class="pagination-next-prev">
				<ul>
					<li><a href="#" class="prev">Previous</a></li>


					<li><a href="#" class="next">Next</a></li>
				</ul>
			</nav> -->
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