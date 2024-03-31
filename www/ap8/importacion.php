<?php
require_once "autoloader.php";

$customer = new Importar();


?>
<!DOCTYPE html>
<html>
<head>
    <title>Información de Clientes</title>
    <style>
       
    </style>
</head>
<body>

<table>
    <tr>
        <th>Customer ID</th>
        <th>Brand ID</th>
    </tr>
    <? $customer->drawbrandCustomer('customers.csv'); ?>
</table>

</body>
</html>
