<?php
class PatientComorbidityModel
{
    private $patient_id;
    private $comorbidity_id;

    public function __construct($patient_id, $comorbidity_id)
    {
        $this->patient_id = $patient_id;
        $this->comorbidity_id = $comorbidity_id;
    }

    public function getPatientId()
    {
        return $this->patient_id;
    }

    public function getComorbidityId()
    {
        return $this->comorbidity_id;
    }
}