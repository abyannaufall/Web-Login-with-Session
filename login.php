<?php
session_start();
if($_SESSION['success']){
    header("location:server/index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Web</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
    </head>
    <body>
    <form method="POST" action="loginserver.php" id="LoginForm" class="loginform">
        <h1>Login</h1>
            <div class="teks">
            <input type="text" id="username" name="username">
             <span data-placeholder= "Username"></span>
            </div>
            <div class="teks">
            <input type="password" id="password" name="password">
            <span data-placeholder= "Password"></span>
            </div>
            <div class="btn">
            <input type="submit" id="submit" onclick="Login()" name="submit" value="login"></input>
            </div>
            
            <div class="teksbottom">
            Forgot Password? <a href="https://support.google.com/accounts/answer/7682439?hl=en&ref_topic=3382296">Help Center</a>
            </div>
    </form>
        <div class="gambar">
          <img src="img/wonder-day-png-cyberpunk-2077-8.png">
        </div>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script src ="js/js.alertify.js" type="text/javascript"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/alertify.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style/alertify.css">
    <link rel="stylesheet" type="text/css" href="style/default.css">
    
    <script type="text/javascript">
       $(".teks input").on("focus",function(){
           $(this).addClass("focus");
       });
       $(".teks input").on("blur",function(){
           if($(this).val() == "")
           $(this).removeClass("focus");
       });
       </script>
    </body>
    </html>

