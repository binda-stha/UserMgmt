<?php session_start(); 
include "connection.php";
if(isset($_POST['submit'])) {
    //print_r($_POST);
    $id = $_POST['id'];
    $name=$_POST['fname'];
    $phone=$_POST['phone'];
     $photo = $_POST['photo'];
   

    $sql = "UPDATE tbl_users SET fullname='$name', phone='$phone' WHERE id=$id";
    $res = mysqli_query($conn , $sql);
    if(!$res) $_SESSION['msg'] = "Database updation failed.";
    else $_SESSION['msg'] = "Data updated succesfully.";
}
header("location: ./edit.php");
  