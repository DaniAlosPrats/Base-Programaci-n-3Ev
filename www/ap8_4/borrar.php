<?php
require_once "autoloader.php";

$connection = new modelo();
$conn = $connection->getConn();
$id = $_GET['Id'];
$query = "DELETE  FROM tareas WHERE id = '$id'";
$conn->query($query);
    
$conn->close();

header("Location: index.php");