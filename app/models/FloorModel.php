<?php
class FloorModel {
    private $id;
    private $building_id;
    private $name;

    public function __construct($id, $building_id, $name) {
        $this->id = $id;
        $this->building_id = $building_id;
        $this->name = $name;
    }

    public function getId() {
        return $this->id;
    }

    public function getBuildingId() {
        return $this->building_id;
    }

    public function getName() {
        return $this->name;
    }
}