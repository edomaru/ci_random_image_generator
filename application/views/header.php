<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Random Image Generator</title>

	<!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

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
						<form action="#" class="form-horizontal">
							<div class="form-group">
								<label for="text" class="col-md-3">Width</label>
								<div class="col-md-3">
									<input type="text" name="image_width" id="image_width" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label for="text" class="col-md-3">Height</label>
								<div class="col-md-3">
									<input type="text" name="image_height" id="image_height" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label for="text" class="col-md-3">Image Type</label>
								<div class="col-md-3">
									<select name="image_type" id="image_type" class="form-control">
										<option value="jpg">JPG</option>
										<option value="png">PNG</option>
										<option value="gif">GIF</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="text" class="col-md-3">Image Text</label>
								<div class="col-md-9">
									<input type="text" name="image_text" id="image_text" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label for="image_count" class="col-md-3">How many?</label>
								<div class="col-md-3">
									<select name="image_type" id="image_type" class="form-control">
										<option value="1">1</option>
										<option value="5">5</option>
										<option value="10">10</option>
										<option value="15">15</option>										
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="image_count" class="col-md-3">Provider</label>
								<div class="col-md-5">
									<select name="image_provider" id="image_provider" class="form-control">
										<option value="http://placehold.it">placehold.it</option>
										<option value="http://dummyimage.com">dummyimage.com</option>
									</select>
								</div>
							</div>
							<hr>
							<div class="form-group">
								<div class="col-md-offset-3 col-md-5">
									<a href="#" class="btn btn-default">Preview</a>
									<a href="#" class="btn btn-primary">Generate</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /.container -->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
