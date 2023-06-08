<?php
    $a = mysqli_connect('localhost','root','','signin');

    $n = $_POST['name'];
    $e = $_POST['email'];
    $p = $_POST['psw'];

    $query = mysqli_query($a,"INSERT INTO signinform VALUES('$n','$e','$p')");
    if($query){
        echo"<script>
            alert('Sign in successfull...!');
        </script>";
    }
?>