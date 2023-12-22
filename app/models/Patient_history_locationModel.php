<?php
class PatientHistoryLocationModel {
    private $patient_id;
    private $room_id;
    private $date_admitted;
    private $date_discharge;

    public function __construct($patient_id, $room_id, $date_admitted, $date_discharge) {
        $this->patient_id = $patient_id;
        $this->room_id = $room_id;
        $this->date_admitted = $date_admitted;
        $this->date_discharge = $date_discharge;
    }

    public function getPatientId() {
        return $this->patient_id;
    }

    public function getRoomId() {
        return $this->room_id;
    }

    public function getDateAdmitted() {
        return $this->date_admitted;
    }

    public function getDateDischarge() {
        return $this->date_discharge;
    }
}