<?php
include 'header.php';




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
    <div class="row row1" >
        <div class="col-lg-6">
    <?php
include 'connect.php';

$sql=" SELECT * FROM Login WHERE id=(SELECT max(id) FROM Login)";
$result = $conn -> query($sql);
if($result ->num_rows > 0) {
    echo "welcome ";
while($row = $result ->fetch_assoc()){

    echo  $row['Firstname'] ;
}
}
    ?>
    
    </div>
    </div>
</body>
</html>