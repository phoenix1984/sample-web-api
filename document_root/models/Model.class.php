<?php
require_once(dirname(__FILE__)."/../Log.class.php");

class Model {
	private $project_name = ''; // for logging
					
	public $error_code = 0;
	public $error_message = '';
				
	public function __construct($cfg=null) {
		parent::__construct();				
		$this->project_name = $cfg["project_name"];		
	}				
}
?>