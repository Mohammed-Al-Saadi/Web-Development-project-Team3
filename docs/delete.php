


<?php
include 'connect.php';



if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE  FROM appointment WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {

        
    echo "deleted.";

}



else 
{
        die("Are you sure you want to delete. please check your tables." . $conn->connect_error);
    }

    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="employee.php#section1">Home</a>

</body>
</html>