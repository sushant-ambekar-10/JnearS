<?php 
    $host="localhost";
    $user="root";
    $pass="";
    $dbname="infinity";
    $con=mysqli_connect($host,$user,$pass,$dbname);
        $a=$_GET["ip"];
        $sql="insert into chat(chat,specification)values('$a','Junior')";
        mysqli_query($con,$sql);
        $extra="chat.php";
        $host=$_SERVER['HTTP_HOST'];
       $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
        echo "<script>open('http://$host$uri/$extra','_self') </script>";
        echo "<script>document.getElementById('p1').setAttribute('id','chat');</script>";
        //mysqli_query($con,$sql);
        mysqli_close($con);
        ?>