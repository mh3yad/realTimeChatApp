<?php
include 'connect.php'; 
// include 'realtime.php'; 
$stmt=$con->prepare("SELECT * FROM users ORDER BY id DESC LIMIT 1");
$stmt->execute();
$resultSet = $stmt->get_result();
$datas = $resultSet->fetch_all();

// print_r($datas);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

   
    <title>Document</title>
</head>
<body>
<?php
    
?>
    <div class="container">
        <div class="head">
           <div class="content">
                <div class="beforeLogin">
                    <form  name="login" id="login" onsubmit="">
                        <span class="error">empty yasta</span>
                        <input type="text" name='username' id="username" placeholder="enter your username">
                        <input type="submit" value="Login">
                    </form>
                </div>
                <div class="afterLogin">
                    <form action="" name="logout" id="logout">
                        <span id="username_text"></span>
                        <input type="submit" value="Logout">
                    </form>
                </div>
            </div>
        </div>
        <div class="body">
            <ul class="messages">
                <!-- <li>
                  
                   ?>
                </li> -->
            </ul>
        </div>
        <div class="footer">
            <div class="after">
                <form  name="sendMessage" id="sendMessage" onsubmit="">
                    <textarea placeholder="Enter your Message" id="msg" name="msg" rows="1" cols="60"></textarea>
                    <input type="submit" value="send"> 
                </form>
            </div>
            <div class="before">
                <label class="please" for="username" style="text-align:center;display: inline-block;width:100%;padding:10px;color:white;background: #112542;border-radius: 10px;">please login first</label>    
            </div>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>
<script>

</script>
</html>