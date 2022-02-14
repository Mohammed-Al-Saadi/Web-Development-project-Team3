<?php
include 'header.php';




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
.row1 {
    font-size:26px;
    font-family:arial;
    margin-bottom:100px;
    padding-top:50px;

}


p{
    font-size:20px;
    margin-left:40px;

}

.row1 a{
    text-decoration:none;
    color:black;
    font-size:20px;
}
.row2{
    font-size:20px;
margin-bottom:100px;



}
.row2 .form-group{

    background-color: rgb(93, 175, 223);
    border-radius: 9px;
    width:300px;
    margin:0 auto;

}
.row2 .col{
margin:0 auto;
list-style: none;

}
.row2 .col a{
text-decoration:none;
color:black;
font-size:26px;
font-family:arial;
margin-left:50px;
list-style: none;


}
.row2 li{
    list-style: none;
    background-color: rgb(93, 175, 223);
    border-radius: 9px;


}
.col3 button{
    background-color: rgb(93, 175, 223);
    border-radius: 9px;

}
h2{
    margin-left:40px;

}




</style>

</head>
<body>
    <div class="row row1" >
        <div class="col-lg-8">
    <?php
include 'connect.php';

$sql=" SELECT * FROM login WHERE id=(SELECT max(id) FROM login)";
$result = $conn -> query($sql);
if($result ->num_rows > 0) {
    
while($row = $result ->fetch_assoc()){



    echo "<table><tr>". "<h2>Hey ". $row['lastname'] ." " .$row['firstname'] .", welcome to wecare.</h2>". "</tr></table><br>";
echo "<table><tr>" ."<p>This page allows you to check your history and manage your bookings.</p> "."</tr></table>";
}
}

    ?>
    
   
    
    </div>

    <div class="col-lg-4  col3">
    <button ><a href="">Logout</a></button>


</div>
</div>

<div class="row row2">
<div class="col-lg-6 col">
   <ul> 
<li><a  href="??????">Welcome to wecare</a></li><br><br>

<li><a href="??????" >Check your history</a></li><br><br>

<li><a href="??????">Coronavirus COVID-19</a></li><br><br>

<li><a href="??????">Last updade</a></li><br><br>


<li><a href="??????">More info</a></li><br>

</ul>


</div>

       <div class="col-lg-6 col2">

          <div class="form-group">
              <p style="font-size:30px;"><b>book your time.</b></p>
              <label class="control-label" for="name"> Name</label>
              <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md">
          </div>
      <!-- Text input-->
          <div class="form-group">
              <label class="control-label" for="email">Email</label>
              <input id="email" name="email" type="text" placeholder="E-Mail" class="form-control input-md">
          </div>
      <!-- Text input-->
          <div class="form-group">
              <label class="control-label" for="date">Preferred Date</label>
              <input id="date" name="date" type="text" placeholder="Preferred Date" class="form-control input-md">
          </div>
      <!-- Select Basic -->
          <div class="form-group">
              <label class="control-label" for="time">Preferred Time</label>
              <select id="time" name="time" class="form-control">
                  <option value="8:00 to 9:00">8:00 to 9:00</option>
                  <option value="9:00 to 10:00">9:00 to 10:00</option>
                  <option value="10:00 to 1:00">10:00 to 1:00</option>
              </select>
          </div>
      <!-- Select Basic -->
          <div class="form-group">
              <label class="control-label" for="appointmentfor">Appointment For</label>
              <select id="appointmentfor" name="appointmentfor" class="form-control">
                  <option value="Service#1">Service#1</option>
                  <option value="Service#2">Service#2</option>
                  <option value="Service#3">Service#3</option>
                  <option value="Service#4">Service#4</option>
              </select>
          </div>
      <!-- Button -->
          <div class="form-group">
              <button id="singlebutton" name="singlebutton" class="btn btn-default">Make An Appointment</button>
          </div>
  
  
  
  
        

       </div>
     </div>


    </div>

</body>
</html>
<?php
include 'footer.php';
?>