<?php

//$con = new mysqli("localhost","root","","shoutoutbox");
 $con = new mysqli("sql109.epizy.com","epiz_27443037","XglqmOXLOQzk","epiz_27443037_shoutoutbox");


if ($con -> connect_errno) {
  echo "Failed to connect to MySQL: " . $con -> connect_error;
  exit();
}

?>