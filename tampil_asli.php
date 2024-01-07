<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pbwsa02";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: ". $conn->connect_error);
}

//ini perintah query select
$sql = "SELECT Nim, Nama, Tanggal_Lahir FROM mahasiswa";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row["Nim"] . " ";
    echo $row["Nama"] . " ";
    echo $row["Tanggal_Lahir"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
