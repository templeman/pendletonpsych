<?php
$this->load->helper(array('form', 'html'));
if ($this->session->flashdata('message') != '') {
    $message = $this->session->flashdata('message');
    $status  = $this->session->flashdata('status');
}
?>


<?php /*
<h2>Schedule an Appointment</h2>
<script type="text/javascript" src="https://form.jotform.com/jsform/202607788273160"></script>
*/ ?>

<h2>Contact Us</h2>
  <p>We invite you to call, email, or visit us at our
  Pendleton office. You may also contact us directly using the
  form below.</p>
  <section>
    <h3><a href="https://goo.gl/maps/Tfyo2APoDzXsc8Ck8">Location</a></h3>
    <ul>
      <li>Psychological Services of Pendleton, LLC</li>
      <li>1100 Southgate Suite 13, Pendleton, Oregon 97801</li>
    </ul>
    <dl class="clearfix">
      <dt>Phone</dt>
      <dd>541-278-2222</dd>
      <dt>Fax</dt>
      <dd>541-276-8405</dd>
      <dt>Email</dt>
      <dd><?php echo mailto('psp@pendletonpsych.com'); ?></dd>
    </dl>
    <h4>Hours</h4>
    <dl class="clearfix">
      <dt>Monday:</dt>
      <dd>8am - 6pm</dd>
      <dt>Tuesday:</dt>
      <dd>8am - 6pm</dd>
      <dt>Wednesday:</dt>
      <dd>8am - 6pm</dd>
      <dt>Thursday</dt>
      <dd>8am - 6pm</dd>
      <dt>Friday</dt>
      <dd>8am - 5pm</dd>
      <dt>Saturday:</dt>
      <dd>Closed</dd>
      <dt>Sunday:</dt>
      <dd>Closed</dd>
    </dl>
</section>
