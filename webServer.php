<?php

class webServer{
    private $con;

    public function __construct() {
        $this->con = (is_null($this->con)) ? self::connect() : $this->con;
    }

   static function connect(){
      $con=  mysqli_connect('localhost','root','root', 'XAsitioWebDB');
      return $con;
   }
    public function getNumContactos($param_array){
        $query= "SELECT * FROM contactos";
        $res = mysqli_query($this->con, $query);
        $nfilas = mysqli_num_rows ($res);
        return $nfilas;
    }
    public function getContactos($param_array){
        $query= "SELECT * FROM contactos";
        $res = mysqli_query($this->con, $query);
        $rows = mysqli_fetch_all($res,MYSQLI_ASSOC);
        return $rows;
    }
}
$params= array('uri'=>'http://localhost/~scomp/practica11XB/webServer.php');
$server = new SoapServer(NULL,$params);
$server->setClass('webServer');
$server->handle();
