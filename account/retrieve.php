<?php

// Create connection
$con = mysqli_connect('localhost', 'root', '', 'sitedatabase');
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$username = $_POST['userUsername'];
$password = $_POST['enteredPassword'];

$sql = "SELECT id, username, password FROM users WHERE username = '$username' AND password = '$password'";

// store the results
$result = $con->query($sql);

// checks there is a result from the SQL query
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    if(($row['username'] == $username) && ($row['password'] == $password)){
      $message = "Logged in successfully, redirecting to home page...";
      echo "<script type='text/javascript'>alert('$message');</script>";
      echo "<script type='text/javascript'>window.location.href='../homepage/Page.html'</script>";
    }

  }
} else {
  $message = "Your login details are incorrect";
  echo "<script type='text/javascript'>alert('$message');</script>";
  echo "<script type='text/javascript'>window.location.href='login.html'</script>";
}
$con->close();


?>