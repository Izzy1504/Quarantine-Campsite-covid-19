<?php   
class Patient extends Controller{
    
    public $data =[];

    public function index(){
        $this->render('patients/patient');
    }
    public function detail(){
        
    }
}