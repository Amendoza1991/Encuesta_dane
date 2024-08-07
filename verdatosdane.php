<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "encuesta_dane";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM daneencuesta";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // echo '<table>';
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>". $row["id"] . "</tr><td>". $row["tipod"]. "</tr><td>". "</tr><td>" . $row["ndocumen"]. "</tr><td>" . $row["pnombre"]. "</tr><td>" . $row["snombre"]. "</tr><td>" . $row["papellido"]. "</tr><td>" . $row["sapellido"]."</tr><td>" . $row["fnacimiento"]. "</tr><td>" . $row["dptos"]. "</tr><td>" . $row["ciudades"]. "</tr><td>" . $row["tipog"]. "</tr><td>" . $row["correos"]. "</tr><td>";
  }
//   echo '</table>';
} else {
//   echo "0 results";
}
$conn->close();
?>
</body>
</html>




