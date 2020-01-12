<?php
class Custom_404 extends MY_Controller {

 public function __construct()
 {
    parent::__construct();
 }

//  public function index()
//  {
//     $this->output->set_status_header('404');
//     $this->load->view('err404'); //loading in custom error view
//  }

  public function index()
  {
    $CI =& get_instance();
    $CI->output->set_status_header('404');
    // $this->output->set_status_header('404');
    $CI->template
      ->set_partial('header', 'partials/header')
      ->title('Page Not Found', 'Psychological Services of Pendleton')
      ->set_metadata("description", "Psychological Services of Pendleton, LLC
  is a full service outpatient treatment center providing assessment,
  psychotherapy, and medications for a broad range of psychological problems.")
      ->set_partial('footer', 'partials/footer')
      ->build('custom_error_404', array('image_num' => 'x', 'image_alt' => 'A starfield.', 'page_id' => 'error_404'));
  }
}
