<?php

include 'connect.php';

session_start();
if (!isset($_SESSION["username"])) {
    header("location:login.php");
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
        $(function() {
            $("#date").datepicker({
                minDate: 0
            });
        });
    </script>
    <style>
        .row1 {
            font-size: 20px;
            font-family: arial;
            margin-bottom: 100px;
            padding-top: 50px;


        }

        h2 {
            margin-right: 90px;

        }


        .row1 p {
            font-size: 18px;
            margin-left: 40px;


        }

        .row1 a {
            text-decoration: none;
            color: black;
            font-size: 18px;

        }

        .row2 {
            font-size: 20px;
            margin-bottom: 100px;




        }

        .row2 .form-group {
            border:solid;

            border-radius: 9px;
            width: 300px;
            margin: 0 auto;
                        background-color: rgb(93, 175, 223);


        }

        .row2 .col {
            margin: 0 auto;
            list-style: none;
            width: 450px;
            text-align: start;


        }

        .row2 .col a {
            text-decoration: none;
            color: black;
            font-size: 26px;
            font-family: arial;
            margin-left: 50px;
            list-style: none;


        }

        .row2 li {
            list-style: none;
            background-color: rgb(93, 175, 223);
            border-radius: 9px;


        }

       button {
            border-radius: 9px;

        }

        h2 {
            margin-left: 40px;

        }
        .row2 button{
margin-left:60px;

        }
        form{
        }
    </style>

</head>

<body>

    <div class="row row1">

        <div class="col-lg-6">
            <?php
            include 'connect.php';

            $sql = " SELECT * FROM login WHERE id=(SELECT max(id) FROM login)";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {
                    echo "<table><tr>" . "<h2>Hey " . " " . $_SESSION["username"] . ", welcome to wecare.</h2>" . "</tr></table><br>";
                    echo "<table><tr>" . "<p>This page allows you to check your history and manage your bookings.</p> " . "</tr></table>";
                }
            }







            ?>



        </div>
        

        <div class="col-lg-4  col3">

            <?php echo "Today is "  . date("l") .  " :Date:" . date("d-m-Y") . "<br>" ?>

        </div>
        <div class="col-lg-2">
        <button class="btn btn-primary"><a href="logout.php" style="color:white">Logout</a></button>


        </div>
    </div>

    <div class="row row2">
        <div class="col-lg-6 col">
            <ul>
                <li><a href="??????">Welcome to wecare</a></li><br><br>

                <li><a href="??????">Check your history</a></li><br><br>

                <li><a href="??????">Coronavirus COVID-19</a></li><br><br>

                <li><a href="??????">Last updade</a></li><br><br>


                <li><a href="??????">More info</a></li><br>


            </ul>


        </div>

        <div class="col-lg-6 col2">


        <form action="#" method="post">
    <div class="form-group">
                        <label class="control-label" for="email">EmailID</label>
                        <input id="email" name="username" type="text" placeholder="E-Mail" class="form-control input-md" required>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="control-label" for="date">Date</label>
                        <input required type="text" name="date1" id="date" class="form-control input-md" value="date" required>
                    </div>
                    <!-- Select Basic -->
                    <div class="form-group">
                        <label class="control-label" for="time">Time</label>
                        <select id="time" name="tim" placeholder="Time" class="form-control" required>
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
                        <select id="gender" name="gender" placeholder="Gender" class="form-control" required>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>

                    <!-- Select Basic -->
                    <div class="form-group">
                        <label class="control-label" for="Services">Services</label>
                        <select id="services" name="service" placeholder="Select Service" class="form-control" required>
                            <option value="Service#1">Service#1</option>
                            <option value="Service#2">Service#2</option>
                            <option value="Service#3">Service#3</option>
                            <option value="Service#4">Service#4</option>
                        </select>
                    </div><br>
                    <!-- Button -->
                    <div class="form-group form1">
                        <button type="submit" class="btn btn-primary" name="submit">Make an appointment</button><br>
                        <?php
include 'connect.php';
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $date1 = $_POST['date1'];
    $gender = $_POST['gender'];
    $service = $_POST['service'];
    $tim = $_POST['tim'];
    $sql = "insert into appointment (username,date1,gender,service,tim)  value('$username','$date1','$gender','$service','$tim')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      
        echo "Appointment saved.";
    }
     else 
    {
echo "Please check your info.";    }
}

?>
                    </div>

      </form>





        </div>
    </div>

    </div>

</body>

</html>
<?php
include 'footer.php';
?>