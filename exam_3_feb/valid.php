<?php
$host = 'localhost';
$username = 'root';
$password = '';
$db = 'blog';

$conn = mysqli_connect($host, $username, $password, $db);
if(!$conn){
    die("Connection failed");
}

function valid($fieldname){
    if(isset($fieldname)&&!empty($fieldname)){
        return true;
    }else{
        return false;
    }
}

function fetchPrefix(){
    global $conn;
    $sql = "SELECT * from  prefixes";
    $rows = array();
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)) {
        array_push($rows, $row['prefix']);
    }
    return $rows;
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  function passCheck($pass,$copass){
    if(isset($_POST['extra']['submit'])){
        if($pass != $copass){
            return false;
        }else{
            return true;
        }
    }
}
function getValuePost($fieldname){
    if(valid($fieldname)){
        return $fieldname;
    }else{
        $fieldname = NULL;
        return $fieldname;
    }       
}
function fetchCategory(){
    global $conn;
    $sql = "SELECT * from  category";
    $rows = array();
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)) {
        array_push($rows, $row['title']);
    }
    return $rows;
}
?>