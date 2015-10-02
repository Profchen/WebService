<?php

include_once 'ws/WS_File.php';
include_once 'ws/WS_Securities.php';
include_once 'ws/WS_User.php';
// include_once 'ws/WS_Player.php';
// include_once 'ws/WS_Playlist.php';

//GEstion d'erreur
$className = "WS_".$_GET['act'];
$ws_instance = new $className(array());
$ws_security = new WS_Securities();
$ws_user = new WS_User();

if($ws_instance->doNeedAuth())
    if($ws_security->isAuth() == false)
        return 'error';
    
$method = "do".strtoupper($_SERVER['REQUEST_METHOD']);
 
$ws_response = $ws_instance->$method();

/*
switch ($_SERVER['REQUEST_METHOD']) {
    case 'PUT':
        $ws_response = $ws_instance->doPut();
        break;
    case 'DELETE':
        $ws_response = $ws_instance->doDelete();
        break;
    case 'GET':
        $ws_response = $ws_instance->doGet();
        break;
    case 'POST':
        $ws_response = $ws_instance->doPost();
        break;

    default:
        break;
}
*/
 

echo json_encode($ws_response);

