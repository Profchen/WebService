<?php

require_once '/IWebServiciable.php';

class WS_User implements IWebServiciable {
    
    public $requestParams;
    
    function __construct($requestParams) {
        $this->requestParams = $requestParams;
    }

    public function doDelete() {
        
    }

    public function doGet() {
		
    }

    public function doPost() {
        
    }

    public function doPut() {
        
    }

    public function doRequest() {
        
    }

    public function setParameters() {
        
    }
    
    public function doNeedAuth() {
        return true;
    }

    
} 

?>