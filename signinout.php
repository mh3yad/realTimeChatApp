<?php
include 'connect.php';
if(isset($_POST['username'])){

$username = $_POST['username'];
echo $username;
$insert = "INSERT INTO `users` (`id`, `name`) VALUES (NULL,'$username')";

        if($con->query($insert) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $insert . "<br>" . $con->error;
        }
}


$sql = "SELECT name FROM users";
$result = mysqli_query($con,$sql);

$row = mysqli_fetch_array($result, MYSQLI_NUM);


?>