<?php

class Start extends CI_Controller {

	var $base;
	var $css;

	function Start() {
		parent::__construct();
		$this->base = $this->config->item('base_url');
		$this->css = $this->config->item('css');
	}

	function hello($name = 'Guest') {
		$data['css'] = $this->css;
		$data['base'] = $this->base;
		$data['mytitle'] = 'Welcome to this site';
		$data['mytext'] = "Hello, $name, now we're getting dynamic!";

		$this->load->view('testview', $data);

	}
}


