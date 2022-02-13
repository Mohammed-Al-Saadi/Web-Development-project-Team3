<?php
$servername="db";
$username="webdev";
$password="password";
$dbname="webdev";

$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error)
   die("Connection failed: ".$conn->connect_error);
?>