<?php
//Include required phpmailer files
include 'connect.php';

require 'PHPMailer.php';

require 'SMTP.php';


require 'Exception.php';
//Define name spaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
//Create instance of phpmailer


$mail=new PHPMailer();
$mail->isSMTP();
$mail->Host="smtp.gmail.com";
$mail->SMTPAuth="true";
$mail->SMTPSecure ="tls";
$mail->Port="587";
$mail->Username="wecare380@gmail.com";
$mail->Password="wecare1234";

$mail->Subject ="dferfefee";
$mail->setFrom("wecare380@gmail.com");
$mail->Body ="Your appointment is canceled.";

$sql = "select username from appointment  ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$mail ->addAddress($row['username']);

if ($mail->Send()){
header("location:employee.php");

}
else{
    echo "noooooooo";
}
$mail ->smtpClose();


?>

