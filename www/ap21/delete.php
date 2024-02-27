<?php
require_once "autoloader2.php";

$cartera = new Cartera('data.csv');
$cartera->delete(isset($_GET['id']) ? $_GET['id'] : null);

header('location: index.php');


