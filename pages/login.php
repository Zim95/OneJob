
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Dynamically add or remove input fields</title>

    <!-- Bootstrap -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

  </head>
  
  <body>
  
	<header>
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="../index.php">OneJob</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  <ul class="nav navbar-nav navbar-right">
				<li><a href="company.php">Company</a></li>
				<li><a href="register.php">Register</a></li>
				<li class="active"><a href="login.php">Login</a></li>
			  </ul>
			</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	</header>
	
	<section>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-4 col-xs-offset-4 well">
					<h2 align="center">Login</h2>
					<form>
					  <div class="form-group">
						<label for="email">Email address</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="Email">
					  </div>
					  <div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" id="password" name="password" placeholder="Password">
					  </div>
					  <div class="text-center">
						<button type="submit" name="submit" class="btn btn-success">Submit</button>
					  </div>
					</form>
					<?php
						if(isset($_SESSION['RegistrationCompleted'])){
							?>
							<p class="text-center">You have successfully registered!</p>
							<?php
							unset($_SESSION['RegistrationCompleted']);	
						}else if(isset($_GET["dup"])){
							?>
							<p class="text-center">You have already registered!</p>
							<?php
						}
					?>						
				</div>
			</div>
		</div>
	</section>
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
	
  </body>

</html>