<?php
require_once "autoloader4.php";

$visits = new Visitor("data.csv");
$id = isset($_GET['id']) ? $_GET['id'] : null;
$client = $visits->getPacient($id);

if (count($_POST) > 0) {
    
    $datos=[
        'id' => $_POST[ 'id'],
        'name'=>$_POST["name"],
        'Address'=>$_POST["address"]
       
        
    ];
    $visits->update($_POST);
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
<form id="form_x" class="class_x" method="post" action="editpacient.php?id=<?=$id?>">
<label for="id">ID:</label>
    <input type="text" id="id" name="id" value="<?php echo $client->getID() ?>">
    <label for="name">name:</label>
    <input type="text" id="name" name="name" value="<?php echo $client->getName() ?>">
    <label for="address">address:</label>
    <input type="text" id="address" name="address" value="<?php echo $client->getAddress() ?>">
    <button type="submit">Update</button>
</header>
</from>
</body>
</html>

