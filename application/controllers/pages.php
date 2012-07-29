<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends MY_Controller {


	public function index() {

		$this->template
			->set_partial('header', 'partials/header')
			->title('Welcome', 'Psychological Services of Pendleton')
			->set_metadata("keywords", "Terrel Templeman, psychology, Oregon,
	Pendleton, Eastern Oregon, therapy, assessment, psychological,
	psychotherapy, medication, help, marital issues, parenting, ADHD, stress,
	disorders, services, Connie Umphred, Daniel Eslinger, Sarah Hsu, Heather Bacon") 
			->set_metadata("description", "Full service outpatient treatment center providing assessment, psychotherapy, and medications for a broad range of psychological problems. Serving Eastern Oregon. Terrel L. Templeman, Ph.D. - Clinical Psychologist. Connie Umphred, Ph.D. - Clinical Psychologist. Daniel Eslinger, RN, PMHNP - Psychiatric Mental Health Nurse Practitioner. Sarah Hsu, LCSW - Licensed Clinical Social Worker. Heather A. Bacon, Ph.D. - Clinical Psychologist Resident")
			->set_partial('footer', 'partials/footer')
			->build('index', array('google_verify' => '<meta name="google-site-verification" content="6EmRDUGqGNMQjadxDK-JbJVjd8T1IrDRoaLOxMrCk6g" />', 'image_num' => '6', 'image_alt' => 'flowers', 'page_id' => 'front'));
	}


	public function staff() {

		$this->template
			->set_partial('header', 'partials/header')
			->title('Meet Our Staff', 'Psychological Services of Pendleton')
			->set_metadata("keywords", "Terrel Templeman, psychology, Oregon,
	Pendleton, Eastern Oregon, therapy, assessment, psychological,
	psychotherapy, medication, help, marital issues, parenting, ADHD, stress,
	disorders, services, Connie Umphred, Daniel Eslinger, Sarah Hsu, Heather Bacon") 
			->set_metadata("description", "Terrel L. Templeman, Ph.D. [Clinical Psychologist], Connie Umphred, Ph.D. [Clinical Psychologist], Daniel Eslinger, RN, PMHNP [Psychiatric Mental Health Nurse Practitioner], Sarah Hsu, LCSW [Licensed Clinical Social Worker], Heather A. Bacon, Ph.D. [Clinical Psychologist Resident], Jeanne Bailey [Office Manager], Karen Hoeft [Administrative Assistant & Receptionist]")
			->set_partial('footer', 'partials/footer')
			->build('staff', array('image_num' => '1', 'image_alt' => 'An Eastern Oregon landscape.', 'page_id' => 'staff'));
	}


	public function specialty() {
	
		$this->template
			->set_partial('header', 'partials/header')
			->title('Specialty Areas', 'Psychological Services of Pendleton')
			->set_metadata("keywords", "Terrel Templeman, psychology, Oregon,
	Pendleton, Eastern Oregon, therapy, assessment, psychological,
	psychotherapy, medication, help, marital issues, parenting, ADHD, stress,
	disorders, services, Connie Umphred, Daniel Eslinger, Sarah Hsu, Heather Bacon") 
			->set_metadata("description", "All primary clinicians are licensed in Oregon to provide services within their specialty areas including different forms of stress, anxiety, anger issues, parenting issues, relationship difficulties mood disorders and more.")
			->set_partial('footer', 'partials/footer')
			->build('specialty', array('image_num' => '5', 'image_alt' => 'An Eastern Oregon Landscape.', 'page_id' => 'specialty'));
	}


	public function policies() {

		$this->template
			->set_partial('header', 'partials/header')
			->title('Policies and Procedures', 'Psychological Services of Pendleton')
			->set_metadata("keywords", "Terrel Templeman, psychology, Oregon,
	Pendleton, Eastern Oregon, therapy, assessment, psychological,
	psychotherapy, medication, help, marital issues, parenting, ADHD, stress,
	disorders, services, Connie Umphred, Daniel Eslinger, Sarah Hsu, Heather Bacon") 
			->set_metadata("description", "Common forms and questionnaires used by our staff. Clients are encouraged to access these forms from this website prior to their appointment.")
			->set_partial('footer', 'partials/footer')
			->build('policies', array('image_num' => '3', 'image_alt' => 'An Eastern Oregon landscape.', 'page_id' => 'policies'));
	}


	public function education() {

		$this->template
			->set_partial('header', 'partials/header')
			->title('Education Opportunities', 'Psychological Services of Pendleton')
			->set_metadata("keywords", "Terrel Templeman, psychology, Oregon,
	Pendleton, Eastern Oregon, therapy, assessment, psychological,
	psychotherapy, medication, help, marital issues, parenting, ADHD, stress,
	disorders, services, Connie Umphred, Daniel Eslinger, Sarah Hsu, Heather Bacon") 
			->set_metadata("description", "Students and graduates can learn about our valuable educational opportunities, including a practicum in psychology and a psychologist residency.")
			->set_partial('footer', 'partials/footer')
			->build('education', array('image_num' => '2', 'image_alt' => 'A green 
			landscape vista.', 'page_id' => 'education'));
	}


	public function resources() {

		$this->template
			->set_partial('header', 'partials/header')
			->title('Other Resources', 'Psychological Services of Pendleton')
			->set_metadata("keywords", "Terrel Templeman, psychology, Oregon,
	Pendleton, Eastern Oregon, therapy, assessment, psychological,
	psychotherapy, medication, help, marital issues, parenting, ADHD, stress,
	disorders, services, Connie Umphred, Daniel Eslinger, Sarah Hsu") 
			->set_metadata("description", "Helpful links to state and national mental health organizations.")
			->set_partial('footer', 'partials/footer')
			->build('resources', array('image_num' => '4', 'image_alt' => 'A green 
			landscape vista.', 'page_id' => 'resources'));
	}

	
	public function map() {

		$this->template
			->set_partial('header', 'partials/header')
			->title('Map and Directions', 'Psychological Services of Pendleton')
			->set_metadata("keywords", "Terrel Templeman, psychology, Oregon,
	Pendleton, Eastern Oregon, therapy, assessment, psychological,
	psychotherapy, medication, help, marital issues, parenting, ADHD, stress,
	disorders, services, Connie Umphred, Daniel Eslinger, Sarah Hsu") 
			->set_metadata("description", "View this address on Google Maps.")
			->set_partial('footer', 'partials/footer')
			->build('map', array('image_num' => '1', 'image_alt' => 'An Eastern Oregon landscape.', 'page_id' => 'map', 'body_extras' => 'onload="initialize()"'));
	}


	public function contact() {
		$this->load->library('session');
//		$this->session->keep_flashdata('message');
		$this->template
			->set_partial('header', 'partials/header')
			->title('Contact Us', 'Psychological Services of Pendleton')
			->set_metadata("keywords", "Terrel Templeman, psychology, Oregon,
	Pendleton, Eastern Oregon, therapy, assessment, psychological,
	psychotherapy, medication, help, marital issues, parenting, ADHD, stress,
	disorders, services, Connie Umphred, Daniel Eslinger, Sarah Hsu, Heather Bacon") 
			->set_metadata("description", "Address: 135 SE 1st St, Pendleton, Oregon 97801. Phone: 541-278-2222. Fax: 541-276-8405. Hours: Mon-Thu 8am - 6pm. Fri 8am - 5pm. Closed Sat & Sun.")
			->set_partial('footer', 'partials/footer')
			->build('contact', array('message' => '', 'image_num' => '1', 'image_alt' => 'An Eastern Oregon landscape.', 'page_id' => 'contact'));
	}


	public function templeman() {

		$this->template
			->set_partial('header', 'partials/header')
			->title('Terrel L. Templeman, Ph.D.', 'Psychological Services of Pendleton')
			->set_metadata("keywords", "Terrel Templeman, psychology, Oregon,
	Pendleton, Eastern Oregon, therapy, assessment, psychological,
	psychotherapy, medication, help, marital issues, parenting, ADHD, stress,
	disorders, services, Connie Umphred, Daniel Eslinger, Sarah Hsu, Heather Bacon") 
			->set_metadata("description", "Dr. Terrel Templeman's professional biography. Educational background, certification, publications, and presentations.")
			->set_partial('footer', 'partials/footer')
			->build('templeman', array('image_num' => '1', 'image_alt' => 'An Eastern Oregon landscape.', 'page_id' => 'templeman'));
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

		$data['image_num'] = 6;
		$data['image_alt'] = 'flowers';
		$data['page_id'] = str_replace('_', '-', $data['slug']);

		$this->template
			->set_partial('header', 'partials/header')
			->title($data['title'], 'Psychological Services of Pendleton')
			->set_metadata("keywords", "Terrel Templeman, psychology, Oregon,
	Pendleton, Eastern Oregon, therapy, assessment, psychological,
	psychotherapy, medication, help, marital issues, parenting, ADHD, stress,
	disorders, services, Connie Umphred, Daniel Eslinger, Sarah Hsu, Heather Bacon") 
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

		$data['image_num'] = 6;
		$data['image_alt'] = 'flowers';
		$data['page_id'] = str_replace('_', '-', $data['slug']);

		$this->template
			->set_partial('header', 'partials/header')
			->title($data['title'], 'Psychological Services of Pendleton')
			->set_metadata("keywords", "Terrel Templeman, psychology, Oregon,
	Pendleton, Eastern Oregon, therapy, assessment, psychological,
	psychotherapy, medication, help, marital issues, parenting, ADHD, stress,
	disorders, services, Connie Umphred, Daniel Eslinger, Sarah Hsu, Heather Bacon") 
			->set_metadata("description", "")
			->set_partial('footer', 'partials/footer')
			->build('therapy_helpers', $data);
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
			$data['image_num'] = 1;
			$data['image_alt'] = 'An Eastern Oregon landscape.';
			$data['page_id'] = 'contact';

			$this->template
				->set_partial('header', 'partials/header')
				->title('Contact Us', 'Psychological Services of Pendleton')
				->set_metadata("keywords", "Terrel Templeman, psychology, Oregon,
		Pendleton, Eastern Oregon, therapy, assessment, psychological,
		psychotherapy, medication, help, marital issues, parenting, ADHD, stress,
		disorders, services, Connie Umphred, Daniel Eslinger, Sarah Hsu, Heather Bacon") 
				->set_metadata("description", "Address: 135 SE 1st St, Pendleton, Oregon 97801. Phone: 541-278-2222. Fax: 541-276-8405. Hours: Mon-Thu 8am - 6pm. Fri 8am - 5pm. Closed Sat & Sun.")
				->set_partial('footer', 'partials/footer')
				->build('contact', $data);

		} else {

			$this->load->library('email');

			$this->email->from(set_value('email'), set_value('name'));
			$this->email->to('templeman@me.com');
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
		//		echo '</p><p>Please <a href="contact.html">go back</a> and try again.</p><p><br /></p>';
			//	include ('footer.inc.html');
	//		} // End of if (empty($errors)) IF.

		} else { // Form mismatch.
			echo 'hellooo';

		//	include ('header.inc.html');
		//	echo '<h1>Error!</h1>
		//	<p class="alert">This page has been accessed in error. We apologize for any inconvenience.</p>';
		//	include ('footer.inc.html');

		}
		 */
	}
}



/* End of file pages.php */
/* Location: ./application/controllers/pages.php */
