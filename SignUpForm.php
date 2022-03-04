



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Form.css">
    <title>Document</title>
   
</head>

<body onload='document.form.password.focus()'>
<?php include 'header.php' ?>

 <div class="sgnup">
    <h2>Sign Up</h2>
</div>
<form name="form" method="POST", class="signup">
        <div class="col-md">
            <label for="username">Username:</label> <input type="text" id="username" name="username" required/></p>
        </div>
        
        <div class="col-md">
            <label for="password">Password:</label> <input type="text" id="password" name="password" required/></p>
        </div>
        <input type="submit" name="submit" value="Sign Up" class="btn btn-primary" onclick="CheckPassword(document.form.password)">
    </form>

 
</body>
<script>
	function CheckPassword(inputtxt) 
{ 
var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
if(inputtxt.value.match(passw)) 
{ 

	const Username = document.getElementById('username')
    const Password= document.getElementById('password')
	form.action='SignupInfo.php'

}
else
{ 
alert('password must have at least one UPPERCASE letter, at least one lowercase letter and one numeric digit!!')
}
}
</script>

   <br><br> <br><br> <br> <br> <br><br>
    <?php include  'footer.php' ?>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
  </html>

