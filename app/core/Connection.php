<?php 
class Connection{
    private static $instance = null;
   

    private function __construct($config){

    //connect db
        $serverName = $config["serverName"];
        $database = $config["db"];
        $uid = $config["uid"];
        $pass = $config["pass"];

        $connection = [
            "Database" => $database
            ,"Uid"=> $uid
            ,"PWD"=> $pass
        ];

        $conn = sqlsrv_connect($serverName, $connection);
        if ($conn === false) {
            // App::$app->LoadError("database");
            die(print_r(sqlsrv_errors(), true));
        }
        
    }

    public static function getInstance($config){
        if(self::$instance == null){
            self::$instance = new Connection($config)   ;
        }
        return self::$instance;
    }

}
