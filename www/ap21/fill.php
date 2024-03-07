<?php
require_once "autoloader2.php";

$connection = new Connection;
$conn = $connection->getConn();

for ($i = 1; $i <= 100; $i++) {
    
    $id = $i;

    $query = "INSERT INTO Investment (Id, Company, Investment, Date, Active)
              VALUES ('$id', 'Andrwa', '33112', '2005/12/05', 1)";
    mysqli_query($conn, $query);
}

mysqli_close($conn);

header("location: index.php");