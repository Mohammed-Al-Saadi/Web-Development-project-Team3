<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("location:login.php");
} ?>
<?php
include 'connect.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE  FROM appointment WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("location:employee.php");
    } else {
        die("Are you sure you want to delete. please check your tables." . $conn->connect_error);
    }
}
?>