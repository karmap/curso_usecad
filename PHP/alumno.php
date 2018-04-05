<?php 

if (isset($_POST["name"]) && $_POST["name"] != "")
    echo "<h1>" . $_POST["name"] . "</h1>";
else
    echo "El nombre tiene que estar definido";
echo "<h1>" . $_POST["number"] . "</h1>"; 
echo "<h1>" . $_POST["email"] . "</h1>"; 
