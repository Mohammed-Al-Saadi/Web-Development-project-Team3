<?php

include 'connect.php';

session_start();
if (!isset($_SESSION["username"])) {
    header("location:login.php");
}

include 'connect.php';
if ($conn == true) {
}



$sql = "select * from appointment ORDER BY id DESC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <style>
        .btn a {
            color: white;
            float: right;
        }


        .input-sm {
            height: 100px;

        }




        .td1 {
            text-align: center;

        }

        h4 {
            text-align: center;
        }
    </style>
    <style>
        .row1 {
            list-style: none;
        }

        section {
            height: 90vh;
            background: #F4F6F6;


        }

        .body {
            background: #F4F6F6;


        }



        .fixed li {
            list-style: none;
            margin-bottom: 60px;

        }

        .fixed {
            position: fixed;
            font-size: 18px;
            bottom: 280px;
            background: #98D6F5;
            padding: 40px;
            border-radius: 9px;

        }

        .fixed a {
            text-decoration: none;
            color: black;
            font-weight: bold;
        }

        .row3 {
            padding-top: 160px;
            padding-bottom: 100px;
            padding-bottom: 30px;

        }

        .row0 {

            text-align: center;
            background: #F4F6F6;

        }

        .row4 {
            padding-top: 150px;

        }

        .col6 {
            margin: 0 auto;

        }

        .row5 {
            padding-top: 200px;

        }

        table {
            border: solid;
            margin: 0 auto;
            background: white;

        }

        .input {
            height: 37px;
            width: 140px;

        }

        .colbtn .btn {
            margin-top: 20px;
        }

        .coldate p {
            margin-top: 24px;
            font-size: 18px;

        }

        .btn a {
            text-decoration: none;
        }

        .fixed a:hover {
            color: white;
        }

        .col4 {
            text-align: center;
        }

        .colsumm {

            margin: 0 auto;

        }

        .td2 {
            width: 150px;
        }

        a:hover {
            color: white;
        }

        .my-custom-scrollbar {
            height: 420px;
            overflow: scroll;
        }

        @media (max-width:1200px) {
            .fixed {
                position: static !important;
            }

        }
        .colfeed{
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <?php include 'header.php' ?>

    <div class="container-fluid">


        <div class="row row0">

            <div class="col-lg-6">
                <?php
                $_POST['username'] = $username;

                echo "<h5><br>Hey " . $_SESSION["username"] .
                    ", We wish you a pleasent working hours!" . "</h5>";

                ?>



            </div>
            <div class="col-lg-3 coldate">
                <p>
                    <?php

                    echo "Today is "  . date("l") . " :" . "Date:" . date("d-m-Y") . "";
                    ?>
                </P>
            </div>
            <div class="col-lg-3 colbtn">
                <button type="button" class="btn btn-primary"><a href="logout.php" class="text-light" style="text-decoration:none; ">Logout</a></button>

            </div>

        </div>






        <section id="section1">
            <div class="row row3">
                <div class="col-8  ">
                <br><br>
                    <h4>Patient appointment:</h4>
                </div>

                <div class="col-4 col4">
                <br><br>
                    <input type="text" class="input" id="myInput" onkeyup='tableSearch()' placeholder="Search by name..">

                    <button type="button" class="btn btn-primary"><a href="userapp.php" class="text-light" style="text-decoration:none">Add appointment</a></button>



                </div>


            </div>



            <div class="row">
                <div class="col-lg-3 row1">

                    <ul class="fixed">

                        <li><a href="#section1">Patient appointment</a></li>
                        <li><a href="#section2">Add a summary</a></li>
                        <li><a href="#section3">Patient summaries</a></li>
                        <li><a href="#section4">Feedback history</a></li>

                    </ul>
                </div>

                <div class="col-md-8">
                    <form action="" method="POST">

                        <div class=" my-custom-scrollbar">
                            <table class="table  " id="myTable">

                                <tr style="border:solid;     background: #98D6F5;
">

                                    <td style="border:solid;">ID</td>
                                    <td style="border:solid;">Username</td>
                                    <td style="border:solid;">Date</td>
                                    <td style="border:solid;">gender</td>
                                    <td style="border:solid;">Service</td>
                                    <td style="border:solid;">Time</td>
                                    <td class="td1">operation</td>

                                </tr>
                                <?php
                                #start of while loop
                                while ($row = mysqli_fetch_assoc($result)) {

                                    $id = $row['id'];
                                    $username = $row['username'];
                                    $date1 = $row['date1'];
                                    $gender = $row['gender'];
                                    $service = $row['service'];
                                    $tim = $row['tim'];
                                ?>


                                    <tr style="border:solid;">
                                        <td style="border:solid;"><?php echo $id;   ?></td>
                                        <td style="border:solid;"><?php echo $username;   ?></td>
                                        <td style="border:solid;"><?php echo $date1; ?></td>
                                        <td style="border:solid;"><?php echo $gender; ?></td>
                                        <td style="border:solid;"><?php echo $service; ?></td>
                                        <td style="border:solid;"><?php echo $tim; ?></td>



                                        <td class="td1" style="border:solid;"><button type="button" class="btn btn-primary"><a href="update.php?id=<?php echo $row['id'];  ?>" class="hh" style="text-decoration:none;color:white" class="text-light">Edit</a></button><button type="button" class="btn btn-danger" style="text-decoration:none; "><a href="delete.php?id=<?php echo $row['id'];  ?>" class="text-light" style="text-decoration:none;">delete</a></button><button class="btn btn-warning"><a href="email.php?id=<?php echo $row['username'];  ?>">Cancel</a></button>

                                        </td>

                                    </tr>

                                <?php
                                    # end of while loop
                                }

                                ?>


                            </table>
                        </div>
                    </form>
                </div>
            </div>

    </div>
    </div>



    <section id="section2">

    <br><br><br><br><br>
        <div class="row row4">
            <div class="col-lg-6 col6">
                <form action="addtext.php" method="GET">
                    <h4> Add a summary of patient visit: </h4>
                    <label class="control-label" for="email">Username:</label>
                    <input id="email" name="username" type="text" placeholder="E-Mail" class="form-control input-md" required>

                    <label class="control-label" for="text">Text:</label>
                    <textarea id="text" name="text" type="text" placeholder="text" class="form-control input-sm" required></textarea><br>

                    <button type="submit" class="btn btn-primary" name="submit" value="submit">Add</button>

                </form>
            </div>
        </div>
    </section>
    <section id="section3">
    <br>
        <div class="row row5">
            <h4>Patient summaries:</h4>

            <div class="col-6 colsumm">
                <div class=" my-custom-scrollbar">

                    <table class="table">

                        <tr style="border:solid;  background: #98D6F5;
">
                            <td style="border:solid;">username</td>
                            <td style="border:solid;">text</td>
                            <td class="td2">operation</td>
                        </tr>
                        <?php
                        include 'connect.php';
                        $sql = "select * from textbox";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                        }
                        while ($row = mysqli_fetch_assoc($result)) {

                            $text = $row['text'];
                            $username = $row['username'];

                        ?>


                            <tr style="border:solid;">
                                <td style="border:solid;"><?php echo $username; ?></td>
                                <td><?php echo $text; ?></td>
                                <td style="border:solid;">
                                    <button class="btn btn-danger"><a href="deletetext.php?username=<?php echo $row['username']; ?> " style="text-decoration:none;color:white">delete</a></button>
                                    <button class="btn btn-primary"><a href="editsummary.php?username=<?php echo $row['username'] ?> " style="text-decoration:none;color:white">Edit</a></button>

                                </td>
                            </tr>

                        <?php } ?>

                    </table>
                </div>
            </div>

        </div>
        <br><br> <br>
        <br><br>
        </div>
    </section>
    
    <section id="section4">
    <br><br><br><br><br><br><br><br><br><br>
    <h4>Feedback history:</h4>

        <div class="row">
            <div class="col-lg-6 colfeed">
            <div class=" my-custom-scrollbar">
            <table class="table">

<tr style="border:solid;  background: #98D6F5;
">
    <td style="border:solid;">Username</td>
    <td style="border:solid;">Subject</td>
    <td class="td2" >Message</td>
    <td class="td2" style="border:solid;width:30px">Delete</td>

</tr>
<?php
include 'connect.php';
$sql = "select * from feedback";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
}
while ($row = mysqli_fetch_assoc($result)) {

    $text = $row['text'];
    $username = $row['username'];
    $subject = $row['subject'];

?>


    <tr style="border:solid;">
        <td style="border:solid; width:60px"><?php echo $username; ?></td>
        <td style="border:solid;width:60px"><?php echo $subject; ?></td>
        <td style="border:solid;width:300px"><?php echo $text; ?></td>
        <td style="border:solid;"><button class="btn btn-danger"><a href="deletefeed.php?username=<?php echo $row['username']; ?> " style="text-decoration:none;color:white">delete</a></button></td>

        
    </tr>

<?php } ?>

</table>

</div>
            </div>
        </div>
       
        <br><br><br><br><br>


        <?php include 'footer.php' ?>

    </section>

    </div>
    <script type="application/javascript">
        function tableSearch() {
            let input, filter, table, tr, td, i, txtValue;
            //init variables
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");

            for (let i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1];
                if (td) {
                    txtValue = td.textContent;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";

                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>

</body>

</html>