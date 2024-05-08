<?php

class Importar extends Conexion{

    private $conexion;
    private $file = "customers.csv";

    function __construct(){
        $this->conexion = new Conexion();
        $this->conn = $this->conexion->getConn();
    }

    function customers() {
        $gestor = fopen($this->file, "r");
        while (($element = fgetcsv($gestor, 0, "#")) !== false) {
            $id = $element[0];
            $name = $element[1];
            $stmt = $this->conn->prepare("UPDATE customers SET customerName=? WHERE customerID=?");
            $stmt->bind_param("ss", $name, $id);
            $stmt->execute();
        }
        fclose($gestor);
    }

    function brandCostumers() {
        $gestor = fopen($this->file, "r");
        while (($element = fgetcsv($gestor, 0, "#")) !== false) {
            $id = $element[0];
            $brands = explode(", ", $element[2]);
            for ($i=0; $i < count($brands); $i++) { 
                $idBrand = $this->getBrandId($brands[$i]);
                if ($idBrand != 0) {
                    $stmt = $this->conn->prepare("INSERT INTO brandCustomer(customerId, brandId) VALUES (?, ?)");
                    $stmt->bind_param("si", $id, $idBrand);
                    $stmt->execute();
                }
            }
        }
        fclose($gestor);
    }

    function getBrandId($name) {
        $query = "SELECT brandId FROM brands WHERE brandName='$name'";
        $result = $this->conn->query($query);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                return $row["brandId"];
            }
        } else {
            return 0;
        }
    }
}
