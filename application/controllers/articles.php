<?php

class Articles extends CI_Controller {

  /*
  public function education($page = 'education') {

    //if(!file_exists('application/views/pages/'.$page.'.php')) {
      // Whoops, we don't have a page for that!
    //  show_404();
  //  }

    $data['title'] = ucfirst($page);

    $this->load->view('templates/_header', $data);
    $this->load->view('pages/'.$page, $data);
    $this->load->view('templates/_footer', $data);

  }
   */


  public function blog() {

    $data['query'] = $this->db->get('articles');
    $data['image_num'] = 6;
    $data['image_alt'] = 'flowers';
    $data['page_id'] = 'blog_view';

    $this->template
      ->set_partial('header', 'partials/header')
      ->title('My Blog Title', 'Psychological Services of Pendleton')
      ->set_metadata("description", "Psychological Services of Pendleton, LLC
  is a full service outpatient treatment center providing assessment,
  psychotherapy, and medications for a broad range of psychological problems.")
      ->set_partial('footer', 'partials/footer')
      ->build('blog_view', $data);
  }


}
