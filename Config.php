<?php
$mysqli = new mysqli("localhost","root","","epiz_26849119_FoodEdgeDatabase");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
}
?>