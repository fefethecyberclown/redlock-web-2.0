<?php
$mysqli = new mysqli("redlock-db-container", "root", "password", "Redlock",3306);
if ($mysqli->connect_error) {
  echo "Failed to connect to MySQL: " . $mysqli->connect_error;
  exit();
}

$result = $mysqli->query("SELECT * FROM users");

echo "<table>";
echo "<tr><th>ID</th><th>Nama</th><th>Alamat</th><th>Jabatan</th></tr>";
while ($row = $result->fetch_assoc()) {
  echo "<tr><td>" . $row["ID"] . "</td><td>" . $row["Nama"] . "</td><td>" . $row["Alamat"] . "</td><td>" . $row["Jabatan"] . "</td></tr>";
}
echo "</table>";

$result->free();
$mysqli->close();
?>
