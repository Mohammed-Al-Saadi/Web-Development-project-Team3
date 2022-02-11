<?php
/// establish database connection 
  include 'database.php';


$Firstname = $_POST['Firstname'];
$Lastname = $_POST['Lastname'];
$emailID = $_POST['emailID'];
$Password= $_POST['Password'];

$SQLLogin="INSERT INTO `Login` (`Firstname`, `Lastname`, `emailID`, `Password`)
	VALUES ('$Firstname', '$Lastname', '$emailID', '$Password')";


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