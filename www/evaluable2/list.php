<?php 
require_once "autoloader4.php";

$costumer = new Visitor("data.csv");





?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="patient.css">
    <title>Document</title>
 
</head>

<body>
    <table  class="blackWhiteTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th colspan='3'>Actions</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <td colspan="6">

                </td>
            </tr>
        </tfoot>
        <tbody>
            <?= $costumer->listdraw() ?>
        </tbody>
    </table>


</body>

</html>

</body>

</html>
