<?php
$mysqli = new mysqli("redlock-db-container", "root", "password", "Redlock",3306);
if ($mysqli->connect_error) {
  echo "Failed to connect to MySQL: " . $mysqli->connect_error;
  exit();
}

$result = $mysqli->query("SELECT COUNT(*) AS total FROM users");

echo "<table>";
while ($row = $result->fetch_assoc()) {
  echo "Total data adalah " . $row["total"];
}
echo "</table>";

$result->free();
$mysqli->close();
?>
