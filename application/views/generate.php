<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Random Image Generator</title>

	<!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <style>
    	body {
    		padding-top: 70px;
    	}
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
					<span class="sr-only">Toggle Navigation</span>					
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">Random Image Generator</a>
			</div>
			<div class="collapse navbar-collapse" id="mynavbar">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Home</a></li>
				</ul>
			</div>
		</div>	
	</nav>
	<!-- /nav -->

	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-default">
					<div class="panel-heading">
						Form Image Generator
					</div>
					<div class="panel-body">						
						<?php echo form_open("generate", array("class" => "form-horizontal")); ?>
							<?php $error = form_error("image_width", "<p class='text-danger'>", "</p>") ?>
							<div class="form-group <?php echo $error ? 'has-error' : '' ?>">
								<label for="text" class="col-md-3">Width</label>
								<div class="col-md-3">
									<input type="text" name="image_width" value="<?php echo set_value("image_width") ?>" id="image_width" class="form-control">
								</div>
								<?php echo $error; ?>
							</div>
							<?php $error = form_error("image_height", "<p class='text-danger'>", "</p>") ?>
							<div class="form-group <?php echo $error ? 'has-error' : '' ?>">
								<label for="text" class="col-md-3">Height</label>
								<div class="col-md-3">
									<input type="text" name="image_height" value="<?php echo set_value("image_height") ?>" id="image_height" class="form-control">
								</div>
								<?php echo $error; ?>
							</div>
							<?php $error = form_error("image_type", "<p class='text-danger'>", "</p>") ?>
							<div class="form-group <?php echo $error ? 'has-error' : '' ?>">
								<label for="text" class="col-md-3">Image Type</label>
								<div class="col-md-3">
									<?php $types = array(
										'.jpg' => "JPG",
										'.png' => "PNG",
										'.gif' => "Gif"
									); ?>
									<?php echo form_dropdown("image_type", $types, "", 'class="form-control"') ?>									
								</div>
							</div>
							<div class="form-group">
								<label for="text" class="col-md-3">Image Text</label>
								<div class="col-md-9">
									<input type="text" name="image_text" value="<?php echo set_value("image_text") ?>" id="image_text" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label for="image_count" class="col-md-3">How many?</label>
								<div class="col-md-3">
									<?php foreach (array(4, 8, 12, 16, 20) as $i) { $number[$i] = $i; } ?>
									<?php echo form_dropdown("image_count", $number, "", 'class="form-control"') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="image_count" class="col-md-3">Provider</label>
								<div class="col-md-5">
									<?php $provider = array(
										"http://placehold.it" => "http://placehold.it",
										"http://dummyimage.com" => "http://dummyimage.com"
									); ?>
									<?php echo form_dropdown("provider", $provider, "", 'class="form-control"') ?>
								</div>
							</div>
							<hr>
							<div class="form-group">
								<div class="col-md-offset-3 col-md-5">
									<button type="submit" class="btn btn-primary">Generate</button>
									<button type="button" class="btn btn-success">Download</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<div id="preview-image">
			<div class="row">
				<div class="col-md-3">
					<a href="#" class="thumbnail"><img src="http://placehold.it/260x200" alt=""></a>
				</div>
				<div class="col-md-3">
					<a href="#" class="thumbnail"><img src="http://placehold.it/260x200" alt=""></a>
				</div>
				<div class="col-md-3">
					<a href="#" class="thumbnail"><img src="http://placehold.it/260x200" alt=""></a>
				</div>
				<div class="col-md-3">
					<a href="#" class="thumbnail"><img src="http://placehold.it/260x200" alt=""></a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<a href="#" class="thumbnail"><img src="http://placehold.it/260x200" alt=""></a>
				</div>
				<div class="col-md-3">
					<a href="#" class="thumbnail"><img src="http://placehold.it/260x200" alt=""></a>
				</div>
				<div class="col-md-3">
					<a href="#" class="thumbnail"><img src="http://placehold.it/260x200" alt=""></a>
				</div>
				<div class="col-md-3">
					<a href="#" class="thumbnail"><img src="http://placehold.it/260x200" alt=""></a>
				</div>
			</div>
		</div>
	</div>
	<!-- /.container -->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"><\/script>')</script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</body>
</html>
