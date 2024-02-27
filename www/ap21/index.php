<?php
require_once "autoloader2.php";

$cartera = new Cartera("data.csv");
$id = isset($_GET['id']) ? $_GET['id'] : null;
$client = $cartera->getClientes($id);

echo "<h1>Hello, Welcome DAW Student!</h1>";

$conn = mysqli_connect('db', 'root', 'test', "dbname");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="scc.css">
    <title>Document</title>
 
</head>

<body>
    <table class="redTable">
        <thead>
            <tr>
                <th>Id</th>
                <th>Company</th>
                <th>Investment</th>
                <th>Date</th>
                <th>Active</th>
                <th colspan='3'>Actions</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <td colspan="8">

                </td>
            </tr>
        </tfoot>
        <tbody>
            <?= $cartera->drawList() ?>
        </tbody>
    </table>


</body>

</html>