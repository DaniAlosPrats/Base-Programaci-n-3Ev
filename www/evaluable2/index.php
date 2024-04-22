<?php 
require_once "autoloader4.php";

$clients = new Clinic("info.csv");

if (isset($_GET['id'])) {

    $id = $_GET['id'];
} else {
    $id = null;
}
$patient =$clients->getClient($id);




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
    <table class="blackWhiteTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th class="date">Date</th>
                <th>Amount</th>
                <th>Paid</th>
                <th colspan='3'>Actions</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <td colspan="8"></td>
            </tr>
        </tfoot>
        <tbody>
            <?= $clients->listdraw() ?>
        </tbody>
    </table>
    <button id="unpaid-status"> Unpaid</button>

    <script src="DOM.js"></script>
</body>

</html>
