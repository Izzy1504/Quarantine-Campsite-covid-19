<?php 
class Home extends Controller{

    public $model;
    public function __construct(){
        
        $this->model = $this->model('HomeModel');
       
    }
    public function index(){
        $this->render('home/index');
    }
}