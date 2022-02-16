<?php
$servername="db";
$username="MohammedAlsaadi";
$password="password1";
$dbname="MohammedAlsaadi";


$conn = new mysqli($servername,$username,$password,$dbname);
if($conn ->connect_error)
die("conection failed:".$conn->connect_error);

?>