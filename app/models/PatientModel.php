<?php 
class PatientModel
{
    private $unique_number;
    private $phone;
    private $id;
    private $full_name;
    private $gender;
    private $birthday;
    private $address;

    public function __construct($unique_number, $phone, $id, $full_name, $gender, $birthday, $address)
    {
        $this->unique_number = $unique_number;
        $this->phone = $phone;
        $this->id = $id;
        $this->full_name = $full_name;
        $this->gender = $gender;
        $this->birthday = $birthday;
        $this->address = $address;
    }

    // getter methods
    public function getUniqueNumber()
    {
        return $this->unique_number;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getFullName()
    {
        return $this->full_name;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function getBirthday()
    {
        return $this->birthday;
    }

    public function getAddress()
    {
        return $this->address;
    }

    // setter methods
    public function setUniqueNumber($unique_number)
    {
        $this->unique_number = $unique_number;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setFullName($full_name)
    {
        $this->full_name = $full_name;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }
}