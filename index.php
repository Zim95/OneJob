
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Dynamically add or remove input fields</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

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
			  <a class="navbar-brand" href="index.php">OneJob</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  <ul class="nav navbar-nav navbar-right">
				<li><a href="pages/company.php">Company</a></li>
				<li><a href="pages/register.php">Register</a></li>
				<li><a href="pages/login.php">Login</a></li>
			  </ul>
			</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	</header>
	
	<!--title-->
	<section>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<div class="jumbotron">
						<h1 align="center">One Job</h1>
						<p align="center">A job portal for software developers</p>
						<p align="center"><a href="pages/register.php" class="btn btn-primary btn-lg" role="button">Register</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!--Latest Job Posts-->
	<section>
		<div class="container">
			<div class="row">
				<h2 align="center">Latest Job Posts</h2>
				<div class="col-md-6">
					<h3>Title 1</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<button class="btn btn-default">View</button>
				</div>
				<div class="col-md-6">
					<h3>Title 2</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<button class="btn btn-default">View</button>
				</div>
				<hr>
				<div class="col-md-6">
					<h3>Title 3</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<button class="btn btn-default">View</button>
				</div>
				<div class="col-md-6">
					<h3>Title 4</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<button class="btn btn-default">View</button>
				</div>
			</div>
		</div>
	</section>
	
	<!--company list-->
    <section>
		<div class="container">
			<div class="row">
				<h2 align="center">Company List</h2>
				<div class="col-xs-6 col-md-3">
					<a href="#" class="thumbnail">
						<img src="..." alt="...">
					</a>
				</div>
				<div class="col-xs-6 col-md-3">
					<a href="#" class="thumbnail">
						<img src="..." alt="...">
					</a>
				</div>
				<div class="col-xs-6 col-md-3">
					<a href="#" class="thumbnail">
						<img src="..." alt="...">
					</a>
				</div>
				<div class="col-xs-6 col-md-3">
					<a href="#" class="thumbnail">
						<img src="..." alt="...">
					</a>
				</div>
			</div>
		</div>
	</section>
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
	
  </body>

</html>