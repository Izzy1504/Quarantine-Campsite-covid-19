<?php 
class PatientSymptomModel {
    private $patient_id;
    private $symptom_id;
    private $onset_date;
    private $termination_date;

    public function __construct($patient_id, $symptom_id, $onset_date, $termination_date) {
        $this->patient_id = $patient_id;
        $this->symptom_id = $symptom_id;
        $this->onset_date = $onset_date;
        $this->termination_date = $termination_date;
    }

    public function getPatientId() {
        return $this->patient_id;
    }

    public function getSymptomId() {
        return $this->symptom_id;
    }

    public function getOnsetDate() {
        return $this->onset_date;
    }

    public function getTerminationDate() {
        return $this->termination_date;
    }
}