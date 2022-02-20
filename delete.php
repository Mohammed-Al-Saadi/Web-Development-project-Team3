<?php
include 'connect.php';
if(isset($_GET['id'] )){
$id=$_GET['id'];
$sql="DELETE  FROM appointment WHERE id=$id";
$result=mysqli_query($conn,$sql);
if($result){
header("location:employee.php");
}
else{
    die("conection failed:".$conn->connect_error);

}

}
?>