<html>

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

    <form action="alumno_bd.php" method="post">
    Nombre: <input type="text" name="name"><br>
    No. Cuenta: <input type="text" name="number"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
    </form>
<div>
</body>
</html> 