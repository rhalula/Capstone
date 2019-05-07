<html>
    <head>
        <title>Learn to Crochet</title>
    </head>
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
        <h2>Login Page</h2>
          <p>Login to back up from where you were!</p><br />
          <form action="checklogin.php" method="POST">
            Enter Username: <input type="text" name="username" required="required" /> <br />
            Enter password: <input type="password" name="password" required="required" /> <br />
            <input type="submit" value="Login"/>
          </form>
    </body>
</html>
