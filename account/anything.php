<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "accountcreation");


// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$userUsername = $_POST['userUsername'];
$enteredPassword = $_POST['enteredPassword'];


$sql = "INSERT INTO users (fname, lname, username, password) VALUES ('$fname','$lname','$userUsername','$enteredPassword')";
if(mysqli_query($link, $sql)){
    $message = "Account created successfully, redirecting to login page...";
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<script type='text/javascript'>window.location.href='login.html'</script>";

} else{
    $message = "The username is taken";
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<script type='text/javascript'>window.location.href='creation.html'</script>";

}
 
// Close connection
mysqli_close($link);
?>