<?php
	$menu_items = array(
		0 => array("name" => "Our Staff", "url" => "staff"),
		1 => array("name" => "Education Opportunities", "url" => "education")
	);
?>
<nav>
	<ul>
		<?php foreach($menu_items as $menu_item):?>
    <li<?php if($this->uri->segment(2) == url_title($menu_item["name"], dash, TRUE)):?> class="active"><?php else:?>><?php endif;?><a href="<?=$menu_item["url"];?>"><?=$menu_item["name"];?></a></li>
<?php endforeach;?>
<!--
		<li><a href="/">home</a></li>
		<li><a href="/staff">our staff</a></li>
		<li><a href="/specialty">specialty areas</a></li>
		<li><a href="/policies">policies and procedures</a></li>
		<li><a href="/whats-new">what's new in psychology?</a></li>
		<li><a href="/therapy-helpers">therapy helpers</a></li>
		<li><a id="current" href="/education" style="color: #084003;
			border: 1px solid #084003; background-color: #fff;">education
			opportunities</a></li>
		<li><a href="/resources">other resources</a></li>
		<li><a href="/map">map and directions</a></li>
		<li><a href="/contact">contact us</a></li>
-->
	</ul>
</nav>
