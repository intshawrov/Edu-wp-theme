<?php
$conn = new mysqli("localhost", "root", "", "orchid");
if ($conn->connect_error) {
  die("DB Error: " . $conn->connect_error);
}
?>
