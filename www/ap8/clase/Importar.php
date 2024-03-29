<?php
class Importar extends conexion{

    function customer() {
        $fichero='customers.csv';
        $conn=$this->getConn();
        $csvFile = fopen($fichero, "r");

        if ($csvFile !== false) {
            while (($data = fgetcsv($csvFile, 0, "#")) !== false) {
               $id = $data[0];
               $name = $data[1];
               $query = "UPDATE customers SET customerName= '$name' WHERE customerId= '$id'";
               $result = mysqli_query($conn,$query);
                 
            }
            fclose($csvFile);
        }
    }
    function getBrandId($brandName) {
        $sql = "SELECT brandId FROM brands WHERE brandName = '$brandName'";
        $result = mysqli_query($this->conn, $sql);
        if ($row = mysqli_fetch_assoc($result)) {
            return $row['brandId'];
        }
    }
   
    
    
    function brandCustomer($brandName){
        $conn = $this->getConn();
        $csvFile = fopen("customers.csv", "r");
        $brandName = $this->getBrandId($brandName);
        $insertQuery = "INSERT INTO brandCustomer (brandId, customerId) VALUES ";

        if ($csvFile !== false) {
            while ($data = fgetcsv($csvFile, 0, "#")) {
                $customerId = $data[0];
                $fBrands = explode(',', $data[2]);

                if (in_array($brandName, $fBrands)) {
                   
                    $sql = "SELECT brandId FROM brands WHERE brandName = '$brandName'";
                    $result = mysqli_query($conn, $sql);
    
                    if ($result) {
                        $row = mysqli_fetch_assoc($result);
                        $brandId = $row['brandId'];
    
                        
                        $insertQuery .= "('$brandId', '$customerId'),";
                    }
            fclose($csvFile);
        }
    }
    }
}
}