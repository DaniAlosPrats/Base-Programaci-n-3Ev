<?php
class gestion extends conexion{

    function getBrand(){
        $conn=$this->getConn();
        $brandName = " SELECT DISTINCT brandName FROM brands ORDER BY brandNAme ASC";
        $result = mysqli_query($conn,$brandName);

        if ($result->num_rows  > 0) {
        $checkbox = "";
        while ($row =$result->fetch_assoc()){
            $brand = $row[ 'brandName'];
            $checkbox .= '<input type="checkbox" name="brand[]" value="' . $brand . '">' . $brand . '<br>';
        }
        return $checkbox;
        }
    }
    function getCustomersForBrand($selectedBrand){
        $conn=$this->getConn();
        $query = "SELECT * FROM customers WHERE interested_brand = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $selectedBrand);
        $stmt->execute();
        $result = $stmt->get_result();
    
        $customers = array();
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $customers[] = $row;
            }
        }
    
        return $customers;
    }
}
