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

$sql = "DELETE FROM alumno WHERE id=" . $_GET["id"];

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?> 

<div>
</body>
</html> 