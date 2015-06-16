<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo SITE_TITLE; ?></title>

<!-- Bootstrap core CSS -->
    <!-- <link href="< ? php echo BASE_URI; ? >templates/css/bootstrap.css" rel="stylesheet"> -->
    <link type="text/css" href="templates/css/bootstrap.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link type="text/css" href="templates/css/custom.css" rel="stylesheet">
    
    <!-- JS for Editor for this template -->
    <script type="text/javascript" src="templates/js/ckeditor/ckeditor.js"></script>   
	<?php
    //Check if title is set, if not assign it
    if(!isset($title)){
    	$title = SITE_TITLE;
    }
    ?>
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="logo">
        <a class="navbar-brand" href="index.php"><img src="images/icons/futuristic_by_freepik.png" alt="futuristic_by_freepik.png"></a>
   	 	</div>
          
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.php">Home</a></li>
			<?php if(!isLoggedIn()) : ?>
				<li><a href="register.php">Create An Account</a></li>
			<?php else : ?>
				<li><a href="create.php">Create Topic</a></li>
			<?php endif; ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="main-col">
					<div class="block">
						<h1 class="pull-left"><?php echo $title; ?></h1>
						<h4 class="pull-right">BackboneJS with Java | PHP</h4>
						<div class="clearfix"></div>
						<hr>
						<?php displayMessage(); ?>