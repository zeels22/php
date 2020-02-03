<?php
$host = 'localhost';
$username = 'root';
$password = '';
$db = 'blog';

$conn = mysqli_connect($host, $username, $password, $db);
if(!$conn){
    die("Connection failed");
}
$email = 'zeels22@gmail.com';
$password = 'abc';

$sql = "SELECT `emailId` FROM `user` WHERE `emailId` = '$email'";

$result = mysqli_query($conn, $sql);

?>
