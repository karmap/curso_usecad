<ul>
    <li><a href="#">Inicio</a></li>
    <li><a href="lista.php">Lista de Alumnos</a></li>
    <li><a href="forma_alumno_guardar.php">Nuevo Alumno</a></li>
</ul>

    <div style="clear:both;"></div>

    <br><br>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "alumnos";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ( $conn -> connect_error ){
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO alumno (name, number, email) VALUES ('"
    . $_POST['name'] . 
    "', '"
    . $_POST['number'] . "', '" . $_POST['email'] . "')";

if ($conn->query($sql) === TRUE) {
    echo "Se creo un nuevo alumno";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 
