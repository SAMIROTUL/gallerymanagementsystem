<?php 

    $conn = mysqli_connect('localhost','root','','gallerymanagement');

    $date = $_POST['date'];



    if($date){

        mysqli_query($conn, "INSERT INTO appointment (date) VALUES ('$date')");
        header("location: homepage.php");

    }else{

        header("location: homepage.php");

    }

?>