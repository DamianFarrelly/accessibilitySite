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
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>