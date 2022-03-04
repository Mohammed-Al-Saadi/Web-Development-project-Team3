<?php
/// establish database connection 
  include 'database.php';


$UserID = $_POST['UserID'];
$EmailID = $_POST['EmailID'];
$Subject= $_POST['Subject'];
$Message= $_POST['Message'];
$Date= date("Y-m-d");

$SQLFeedback="INSERT INTO `Feedback` (`UserID`, `EmailID`, `Subject`, `Message`,`Date`)
	VALUES ('$UserID', '$EmailID', '$Subject', '$Message', '$Date')";


if($conn->query($SQLFeedback) === TRUE) {

    echo "Feedback sent! please be patient,we typically respond within 72hrs";
    //session_destroy();
}
else
{
    echo "ERROR: " .$SQLFeedback. "<br>" . $conn->error;

}
$conn->close();

?>
<br><a href="home.php" >
    <button type="submit" id="homeBtn" action="home.php">Return to home page</button>
</a>