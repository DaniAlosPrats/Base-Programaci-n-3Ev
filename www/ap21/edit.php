<?php
require_once "autoloader2.php";
$connection = new Connection();
$conn = $connection->getConn();

$id = isset($_GET['Id']) ? $_GET['Id'] : null;

$query = "SELECT 'Company' FROM Investment WHERE 'id'=$id";
$result = $conn->query( $query );  
$companyForm->fetch_array(MYSQLI_NUM);
$result->close();


$query = "SELECT 'Investment' FROM Investment WHERE 'id'=$id";
$result = $conn->query( $query );  
$InvestmentForm->fetch_array(MYSQLI_NUM);
$result->close();

$query = "SELECT 'Date' FROM Investment WHERE 'id'=$id";
$result = $conn->query( $query );  
$dateForm->fetch_array(MYSQLI_NUM);
$result->close();

$query = "SELECT 'Active' FROM Investment WHERE 'id'=$id";
$result = $conn->query( $query );  
$ActiveForm->fetch_array(MYSQLI_NUM);
$result->close();



    header("location: index.php");


 

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
        <form id="form_x" class="class_x" method="post" action="edit.php?id=<?= $id ?>">
            <label for="id">Id:</label>
            <input type="text" id="id" name="id" value="<?php  ?>">
            <label for="company">Company:</label>
            <input type="text" id="company" name="company" value="<?php  ?>">
            <label for="investment">Investment:</label>
            <input type="number" id="investment" name="investment" value="<?php  ?>">
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" value="<?php  ?>">
            <label for="active">Active:</label>
            <input type="text" id="active" name="active" value="<?= ?>">
            <button type="submit">Update</button>
        </form>
    </header>
</body>
</html>