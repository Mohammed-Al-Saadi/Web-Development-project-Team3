<!DOCTYPE html>
<html>
<body>
<form method="POST" action="FeedbackInfo.php">
        <div class="col-md">
  	        <label for="UserID">UserID:</label> <input type="text" id="UserID" name="UserID" required></p>
        </div>
        <div class="col-md">
  	        <label for="EmailID">EmailID:</label> <input type="text" id="EmailID" name="EmailID" required></p>
        </div>
        <div class="col-md">
  	        <label for="Subject">Subject</label> <textarea id="Subject" name="Subject" required></textarea></p>
        </div>
        <div class="col-md">
            <label for="Message">Message:</label> <textarea id="Message" name="Message" required></textarea></p>
        </div>
        
        <!-- <div class="col-md">
            <label for="Date">Date:</label> <input type="Date" id="Date" name="Date" required></p>
        </div> -->
        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
	</form>
</body>
<script>
    const UserID = document.getElementById('UserID')
    const EmailID = document.getElementById('EmailID')
    const Subject = document.getElementById('Subject')
    const Message = document.getElementById('Message')
    //const Date = document.getElementById('Date')
</script>

</html>