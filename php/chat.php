<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="chat.css">
</head>

<body>
    <video autoplay loop muted plays-inline class="background-clip">
        <source src="Home1.mp4" type="video/mp4">
    </video>


    <div class="chat">
        <div>
            <div class="input">
                <form action="sendj.php" method="GET">
                    <input type="radio" id="que1" name="que" onclick="display()"><label style="color: white;">About Our College ?</label><br><br>
                    <input type="radio" id="que2" name="que" onclick="display()"><label style="color: white;">Placement ?</label><br><br>
                    <input type="radio" id="que3" name="que" onclick="display()"><label style="color: white;">Events ?</label><br><br>
                    <input type="radio" id="que4" name="que" onclick="display()"><label style="color: white;">Clubs , Commetees ?</label><br><br>
                    <textarea  id="ip" name="ip" cols="30" rows="5" placeholder="Message..."></textarea><br><br>

                    <script>
                        function display() { 
                        if(document.getElementById('que1').checked) {
                            document.getElementById('ip').innerHTML="About Our College ?";
                        }
                        else if(document.getElementById('que2').checked) {
                            document.getElementById('ip').innerHTML="Placement ?";
                        }
                        else if(document.getElementById('que3').checked) {
                            document.getElementById('ip').innerHTML="Events ?";
                        }
                        else if(document.getElementById('que4').checked) {
                            document.getElementById('ip').innerHTML="Clubs , Commetees ?";
                        }
                    }
                    </script>

                    <button><img src="logo.png" class="image"></button>
                </form>
            </div>
            <div class="input">
                <form action="send.php" method="GET">
                    <textarea id="ip" name="ip4" cols="30" rows="5" placeholder="Message..."></textarea><br><br>
                    <button><img src="logo.png" class="image"></button>
                </form>
            </div>
        </div>

        <div id="ip">
            <div class="chat-container">
                <div class="scroll-div">
                    <div class="scroll-obj">
                    <?php 
                        $host="localhost";
                        $user="root";
                        $pass="";
                        $dbname="infinity";
                        $con=mysqli_connect($host,$user,$pass,$dbname);
                            $sql="select * from chat ";
                            $re= mysqli_query($con,$sql);
                          while($r=mysqli_fetch_array($re)) {
                            if($r[1]=='Junior')
                            {
                           echo "<p style='color:white;background-color:black;'>".$r[0].", sent by ".$r[1]."</p>";
                            }
                            else{
                                echo "<p style='color:Yellow;text-align:right;background-color:black;'>".$r[0].", sent by ".$r[1]."</p>";
                            }
                        }
                            mysqli_close($con);
                            
                            ?>
                                <p id="p1" style="color:white;"><br></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>