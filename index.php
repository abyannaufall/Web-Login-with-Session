<?php
session_start();
if(!$_SESSION['success']){
header("location: ../login.php");
die();}
?>
<html>
    <head>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial scale=1">
        <title>Website Portofolio</title>
        <link rel="stylesheet" type="text/css" href="../style/style2.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet"> 
    </head>
    <body>
        
        <header>
            <div class="container">
              <h1><a href="">M Abyan Naufal F</a></h1>
              <u1>
                <li><a href="logout.php">Logout</a></li>
                <li><a href="index.php">Home</a></li>
                <li><button  id="btn_tampil">Info</button>
              </u1>
            </div>
        </header>
<!--Banner-->
        <section class="banner">
            <div class="container">
                <div class="banner-left">
                <a href="../img/asd.jpg"target="_blank"><img src ="../img/asd.jpg"></a>
                <h2>Halo<br>
                Saya adalah seorang  <span class="efek-ngetik"></span></h2>
                <p> Selamat datang di Web Portofolio saya!</p>
                </div>
            </div>
        
        </section>
<!--Kontak-->
<section id='Contact'>
            <div class="kontak">
                <h3>Contact me on</h3>
            </div>
                <div class="column">
                  <p><a href="https://www.instagram.com/abyannaufall/"><img src="../img/SeekPng.com_twitter-logo-circle-png_2134604.png"></a></p>
                  <p><a href="https://twitter.com/abyannaufalf"><img src="../img/twitter-logo-on-black-background.png" ></a></p>
                  <p><a href="https://line.me"><img src="../img/line-logo-messenger-png-2100.png" ></a></p>
                </div>
        </section>
        <script src="../js/script2.js"></script>
        <script>
              $(document).ready(function(){
                  $('#btn_tampil').click(function(){
                     $.post('info.php',{nama : 'Mohamad Abyan Naufal ', NIM : '185150307111022 ', Kelas: 'PAW - A'},
                     function(data, status){
                        alert('Data : '+data+'\nStatus: '+status);
                     });
                  });
              });
        </script>
        
        
    </body>
    
</html>