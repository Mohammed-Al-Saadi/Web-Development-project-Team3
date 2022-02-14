<?php

$servername="db";
$username="MohammedAlsaadi";
$password="password1";
$dbname="MohammedAlsaadi";
$conn = new mysqli($servername,$username,$password,$dbname);
if($conn ===false){
die("conection failed:");
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username=$_POST["username"];
    $password=$_POST["password"];
    $firstname=$_POST["firstname"];


}
$sql="select * from login where username='".$username."' AND password='".$password."' AND firstname='".$firstname."'";

$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_array($result);
if($row["usertype"]=="user")
{
    header("location:Userform.php");
}
if($row["usertype"]=="admin")
{
    echo "admin";
}
else{
    echo "no";
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
       <lable>Firstname</lable>
       <input type ="text" name ="firstname"required>
   </div>
   <div>
       <lable>Username</lable>
       <input type ="text" name ="username"required>
   </div>
   <div>
       <lable>Password</lable>
       <input type ="text" name ="password"required>
   </div>  
   <div>
   <input type ="submit" value ="Login">
</div>
</form>
   </div>
   <center>
</body>
</html>