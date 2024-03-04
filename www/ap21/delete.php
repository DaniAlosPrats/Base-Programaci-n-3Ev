<?php
require_once "autoloader2.php";

$cartera = new Cartera();
$cartera->delete(isset($_GET['Id']) ? $_GET['Id'] : null);

header('location: index.php');


