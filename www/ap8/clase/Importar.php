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
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            return $row['brandId'];
        } 
    }
<<<<<<< HEAD
    
    }
    function brandCustomer(){
        8
=======
    public function deletelist(){
        $conn = $this->getConn();
        $query = "DELETE FROM brandCustomer"; 
        $conn->query($query);
        
>>>>>>> 8ec31c8b2ce4e709822352caf2b37efaa0d9da8f
    }
    
    function brandCustomer($csvFile) {
     
        if (($gestor = fopen($csvFile, "r")) !== false) {
          
            while (($data = fgetcsv($gestor, 1000, "#")) !== false) {
                $customerId = $data[0];
                $marca = explode(',', $data[2]);
                $num_marca = count($marca);
                
                $i = 0;
                while ($i < $num_marca) {
                    $marca = $marca[$i];
                    $brandId = $this->getBrandId($marca);
                    if ($brandId !== null && $brandId !== '') {
                        $sql = "INSERT INTO brandCustomer (customerId, brandId) VALUES ('$customerId', '$brandId')";
                        mysqli_query($this->conn, $sql);
                    }
                    $i++; 
                }
            }
            
            fclose($gestor);
        } 
    }
    
    
    }


