<?php
require_once "autoloader4.php";
$visits = new Clinic('info.csv');

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $paid = isset($_POST["Paid"]) ? "True" : "False";

    $datos = [
        'Id' => $_POST["Id"],
        'Name' => $_POST["Name"],
        'Date' => $_POST["Date"],
        'Amount' => $_POST["Amount"],
        'Paid'=> $paid
    ];
    $visits->insert($datos);
    $visits->persist();

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
    <style>

        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header {
    background-color: #f1f1f1;
    padding: 20px;
    text-align: center;
}

form {
    max-width: 600px;
    margin: 20px auto;
}

label {
    display: block;
    margin-bottom: 5px;
}

input {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    box-sizing: border-box;
}

button {
    background-color: #4caf50;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}

        </style>
</head>
<body>
    <header>
        <form id="form_x" class="class_x" method="post" action="insert.php">
            <label for="Id">Id:</label>
            <input type="text" id="Id" name="Id" value="">
            <label for="Name">name:</label>
            <input type="text" id="Name" name="Name" value="">
            <label for="Date">Date:</label>
            <input type="Date" id="Date" name="Date" value="">
            <label for="Amount">Amount:</label>
            <input type="number" id="Amount" name="Amount" value="">
            <label for="Paid">Paid:</label>
           
            <input type="checkbox" id="Paid" name="Paid" value="True">
            <button type="submit">Update</button>
        </form>
    </header>
</body>
</html>

