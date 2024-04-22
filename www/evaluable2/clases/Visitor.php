<?php

class Visitor {
   
    private  $patient = [];
    private $file;
    public function __construct($file) {
        $this->file=$file;
        $this->loadDataPacient($file);
    }
    public function loadDataPacient($fichero){
        $gestor = fopen($fichero, "r");
        while (($element = fgetcsv($gestor)) !== false) {
            array_push(
                $this->patient,
                new Patient(...$element) 
            );
        }
        fclose($gestor);
    }


    function listdraw() {
        $html = ' ';
        foreach ($this->patient as $client) {
            $html .= '<tr>';
            $html .= '<td>' . $client->getId() . '</td>';
            $html .= '<td><a href="showPatient.php?Name=' . $client->getName() . '">' . $client->getName() .  '</a></td>';
            $html .= '<td>' .  $client->getAddress() . '</td>';          
            $html .= '<td><a href="editpacient.php?id=' . $client->getID() . '"><img src="edit_icon.png" width="25" height="25"></a></td>';
            $html .= '<td><a href="delete_pacient.php?id=' . $client->getId() . '"><img src="del_icon.png" width="25" height="25"></a></td>';
          
            $html .= '</tr>';
        }
        $html .= '<tfoot>';
        $html .= '<tr>';
        $html .= '<td><a href="insert_pacient.php?id=' . $client->getID() . '"><img src="mas.png" width="25" height="25"></a></td>';
        $html .= '</tr>';
        $html .= '<tr>';
        $html .= '<td colspan="7" style="background-color: #A40808;"><a href="index.php?id="><p><h2>Return</h2></p></a></td>';
        $html .= '</tr>';
        $html .= "<tr><td colspan='7'><a href='data.php'>Patients
		</a></td></tr>";
 
    $html .= '</tfoot>';

        return $html;
    }
     
    

    function deletePacient($id) {
        for ($i = 0; $i < count($this->patient); $i++) {
            if ($this->patient[$i]->getId() == $id) {
                array_splice($this->patient, $i, 1);
            }
        }
        $this->persist();
    }
    
    
    function persist() {
        $gestor = fopen("data.csv", "w"); 
    
        foreach ($this->patient as $clients) {
            fputcsv($gestor, [
                
                $clients->getName(), 
                $clients->getAddress(),
                $clients->getId()     
               
                
            ]);
        }
    
        fclose($gestor);
    }
    function getPacient($idi){
        foreach($this->patient as $client){
            if($client->getId()==$idi){
                return $client ;
        }
    }
    }
    
    function update($data) {
        foreach ($this->patient as $clients) {
            if ($clients->getId() == $data["id"]) {
                $clients->setName($data["name"]);
                $clients->setAddress($data["address"]);
                
            }
        }
        
        $this->persist(); 
        return $clients;
    }
    function insert($datos){
        
        foreach($this->patient as $patients){
        $clase=new Patient($datos["Name"],$datos["Address"],$datos["Id"]);
        if($patients->getId("Id") == $datos["Id"]){
            echo " no se puede añadir";
        }
        array_push($this->patient, $clase);
       
        $this->persist(); 
    }
}

    function ShowPatients($name) {
		$visits = [];
		foreach ($this->patient as $patients) {
			if ($patients->getName() == $name) {
				$visits[] = $patients;
			}
		}
		$this->patient= $visits;
        $this->persist();
	}
    
}