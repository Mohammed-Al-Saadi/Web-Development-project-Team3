
<?php
include 'connect.php';
#display the content in the edit
$id=$_GET['id'];
$sql="select * from appointment where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$username=$row['username'];
$date1=$row['date1'];
$gender=$row['gender'];
$service=$row['service'];
$tim=$row['tim'];

if(isset($_POST['submit']))
{
    $id=$_GET['id'];

$username=$_POST['username'];
$date1=$_POST['date1'];
$gender=$_POST['gender'];
$service=$_POST['service'];
$tim=$_POST['tim'];
$sql="update appointment set  username='$username',date1='$date1',gender='$gender',service='$service',tim='$tim' where id =$id";
$result=mysqli_query($conn,$sql);
if($result){
    header("location:employee.php");

}
else{
    die(mysqli_error($conn));
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
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	  	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	  	<script>
	  		$( function() {
	   			$( "#date" ).datepicker({
	   				minDate: 0
	   			});
	  		});
	  	</script>
</head>
<body>
<style>
   
   .col1{
       margin:50px auto;

   }
.form1 .btn{
   border-radius:5px;
   margin-top:30px;

}
h3{
    text-align:center;
}
</style>

<div class="container">

<form action="" method="POST">
<br>

<h3>Edit Appointment page.
</h3>
<br>

<div class="row row3">
       <div class="col-lg-8 col1">

        
      <!-- Text input-->
          <div class="form-group">
              <label class="control-label" for="email">EmailID</label>
              <input id="email" name="username" value=<?php echo $username #display the content in the edit
?> type="text" placeholder="E-Mail" class="form-control input-md" required>
          </div>
      <!-- Text input-->
          <div class="form-group">
              <label class="control-label" for="date">Date</label>
              <input required type="text" name="date1" id="date"  class="form-control input-md" value=<?php echo $date1?> required>

          </div>
      <!-- Select Basic -->
          <div class="form-group">
              <label class="control-label" for="time">Time</label>
              <select id="time" name="tim" placeholder="Time" class="form-control" required value=<?php echo $tim?>>
                  <option value="8:00 to 9:00">8:00 to 9:00</option>
                  <option value="9:00 to 10:00">9:00 to 10:00</option>
                  <option value="10:00 to 11:00">10:00 to 11:00</option>
                  <option value="11:00 to 12:00">11:00 to 12:00</option>
                  <option value="12:00 to 13:00">12:00 to 13:00</option>
                  <option value="14:00 to 15:00">14:00 to 15:00</option>
                  <option value="15:00 to 16:00">15:00 to 16:00</option>
                  <option value="16:00 to 17:00">16:00 to 17:00</option>
                  
              </select>   
          </div>
          <!--Select Basic-->
          <div class="form-group">
              <label class="control-label" for="gender">Gender</label>
              <select id="gender" name="gender" placeholder="Gender" class="form-control" required value=<?php echo $gender?>>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <option value="Other">Other</option>
            </select>
           </div>

      <!-- Select Basic -->
          <div class="form-group">
              <label class="control-label" for="Services">Services</label>
              <select id="services" name="service" placeholder="Select Service" class="form-control" value=<?php echo $service?>required>
                  <option value="Service#1">Service#1</option>
                  <option value="Service#2">Service#2</option>
                  <option value="Service#3">Service#3</option>
                  <option value="Service#4">Service#4</option>
              </select>
          </div>
      <!-- Button -->
          <div class="form-group form1">
              <button type="submit" class="btn btn-primary"  name="submit" >Save & Home</button>
          </div>

       </div>
     </div>

</form>

</div>
<br><br><br><br><br><br>
<?php include 'footer.php';?>
</body>

    
</html>










