<?php
require_once "autoloader4.php";
$visits = new Visitor('data.csv');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
 

    $datos = [
        'Id' => $_POST["Id"],
        'Name' => $_POST["Name"],
        'Address' => $_POST["Address"],


    ];

    $visits->insert($datos);

    $visits->persist();

    header("location: list.php");
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
        <form id="form_x" class="class_x" method="post" action="insert_pacient.php">
            <label for="Id">Id:</label>
            <input type="text" id="Id" name="Id" value="">
            <label for="Name">name:</label>
            <input type="text" id="Name" name="Name" value="">
            <label for="Address">Address:</label>
            <input type="text" id="Address" name="Address" value="">
            <button type="submit">Update</button>
        </form>
    </header>
</body>
</html>
