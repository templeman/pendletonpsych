<?php
$this->load->helper(array('form', 'html'));
if($this->session->flashdata('message') != '') {
  $message = $this->session->flashdata('message');
  $status = $this->session->flashdata('status');
}
?>


<h2>Contact Us</h2>
  <p>To schedule an appointment or to request additional
  information, we invite you to call, email, or visit us at our
  Pendleton office. You may also contact us directly using the
  form below.</p>
  <section>
    <h3><a href="https://maps.google.com/maps?q=135+SE+First+Street++Pendleton,+OR+97801&hl=en&sll=45.850116,-119.308884&sspn=0.013332,0.019462&hnear=135+SE+1st+St,+Pendleton,+Oregon+97801&t=m&z=17">Location</a></h3>
    <ul>
      <li>Psychological Services of Pendleton, LLC</li>
      <li>135 SE 1st Street, Pendleton, Oregon 97801</li>
    </ul>
    <dl class="clearfix">
      <dt>Phone</dt>
      <dd>541-278-2222</dd>
      <dt>Fax</dt>
      <dd>541-276-8405</dd>
      <dt>Email</dt>
      <dd><?php echo mailto('psp@eotnet.net'); ?></dd>
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

<h3>Contact Form</h3>
<p class="sm">* indicates required field. If you would like a
response, please be sure to include an email address or phone
number where we can reach you.</p>
<p class="sm"><em>Unless you tell us to, we will never share
  your information with third parties.</em>
</p>
<?php
  echo '<div';
  if(!empty($status)) {
    echo ' class="'.$status.'"';
  }
  echo '>'.$message.'</div>';
  echo form_open('send-contact#contact-form', array('name' => 'contact-form', 'id' => 'contact-form', 'novalidate' => ''));

  echo form_label('Name*', 'name');
  $data = array(
    'id' => 'name',
    'name' => 'name',
    'placeholder' => 'Your Name',
    'value' => set_value('name')
  );
  echo form_input($data);
?>
  <span id="name_verify" class="verify"></span>
<?php
  echo form_error('name');

  echo form_label('Phone', 'phone');
  $data = array(
    'id' => 'phone',
    'name' => 'phone',
    'placeholder' => '(111) 111-1111',
    'value' => set_value('phone')
  );
  echo form_telephone($data);
?>
  <span id="phone_verify" class="verify"></span>
<?php
  echo form_error('phone');

  echo form_label('Email', 'email');
  $data = array(
    'id' => 'email',
    'name' => 'email',
    'placeholder' => 'example@me.com',
    'value' => set_value('email')
  );
  echo form_email($data);
?>
  <span id="email_verify" class="verify"></span>
<?php
  echo form_error('email');

  echo form_label('Message*', 'message');
  $data = array(
    'id' => 'message',
    'name' => 'comment',
    'rows' => '14',
    'placeholder' => 'Enter your message',
    'value' => set_value('comment')
  );
  echo form_textarea($data);
?>
  <span id="message_verify" class="verify"></span>
<?php
  echo form_error('comment');

  $data = array(
    'id' => 'button',
    'name' => 'sendbutton',
    'value' => 'Send',
  );
  echo form_submit($data);

  echo form_close();
?>

<a href="#top"></a>
