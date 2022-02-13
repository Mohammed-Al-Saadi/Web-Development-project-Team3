<!DOCTYPE html>
<html>
<body>
<form method="POST" action="LoginInfo.php">
        <div class="col-md">
  	        <label for="UserID">User ID:</label> <input type="text" id="USERID" name="USERID" required></p>
        </div>
        <div class="col-md">
  	        <label for="EmailID">Email ID:</label> <input type="text" id="EMAIL ID" name="EMAIL ID" required></p>
        </div>
        <div class="col-md">
  	        <label for="Date">Date</label> <input type="text" id="DATE" name="DATE" required></p>
        </div>
        <div class="col-md">
            <label for="Time">Time:</label> <input type="text" id="TIME" name="TIME" required></p>
        </div>
        <div class="col-md">
            <label for="Gender">Gender:</label> <input type="text" id="GENDER" name="GENDER" required></p>
        </div>
        <div class="col-md">
            <label for="Services">Services:</label> <input type="text" id="SERVICES" name="SERVICES" required></p>
        </div>
        
        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
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


 