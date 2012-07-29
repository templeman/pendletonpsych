<?php
class Error extends MY_Controller {
 
	function error_404()
	{
		$CI =& get_instance();
		$CI->output->set_status_header('404');
		// $this->output->set_status_header('404');
		$CI->template
			->set_partial('header', 'partials/header')
			->title('Page Not Found', 'Psychological Services of Pendleton')
			->set_metadata("keywords", "Terrel Templeman, psychology, Oregon,
	Pendleton, Eastern Oregon, therapy, assessment, psychological,
	psychotherapy, medication, help, marital issues, parenting, ADHD, stress,
	disorders, services, Connie Umphred, Daniel Eslinger, Sarah Hsu") 
			->set_metadata("description", "Psychological Services of Pendleton, LLC
	is a full service outpatient treatment center providing assessment,
	psychotherapy, and medications for a broad range of psychological problems.
	Terrel L. Templeman, Ph.D. - Clinical Psychologist. Connie Umphred, Ph.D. -
	Clinical Psychologist. Daniel Eslinger, RN, PMHNP - Psychiatric Mental
	Health Nurse Practitioner. Sarah Hsu, LCSW - Licensed Clinical Social
	Worker.")
			->set_partial('footer', 'partials/footer')
			->build('error_404', array('image_num' => 'x', 'image_alt' => 'A starfield.', 'page_id' => 'error_404'));
	}
}
