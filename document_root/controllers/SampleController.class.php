<?php // Controller
require_once(dirname(__FILE__).'/Controller.class.php');

class SampleController extends Controller {		
    public function __construct($config=null) {
    	parent::__construct($cfg);    	    	
    }
	
	public function test() {
		//echo "test";
		$this->data = array("hello"=>"world");
		$this->loadView();
	}
	
	public function _testPrivate() {
		echo "_testPrivate";		
	}
	
	private function testPrivate() {
		echo "testPrivate";
	}
		
	protected function _testProtected() {
		echo "_testProtected";
	}
	
	protected function testProtected() {
		echo "testProtected";
	}
}
?>