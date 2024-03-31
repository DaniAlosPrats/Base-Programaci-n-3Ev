<?php
require_once "autoloader.php";

$customer = new gestion();


?>

<!DOCTYPE html>
<html>
<head>
    <title>Marcas</title>
</head>
<body>

<form action="#" method="post">
    <?php echo $customer->getBrand(); ?> 
    <input type="submit" value="Selecionar">
</form>

</body>
</html>