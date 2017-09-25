
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
				<li class="active"><a href="register.php">Register</a></li>
				<li><a href="login.php">Login</a></li>
			  </ul>
			</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	</header>
	
	<section>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-4 col-xs-offset-4 well">
					<h2 align="center">Register</h2>
					<form action="../includes/addUser.php" method="POST">
					  <div class="form-group">
						<label for="fname">First Name</label>
						<input type="text" class="form-control" id="fname" name="fname" placeholder="First Name">
					  </div>
					  <div class="form-group">
						<label for="lname">Last Name</label>
						<input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name">
					  </div>
					  <div class="form-group">
						<label for="email">Email address</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="Email">
					  </div>
					  <div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" id="password" name="password" placeholder="Password">
					  </div>
					  
					  <!--radio buttons here-->
					  <div class="form-group">
						<label>Gender:</label>
						<label class="active">
							Male <input type="radio" class="active" name="gender" id="male" value="Male" checked>
						</label>
						<label>
							Female <input type="radio" name="gender" id="female" value="Female">
						</label>
					  </div>
					  
					  <!--checkboxes here-->
					  <div class="form-group">
						<label>Specialty: </label>
						<label>
							Front-End <input type="checkbox" name="sp[]" id="front-end" value="front-end">
						</label>
						<label>
							Back-End <input type="checkbox" name="sp[]" id="back-end" value="back-end">
						</label>
						<label>
							Android <input type="checkbox" name="sp[]" id="android" value="android">
						</label>
						<label>
							iOS <input type="checkbox" name="sp[]" id="iOS" value="iOS">
						</label>
						<label>
							Game Developer <input type="checkbox" name="sp[]" id="game-dev" value="game-dev">
						</label>
						<label>
							System Developer <input type="checkbox" name="sp[]" id="sys-dev" value="sys-dev">
						</label>
						<label>
							Application Developer <input type="checkbox" name="sp[]" id="app-dev" value="app-dev">
						</label>
						<label>
							Data Scientist <input type="checkbox" name="sp[]" id="data-science" value="data-science">
						</label>
						<label>
							QA/Test <input type="checkbox" name="sp[]" id="qa-test" value="qa-test">
						</label>
						<label>
							Algorithm Developer <input type="checkbox" name="sp[]" id="algo" value="algo">
						</label>
						<label>
							Embedded Systems<input type="checkbox" name="sp[]" id="embedded" value="embedded">
						</label>
						<label>
							OS developer <input type="checkbox" name="sp[]" id="os-dev" value="os-dev">
						</label>
						<label>
							Dev-Ops(Admins) <input type="checkbox" name="sp[]" id="dev-ops" value="dev-ops">
						</label>
						<label>
							Full-Stack <input type="checkbox" name="sp[]" id="full-stack" value="full-stack">
						</label>
						<label>
							Language/Compiler <input type="checkbox" name="sp[]" id="lang" value="lang">
						</label>
					  </div>
					  
					  <div class="text-center">
						<button type="submit" name="submit" id="submit" class="btn btn-success">Submit</button>
					  </div>
					  
					</form>
					<?php
						if(isset($_GET["empty"])){
							?>
							<p class="text-center">Please enter complete form</p>
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