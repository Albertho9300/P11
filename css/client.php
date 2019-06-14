<?php
class client{
    public function __construct() {
        $params = array('location' => 'http://localhost/~scomp/practica11XB/webServer.php',
            'uri' => 'http://localhost/~scomp/practica11XB/', 'trace' => 1);
        $this->instance = new SoapClient(NULL, $params);
    }
    public function getContacts($param_array){
      
        return $this->instance->__soapCall('getContactos',$param_array);  
    }
    public function getNumContacts($param_array){
      
        return $this->instance->__soapCall('getNumContactos',$param_array);  
    }
   
}
