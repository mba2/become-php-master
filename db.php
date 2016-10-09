<?php

$connection = mysqli_connect("localhost","root","m2c1a4a2","loginapp");
if(mysqli_connect_errno()) {
  exit("Could't connect to database" . mysqli_connect_error($connection));
}


?>
