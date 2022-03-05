

<?php
include 'header.php';
include 'connect.php';
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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
        margin-right:10px;

      }
      .scroll-up{
        position: fixed;
        border-radius: 20%;
        width:50px;
        height:50px;
        right: 10px;
        font-size:20px;
        color:rgb(93, 175, 223);
        background:white;
        

      }

    </style>
    
</head>
<body>
    <h2><b>CHECK YOUR HISTORY</b></h2>
<table>
  <tr>
    <th>ID</th>
    <th>username</th>

    <th>DATES</th>
    <th>SERVICES</th>
    <th>TIMINGS</th>
    

  </tr>
  
  <?php
  $sql = "select * from appointment WHERE id=(SELECT max(id) FROM appointment) ";
  $result = $conn->query($sql);
    if($result){
    
    while ($row = mysqli_fetch_array($result)) {
      $id=$row['id'];
      $username=$row['username'];

      $date=$row['date1'];
      $service=$row['service'];
      $time=$row['tim'];
      
      echo '<tr class="table">
      <td>'.$row['id'].'</td>
      <td>'.$username.'</td>

      <td>'.$date.'</td>
      <td>'.$service.'</td>
      <td>'.$time.'</td>
      
    </tr>';
  

    }
  }
    ?>
 
    

 
</table>
<button class="scroll-up"><i class="fa fa-chevron-up"></i></button>
<script src="script.js" async></script>
</body>
</html>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


<?php
include 'footer.php';
?>