



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

<body onload='document.form.EmailID.focus()'>
<?php include 'header.php' ?>

    <div class="sgnup">
    <h2>Feedback</h2>
</div>
<form name="form" method="POST", class="signup">
        <div class="col-md">
            <label for="UserID">UserID:</label> <input type="number" id="UserID" name="UserID" required/></p>
        </div>
        <div class="col-md">
            <label for="EmailID">Email:</label> <input type="text" id="EmailID" name="EmailID" required/></p>
        </div>
        <div class="col-md">
            <label for="Subject">Subject:</label> <textarea id="Subject" name="Subject" required></textarea></p>
        </div>
        <div class="col-md">
            <label for="Message">Message:</label> <textarea id="Message" name="Message" required></textarea></p>
        </div>
        
        <!-- <div class="col-md">
            <label for="Date">Date:</label> <input type="Date" id="Date" name="Date" required></p>
        </div> -->
        <input type="submit" name="submit" value="Submit" class="btn btn-primary" onclick="CheckMail(document.form.EmailID)">
    </form>
</body>
<script>
	function CheckMail(inputtxt) 
{ 
	var mailn = /^\w+([\.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/;
if(inputtxt.value.match(mailn)) 
{ 

	const UserID = document.getElementById('UserID')
    const EmailID = document.getElementById('EmailID')
    const Subject = document.getElementById('Subject')
    const Message = document.getElementById('Message')
	form.action="FeedbackInfo.php"

}
else
{ 
alert('please enter a valid email!');
}
}
    
</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
	<br><br> <br><br> <br> 
    <?php include  'footer.php' ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
  </html>

