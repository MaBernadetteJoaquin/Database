<?php

require_once('../controller/action.php');
if(isset($_POST['btnsave'])){
$id = $_POST['id'];
$lname = $_POST['lname'];
$fname = $_POST['fname'];
$studid = $_POST['studid'];
$age = $_POST['age'];
$stat = $_POST['stat'];
$address = $_POST['address'];
$cn = $_POST['cn'];
    $bool = updateStudent($id,$lname,$fname,$studid,$age,$stat,$address,$cn);
    if($bool){
        echo "Data is updated successfully";
        header("location: ../index.php");
    }else{
        echo "Something went wrong";
    }
}
?>