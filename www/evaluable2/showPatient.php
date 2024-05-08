<?php

require_once "autoloader4.php";

$patient = new Visitor("data.csv");

if (isset($_GET['Name'])) {
    $patient->showPatients($_GET['Name']);
} else {
    $patient->showPatients(null);
}

header("location: list.php");
?>
