<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends MY_Controller {

  public $pics;
  public $season;

  function __construct() {
    parent::__construct();

    // $this->output->enable_profiler(TRUE);

    // set seasonal pics
    $this->season = 'summer'; // winter, summer, spring, fall

    $this->pics = array(
      "winter" => array(
        array('image_num' => '8', 'image_alt' => 'A snowy Eastern Oregon Landscape.'),
        array('image_num' => '7', 'image_alt' => 'A snowy Eastern Oregon Landscape.'),
        array('image_num' => '5', 'image_alt' => 'An Eastern Oregon Landscape.'),
        array('image_num' => '3', 'image_alt' => 'An Eastern Oregon landscape.'),
        array('image_num' => '2', 'image_alt' => 'A green landscape vista.'),
        array('image_num' => '4', 'image_alt' => 'A green landscape vista.'),
        array('image_num' => '1', 'image_alt' => 'An Eastern Oregon landscape.'),
      ),
      "summer" => array(
        array('image_num' => '5', 'image_alt' => 'An Eastern Oregon Landscape.'),
        array('image_num' => '5', 'image_alt' => 'An Eastern Oregon Landscape.'),
        array('image_num' => '5', 'image_alt' => 'An Eastern Oregon Landscape.'),
        array('image_num' => '3', 'image_alt' => 'An Eastern Oregon landscape.'),
        array('image_num' => '2', 'image_alt' => 'A green landscape vista.'),
        array('image_num' => '4', 'image_alt' => 'A green landscape vista.'),
        array('image_num' => '1', 'image_alt' => 'An Eastern Oregon landscape.'),
      ),
    );

  }


  public function index() {

    $data['page_id'] = 'front';
    $data = array_merge($data, $this->pics[$this->season][0]);

    $this->template
      ->set_partial('header', 'partials/header')
      ->title('Psychological Services of Pendleton')
      ->set_metadata("keywords", "Terrel Templeman, Connie Umphred, Sarah Hsu, Heather Bacon, Natalie Kollross, psychology, Oregon, Pendleton, Eastern Oregon, therapy, assessment, psychological, psychotherapy, medication, help, marital issues, parenting, ADHD, stress, disorders")
      ->set_metadata("description", "Full service outpatient treatment center providing assessment, psychotherapy, and medications for a broad range of psychological problems. Serving Eastern Oregon. Terrel L. Templeman, Ph.D. - Clinical Psychologist. Connie Umphred, Ph.D. - Clinical Psychologist. Sarah Hsu, LCSW - Licensed Clinical Social Worker. Heather A. Bacon, Ph.D. - Clinical Psychologist.")
      ->set_partial('footer', 'partials/footer')
      ->build('index', $data);
  }


  public function staff() {

    $data['page_id'] = 'staff';
    $data = array_merge($data, $this->pics[$this->season][1]);

    $this->template
      ->set_partial('header', 'partials/header')
      ->title('Meet Our Staff', 'Psychological Services of Pendleton')
      ->set_metadata("keywords", "Terrel Templeman, Connie Umphred, Sarah Hsu, Heather Bacon, Natalie Kollross, psychology, Oregon, Pendleton, Eastern Oregon, therapy, assessment, psychological, psychotherapy, medication, help, marital issues, parenting, ADHD, stress, disorders, services, ")
      ->set_metadata("description", "Terrel L. Templeman, Ph.D. [Clinical Psychologist], Connie Umphred, Ph.D. [Clinical Psychologist], Sarah Hsu, LCSW [Licensed Clinical Social Worker], Heather A. Bacon, Ph.D. [Clinical Psychologist], Jeanne Bailey [Office Manager], Katie McLaren [Administrative Assistant & Receptionist]")
      ->set_partial('footer', 'partials/footer')
      ->build('staff', $data);
  }


  public function specialty() {

    $data['page_id'] = 'specialty';
    $data = array_merge($data, $this->pics[$this->season][2]);

    $this->template
      ->set_partial('header', 'partials/header')
      ->title('Specialty Areas', 'Psychological Services of Pendleton')
      ->set_metadata("keywords", "Terrel Templeman, Connie Umphred, Sarah Hsu, Heather Bacon, Natalie Kollross, psychology, mental health, Oregon, Pendleton, Eastern Oregon, therapy, assessment, psychological, psychotherapy, medication, help, marital issues, parenting, ADHD, stress, disorders")
      ->set_metadata("description", "All primary clinicians are licensed in Oregon to provide services within their specialty areas including different forms of stress, anxiety, anger issues, parenting issues, relationship difficulties mood disorders and more.")
      ->set_partial('footer', 'partials/footer')
      ->build('specialty', $data);
  }


  public function client_forms() {

    $data['page_id'] = 'client-forms';
    $data = array_merge($data, $this->pics[$this->season][3]);

    $this->template
      ->set_partial('header', 'partials/header')
      ->title('Client Forms', 'Psychological Services of Pendleton')
      ->set_metadata("keywords", "Terrel Templeman, Connie Umphred, Sarah Hsu, Heather Bacon, Natalie Kollross, psychology, Oregon, Pendleton, Eastern Oregon, therapy, assessment, psychological, psychotherapy, medication, help, marital issues, parenting, ADHD, stress, disorders, services")
      ->set_metadata("description", "Common forms and questionnaires used by our staff. Clients are encouraged to access these forms from this website prior to their appointment.")
      ->set_partial('footer', 'partials/footer')
      ->build('client_forms', $data);
  }


  public function education() {

    $data['page_id'] = 'education';
    $data = array_merge($data, $this->pics[$this->season][4]);

    $this->template
      ->set_partial('header', 'partials/header')
      ->title('Education Opportunities', 'Psychological Services of Pendleton')
      ->set_metadata("keywords", "Terrel Templeman, Connie Umphred, Sarah Hsu, Heather Bacon, Natalie Kollross, psychology, Oregon, Pendleton, Eastern Oregon, therapy, assessment, psychological, psychotherapy, medication, help, marital issues, parenting, ADHD, stress, disorders")
      ->set_metadata("description", "Students and graduates can learn about our valuable educational opportunities, including a practicum in psychology and a psychologist residency.")
      ->set_partial('footer', 'partials/footer')
      ->build('education', $data);
  }


  public function resources() {

    $data['page_id'] = 'resources';
    $data = array_merge($data, $this->pics[$this->season][5]);

    $this->template
      ->set_partial('header', 'partials/header')
      ->title('Other Resources', 'Psychological Services of Pendleton')
      ->set_metadata("keywords", "Terrel Templeman, Connie Umphred, Sarah Hsu, Heather Bacon, Natalie Kollross, psychology, Oregon, Pendleton, Eastern Oregon, therapy, assessment, psychological, psychotherapy, medication, help, marital issues, parenting, ADHD, stress, disorders")
      ->set_metadata("description", "Helpful links to state and national mental health organizations.")
      ->set_partial('footer', 'partials/footer')
      ->build('resources', $data);
  }


  public function map() {

    $data['page_id'] = 'map';
    $data['body_extras'] = 'onload="initialize()"';
    $data = array_merge($data, $this->pics[$this->season][6]);

    $this->template
      ->set_partial('header', 'partials/header')
      ->title('Map and Directions', 'Psychological Services of Pendleton')
      ->set_metadata("keywords", "Terrel Templeman, Connie Umphred, Sarah Hsu, Heather Bacon, Natalie Kollross, psychology, Oregon, Pendleton, Eastern Oregon, therapy, assessment, psychological, psychotherapy, medication, help, marital issues, parenting, ADHD, stress, disorders")
      ->set_metadata("description", "View this address on Google Maps.")
      ->set_partial('footer', 'partials/footer')
      ->build('map', $data);
  }


  public function templeman() {

    $data['page_id'] = 'templeman';
    $data = array_merge($data, $this->pics[$this->season][6]);

    $this->template
      ->set_partial('header', 'partials/header')
      ->title('Terrel L. Templeman, Ph.D.', 'Psychological Services of Pendleton')
      ->set_metadata("keywords", "Terrel Templeman, Connie Umphred, Sarah Hsu, Heather Bacon, Natalie Kollross, psychology, Oregon, Pendleton, Eastern Oregon, therapy, assessment, psychological, psychotherapy, medication, help, marital issues, parenting, ADHD, stress, disorders")
      ->set_metadata("description", "Dr. Terrel Templeman's professional biography. Educational background, certification, publications, and presentations.")
      ->set_partial('footer', 'partials/footer')
      ->build('templeman', $data);
  }


  public function whats_new($article = NULL) {

    $category = $this->uri->segment(1);
    $this->load->model('Article_model');

    if(isset($article)) { // if method is passed

      $article = str_replace('_', '-', $article);
      // check uri against database
      $query = $this->db->get_where('articles', array('slug' => $article));

      if($query->num_rows() > 0) {
        // if there's a match, load it as the new article
        foreach($query->result() as $row):
            $data['title'] = $row->title;
            $data['body'] = $row->body;
            $data['id'] = $row->id;
            $data['slug'] = $row->slug;
        endforeach;
      } else { // no matching article
        show_404();
      }

    } else { // no method passed - show the latest article as default

      $article = $this->Article_model->get_latest_article($category);
      foreach($article->result() as $row):
        $data['title'] = $row->title;
        $data['body'] = $row->body;
        $data['id'] = $row->id;
        $data['slug'] = $row->slug;
      endforeach;

    }

    // get all whats-new titles to populate sub-menu
    $data['query'] = $this->Article_model->get_titles($category);
    $data['page_id'] = str_replace('_', '-', $data['slug']);
    $data = array_merge($data, $this->pics[$this->season][0]);

    $this->template
      ->set_partial('header', 'partials/header')
      ->title($data['title'], 'Psychological Services of Pendleton')
      ->set_metadata("keywords", "Terrel Templeman, Connie Umphred, Sarah Hsu, Heather Bacon, Natalie Kollross, psychology, Oregon, Pendleton, Eastern Oregon, therapy, assessment, psychological, psychotherapy, medication, help, marital issues, parenting, ADHD, stress, disorders")
      ->set_metadata("description", "")
      ->set_partial('footer', 'partials/footer')
      ->build('whats_new', $data);
  }


  public function therapy_helpers($article = NULL) {

    $category = $this->uri->segment(1);
    $this->load->model('Article_model');

    if(isset($article)) { // if method is passed

      $article = str_replace('_', '-', $article);
      // check uri against database
      $query = $this->db->get_where('articles', array('slug' => $article));

      if($query->num_rows() > 0) {
        // if there's a match, load it as the new article
        foreach($query->result() as $row):
          $data['title'] = $row->title;
          $data['body'] = $row->body;
          $data['id'] = $row->id;
          $data['slug'] = $row->slug;
        endforeach;
      } else { // no matching article
        show_404();
      }

    } else { // no method passed - show the latest article as default

      $article = $this->Article_model->get_latest_article($category);
      foreach($article->result() as $row):
        $data['title'] = $row->title;
        $data['body'] = $row->body;
        $data['id'] = $row->id;
        $data['slug'] = $row->slug;
      endforeach;

    }

    // get all therapy-helper titles to populate sub-menu
    $data['query'] = $this->Article_model->get_titles($category);
    $data['page_id'] = str_replace('_', '-', $data['slug']);
    $data = array_merge($data, $this->pics[$this->season][0]);

    $this->template
      ->set_partial('header', 'partials/header')
      ->title($data['title'], 'Psychological Services of Pendleton')
      ->set_metadata("keywords", "Terrel Templeman, Connie Umphred, Sarah Hsu, Heather Bacon, Natalie Kollross, psychology, Oregon, Pendleton, Eastern Oregon, therapy, assessment, psychological, psychotherapy, medication, help, marital issues, parenting, ADHD, stress, disorders")
      ->set_metadata("description", "")
      ->set_partial('footer', 'partials/footer')
      ->build('therapy_helpers', $data);
  }


  public function your_mental_health($article = NULL) {

    $category = $this->uri->segment(1);
    $this->load->model('Article_model');

    if(isset($article)) { // if method is passed

      $article = str_replace('_', '-', $article);
      // check uri against database
      $query = $this->db->get_where('articles', array('slug' => $article));

      if($query->num_rows() > 0) {
        // if there's a match, load it as the new article
        foreach($query->result() as $row):
            $data['title'] = $row->title;
            $data['body'] = $row->body;
            $data['id'] = $row->id;
            $data['slug'] = $row->slug;
        endforeach;
      } else { // no matching article
        show_404();
      }

    } else { // no method passed - show the latest article as default

      $article = $this->Article_model->get_latest_article($category);
      foreach($article->result() as $row):
        $data['title'] = $row->title;
        $data['body'] = $row->body;
        $data['id'] = $row->id;
        $data['slug'] = $row->slug;
      endforeach;

    }

    // get all your-mental-health titles to populate sub-menu
    $data['query'] = $this->Article_model->get_titles($category);
    $data['page_id'] = str_replace('_', '-', $data['slug']);
    $data = array_merge($data, $this->pics[$this->season][0]);

    $this->template
      ->set_partial('header', 'partials/header')
      ->title($data['title'], 'Psychological Services of Pendleton')
      ->set_metadata("keywords", "Terrel Templeman, Connie Umphred, Sarah Hsu, Heather Bacon, Natalie Kollross, psychology, Oregon, Pendleton, Eastern Oregon, therapy, assessment, psychological, psychotherapy, medication, help, marital issues, parenting, ADHD, stress, disorders")
      ->set_metadata("description", "")
      ->set_partial('footer', 'partials/footer')
      ->build('your_mental_health', $data);
  }


  public function contact() {
    $this->load->library('session');
//    $this->session->keep_flashdata('message');

    $data['message'] = '';
    $data['page_id'] = 'contact';
    $data = array_merge($data, $this->pics[$this->season][1]);

    $this->template
      ->set_partial('header', 'partials/header')
      ->title('Contact Us', 'Psychological Services of Pendleton')
      ->set_metadata("keywords", "Terrel Templeman, Connie Umphred, Sarah Hsu, Heather Bacon, Natalie Kollross, psychology, Oregon, Pendleton, Eastern Oregon, therapy, assessment, psychological, psychotherapy, medication, help, marital issues, parenting, ADHD, stress, disorders")
      ->set_metadata("description", "Address: 135 SE 1st St, Pendleton, Oregon 97801. Phone: 541-278-2222. Fax: 541-276-8405. Hours: Mon-Thu 8am - 6pm. Fri 8am - 5pm. Closed Sat & Sun.")
      ->set_partial('footer', 'partials/footer')
      ->build('contact', $data);
  }


  public function send_contact() {
    $this->load->library('session');

    $this->load->library('form_validation');
    $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
    $this->form_validation->set_rules('name', 'Name', 'trim|required');
    $this->form_validation->set_rules('phone', 'Phone', 'trim');
    $this->form_validation->set_rules('email', 'Email', 'trim|valid_email');
    $this->form_validation->set_rules('comment', 'Message', 'trim|required');

    if($this->form_validation->run() == FALSE) {
      $data['message'] = 'The following error(s) occurred:<br />';
      $data['status'] = 'failure';
      $data['page_id'] = 'contact';
      $data = array_merge($data, $this->pics[$this->season][6]);

      $this->template
        ->set_partial('header', 'partials/header')
        ->title('Contact Us', 'Psychological Services of Pendleton')
        ->set_metadata("keywords", "Terrel Templeman, Connie Umphred, Sarah Hsu, Heather Bacon, Natalie Kollross, psychology, Oregon, Pendleton, Eastern Oregon, therapy, assessment, psychological, psychotherapy, medication, help, marital issues, parenting, ADHD, stress, disorders")
        ->set_metadata("description", "Address: 135 SE 1st St, Pendleton, Oregon 97801. Phone: 541-278-2222. Fax: 541-276-8405. Hours: Mon-Thu 8am - 6pm. Fri 8am - 5pm. Closed Sat & Sun.")
        ->set_partial('footer', 'partials/footer')
        ->build('contact', $data);

    } else {

      $this->load->library('email');

      $this->email->from(set_value('email'), set_value('name'));
      $this->email->to('psp@eotnet.net');
      $this->email->subject('This message was submitted to pendletonpsych.com');
      $this->email->message(set_value('comment'));

      $this->email->send();
      $success_response = array(
        'message' => 'Thank you for your interest in Psychological Services of Pendleton. We have received your message.',
        'status' => 'success'
      );
      $this->session->set_flashdata($success_response);
      redirect('contact');
        // echo $this->email->print_debugger();

        // Thank you page.
        // $redirect = 'http://www.psychologicalservices/thank-you.html';

        // Headers.
        // $header = "From: $email";
        // $recipient_email = 'psp@eotnet.net';
        /*
      } else {
        $data['header'] = 'Oops!';
        $data['image_num'] = 1;
        $data['image_alt'] = 'An Eastern Oregon landscape.';
        $data['page_id'] = 'contact';
        $data['message'] = 'Your message was unable to be sent due to a system error. We apologize for any inconvenience.';
        $this->template
          ->set_partial('header', 'partials/header')
          ->title('Contact Us', 'Psychological Services of Pendleton')
          ->set_partial('footer', 'partials/footer')
          ->build('send_error', $data));
      }
         */
    }


  /*

    ### Handle submitted contact form.

    // Set the expected form inputs.
    $allowed = array('name', 'phone', 'email', 'comment', 'sendbutton');

    // Get the received inputs.
    // $received = array_keys($_POST);
    $received = $this->input->post();

    // Check that the two arrays match.
    if ($allowed == $received) {

      echo 'helooo';
    }
      $errors = array(); // Initialize error array.

      if(!empty($_POST['name'])) {
        $_POST['name'] = stripslashes(strip_tags($_POST['name']));
        if(empty($_POST['name'])) {
          $errors[] = 'Please enter a valid name.';
        }
      } else {
        $errors[] = 'Missing name.';
      }

      if(!empty($_POST['phone'])) {
        $_POST['phone'] = stripslashes(strip_tags($_POST['phone']));
      }

      if(!empty($_POST['email'])) {
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $errors[] = "$email is not a valid email address.";
        }
      }

      if(!empty($_POST['comment'])) {
        $_POST['comment'] = stripslashes(strip_tags($_POST['comment']));
        if(empty($_POST['comment'])) {
          $errors[] = 'Missing message.';
        }
      } else {
        $errors[] = 'Missing message.';
      }

      if (!$errors) { // If everything's okay.

        // Assign values.
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $message = $_POST['comment'];
        $full_message = "\nFrom: $name\r\n Phone: $phone\r\n Email: $email\r\n\n\n $message";

        // Recipient email.
        $recipient_email = 'templeman@me.com';
        // $recipient_email = 'psp@eotnet.net';

        // Email subject.
        $subject = 'This message was submitted to pendletonpsych.com';

        // Thank you page.
        $redirect = 'http://www.psychologicalservices/thank-you.html';

        // Headers.
        $header = "From: $email";

        // Send email.
        $send = mail($recipient_email, $subject, $full_message, $header);

        if ($send) { // If email was sent.
          header ("Location: $redirect");
          // exit();
        } else {
          $data['header'] = 'Error!';
          $data['image_num'] = 1;
          $data['image_alt'] = 'An Eastern Oregon landscape.';
          $data['page_id'] = 'send-error';
          $data['sub_head'] = 'Your message was unable to be sent due to a system error. We apologize for any inconvenience.';
          $this->template
            ->set_partial('header', 'partials/header')
            ->title('Contact Us', 'Psychological Services of Pendleton')
            ->set_partial('footer', 'partials/footer')
            ->build('send_error', $data));
        }
      } else { // Report the errors.
          $data['header'] = 'Error!';
          $data['image_num'] = 1;
          $data['image_alt'] = 'An Eastern Oregon landscape.';
          $data['page_id'] = 'send-error';
          $data['sub_head'] = 'The following error(s) occurred:<br />';
          $data['errors'] = $errors;

          $this->template
            ->set_partial('header', 'partials/header')
            ->title('Contact Us', 'Psychological Services of Pendleton')
            ->set_partial('footer', 'partials/footer')
            ->build('send_error', $data));
        foreach ($errors as $msg) { // Print each error.
          echo " - $msg<br />\n";
        }

      echo 'hello';
    //    echo '</p><p>Please <a href="contact.html">go back</a> and try again.</p><p><br /></p>';
      //  include ('footer.inc.html');
  //    } // End of if (empty($errors)) IF.

    } else { // Form mismatch.
      echo 'hellooo';

    //  include ('header.inc.html');
    //  echo '<h1>Error!</h1>
    //  <p class="alert">This page has been accessed in error. We apologize for any inconvenience.</p>';
    //  include ('footer.inc.html');

    }
     */
  }
}



/* End of file pages.php */
/* Location: ./application/controllers/pages.php */
