<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include 'header.php' ?>
    <br> <br><br><br>            <br><br><br><br><br>


    <div class="row row1">
        <div class="col-lg">
            <form action="#" method="GET">
                <h4> Please give your feedback: </h4>
                <label class="control-label" for="email">Username:</label>
                <input id="email" name="username" type="text" placeholder="E-Mail" class="form-control input-md" required><br>
                <label class="control-label" for="email">Subject:</label>
                <input id="subject" name="subject" type="text" placeholder="Subject" class="form-control input-md" required><br>

                <label class="control-label" for="text">Message:</label>
                <textarea id="text" name="text" type="text" placeholder="text" class="form-control input-sm" required></textarea><br>

                <button type="submit" class="btn btn-primary" name="submit" value="submit">Send</button>

            </form>
            <?php
            include 'connect.php';
            if (isset($_GET['submit'])) {
                $username = $_GET['username'];
                $subject = $_GET['subject'];
                $text = $_GET['text'];

                $sql = "insert into feedback (username , subject, text) value ('$username' , '$subject','$text') ";
                if ($conn->query($sql) === TRUE) {
                    echo "Feedback sent! please be patient,we respond within 72hrs.";
                } else {
                    echo "Please chech your input. ";
                }
            }

            ?>
            <br><br><br><br>
        </div>
    </div>
    <?php include 'footer.php' ?>
    <style>
        .row1 {
            margin: 0 auto;
            width: 350px;
        }
    </style>
</body>

</html>