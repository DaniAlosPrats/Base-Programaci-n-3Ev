<?php
require_once "autoloader2.php";

$connection = new Connection();
$conn = $connection->getConn();
$id = $_GET['Id'];
$query = "DELETE  FROM Investment WHERE id = '$id'";
$conn->query($query);
    
$conn->close();

header("Location: index.php");

