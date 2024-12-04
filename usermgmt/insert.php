<?php 
if(isset($_POST['submit'])){
    print_r($_POST);
      $name=$_POST['fullname'];
      $phone=$_POST['phone'];
      
       $email=$_POST['username'];
       $password=$_POST['password'];
       $confirmPassword=$_POST['cpassword'];
        $photo=$_FILES['photo'];
        print_r($photo);  
              $phot_name = $photo['name'];
        if($phot_name != '') {
          $phot_tmpname = $photo['tmp_name'];
          move_uploaded_file($phot_tmpname, "./public/" . $phot_name);
        }

    if($password != $confirmPassword) {

     
       $pwdHash= sha1($password);  //used hashing algorithm: sha1()
    
       $sql="INSERT INTO tbl_users(fullname, photo, phone, email, password) VALUES('$name', '$phot_name', '$phone', '$email', '$pwdHash')";
      //  print($sql);
       include "./connection.php";
       $res = mysqli_query($conn,$sql);
       echo "sdcd".$res;
      $_session['msg'] = $res ? "User registered." : "Registration failed.";
    }}
header("location: ./register.php");

