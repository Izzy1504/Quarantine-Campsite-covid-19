<?php 
class AdmittedModel{
    private $patient_id;
    private $room_id;
    private $staff_id;

    public function __construct($patient_id, $room_id, $staff_id) {
        $this->patient_id = $patient_id;
        $this->room_id = $room_id;
        $this->staff_id = $staff_id;
    }

    public function getPatientId() {
        return $this->patient_id;
    }

    public function getRoomId() {
        return $this->room_id;
    }

    public function getStaffId() {
        return $this->staff_id;
    }
}