<?php
require_once "db.php";

function showAllData() {
      $query = "SELECT * FROM 'user'";
      $result = mysqli_query($connection,$query);
      while($row = mysqli_fetch_assoc($result)) {
        $id   = $row['userID'];
        $name = $row['userName'];
        echo "<option name='' value='{$id}'>{$name}</option>";
      }
}
