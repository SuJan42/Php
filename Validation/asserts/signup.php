<?php

//db connection
require  '../databaseconn/db.inc.php';

$full_name = $_POST['fullname'];
$phone_no = $_POST['phone'];
$user_email = $_POST['email'];
$password = $_POST['password'];
$conf_pass = $_POST['confirm_password'];

// phone no validation
if(!is_numeric($phone_no)){
    header('Location: ../signup.php?error=invalid phone no');
    exit();
}

//email validation
if(!filter_var($user_email, FILTER_VALIDATE_EMAIL)){
    header('Location: ../signup.php?error=invalid email');
    exit();
}

//password validation
if(strlen($password) < 6){
    header('Location: ../signup.php?error= password is short');
    exit();
}

$existSql = " SELECT * FROM `form_info` WHERE Email = '$user_email'";
$result = mysqli_query($conn , $existSql);
$numExistRow = mysqli_num_rows($result);

if($numExistRow > 0){
    header('Location: ../signup.php?error=user exist already');
    exit();
}
else{
    $exists = false;
    //password verification
        if($password == $conf_pass){
            $password = password_hash($password , PASSWORD_DEFAULT);
            $sql = "INSERT INTO `form_info` (`Full_Name`, `Phone`, `Email`, `Password`) VALUES ('$full_name', '$phone_no', '$user_email', '$password')";
            $result = mysqli_query($conn , $sql);
            if($result){
              header('Location: ../login.php');
            // echo "Data inserted into Database";
            }
        }
          else {
            header('Location: ../signup.php');
            exit();
            // echo "Failed";
        }
    }


?>