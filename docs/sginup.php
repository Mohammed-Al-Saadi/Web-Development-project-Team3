

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
<?php include 'header.php' ?>

    <div class="header">
</div>
<br><br><br><br><br><br><br><br><br><br>





<center>

<form action="#" method="POST" name="form">
<div class="header">
<h2>Sign Up</h2>
</div>

                    <div class="input">
                        <lable style="font-size:20px">Username:</lable><br>
                        <input type="text" placeholder="Enter username..." name="username" required>
                    </div>
                    <br>
                    <div class="input">
                        <lable style="font-size:20px">Password :</lable><br>
                        <input type="password" placeholder="Enter password..." name="password" required>
                    </div>
                    <br>
                    <div class="btn">
                        <input type="submit" class="btn btn-primary" value="sginup">
                    </div>

                </form>
                <?php
/// establish database connection 
  include 'connect.php';
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
 

$username = $_POST['username'];
$password= $_POST['password'];
$SQLLogin="INSERT INTO `login` (`username`, `password`)
	VALUES ('$username', '$password')";


if($conn->query($SQLLogin) === TRUE) {

    echo "New records added";
    //session_destroy();
}
else
{
    echo "ERROR: " .$SQLLogin. "<br>" . $conn->error;

}
$conn->close();
  }
  
?>

                </center>
                <br><br><br><br><br><br><br><br>
<style>
form{
width:200px;
    border:solid;
    border-radius: 5px;
}
.header{
    background-color: #98D6F5;
}

</style>
</body>


</a>
<?php include 'footer.php' ?>

</body>
</html>
