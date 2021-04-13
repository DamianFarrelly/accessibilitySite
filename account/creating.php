<?php
// Attempt MySQL server connection.
$link = mysqli_connect("localhost", "root", "", "sitedatabase");


// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution, assign users inputs into vairables 
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$userUsername = $_POST['userUsername'];
$enteredPassword = $_POST['enteredPassword'];


// the sql statement we want to perform on the 'users' table 
$sql = "INSERT INTO users (fname, lname, username, password) VALUES ('$fname','$lname','$userUsername','$enteredPassword')";

// attempts to run the sql statement in the database
if(mysqli_query($link, $sql)){
    $message = "Account created successfully, redirecting to login page...";
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<script type='text/javascript'>window.location.href='login.html'</script>";
// if the user enters an invalid username 
} else{
    $message = "The username is taken";
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<script type='text/javascript'>window.location.href='creation.html'</script>";

}
 
// Close connection
mysqli_close($link);
?>