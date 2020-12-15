<?php
include 'connect.php';

$stmt2=$con->prepare("SELECT * FROM messages");
$stmt2->execute();
$resultSet2 = $stmt2->get_result();
$datas2 = $resultSet2->fetch_all();
foreach($datas2 as $data2){
    echo '<li><b> - <span class="mUsername">'.$data2[1].' </span></b><span class="mBody"> '.$data2[2].' </span><span class="mTime"> '.$data2[3].' </span></li>';
}

?>