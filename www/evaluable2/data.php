<?php
require_once "autoloader4.php";

$csvFile = fopen("info.csv", "r");

$names = [];

while (($row = fgetcsv($csvFile)) !== false) {
    $names[] = $row[0];
}

fclose($csvFile);



function addAddress() {
    $direction = [];
    for ($i = 0; $i <= 100; $i++) {
        $address = "Calle" . $i;
        $direction[] = $address;
    }
    return $direction;
}

$address = addAddress();
$data = []; 

for ($i = 0; $i < count($names); $i++) {
    $data[$i]['Name'] = $names[$i];
    $data[$i]['Direction'] = "calle Felicidad " . rand(0, 100);
    $data[$i]['Id'] = $i;
}

$gestor = fopen("data.csv", "w");
foreach ($data as $fila) {
    fputcsv($gestor, array_values($fila));
}

fclose($gestor);

header("location: list.php");
?>

