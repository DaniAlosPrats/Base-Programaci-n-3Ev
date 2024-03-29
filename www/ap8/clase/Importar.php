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
    function getBrandId($brandName){
        $conn = $this->getConn();
        $query = "SELECT brandId FROM brands WHERE brandName = '$brandName'";
        $result = mysqli_query($conn, $query);
        if ($row = mysqli_fetch_assoc($result)) {
            return $row['brandId'];
        } else {
            return null; 
        }
    }
    
    
    function brandCustomer(){
        $conn = $this->getConn();
        $csvFile = fopen("customers.csv", "r");
    
        if ($csvFile !== false) {
            while ($data = fgetcsv($csvFile, 0, "#")) {
                $customerId = $data[0];
                $fBrands = explode(',', $data[2]);
                
                
                
            }
            fclose($csvFile);
        }
    }
    
}
