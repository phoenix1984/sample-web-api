<?php
class Log {
	// debug
    static public function d($tag, $msg) {
    	if(trim($tag)!='')
			echo "DEBUG: $tag: $msg\n";
		else
			echo "DEBUG: $msg\n";
    }

   	// error
    static public function e($tag, $msg) {
		if(trim($tag)!='')
			echo "ERR: $tag: $msg\n";
		else
			echo "ERR: $msg\n";
    }

   	// info
    static public function i($tag, $msg) {
		if(trim($tag)!='')
			echo "INFO: $tag: $msg\n";
		else
			echo "INFO: $msg\n";
    }

    // warning
    static public function w($tag, $msg) {
		if(trim($tag)!='')
			echo "WARNING: $tag: $msg\n";
		else
			echo "WARNING: $msg\n";
	}
}
?>