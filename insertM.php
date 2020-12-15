<?php
include 'connect.php';
if(isset($_POST['name'])){

$name = $_POST['name'];
$content = $_POST['content'];
$time = $_POST['time'];
$insert = "INSERT INTO `messages` (`id`, `name`,`content`,`time`) VALUES (NULL,'$name','$content','$time')";

        if($con->query($insert) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $insert . "<br>" . $con->error;
        }
}


$sql = "SELECT name,content,time FROM messages";
$result = mysqli_query($con,$sql);

$row = mysqli_fetch_array($result, MYSQLI_NUM);
return $row;

?>