<?php

class modelo extends conexion{
   
   
    public function importar($fichero){
        $gestor = fopen($fichero, "r");
        if ($gestor !== false) {
            while (($element = fgetcsv($gestor)) !== false) {
               
                $query = "INSERT INTO tareas (id, titulo, descripcion, fecha_creacion, fecha_vencimiento) VALUES (?, ?, ?, ?, ?)";
                $statement = $this->conn->prepare($query);
                
                
                $id = $element[0];
                $titulo = $element[1];
                $descripcion = $element[2];
                $fecha_creacion = $element[3];
                $fecha_vencimiento = $element[4];
                
            
                $statement->bind_param("issss", $id, $titulo, $descripcion, $fecha_creacion, $fecha_vencimiento);
                $statement->execute();
            }
            fclose($gestor);
        }
    }
       
    
    public function deletelist(){
    $conn = $this->getConn();
    $query = "DELETE FROM tareas"; 
    $conn->query($query);
    
}

    public function init(){
        $this->deletelist();
        $this->importar('tareas.csv');  
    }
    public function getAllTasks(){
        $query  = "SELECT * FROM tareas";
        $resultado = $this->conn->query($query);
        if(!$resultado){
            die("Error en la consulta: " . $this->conn->error);
        }
        $tareas =  array();
        while($file  = $resultado->fetch_object()) {
            $tareas[]=$file;
        }
         return $tareas;
    }
     public function showAllTasks(){
        $tareas = $this->getAllTasks();
        echo "<table>
                <tr>
                    <th>id</th>
                    <th>titulo</th>
                    <th>descripcion</th>
                    <th>fecha_creacion</th>
                    <th>fecha_vencimiento</th>
                </tr>";
        foreach ($tareas as $tarea) {
            echo "<tr>
                    <td>" . $tarea->id . "</td>
                    <td>" . $tarea->titulo . "</td>
                    <td>" . $tarea->descripcion . "</td>
                    <td>" . $tarea->fecha_creacion . "</td>
                    <td>" . $tarea->fecha_vencimiento . "</td>
                  </tr>";
        }
        echo "</table>";
     }
    }

    

