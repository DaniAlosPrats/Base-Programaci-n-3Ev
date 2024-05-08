<?php

class Patient{
    private $id;
    private $name;
    private $address;
    public function __construct( $name, $address,$id) {
        $this->id = $id;
        $this->name = $name;
        $this->address = $address;
    }

    public function getId(){
        return $this->id;
    }
    public function setId($id){
        return $this->id= $id;
    }
    public function getName() {
        return $this->name;
    }
    public function setName($name) {
        return $this->name= $name;
    }
    public function getAddress() {
        return $this->address;
    }
    public function setAddress($address) {
        return $this->address = $address;
    }
}