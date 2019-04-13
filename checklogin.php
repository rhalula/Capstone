<?php
  session_start();
  $username = mysql_real_escape_string($_POST['username']);
  $password = mysql_real_escape_string($_POST['password']);

  mysql_connect("localhost", "root", "") or die(mysql_error());
  mysql_select_db("first_db") or die("Cannot connect to database");
  $query = mysql_query("SELECT * from users WHERE username='$username'"); //querys for matching usernames
  $exists = mysql_num_rows($query); //Checks if username exists
  $table_users = "";
  $table_password ="";
  if($exists > 0) //IF there are no returning rows or no existing username
  {
    while($row = mysql_fetch_assoc($query)) //display all rows from query
    {
      $table_users = $row['username']; //the first username row is passed on until query finishes
      $table_password = $row['password']; //the first password row is passed on until query finishes
    }
    if(($username ==$table_users) && ($password == $table_password))//Checks if there are mathcing fields
    {
      if($password == $table_password)
      {
        $_SESSION['user'] = $username; //set the username in a session, acts as global variable
        header("location: home.php"); //redirects user to the authenticated home page
      }
    }
    else
    {
      Print '<script>alert("Incorrect Password!");</script>'; //prompts users
      Print '<script>window.location.assign("login.php");</script>';//redirects to login page
    }
  }
  else
  {
    Print '<script>alert("Incorrect Username!");</script>'; //Prompts user
    Print '<script>window.location.assign("login.php");</script>'; //redirects to login
  }
?>
