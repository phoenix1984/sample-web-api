<?php

require_once(dirname(__FILE__).'/config.php');
require_once(dirname(__FILE__).'/Log.class.php');
require_once(dirname(__FILE__).'/controllers/SampleController.class.php');

if(isset($_REQUEST['action'])) {	
    $controller = new SampleController($cfg);
    if($controller->error_code > 0) {
    	echo json_encode(array("error_code"=>$controller->error_code, "error_message"=>$controller->error_message));
    } else {
	    if(is_callable(array($controller, $_REQUEST['action'])) && $_REQUEST['action'][0]!='_') { 
	    	$controller->$_REQUEST['action']();        
	    } else {
	    	Log::e($cfg['project_name'], 'error_code=[1], error_message=[invalid action]');
	    	echo json_encode(array("error_code"=>1, "error_message"=>"invalid action"));
	    }
	}	
} else {
	Log::e($cfg['project_name'], 'error_code=[2], error_message=[invalid parameter]');
    echo json_encode(array("error_code"=>2, "error_message"=>"invalid parameter"));
}

?>