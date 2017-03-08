<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Seo extends CI_Controller {

  function sitemap()
  {
    // APPPATH will automatically figure out the correct path
    // include APPPATH.'libraries/SitemapPHP/Sitemap.php';

    // your website url
    $sitemap = new Sitemap('https://www.pendletonpsych.com');

    // This will also need to be set by you.
    // the full server path to the sitemap folder
    $sitemap->setPath('public/');

    // the name of the file that is being written to
    // $sitemap->setFilename('mysitemap');

    // etc etc etc
  }
}
