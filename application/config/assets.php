<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Sprinkle - Asset management library
 * 
 * @author 		Edmundas Kondrašovas <as@edmundask.lt>
 * @license		http://www.opensource.org/licenses/MIT
 */

$config['assets']['jquery'] = array
(
	'type'    			=>	'js',
	'combine' 			=>	false,
	'minify'  			=>	false,
	'versions'			=>	array
	(
		'default'		=>	'/jquery.js'
	)
);

/*
	<script type="text/javascript" src="/script/jquery.js"></script>
	<script type="text/javascript" src="/script/jquery.color.js"></script>
	<script type="text/javascript" src="/script/local.js"></script>
	<script type="text/javascript" src="/script/ga.js"></script>
 */

/*
|-------------------------------------------------------------------------
| Asset groups
|-------------------------------------------------------------------------
*/

$config['assets']['js-libs'] = array
(
	'type'  		=>	'group',
	'assets'		=>	array('jquery')
);
