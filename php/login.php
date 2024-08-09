<?php 
    $host="localhost";
    $user="root";
    $pass="";
    $dbname="infinity";
    $con=mysqli_connect($host,$user,$pass,$dbname);
      //  $a=isset($_GET['id']) ? $_GET['id'] : '';
      //  $b=isset($_GET['pass']) ? $_GET['pass'] : '';
        $a=$_GET['ri'];
        $b=$_GET['em'];
        $sql="select * from user where rid='$a'";
        $re= mysqli_query($con,$sql);
        $numc=mysqli_num_rows($re);
        if ($re) {
          $num=mysqli_fetch_assoc($re);
          $pass=$num['pass'];
          
        }

        if ($a==null || $b==null)
        {
          echo "<script>alert('Enter correct username and password')</script>";
          $extra="log.html";
          $host=$_SERVER['HTTP_HOST'];
          $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
          echo "<script>open('http://$host$uri/$extra','_self') </script>";
        }
        else if ($pass==$b && $b!=null) {
          echo "<script>alert('log in successful')</script>";
          $extra="chat.php";
       $host=$_SERVER['HTTP_HOST'];
       $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
       echo "<script>open('http://$host$uri/$extra','_self') </script>";
          
        }else {
          echo "<script>alert('Enter correct username and password')</script>";
          $extra="log.html";
          $host=$_SERVER['HTTP_HOST'];
          $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
          echo "<script>open('http://$host$uri/$extra','_self') </script>";
        }
    
        mysqli_close($con);
        ?>