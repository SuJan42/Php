<?php

require '../DataBaseConn/db.inc.php';

$user_email = $_POST['$email'];
$password = $_POST['$password'];

if(empty($email)){
    header('Location: ../login.php?error=empty-email');
    exit();
}

//password check
if(empty($password)){
    header('Location: ../login.php?error=empty-password');
    exit();
}

// $sql = "SELECT * from login Where email='$email' AND password = '$password'";
$sql = "SELECT * from form_info Where email='$email'";

$result = mysqli_query($conn , $sql);
$num  = mysqli_num_rows($result);

if($num == 1){
    while($row= mysqli_fetch_assoc($result)){
        if(password_verify($password , $row['Password'])){
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['name']= $name;
    $_SESSION['email']= $email;
    header('Location: ../welcome.php');
}
else{
    header("Location: ../login.php?error=invalid-credintials");
    exit();
    }
}
}
else{
    header("Location: ../login.php?error=invalid-credintials");
    exit();
}
?>

