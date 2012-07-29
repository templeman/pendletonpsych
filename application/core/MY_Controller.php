<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class MY_Controller extends CI_Controller {
	
	function __construct() {
		parent::__construct();

		if($this->agent->is_browser('Internet Explorer')) {
			$this->sprinkle->load('browser-fixes');
		}
	}

}
?>
