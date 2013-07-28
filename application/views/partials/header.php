<?php
$this->load->helper('text');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<?php
		echo $template['metadata'];
	?>
	<title><?php echo $template['title']; ?></title>
	<?php
		echo $this->sprinkle->output();
		echo $this->sprinkle->output('browser-fixes');
	?>
	<script type="text/javascript">

		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-19370004-1']);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();

	</script>
</head>

<body id="<?php echo $page_id; ?>" <?php if(!empty($body_extras)) { echo $body_extras; } ?>>
<div class="wrapper">
	<div class="bg-shim"></div>
	<div id="container" class="clearfix">
		<div>
			<h1><a href="/"><img src="/image/masthead.gif" alt="Psychological Services of Pendleton, LLC" /></a></h1>
		</div>
		<div>
		<img src="/image/pendleton<?php echo $image_num; ?>.jpg" alt="<?php echo $image_alt; ?>" width="780" height="220" />
		</div>

		<div class="sidebar">
		<nav>
			<ul>
			<?php

				$menu_items = array(
					0 => array("name" => "home", "url" => ""),
					1 => array("name" => "our staff", "url" => "staff"),
					2 => array("name" => "specialty areas", "url" => "specialty"),
					3 => array("name" => "client forms", "url" => "policies"),
					4 => array("name" => "your mental health", "url" => "your-mental-health"),
					5 => array("name" => "what's new in psychology", "url" => "whats-new"),
					6 => array("name" => "therapy helpers", "url" => "therapy-helpers"),
					7 => array("name" => "education opportunities", "url" => "education"),
					8 => array("name" => "resources", "url" => "resources"),
					9 => array("name" => "map and directions", "url" => "map"),
					10 => array("name" => "contact us", "url" => "contact")
				);

			foreach($menu_items as $menu_item):
				$class = ($this->uri->segment(1) == url_title($menu_item['url']) ? 'current' : '' );

		if($class) {
			echo '<li>'.anchor($menu_item['url'], $menu_item['name'], 'class="'.$class.'"').'</li>';
		} else {
			echo '<li>'.anchor($menu_item['url'], $menu_item['name']).'</li>';
		}
			endforeach; ?>
	</ul>
</nav>

<!-- sub-menu (if needed) -->
<?php
	if(isset($query)) {
	echo '<div class="secondary link1"><ul>';
	foreach($query->result() as $row):
		$class = ($this->uri->segment(2) == url_title($row->slug) ? 'current' : '' );
		$link = character_limiter($row->title, 26);
		if($class) {
			echo '<li>'.anchor($this->uri->segment(1).'/'.$row->slug, $link, 'class="'.$class.'"').'</li>';
		} else {
			echo '<li>'.anchor($this->uri->segment(1).'/'.$row->slug, $link).'</li>';
		}
	endforeach;
	echo '</ul></div>';
	}
?>
	</div>
		<div class="link1" id="main_content">
