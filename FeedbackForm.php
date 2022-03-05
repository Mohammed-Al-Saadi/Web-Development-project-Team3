<!DOCTYPE html>
<html>
<body>
<style>
{ margin: 0px; padding: 0px; }
body {
	font-size: 120%;
	background: #F8F8FF;
}
.header {
	width: 40%;
	margin: 50px auto 0px;
	color: white;
	background: #5F9EA0;
	text-align: left ;
	border: 1px solid #B0C4DE;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px;
	padding: 20px;
}
form, .content {
	width: 40%;
	margin: 0px auto;
	padding: 20px;
	border: 1px solid #B0C4DE;
	background: white;
	border-radius: 0px 0px 10px 10px;
}

.btn {
	padding: 10px;
	font-size: 15px;
	color: white;
	background: #5F9EA0;
	border: none;
	border-radius: 5px;
}

    </style>
    <div class="header">
	<h2>Feedback</h2>
</div>
<form method="POST" action="FeedbackInfo.php">
        <div class="col-md">
  	        <label for="UserID">UserID:</label> <input type="text" id="UserID" name="UserID" required></p>
        </div>
        <div class="col-md">
  	        <label for="EmailID">Email:</label> <input type="text" id="EmailID" name="EmailID" required></p>
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