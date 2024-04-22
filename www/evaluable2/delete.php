<?php
require_once "autoloader4.php";

$paciente = new Clinic('info.csv');
if (isset($_GET['id'])) {
$paciente->delete($_GET['id']);
}else{
    $paciente->delete(null);
}

header('location: index.php');


