<?php
session_start();
$username_kirim = "admin";
$password_kirim = "pw123";
if(isset($_POST["usernamekirim"]) and isset($_POST["passwordkirim"])){
    if($_POST["usernamekirim"]==$username_kirim and $_POST["passwordkirim"]==$password_kirim){
        $_SESSION['success']= true;
        $_SESSION['usernamekirim'] = $username_kirim;
        $_SESSION['passwordkirim'] =$password_kirim;
        echo "Login Success";
    }else{
        echo "username dan password salah";
    }
}else{
    header("location:login.php");
}

?>

