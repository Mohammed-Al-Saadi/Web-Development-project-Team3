

<?php
include 'db.php';
include 'header.php';
$UserID = $_POST['UserID'];
$EmailID = $_POST['EmailID'];
$Date = $_POST['Date'];
$Time1= $_POST['Time'];
$Gender= $_POST['Gender'];
$Service= $_POST['Service'];


$sql= "INSERT INTO Appointment (UserID, EmailID, Date1, Tim, gender, Services)
VALUES ('$UserID', '$EmailID', '$Date', '$Time1', '$Gender', '$Service')";


if($conn->query($sql) === TRUE){
    echo "Information Saved";
   
}
else{
    echo "ERROR: ".$sql. "<br>" . $conn->error;
}
$conn->close();
?>
<?php
include 'footer.php';
?>
