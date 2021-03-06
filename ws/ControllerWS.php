<?php

	include_once('Access.php');

	const PARAM_WS = 'ws';

	// We verify all needed parameters.
	if(!isset($_GET[PARAM_WS]))
		Access::ThrowAccessDenied();

	// We gets the informations of the desired service.
	$serviceName = ucfirst(strtolower($_GET['ws']).'WS');
	$servicePath = $serviceName.'.php';

	// If the service doesn't exist, we stop the request.
	if (!file_exists($servicePath))
		Access::ThrowAccessDenied();

	// We create and execute the service.
	require_once($servicePath);
	$service = new $serviceName();
	$result = $service->DoGet();

	// At the end, we return the result.
	if ($result !== null)
		echo json_encode($result);
	
?>