<?php
class Visit{
    private  $Name;
    private $date;
    private $amount;
    private $paid;
    private $id;

    public function  __construct($Name, $date, $amount,$paid,$id) {
        $this->Name = $Name;
        $this->date=$date; 
        $this->amount=$amount;
        $this->paid=$paid;
        $this->id = $id;
    }

    

    public function getName(){
    return $this->Name;
}
    public function setName($name){
   return $this->Name= $name;
}

  
    public function getDate() {
    return $this->date;
}
    public function setDate($date) {
   return $this->date = $date;
}
public function getAmount() {
    return $this->amount;
}
    public function setAmount($amount) {
   return $this->amount = $amount;
}
    public function getPaid() {
    return $this->paid;
}
    public function  setPaid($paid) {
   return $this->paid = $paid;
}
public function getID(){
    return $this->id;
}
public function setID($id){
   return $this->id= $id;
}


}