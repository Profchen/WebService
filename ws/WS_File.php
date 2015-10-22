<?php

        require_once '/IWebServiciable.php';
	require_once('database/db_connect.php');

        const ADD_EPISODE =('add');
        const REMOVE_EPISODE =('remove');
        const PARAM_ACTION =('action');
        const PARAM_EPISODE_ID =('idEpisode');
        const PARAM_EPISODE =('episode');
        const SQL_INSERT_EPISODE = "INSERT INTO EPISODES(Name, Url, id) VALUES ('%s','%s','%d')";
	const SQL_UPDATE_EPISODE_TIMER = 'UPDATE EPISODES SET Name="%s",Url="%s" WHERE idQuestion="%d"';
        

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

