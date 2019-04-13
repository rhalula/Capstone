<html>
  <head>
    <title>My test PHP Website</title>
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
    <link rel="stylesheet" href="/MyFirstWebsite/styles.css">
    <div class="container-fluid">
    	<div class="row">
    		<div class="col-md-12">
    			<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-dark">

            <a class="navbar-brand" href="#">Learn to Crochet</a>
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
      <h2>Home Page</h2>

        <a href="logout.php">Click here to log out</a><br/><br/>
        <form action="add.php" method="POST">
          Add more to list: <input type="text" name ="details" /><br/>
          Public post? <input type="checkbox" name="public[]" value="yes" /><br/>
          <input type="submit" value"Add to list"/>
        </form>
        <h2 align="center">My list</h2>
        <table border="1px" width="100%">
          <tr>
            <th>Id</th>
            <th>Details</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </table>
      </body>
</html>
