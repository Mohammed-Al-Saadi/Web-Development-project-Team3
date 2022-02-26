<?php
include 'connect.php';
if(isset($_GET['username'] )){
$username=$_GET['username'];

$sql="DELETE  FROM textbox where username='".$username."'  ";
$result=mysqli_query($conn,$sql);
if($result){
header("location:employee.php#section3");
}
else{
    die("conection failed:".$conn->connect_error);

}

}
