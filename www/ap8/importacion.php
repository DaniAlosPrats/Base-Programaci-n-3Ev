<?php
require_once "autoloader.php";

$customer = new Importar();
$customer ->deletelist();
$customer->brandCustomer('customers.csv');
