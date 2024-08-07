<?php
$tipodedocumento = $_POST['tipod'];
$numerodedocumento = $_POST['ndocumen'];
$primernombre = $_POST['pnombre'];
$segundonombre = $_POST['snombre'];
$primerapellido = $_POST['papellido'];
$segundoapellido = $_POST['sapellido'];
$fechadenacimiento = $_POST['fnacimiento'];
$departamento = $_POST['dptos'];
$ciudad = $_POST['ciudades'];
$genero = $_POST['tipog'];
$correo = $_POST['correos'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "encuesta_dane";
// las llaves de la casa
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO daneencuesta (tipod, ndocumen, pnombre, snombre, papellido, sapellido, fnacimiento, dptos, ciudades, tipog, correos)
VALUES ('$tipodedocumento', '$numerodedocumento', '$primernombre', '$segundonombre', '$primerapellido', '$segundoapellido', '$fechadenacimiento', '$departamento', '$ciudad', '$genero', '$correo')";

if ($conn->query($sql) === TRUE) {
  echo "SE AGREGO UN NUEVO DATO CON EXITO!!!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>