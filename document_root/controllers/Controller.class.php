<?php // Controller
require_once(dirname(__FILE__).'/../Log.class.php');

class Controller {
	private $project_name = ''; // for logging
	
    protected $cookie;
    protected $get;
    protected $post;
    protected $request;

    protected $data;
    private $contentType = 'JSON'; // HTML or JSON or XML ...	
	
	public $error_code = 0;
	public $error_message = '';
	
    public function __construct($config=null) {
    	$this->project_name = $config["project_name"];
    	
        $this->cookie = $_COOKIE;
        $this->get = $_GET;
        $this->post = $_POST;
        $this->request = $_REQUEST;

        if(isset($config['content_type']))
            $this->contentType = $config['content_type'];            		
    }
								
    protected function loadView() {
    	// log if error
        if($this->data["error_message"] != "")
			Log::e($this->project_name, __CLASS__.": error_code=[".$this->data['error_code']."], error_message=[".$this->data['error_message']."]");
			
        if(isset($this->contentType)) {
        	if($this->contentType == 'JSON') {
        		header('Content-Type: application/json');
            	echo json_encode($this->data);
            	return;
        	} else if($this->contentType == 'HTML') {
        		header('Content-Type: text/html');
        		// TODO future version may print out html
        	} else if($this->contentType == 'XML') {
        		header('Content-Type: text/xml');
        		// TODO future version may print out xml
        	}        	
        }        
    }
}
?>