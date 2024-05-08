<?php
 class Clinic {
    private $client=[];
private $file;
public function __construct($file) {
    $this->file=$file;
    $this->loadData($file);
}
public function loadData($fichero){
    $gestor = fopen($fichero, "r");
    while (($element = fgetcsv($gestor)) !== false) {
        array_push(
            $this->client,
            new Visit(...$element) 
        );
    }
    fclose($gestor);
}

function isHigher($import) {
    return $import >= 250;
}

function listdraw() {
    $html = ' ';
    foreach ($this->client as $user) {
       
    

        $style = ($this->isHigher($user->getAmount()) ? 'vip' : '');
        $html .= '<tr>';
        $html .= '<td>' . $user->getID() . '</td>';
        $html .= '<td>' . $user->getName() .  '</td>';
        $html .= '<td>' .  $user->getDate() . '</td>';
        $html .= '<td class="' . $style . '">' . $user->getAmount() .  '</td>';
        $html .= '<td>';
        if ($user->getPaid() == 'False') {
            $html .= '<span class="paid-status">True</span>'; 
        } else {
            $html .= '<span class="unpaid-status">False</span>'; 
        }
        $html .= '</td>';
       
      
        $html .= '<td><a href="edit.php?id=' . $user->getID() . '"><img src="edit_icon.png" width="25" height="25"></a></td>';
        $html .= '<td><a href="delete.php?id=' . $user->getID() . '"><img src="del_icon.png" width="25" height="25"></a></td>';
       
        $html .= '</tr>';
    }

    $html .= '<tfoot>';
    $html .= '<tr>';
    $html .= '<td colspan="7" style="background-color: #A40808;"><a href="data.php?id="><p><h2>Patients</h2></p></a></td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td><a href="insert.php?id=' . $user->getID() . '"><img src="mas.png" width="25" height="25"></a></td>';
    $html .= '</tr>';
    $html .= '</tfoot>';
    
    return $html;
}
    
 
function delete($id) {
    for ($i = 0; $i < count($this->client); $i++) {
        if ($this->client[$i]->getID() == $id) {
            array_splice($this->client, $i, 1);
        }
    }
    $this->persist();
}


function persist() {
    
   
        $gestor = fopen("info.csv", "w"); 
        
    foreach ($this->client as $clients) {
        if( $this->clients ->getPaid()== 'False'){
        fputcsv($gestor, [
            
            $clients->getName(),
            $clients->getDate(), 
            $clients->getAmount(),         
            $clients->getPaid(),
            $clients->getID()
            
        ]);
    
        }
    fclose($gestor);
}
}
function getClient($idi){
    foreach($this->client as $client){
        if($client->getID() == $idi){
            return $client;
        }
    }
    return null;
}


function update($data) {
    foreach ($this->client as $client) {
        if ($client->getName() == $data["name"]) {
            $client->setId($data["id"]);
            $client->setDate($data["date"]);
            $client->setAmount($data["amount"]);
           
            if (array_key_exists('paid', $data)) {
                $client->setPaid($data['paid']);
            }
           
            $this->persist(); 
            return $client; 
        }
    }
    
    return null; 
}

function insert($datos){
    $clase=new Visit($datos["Name"],$datos["Date"],$datos["Amount"],$datos["Paid"],$datos["Id"]);
    array_push($this->client, $clase);
    $this->persist(); 
}
 

}

 
