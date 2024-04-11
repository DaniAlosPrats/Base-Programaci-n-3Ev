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
    function getBrandId(){
        $conn=$this->getConn();
        $query= "SELECT brandId FROM brands where brandName= '$brandName' ";
        $result= mysqli_query( $conn ,$query );
        if ($row = mysqli_fetch_assioc( $result)) {
            return $row['brandId'];
    }
    
    }
    function brandCustomer(){
        8
    }
}    
  
