<?php
class gestion extends conexion{

    function getBrand(){
        $conn=$this->getConn();
        $brandName = " SELECT DISTINCT brandName FROM brands ORDER BY brandName ASC";
        $result = mysqli_query($conn,$brandName);

        if ($result->num_rows  > 0) {
        $checkbox = "";
        while ($row =$result->fetch_assoc()){
            $brand = $row[ 'brandName'];
            $checkbox .= '<input type="checkbox" name="brand[]" value=" ' . $brand . ' ">' . $brand . '<br>';
        }
        return $checkbox;
        }
    }
    
}
