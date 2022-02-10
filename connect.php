<?php
$servernae="db";
$username="MhammedAlsadi";
$password="Alsaad525415";
$dbname="MoammedAlsaadi";
$conn = new mysqli($servernae,$username,$password,$dbname);
if($conn ->connect_error)
die("conection failed:".$conn->cnnesct_error);

?>