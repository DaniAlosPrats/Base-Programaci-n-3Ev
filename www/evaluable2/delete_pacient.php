<?php
require_once "autoloader4.php";

$paciente = new Visitor('data.csv');
if (isset($_GET['id'])) {
$paciente->deletePacient($_GET['id']);
}else{
    $paciente->deletePacient(null);
}

header('location: list.php');

