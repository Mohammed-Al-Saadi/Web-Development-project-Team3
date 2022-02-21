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




$sql="select * from login where  username='".$username."' AND password='".$password."' ";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

if($row["usertype"]=="user")
{
    $_SESSION["username"]=$username;
header("location:Userform.php");
}
elseif($row["usertype"]=="admin")
{
    $_SESSION["username"]=$username;

    header("location:employee.php");

}
else
{
    echo "no";
}
}
include 'header.php';


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
    <div class="row row1">
        <div class="col-lg-12 col1">
        <h2>Login form:</h2>
       
      

        <form action="#" method="POST">
     
      
  
   <div class="input">
       <lable style="font-size:20px">Username:</lable><br>
       <input type ="text" name ="username"required>
   </div>
   <div class="input">
       <lable style="font-size:20px">Password :</lable><br>
       <input  type ="password" name ="password"required>
   </div>  
   <div class="btn">
   <input type ="submit"  class="btn btn-primary" value ="Login">
<button class="btn btn-primary" >Sign up</button>
</div>
</form>
  
   </div>
   </div>
   <style>
.row1{
    margin:60px auto;
text-align:center;
}
.input{
    margin-top:30px;

}
.btn{
    margin-top:20px;
}
.col1{
}
   </style>
   <?php include 'footer.php';?>
</body>
</html>