<!DOCTYPE html>
<html>
<body>
<form method="POST" action="LoginInfo.php">
        <div class="col-md">
  	        <label for="Firstname">first name:</label> <input type="text" id="Firstname" name="Firstname" required></p>
        </div>
        <div class="col-md">
  	        <label for="Lastname">Last name:</label> <input type="text" id="Lastname" name="Lastname" required></p>
        </div>
        <div class="col-md">
  	        <label for="emailID">emailID</label> <input type="text" id="emailID" name="emailID" required></p>
        </div>
        <div class="col-md">
            <label for="Password">Password:</label> <input type="text" id="Password" name="Password" required></p>
        </div>
        
        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
	</form>
</body>
<script>
    const Firstname = document.getElementById('Firstname')
    const Lastname = document.getElementById('Lastname')
    const emailID = document.getElementById('emailID')
    const Password= document.getElementById('Password')
</script>

</html>