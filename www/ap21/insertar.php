<?php
require_once "autoloader2.php";
$cartera = new Cartera('data.csv');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $active = isset($_POST["active"]) ? "True" : "False";

    $datos = [
        'id' => $_POST["id"],
        'company' => $_POST["company"],
        'investiment' => $_POST["investiment"],
        'date' => $_POST["date"],
        'active' => $active
    ];

    $cartera->insert($datos);

    $cartera->persist();

    header("location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <form id="form_x" class="class_x" method="post" action="insertar.php">
            <label for="id">Id:</label>
            <input type="text" id="id" name="id" value="">
            <label for="company">Company:</label>
            <input type="text" id="company" name="company" value="">
            <label for="investiment">Investment:</label>
            <input type="number" id="investiment" name="investiment" value="">
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" value="">
            <label for="active">Active:</label>
            <input type="text" id="active" name="active" value="">
            <button type="submit">Update</button>
        </form>
    </header>
</body>
</html>
