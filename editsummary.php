<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("location:login.php");
} ?>
<?php include 'header.php';
include 'connect.php';
#display the content in the edit

$username = $_GET['username'];


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .btn {
            margin-top: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

    <div class="row">
        <center>

            <div class="col-5">
                <form action="" method="POST">
                    <h4> Add a summary of patient visit: </h4>

                    <label class="control-label" for="email">Username:</label>
                    <input id="username" name="username" type="text" placeholder="E-Mail" class="form-control input-md" value=<?php echo $username ?>>

                    <label class="control-label" for="text">text:</label>
                    <textarea id="text" name="text" type="text" placeholder="text" class="form-control input-sm"></textarea>

                    <button type="submit" class="btn btn-primary" name="submit" value="submit">submit</button>
                    <button class="btn btn-primary"><a href="employee.php#section3" style="text-decoration:none" class="text-light">Home</a></button>


                </form>
            </div>
        </center>

    </div>
    <center>

        <?php


        if (isset($_POST['submit'])) {


            $username = $_POST['username'];
            $text = $_POST['text'];

            $sql = "update textbox set  text='$text' where username='$username'";
            $result = mysqli_query($conn, $sql);
            if ($result) {

                echo "information saved.";
            } else {
                die(mysqli_error($conn));
            }
        }

        ?>
    </center>

</body>

</html>
<?php include 'footer.php' ?>