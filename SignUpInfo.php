<?php
/// establish database connection 
  include 'database.php';


$Username = $_POST['username'];
$Password= $_POST['password'];

$SQLLogin="INSERT INTO `login` (`username`, `password`)
	VALUES ('$Username', '$Password')";


if($conn->query($SQLLogin) === TRUE) {

    echo "Signup Successful!";
    //session_destroy();
}
else
{
    echo "ERROR: " .$SQLLogin. "<br>" . $conn->error;

}
$conn->close();

?>
<br><a href="home.php" >
    <button type="submit" id="homeBtn" action="home.php">Return to home page</button>
</a>