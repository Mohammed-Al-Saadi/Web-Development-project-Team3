

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
    echo "<h3>Information Saved</h3>";
   
}

else{
    echo" Please check your details ";
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    h3{
        text-align: center;
    }
    

</style>
<body>

<div class ="footer">
<?php
include 'footer.php';
?>
</div>
    
</body>
</html>