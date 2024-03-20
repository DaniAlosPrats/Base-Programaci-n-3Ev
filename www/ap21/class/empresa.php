<?php
class Empresa {
    private $id;
    private $company;
    private $investiment;
    private $date;
    private $active;
   

    public function __construct($id, $company, $investiment, $date, $active ) {
        $this->id = $id;
        $this->company = $company;
        $this->investiment = $investiment;
        $this->date = $date;
        $this->active = $active;
       
    }

    public function getId() {
        return $this->id;
    }

    public function getCompany() {
        return $this->company;
    }

    public function getInvestiment() {
        return $this->investiment;
    }

    public function getDate() {
        return $this->date;
    }

    public function getActive() {
        return $this->active;
    }
    public function setId($id){
        $this->id=$id;
    }
    public function setCompany($company){
        $this->company=$company;
    }
    
    public function setInvestiment($investiment){
        $this->investiment=$investiment;
    }
    public function setDate($date){
        $this->date=$date;
    }
    public function setActive($active){
        $this->active=$active;
    }
   
}







?>