<?php
include 'header.php';
include 'db.php';
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      h2{
        text-align:center;
        padding-top:25px;
        padding-bottom:15px;
        font-family: verdana;

      }
      table{
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        text-align:center;
        padding-top:20px;
        width:100%;
      }
      th,td{
        padding: 15px;

      }

    </style>
</head>
<body>
    <h2><b>CHECK YOUR HISTORY</b></h2>
<table>
  <tr>
    <th>ID</th>
    <th>DATES</th>
    <th>SERVICES</th>
    <th>TIMINGS</th>
    

  </tr>
  
  <?php
  $sql = "select * from Appointment";
  $result = $conn->query($sql);
    if($result){
    
    while ($row1 = mysqli_fetch_array($result)) {
      $id=$row1['UserID'];
      $date=$row1['Date1'];
      $service=$row1['Services'];
      $time=$row1['Tim'];
      
      echo '<tr class="table">
      <td>'.$id.'</td>
      <td>'.$date.'</td>
      <td>'.$service.'</td>
      <td>'.$time.'</td>
      
    </tr>';
  

    }
  }
    ?>
    

 
</table>
    
</body>
</html>
<?php
include 'footer.php';
?>


