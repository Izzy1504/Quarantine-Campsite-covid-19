<?php
class BuildingModel {
    private $id;
    private $name;
    private $address;
    private $doctor_id;

    public function __construct($id, $name, $address, $doctor_id) {
        $this->id = $id;
        $this->name = $name;
        $this->address = $address;
        $this->doctor_id = $doctor_id;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getAddress() {
        return $this->address;
    }

}