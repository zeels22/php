<?php 
session_start();
error_reporting(0);
function getValuePost($section,$fieldname){
        $fieldname = (isset($_POST[$section][$fieldname]) && (!empty($_POST[$section][$fieldname]))) 
        ? $_POST[$section][$fieldname] 
        : "";
            return $fieldname;
    }
function setValueSession(){
    foreach($_POST as $section => $value){
    foreach( $value as $field => $fieldname){
        $_SESSION['formdata'][$section][$field]=$fieldname;
    }
}
}
setValueSession();

function getValues($section, $fieldname){
    if(isset($_POST[$section][$fieldname]) && (!empty($_POST[$section][$fieldname]))){ 
    $fieldname = $_POST[$section][$fieldname]; 
    }elseif(!empty($_SESSION['formdata'][$section][$field])){
        $fieldname = $_SESSION['formdata'][$section][$fieldname];
    }else{
        $fieldname = '';
    }
        return $fieldname;
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
// echo getValues('account','lname');die;

// echo "<pre>";
// print_r($_POST);
// print_r($_SESSION);
// echo "</pre>";

?>