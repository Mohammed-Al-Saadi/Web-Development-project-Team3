<?php
/// establish database connection 
  include 'connect.php';

  

$Firstname = $_POST['Firstname'];
$Lastname = $_POST['Lastname'];
$emailID = $_POST['emailID'];
$Password= $_POST['Password'];


$SQLLogin="INSERT INTO `login` (`Firstname`, `Lastname`, `emailID`, `Password`)
	VALUES ('$Firstname', '$Lastname', '$emailID', '$Password')";


if($conn->query($SQLLogin) === TRUE) {
 if($emailID =="user"){
  header("location:Userform.php");

 }
 elseif($emailID =="admin"){
  header("location:Employeeform.php");


  
   } 
  

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