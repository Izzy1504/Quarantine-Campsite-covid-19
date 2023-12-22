<?php
class TreatmentModel {
    private $patient_id;
    private $doctor_id;
    private $nurse_id;
    private $start_date;
    private $end_date;
    private $result;

    public function __construct($patient_id, $doctor_id, $nurse_id, $start_date, $end_date, $result) {
        $this->patient_id = $patient_id;
        $this->doctor_id = $doctor_id;
        $this->nurse_id = $nurse_id;
        $this->start_date = $start_date;
        $this->end_date = $end_date;
        $this->result = $result;
    }

    public function getPatientId() {
        return $this->patient_id;
    }

    public function getDoctorId() {
        return $this->doctor_id;
    }

    public function getNurseId() {
        return $this->nurse_id;
    }

    public function getStartDate() {
        return $this->start_date;
    }

    public function getEndDate() {
        return $this->end_date;
    }

    public function getResult() {
        return $this->result;
    }
}