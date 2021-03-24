<?php



// Create connection
$con = mysqli_connect('localhost', 'root', '', 'accountcreation');
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$username = $_POST['userUsername'];
$password = $_POST['enteredPassword'];

$sql = "SELECT id, username, password FROM users WHERE username = '$username' AND password = '$password'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    if(($row['username'] == $username) && ($row['password'] == $password)){
        echo 'login success';
    }

  }
} else {
  echo "0 results";
}
$con->close();


?>