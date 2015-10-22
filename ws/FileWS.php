<?php

require_once '/IWebServiciable.php';

class WS_File implements IWebServiciable {
    
    public $requestParams;
    
    function __construct($requestParams) {
        $this->requestParams = $requestParams;
    }

    public function doDelete() {
        
    }

    public function doGet() {
        return "toto";
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

