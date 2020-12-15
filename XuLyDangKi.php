<?php
    include 'config.php';
    $username=$_POST['username'];
    $password=$_POST['password'];
    $repassword=$_POST['comfirmpass'];
    // if($password != $repassword){
    //     window.location.href="register.php";
    // }

    $sql="INSERT INTO tai_khoan(username,password,loai) VALUES ('$username','$password','1')";
    $sql2="INSERT INTO information(username) VALUES ('$username')";
    if(mysqli_query($conn,$sql)&& mysqli_query($conn,$sql2)){
        echo "tc";
        header('Location: login.php');
    }
    else {echo 'not';}
   
?>