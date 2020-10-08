<?php 

get_header();

/* Template Name: contact-template */
?>

<?php
if(isset($_POST['submitted'])) {
	if(trim($_POST['fullName']) === '') {
		$fullNameError = 'Please enter your full name.';
		$hasError = true;
	} else {
		$fullName = trim($_POST['fullName']);
	}

	if(trim($_POST['email']) === '')  {
		$emailError = 'Please enter your email address.';
		$hasError = true;
	} else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['email']))) {
		$emailError = 'You entered an invalid email address.';
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}

	if(trim($_POST['subject']) === '') {
		$subject = trim($_POST['subject']);
	} else {
		$subject = trim($_POST['subject']);
	}

	if(trim($_POST['comments']) === '') {
		$commentError = 'Please enter a message.';
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$comments = stripslashes(trim($_POST['comments']));
		} else {
			$comments = trim($_POST['comments']);
		}
	}

	if(!isset($hasError)) {
		$emailTo = get_option('tz_email');
		if (!isset($emailTo) || ($emailTo == '') ){
			$emailTo = get_option('admin_email');
		}
		$body = "FullName: $fullName \n\nEmail: $email \n\nSubject: $subject \n\nComments: $comments";
		$headers = 'From: '.$fullName.' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

		wp_mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}

} ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
	    <div id="map"></div>
	    <div class="contact-form-group clearfix">
		    <div class="contact-header">
		      <h1>Contact Us</h1>
		      <p>Please use the form to send us a message.</p>
		      <p>Fields marked with a * are required</p>
		    </div>

		    <div class="contact-address">
		      <ul>
		        <li>Khwaza Tower</li>
		        <li>9th Floor, 95 Mohakhali C/A</li>
		        <li>(880) 9613234112</li>
		      </ul>
		    </div>   
	    </div> 
        <br/>
		<form action="<?php the_permalink(); ?>" id="contactForm" method="post">
			<?php if(isset($emailSent) && $emailSent == true) { ?>
				<div class="thanks">
					<p>Thanks, your email was sent successfully.</p>
				</div>
		    <?php } else { ?>
			<?php if(isset($hasError) || isset($captchaError)) { ?>
				<p class="has-error">Sorry, an error occured.<p>
			<?php } ?>
			<?php } ?>
			<ul class="contactform">
				<li>
					<input type="text" name="fullName" id="fullName" value="" class="form-control required requiredField" placeholder="Full Name*" />
					<?php if($fullNameError != '') { ?>
						<span class="error"><?=$fullNameError;?></span>
					<?php } ?>
				</li>

				<li>
					<input type="text" name="email" id="email" value="" class="form-control required requiredField email" placeholder="Email Address*" />
					<?php if($emailError != '') { ?>
						<span class="error"><?=$emailError;?></span>
					<?php } ?>
				</li>

			    <li>
					<input type="text" name="subject" id="subject" value="" class="form-control " placeholder="Subject (Optional)" />
				</li>

				<li>
					<textarea name="comments" id="commentsText" rows="20" cols="30" class="form-control required requiredField"></textarea>
					<?php if($commentError != '') { ?>
						<span class="error"><?=$commentError;?></span>
					<?php } ?>
				</li>

				<li>
					<button class="btn" type="submit">Send</button>
				</li>
			</ul>
			<input type="hidden" name="submitted" id="submitted" value="true" />
	    </form>
	</main>  
</div>

<?php

include (TEMPLATEPATH . '/sslpay-widget.php'); 

get_footer();



