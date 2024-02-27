<?php
class Cartera {
    private $clientes = [];
    private $fichero;
    public function __construct($fichero) {
        $this->fichero=$fichero;
        $this->loadData($fichero);
    }

    public function loadData($fichero)
    {
        $gestor = fopen($fichero, "r");
        while (($element = fgetcsv($gestor)) !== false) {
            array_push(
                $this->clientes,
                new Empresa(...$element) //Spread Operator
            );
        }
        fclose($gestor);
    }


     function isVip($investiment) {
        return $investiment >= 1000000;
    }

    function drawlist() {
        $html = ' ';
        foreach ($this->clientes as $Empresa) {
            $style = ($this->isVip($Empresa->getInvestiment()) ? 'vip' : '');
            $html .= '<tr>';
            $html .= '<td>' . $Empresa->getId() . '</td>';
            $html .= '<td class="' . $style . '">' . $Empresa->getCompany() . '</td>';
            $html .= '<td>' . $Empresa->getInvestiment() . '</td>';
            $html .= '<td>' . $Empresa->getDate() . '</td>';
           
        
			if ($Empresa->getActive()== 'True') {
				
				$html .= '<td><img src="img05.gif"  ></td>';
			} else {
				
				$html .= '<td><img src="img06.gif"  ></td>';
			}
            $html .= '<td><a href="insertar.php?id=' . $Empresa->getId() . '"><img src="mas.png" width="25" height="25"></a></td>';
            $html .= '<td><a href="edit.php?id=' . $Empresa->getId() . '"><img src="edit_icon.png" width="25" height="25"></a></td>';
            $html .= '<td><a href="delete.php?id=' . $Empresa->getId() . '"><img src="del_icon.png" width="25" height="25"></a></td>';
            
      
        }
        return $html;
    }
    
    function delete($identificador) {
        for ($i = 0; $i < count($this->clientes); $i++) {
            if ($this->clientes[$i]->getId() == $identificador) {
                array_splice($this->clientes, $i, 1);
            }
        }
        $this->persist();
    }


    function persist() {
        $gestor = fopen("data.csv", "w"); 
    
        foreach ($this->clientes as $client) {
            fputcsv($gestor, [
                $client->getId(),
                $client->getCompany(),
                $client->getInvestiment(), 
                $client->getDate(),
                $client->getActive()
            ]);
        }
    
        fclose($gestor);
    }
    function getClientes($id){
        foreach($this->clientes as $cliente){
            if($cliente->getId()==$id){
                return $cliente ;
        }
    }
    }

    function update($datos) {
        foreach ($this->clientes as $cliente) {
            if ($cliente->getId() == $datos["id"]) {
                $cliente->setCompany($datos["company"]);
                $cliente->setInvestiment($datos["investiment"]);
                $cliente->setDate($datos["date"]);
                $cliente->setActive($datos["active"]);
            }
        }
        
        $this->persist(); 
        return $cliente;
    }
    
function insert($datos){
    $clase=new Empresa($datos["id"], $datos["company"], $datos["investiment"],$datos["date"],$datos["active"]);
    array_push($this->clientes, $clase);
    $this->persist(); 
}
}
    
 

?>