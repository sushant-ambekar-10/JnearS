<?php

$host="localhost";
$user="root";
$pass="";
$dbname="infinity";
$con=mysqli_connect($host,$user,$pass,$dbname);
    $id=$_GET["id"];
    $ps=$_GET["pass"];
    $nm=$_GET["nm"];
    $em=$_GET["em"];
    $sp=$_GET["sp"];
    $g=$_GET["g"];

    $sql="insert into user values('$id','$ps','$nm','$sp','$g','$em');";
    $re= mysqli_query($con,$sql);

    echo "<script>alert('Registered')</script>";
    $extra="login.html";
    $host=$_SERVER['HTTP_HOST'];
    $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
    echo "<script>open('http://$host$uri/$extra','_self') </script>";
    mysqli_close($con);

?>