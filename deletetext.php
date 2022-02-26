

<?php
include 'connect.php';
if(isset($_GET['username'] )){
$username=$_GET['username'];

$sql="DELETE  FROM textbox where username='".$username."'  ";
$result=mysqli_query($conn,$sql);
if($result){
echo "deleted.";
}
else{
    die("conection failed:".$conn->connect_error);

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
    <a href="employee.php#section3">Home</a>
</body>
</html>