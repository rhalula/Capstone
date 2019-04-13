<html>
    <head>
        <title>My test PHP Website</title>
    </head>
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
        <h2>Registration Page</h2>
        <a href="index.php">Click here to go back</a><br/><br/>
        <form action="register.php" method="POST">
           Enter Username: <input type="text" name="username" required="required" /> <br/>
           Enter password: <input type="password" name="password" required="required" /> <br/>
           <input type="submit" value="Register"/>
        </form>
    </body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $username = mysql_real_escape_string($_POST['username']);
  $password = mysql_real_escape_string($_POST['password']);
  $bool = true;

  mysql_connect("localhost", "root", "") or die(mysql_error()); //Connect to server
  mysql_select_db("first_db") or die("Cannot connect to database"); //Connect to the database
  $query = mysql_query("Select * from users"); //Query the users table
  while($row = mysql_fetch_array($query)) //display all rows from query
  {
    $table_users = $row['username']; //the first username row is passed on to $table_users, and so on until the query is finished
    if($username == $table_users) //checks if there are matching fields
    {
      $bool = false; //set bool to false
      Print '<script>alert("Username has been taken!");</script>'; //prompts user
      Print '<script>window.location.assign("register.php");</script>'; //redirects the user to register.php
    }
  }

  if($bool) //checks if bool is true
  {
    mysql_query("INSERT INTO users (username, password) VALUES ('$username','$password')"); //Inserts values it table users
    Print '<script>alert("succesfully Registered!");</script>'; //prompts users
    Print '<script>window.location.assign("register.php");</script>'; //redirects user to register.php (MAY CHANGE TO LOGIN.PHP)
  }
}
?>
