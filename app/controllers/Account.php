<?php
class Account extends Controller {
    public function index() {}

    public function login(){
        $this->render("account/login");
    }
}
