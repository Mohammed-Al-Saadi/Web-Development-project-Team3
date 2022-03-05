<?php
/// establish database connection 
  include 'database.php';


$Username = $_POST['Username'];
$emailID = $_POST['emailID'];
$Password= $_POST['Password'];

$SQLLogin="INSERT INTO `SignUp` (`Username`, `email`, `Password`)
	VALUES ('$Username', '$emailID', '$Password')";


if($conn->query($SQLLogin) === TRUE) {

    echo "New records added";
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