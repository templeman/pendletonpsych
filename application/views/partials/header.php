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
<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-19370004-1', 'pendletonpsych.com');
  ga('require', 'displayfeatures');
  ga('send', 'pageview');

</script>
<!-- End Google Analytics -->
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

        $classes = '';
        $menu_items = array(
          0 => array("name" => "home", "url" => ""),
          1 => array("name" => "our staff", "url" => "staff"),
          2 => array("name" => "specialty areas", "url" => "specialty"),
          3 => array("name" => "client forms", "url" => "client-forms"),
          4 => array("name" => "your mental health", "url" => "your-mental-health"),
          5 => array("name" => "what's new in psychology", "url" => "whats-new"),
          6 => array("name" => "therapy helpers", "url" => "therapy-helpers"),
          7 => array("name" => "education opportunities", "url" => "education"),
          8 => array("name" => "job opportunities", "url" => "job-opportunities"),
          9 => array("name" => "resources", "url" => "resources"),
          10 => array("name" => "map and directions", "url" => "map"),
          11 => array("name" => "get scheduled", "url" => "contact"),
          12 => array("name" => "telehealth", "url" => "telehealth", "class" => "highlight"),
        );

      foreach ($menu_items as $menu_item) {
        $classes = ($this->uri->segment(1) == url_title($menu_item['url']) ? 'current ' : '' );
        $classes .= isset($menu_item['class']) ? $menu_item['class'] : '';

        if ($classes) {
          echo '<li>'.anchor($menu_item['url'], $menu_item['name'], 'class="'.$classes.'"').'</li>';
        } else {
          echo '<li>'.anchor($menu_item['url'], $menu_item['name']).'</li>';
        }
      }
    ?>
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
