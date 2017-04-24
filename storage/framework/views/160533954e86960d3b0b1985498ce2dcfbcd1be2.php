<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<?php echo $__env->yieldContent('aimeos_header'); ?>
	<title>Aimeos on Laravel</title>

	<link type="text/css" rel="stylesheet" href='https://fonts.googleapis.com/css?family=Roboto:400,300'>
    <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<?php echo $__env->yieldContent('aimeos_styles'); ?>
</head>
<body>
	<nav class="navbar navbar-default">
	<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Laravel</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="/">Home</a></li>
				</ul>

				<div class="nav navbar-nav navbar-right">
<?php echo $__env->yieldContent('aimeos_head'); ?>
				</div>
			</div>
		</div>
	</nav>
    <div class="col-xs-12">
<?php echo $__env->yieldContent('aimeos_nav'); ?>
<?php echo $__env->yieldContent('aimeos_stage'); ?>
<?php echo $__env->yieldContent('aimeos_body'); ?>
<?php echo $__env->yieldContent('aimeos_aside'); ?>
<?php echo $__env->yieldContent('content'); ?>
	</div>

	<!-- Scripts -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<?php echo $__env->yieldContent('aimeos_scripts'); ?>
	</body>
</html>