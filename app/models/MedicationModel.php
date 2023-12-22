<?php
class Medication {
    private $id;
    private $name;
    private $price;
    private $effect;
    private $exp_date;

    public function __construct($id, $name, $price, $effect, $exp_date) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->effect = $effect;
        $this->exp_date = $exp_date;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getEffect() {
        return $this->effect;
    }

    public function getExpDate() {
        return $this->exp_date;
    }
}