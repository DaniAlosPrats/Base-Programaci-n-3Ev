<?php
require_once "autoloader2.php";

$cartera = new Cartera("data.csv");
$id = isset($_GET['id']) ? $_GET['id'] : null;
$client = $cartera->getClientes($id);

if (count($_POST) > 0) {
    $active = isset($_POST["active"]) ? 'True' : 'False'; 
    $datos=[
        'id'=>$_POST["id"],
        'company'=>$_POST["company"],
        'investiment'=>$_POST["investiment"],
        'date'=>$_POST["date"],
        'active'=> $active   
    ];
    $cartera->update($_POST);
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
<form id="form_x" class="class_x" method="post" action="edit.php?id=<?=$id?>">
<label for="id">Id:</label>
    <input type="text" id="id" name="id" value="<?php echo $client->getId() ?>">
    <label for="company">company:</label>
    <input type="text" id="company" name="company" value="<?php echo $client->getCompany() ?>">
    <label for="investiment">investiment:</label>
    <input type="number" id="investiment" name="investiment" value="<?php echo $client->getInvestiment() ?>">
    <label for="date">date:</label>
    <input type="date" id="date" name="date" value="<?php echo $client->getDate() ?>">
    <label for="active">Active:</label>
    <input type="text" id="active" name="active" value="<?=  $client->getActive()  ?>">
    <button type="submit">Update</button>
</header>
</from>
</body>
</html>

