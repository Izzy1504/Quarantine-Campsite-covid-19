<?php
class TestingModel {
    private $id;
    private $type;
    private $result;
    private $ct_Value;
    private $date;
    private $time;
    private $patient_id;

    public function __construct($id, $type, $result, $ct_Value, $date, $time, $patient_id) {
        $this->id = $id;
        $this->type = $type;
        $this->result = $result;
        $this->ct_Value = $ct_Value;
        $this->date = $date;
        $this->time = $time;
        $this->patient_id = $patient_id;
    }

    // getters and setters
    public function getId() {
        return $this->id;
    }

    public function getType() {
        return $this->type;
    }

    public function getResult() {
        return $this->result;
    }

    public function getCtValue() {
        return $this->ct_Value;
    }

    public function getDate() {
        return $this->date;
    }

    public function getTime() {
        return $this->time;
    }

    public function getPatientId() {
        return $this->patient_id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function setResult($result) {
        $this->result = $result;
    }

    public function setCtValue($ct_Value) {
        $this->ct_Value = $ct_Value;
    }

    public function setDate($date) {
        $this->date = $date;
    }

    public function setTime($time) {
        $this->time = $time;
    }

    public function setPatientId($patient_id) {
        $this->patient_id = $patient_id;
    }
}
