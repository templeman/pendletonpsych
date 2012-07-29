<?php

class Menu {

	function show_menu() {
		$obj =& get_instance();
		$obj->load->helper('url');

		$menu = anchor("start/hello/fred", "Say hello to Fred |");
		$
