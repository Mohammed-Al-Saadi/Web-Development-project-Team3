<?php
include 'connect.php';
if($conn==true){
}

$sql="select * from login";
$result = $conn -> query($sql);
if($result ->num_rows > 0) {
    echo "<table class=\"table\"><tr><th>ID</th><th>First Name</th><th>Last Name</th>
    <th>email</th><th>passwoed</th><th>logintime</th> </tr>";
while($row = $result ->fetch_assoc()){

    echo "<tr><td>" . $row["id"] 
    ."</td><td>". $row["username"]. "</td><td>". $row["password"]
    ."</td></tr>";
}
echo "</table>";
}
   






?>
<style>

   
table{
    border: solid;
    width:1000px;
    margin:0 auto;
}
table td{
    border: solid;

}
table th{
    border: solid;
    text-align:start;

}
</style>