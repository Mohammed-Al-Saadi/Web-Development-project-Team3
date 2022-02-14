<?php
include 'header.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            .form-group {
    width: 300px;
    margin: auto;
            }
            .form-group button{
    margin-top: 8px;
    background-color: rgb(153, 204, 233);

}

         </style>
</head>
<body>


<form action="create.php" method="POST">

<div class="row row3">
       <div class="col-lg-12">

          <div class="form-group">
              <p style="font-size:30px;"><b>BOOK YOUR APPOINTMENT.</b></p>
              <label class="control-label" for="userid">UserID</label>
              <input id="userid" name="UserID" type="text" placeholder="Userid" class="form-control input-md" required>
          </div>
      <!-- Text input-->
          <div class="form-group">
              <label class="control-label" for="email">EmailID</label>
              <input id="email" name="EmailID" type="text" placeholder="E-Mail" class="form-control input-md" required>
          </div>
      <!-- Text input-->
          <div class="form-group">
              <label class="control-label" for="date">Date</label>
              <input id="date" name="Date" type="date" placeholder=" Date" class="form-control input-md" required>
          </div>
      <!-- Select Basic -->
          <div class="form-group">
              <label class="control-label" for="time">Time</label>
              <select id="time" name="Time" placeholder="Time" class="form-control" required>
                  <option value="8:00 to 9:00">8:00 to 9:00</option>
                  <option value="9:00 to 10:00">9:00 to 10:00</option>
                  <option value="10:00 to 1:00">10:00 to 11:00</option>
                  <option value="10:00 to 1:00">11:00 to 12:00</option>
                  <option value="10:00 to 1:00">12:00 to 13:00</option>
                  <option value="10:00 to 1:00">14:00 to 15:00</option>
                  <option value="10:00 to 1:00">15:00 to 16:00</option>
                  <option value="10:00 to 1:00">16:00 to 17:00</option>
                  
              </select>
          </div>
          <!--Select Basic-->
          <div class="form-group">
              <label class="control-label" for="gender">Gender</label>
              <select id="gender" name="Gender" placeholder="Gender" class="form-control" required>
                  <option value="8:00 to 9:00">Male</option>
                  <option value="9:00 to 10:00">Female</option>
                  <option value="9:00 to 10:00">Other</option>
            </select>
           </div>

      <!-- Select Basic -->
          <div class="form-group">
              <label class="control-label" for="Services">Services</label>
              <select id="services" name="Service" placeholder="Select Service" class="form-control" required>
                  <option value="Service#1">Service#1</option>
                  <option value="Service#2">Service#2</option>
                  <option value="Service#3">Service#3</option>
                  <option value="Service#4">Service#4</option>
              </select>
          </div>
      <!-- Button -->
          <div class="form-group">
              <button type="submit"  value="Submit">Make An Appointment</button>
          </div>

       </div>
     </div>

</form>
</body>
<script>
    const UserID = document.getElementById('UserID')
    const EmailID = document.getElementById('EmailID')
    const Date = document.getElementById('Date')
    const Time= document.getElementById('Time')
    const Gender= document.getElementById('Gender')
    const Services= document.getElementById('Services')
</script>

</html> 
<?php
include 'footer.php';
?>


 