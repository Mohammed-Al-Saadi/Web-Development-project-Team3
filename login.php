<?php
session_start();

$servername="db";
$username="MohammedAlsaadi";
$password="password1";
$dbname="MohammedAlsaadi";
$conn = new mysqli($servername,$username,$password,$dbname);
if($conn ===false)
{
die("conection failed:");
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username=$_POST["username"];
    $password=$_POST["password"];
    $name=$_POST["name"];




$sql="select * from login where  username='".$username."' AND password='".$password."' AND name='".$name."'";

$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

if($row["usertype"]=="user")
{
    $_SESSION["username"]=$username;
header("location:Userform.php");
}
elseif($row["usertype"]=="admin")
{
    $_SESSION["emailID"]=$username;

    header("location:employee.php");

}
else
{
    echo "no";
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
    <center>
        <h2>Login form</h2>
       
        <div style="background-color:grey; width:500px;">

        <form action="#" method="POST">
     
      
        <div>
       <lable>Username</lable>
       <input type ="text" name ="name"required>
   </div>
   <div>
       <lable>Username</lable>
       <input type ="text" name ="username"required>
   </div>
   <div>
       <lable>Password</lable>
       <input type ="password" name ="password"required>
   </div>  
   <div>
   <input type ="submit" value ="Login">
</div>
</form>
   </div>
   <center>
</body>
</html>