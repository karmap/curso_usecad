<head>
    <style>
    #container{
        width:80%;
        margin:auto;
    }
    ul li{
        float:left;
        list-style-type: none;
    }
    ul li a{
        display:block;
        padding:10px;
        background-color:#eee;
        text-decoration: none;
    }
    ul li a:hover{
        background-color:#ccc;
    }
    </style>
</head>


<body>

<div id="container">
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

$sql = "SELECT name, number, email FROM alumno";
$result = $conn->query($sql);

echo "
<table>
  <tr>
    <th>Nombre</th>
    <th>Numero de cuenta</th> 
    <th>Correo</th>
  </tr>";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["number"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}

echo "
</table>";

$conn->close();
?> 

<div>
</body>
</html> 