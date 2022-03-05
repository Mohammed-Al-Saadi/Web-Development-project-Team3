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
	text-align: left;
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
	<h2>Sign Up</h2>
</div>
<form method="POST" action="SignUpInfo.php">
        <div class="col-md">
  	        <label for="Username">Username:</label> <input type="text" id="Username" name="Username" required></p>
        </div>
        <div class="col-md">
  	        <label for="email">Email:</label> <input type="text" id="emailID" name="emailID" required></p>
        </div>
        <div class="col-md">
            <label for="Password">Password:</label> <input type="text" id="Password" name="Password" required></p>
        </div>
        <input type="submit" name="submit" value="Sign Up" class="btn btn-primary">
	</form>
</body>
<script>
    const Username = document.getElementById('Username')
    const emailID = document.getElementById('emailID')
    const Password= document.getElementById('Password')
</script>

</html>