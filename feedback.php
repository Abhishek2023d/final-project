<?php
    $var = mysqli_connect('localhost','root','','feedback');

    $fn = $_POST['firstname'];
    $ln = $_POST['secondname'];
    $em = $_POST['mail'];
    $cmt = $_POST['commentfield'];

    $query = mysqli_query($var,"INSERT INTO user_feedback VALUES('$fn','$ln','$em','$cmt')");
    if($query){
        echo"<script>
            alert('Thank you for your feedback');
            alert('Keep Visiting...!');
        </script>";
    }
?>