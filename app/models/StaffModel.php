<?php
class StaffModel {
    private $id;
    private $phone;
    private $full_name;
    private $gender;
    private $birthday;

    public function __construct($id, $phone, $full_name, $gender, $birthday) {
        $this->id = $id;
        $this->phone = $phone;
        $this->full_name = $full_name;
        $this->gender = $gender;
        $this->birthday = $birthday;
    }

    public function getId() {
        return $this->id;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function getFullName() {
        return $this->full_name;
    }

    public function getGender() {
        return $this->gender;
    }

    public function getBirthday() {
        return $this->birthday;
    }
}