<html>
  <head>
    <title>Learn to Crochet</title>
  </head>
  <?php
  session_start(); //starts the session
  if($_SESSION['user']){ //checks if the user is logged in
  }
  else{
    header("location: index.php"); //redirects if user not logged in
  }
  $user = $_SESSION['user']; //assigns user value
  ?>
    <body>
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Learn to Crochet/styles.css">
    <div class="container-fluid">
    	<div class="row">
    		<div class="col-md-12">
    			<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-dark">

            <a class="navbar-brand" href="index.php">Learn to Crochet</a>
    				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    					<ul class="navbar-nav ml-md-auto">
    						<li class="nav-item active">
    							 <a class="nav-link" href="login.php">Returning <span class="sr-only">(current)</span></a>
    						</li>
                <li class="nav-item active">
    							 <a class="nav-link" href="register.php">Just Starting <span class="sr-only">(current)</span></a>
    						</li>
                <li class="nav-item active">
    							 <a class="nav-link" href="about.php">About <span class="sr-only">(current)</span></a>
    						</li>
                <li class="nav-item active">
    							 <a class="nav-link" href="faq.php">FAQ <span class="sr-only">(current)</span></a>
    						</li>
                <li class="nav-item active">
    							 <a class="nav-link" href="overview.php">Overview <span class="sr-only">(current)</span></a>
    						</li>
                <li class="nav-item active">
    							 <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
    						</li>
    					</ul>
    				</div>
    			</nav>
    		</div>
    	</div>
    </div>

    <video width="320" height="240" controls>
      <source src="NAME_OF_VIDEO.mp4"
      type="video/mp4">
      <source src="movie.ogg"
      type="video/ogg">
      Your browser doesn't support the video tag.
    </video>
  </body>
</html>
