<?php
require_once "autoloader4.php";

$clinic = new Clinic("info.csv");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    $id = null;
}

$client = null; 
if ($id !== null) {
    $client = $clinic->getClient($id); 
}

if (count($_POST) > 0) {
    if (isset($_POST["paid"])) {
        $paid = "True";
    } else {
        $paid = "False"; 
    }

    $datos = [
        'id' => $_POST['id'],
        'name' => $_POST['name'],
        'date' => $_POST['date'],
        'amount' => $_POST['amount'],
        'paid' => $paid 
    ];
    $clinic->update($datos);
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

        input, 
        button {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
<header>
<form id="form_x" class="class_x" method="post" action="edit.php?id=<?=$id?>">
    <label for="id">ID:</label>
    <input type="text" id="id" name="id" value="<?php echo $client->getID() ?>">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="<?php echo $client->getName() ?>">
    <label for="date">Date:</label>
    <input type="date" id="date" name="date" value="<?php echo $client->getDate() ?>">
    <label for="amount">Amount:</label>
    <input type="text" id="amount" name="amount" value="<?php echo $client->getAmount() ?>">
    <label for="paid">Paid:</label>
        <input type="checkbox" id="paid" name="paid" <?php 

            if ($client->getPaid() === "True") {
                echo "checked";
                } 
                else {
                    echo "";
                }
        ?>>
    <button type="submit">Update</button>
</form>
</header>
</body>
</html>
