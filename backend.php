<?php
    require 'config.php';

    $IMG = $_FILES['Image']['name'];
    $NM = $_POST['Name'];
    $DT = $_POST['Details'];

    $qurey = mysqli_query($db,"INSERT INTO trainers VALUES ('$IMG','$NM','$DT')");
    if($qurey){
        echo"<script>
            alert('Successfully inserted.');
        </script>";
    }
?>

<a href="trainers.php">See the trainers...</a>