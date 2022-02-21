<?php

include 'connect.php';

session_start();
if(!isset($_SESSION["username"]))
{
    header("location:login.php");
}

include 'connect.php';
if($conn==true){
}



$sql="select * from appointment";
$result = $conn -> query($sql);
if($result ->num_rows > 0) {

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
    <div class="contanier">
        <div class="row row1">
<div class="col-lg-8 col2">
<?php
$_POST['username']=$username;

echo "<h4><br>Hey ".$_SESSION["username"].
 ", We wish you a pleasent working hours!"."</h4>";
?>

</div>


        </div>
        <div class="row row2">
        <div class="col-lg">
<h4>Patient appointment:</h4>
        </div>

<div class="col-lg col1">
<button type="button"class="btn btn-primary" ><a href="userapp.php"  class="text-light"style="text-decoration:none">Add an appointment</a></button>

<button type="button" class="btn btn-primary"><a href="logout.php" class="text-light" style="text-decoration:none; " >Logout</a></button>


</div>

        </div>
        <div class="row row3">
            <div class="col-12 col ">

            <table >
<tr>
<td >ID</td>
<td>Username</td>
<td>Date</td>
<td>gender</td>
<td>Service</td>
<td>Time</td>
<td class="td1">opiration</td>

</tr>
<?php
#start of while loop
while($row=mysqli_fetch_assoc($result)){

    $id=$row['id'];
    $username=$row['username'];
    $date1=$row['date1'];
    $gender=$row['gender'];
    $service=$row['service'];
    $tim=$row['tim'];
    ?>


<tr>
    <td><?php echo $id;   ?></td>
    <td><?php echo $username;   ?></td>
    <td><?php echo $date1  ; ?></td>
    <td><?php echo $gender  ; ?></td>
    <td><?php echo $service  ; ?></td>
    <td><?php echo $tim  ; ?></td>

<td class="td1"><button type="button"class="btn btn-primary"><a href="update.php?id=<?php echo $row['id'];  ?>" class="hh" class="text-light"style="text-decoration:none;">Edit</a></button><button type="button"class="btn btn-danger"><a href="delete.php?id=<?php echo $row['id'];  ?>"  class="text-light"style="text-decoration:none;">delete</a></button>
</td>

</tr>

<?php
# end of while loop
}

?>

            </table>
</div>
        </div>

        <div class="row row4">
<div class="col-lg-4 col4">

<form action="addtext.php" method="GET"> 
<h4>  Add a summary of patient visit: </h4>
<label class="control-label" for="email">Username:</label>
              <input id="email" name="username" type="text" placeholder="E-Mail" class="form-control input-md" required>

              <label class="control-label" for="text">text:</label>
              <input id="text" name="text" type="text" placeholder="text"  class="form-control input-sm"  required>

              <button type="submit" class="btn btn-primary"  name="submit" value="submit" >submit</button>
        
</form>
</div>

    </div>
    <div class="row">
        <div class="col">
        <table>
        <h4>Patient summaries:</h4>

        <tr><td>username</td><td>text</td><td>operation</td></tr>
            <?php
include 'connect.php';
$sql="select * from textbox";
$result = $conn -> query($sql);
if($result ->num_rows > 0) {

}
while($row=mysqli_fetch_assoc($result)){

    $text=$row['text'];
    $username=$row['username'];

    ?>
    <table>
        
           <tr><td><?php echo $username;?></td><td><?php echo $text;?></td><td><button><a href="deletetext.php?username=<?php echo $row['username']; ?> " >delete</a></button></td></tr>
        
           <?php }?>

        </table> 
        
        </div>
        
    </div>
</div>
<?php 
    include 'footer.php';?>
    <style>
table{
    border:solid;
    margin:0 auto;
}
td{
    border:solid;
    width:150px;

}


.btn a{
    color:white;
}

.col1{

margin-left:120px;

}
.input-sm{
height:100px;

} 

.col2{
    text-align:center;
 
}

.row2{
margin-top:50px;
margin-bottom:50px;
text-align:center;

}
.col4{
    margin:40px auto;

}
.col4 button{
border-radius:5px;
margin-top:20px;

}
.td1{
    text-align:center;

}
h4{
    text-align:center;
}
    </style>
 
</body>
</html>