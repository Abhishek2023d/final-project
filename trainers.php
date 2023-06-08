<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="gym_style.css">
</head>
<body>
<div class="head">
        <ul>
            <li><a href="index.html">HOME</a></li>
            <li><a href="SERVICE.HTML">SERVICES</a></li>
            <li><a href="why_join.html">WHY JOIN</a></li>
            <li><a href="contact.html">CONTACT US</a></li>
        </ul>
    </div>
    <h1 align="center">Our trainers</h1>
    <div class="trainers">   
<?php
    require 'config.php';

    $qurey = mysqli_query($db,"SELECT * FROM trainers");

    while($view=mysqli_fetch_array($qurey)){
        echo"<div class='div1'>
            <img src='{$view['Image']}' alt='Body builders' /><br><h3>{$view['Name']}</h3><br><p>{$view['Details']}</p>;
            </div>";
        }
	
	echo"<style>
		img{
			width: 300px;
			height: 350px;
            border-radius: 50%;
		}
        h3{
            font-size: 20px;
            border-bottom: 2px solid wheat;
        }
        .div1:hover{
            box-shadow: 5px 10px 8px #888888;
            transition: .5s;
        }
        .div1{
            background-color: wheat;
            width: 300px;
            height: auto;
            transition-duration: .5s;
        }
	</style>";
?> </div>   
   
</body>
</html>