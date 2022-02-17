<?php

include 'connect.php';

session_start();
if(!isset($_SESSION["username"]))
{
    header("location:login.php");
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

<div class="container">
    <div class="row row1">
        <div class="col-lg col1">
<?php
$_POST['username']=$username;

    echo "<table><br>Hey ".$_SESSION["username"].
     ", We wish you a pleasent working hours!"."</table>";


?>

        </div>
        <div class="col-lg-3 col3">
        <button type="button" class="btn btn-outline-primary">Logout</button>


</div>

</div>
<br><br>

<br><br>
<div class="row">
    
<div class="col-lg-12 col-">
    <h4>Patient appointment <button type="button" class="btn btn-outline-primary" ><a href="addappointment.php"  >Add an appointment</a></button>
</h4>
<br><br>

<?php
include 'connect.php';
if($conn==true){
}

$sql="select * from appointment";
$result = $conn -> query($sql);
if($result ->num_rows > 0) {
    echo "<table class=\"table\"><tr><th>ID</th><th>Username</th><th>Date</th>
    <th>gender</th><th>Service</th><th>Time</th> </tr>";
while($row = $result ->fetch_assoc()){

    echo "<tr><td>" . $row["id"]     ."</td><td>". $row["username"]. "</td><td>". $row["date1"]."</td><td>". $row["gender"]. "</td><td>".$row["service"]."</td><td>".$row["tim"]."</td></tr>";


}
echo "</table>";
}



   






?>


</div>

</div>


</div>

<style>


.table{
    border: solid;
    margin:0 auto;

}
table td{
    border: solid;
}
table th{
    border: solid;
    text-align:start;


}
.table tr{
    border: solid;
}

.col1{
    font-size:26px;
}
.col3{
    margin-top:40px;
}
.col3 button{
    color:black;
}
.btn{
    color:black;
    float:right;
}
a{
    color:black;
    text-decoration:none;
}
a:hover{
color:white;}

</style>

</body>
</html>
<?php
include 'footer.php';
?>



