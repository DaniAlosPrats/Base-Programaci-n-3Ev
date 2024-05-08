<?php

class Gestion extends Conexion {

    private $conexion;

    function __construct(){
        $this->conexion = new Conexion();
        $this->conn = $this->conexion->getConn();
    }

    public function getBrands() {
        $query = "SELECT * FROM brands ORDER BY brandName ASC";
        $result = $this->conn->query($query);
        $input = "";
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $input = $input . "<input type='checkbox' value='" . $row["brandId"] . "' name='" . $row["brandName"] . "'> " . $row["brandName"] . "<br>";
            }
        }
        print_r($input);
    }
}

?>