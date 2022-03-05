<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("location:login.php");
} ?>
<?php
include 'connect.php';
if(isset($_GET['submit']))
{
$username=$_GET['username'];
$text=$_GET['text'];
$sql="insert into textbox (username , text) value ('$username' , '$text') ";
if($conn->query($sql) === TRUE){
echo "information saved.";

}
else{
    echo "Please chech your input. ";
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="employee.php">Home</a>
</body>
</html>

