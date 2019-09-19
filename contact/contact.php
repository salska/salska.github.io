<?php
	// Start session.
	session_start();
	
	// Set a key, checked in mailer, prevents against spammers trying to hijack the mailer.
	$security_token = $_SESSION['security_token'] = uniqid(rand());
	
	if ( ! isset($_SESSION['formMessage'])) {
		$_SESSION['formMessage'] = 'For an informal and friendly chat<br />please call Sal Kabay 07871 633198.<br />Or fill in the form below to send me an email.';	
	}
	
	if ( ! isset($_SESSION['formFooter'])) {
		$_SESSION['formFooter'] = ' ';
	}
	
	if ( ! isset($_SESSION['form'])) {
		$_SESSION['form'] = array();
	}
	
	function check($field, $type = '', $value = '') {
		$string = "";
		if (isset($_SESSION['form'][$field])) {
			switch($type) {
				case 'checkbox':
					$string = 'checked="checked"';
					break;
				case 'radio':
					if($_SESSION['form'][$field] === $value) {
						$string = 'checked="checked"';
					}
					break;
				case 'select':
					if($_SESSION['form'][$field] === $value) {
						$string = 'selected="selected"';
					}
					break;
				default:
					$string = $_SESSION['form'][$field];
			}
		}
		return $string;
	}
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="robots" content="index, follow" />
		<meta name="generator" content="RapidWeaver" />
		
	<meta name="twitter:card" content="summary">
	<meta name="twitter:title" content="Contact | eMetrix Consulting">
	<meta name="twitter:image" content="https://www.emetrix.biz/resources/photo-1567518199016-3091829a8abe.jpg">
	<meta name="twitter:url" content="https://www.emetrix.biz/contact/contact.php">
	<meta property="og:type" content="website">
	<meta property="og:site_name" content="eMetrix Consulting">
	<meta property="og:title" content="Contact | eMetrix Consulting">
	<meta property="og:image" content="https://www.emetrix.biz/resources/photo-1567518199016-3091829a8abe.jpg">
	<meta property="og:url" content="https://www.emetrix.biz/contact/contact.php">
	

	<title>Contact | eMetrix Consulting</title>
	<link rel="stylesheet" type="text/css" media="all" href="../rw_common/themes/Future/consolidated-3.css?rwcache=590609404" />
		
	
	   
</head>

<!-- This page was created with RapidWeaver from Realmac Software. http://www.realmacsoftware.com -->

<body>
	<nav class="navbar navbar-expand-lg">
		<div class="container">
			<a class="navbar-brand" href="https://www.emetrix.biz/"><img src="../rw_common/images/emetrix.png" width="210" height="60" alt="Contact Us"/> <span class="navbar-title">Contact Us</span></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
			 aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto"><li class="nav-item"><a href="../" rel="" class="nav-link">Home</a></li><li class="nav-item"><a href="../about/about.html" rel="" class="nav-link">About</a></li><li class="nav-item"><a href="../case/case.html" rel="" class="nav-link">Case Studies</a></li><li class="nav-item"><a href="../news/news.html" rel="" class="nav-link">News</a></li><li class="nav-item active"><a href="contact.php" rel="" class="nav-link">Contact</a></li><li class="nav-item"><a href="../gallery/gallery.html" rel="" class="nav-link">Gallery</a></li></ul>
			</div>
		</div>
	</nav>

	<header class="hero" id="hero">
        <div class="hero-background"></div>
		<div class="hero-overlay"></div>
		<h1 class="hero-title">
			Contact Us
			<em>we should talk</em>
		</h1>
	</header>

	<div class="content">
		<section class="main" style="position: relative;">
			<div class="container">
                <div class="row">
                    <div class="col-sm-12 main">
                        
<div class="message-text"><?php echo $_SESSION['formMessage']; unset($_SESSION['formMessage']); ?></div><br />

<form class="rw-contact-form" action="./files/mailer.php" method="post" enctype="multipart/form-data">
	 <div>
		<label>Your Name</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element0'); ?>" name="form[element0]" size="40"/><br /><br />

		<label>Your Email</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element1'); ?>" name="form[element1]" size="40"/><br /><br />

		<label>Subject</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element2'); ?>" name="form[element2]" size="40"/><br /><br />

		<label>Message</label> *<br />
		<textarea class="form-input-field" name="form[element3]" rows="8" cols="38"><?php echo check('element3'); ?></textarea><br /><br />

		<div style="display: none;">
			<label>Spam Protection: Please don't fill this in:</label>
			<textarea name="comment" rows="1" cols="1"></textarea>
		</div>
		<input type="hidden" name="form_token" value="<?php echo $security_token; ?>" />
		
		<input class="form-input-button" type="submit" name="submitButton" value="Submit" />
	</div>
</form>

<br />
<div class="form-footer"><?php echo $_SESSION['formFooter']; unset($_SESSION['formFooter']); ?></div><br />

<?php unset($_SESSION['form']); ?>

                    </div>

                    <div class="col-sm-12 sidebar">
                        <h2></h2>
                         
                    </div>
                </div>
			</div>
		</section>
	</div>

	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col">
					<ul class="navbar-nav ml-auto"><li class="nav-item"><a href="../" rel="" class="nav-link">Home</a></li><li class="nav-item"><a href="../about/about.html" rel="" class="nav-link">About</a></li><li class="nav-item"><a href="../case/case.html" rel="" class="nav-link">Case Studies</a></li><li class="nav-item"><a href="../news/news.html" rel="" class="nav-link">News</a></li><li class="nav-item active"><a href="contact.php" rel="" class="nav-link">Contact</a></li><li class="nav-item"><a href="../gallery/gallery.html" rel="" class="nav-link">Gallery</a></li></ul>
					&copy; 2019 Sal Kabay <a href="#" id="rw_email_contact">Contact Me</a><script type="text/javascript">var _rwObsfuscatedHref0 = "mai";var _rwObsfuscatedHref1 = "lto";var _rwObsfuscatedHref2 = ":sa";var _rwObsfuscatedHref3 = "l@e";var _rwObsfuscatedHref4 = "met";var _rwObsfuscatedHref5 = "rix";var _rwObsfuscatedHref6 = ".bi";var _rwObsfuscatedHref7 = "z";var _rwObsfuscatedHref = _rwObsfuscatedHref0+_rwObsfuscatedHref1+_rwObsfuscatedHref2+_rwObsfuscatedHref3+_rwObsfuscatedHref4+_rwObsfuscatedHref5+_rwObsfuscatedHref6+_rwObsfuscatedHref7; document.getElementById("rw_email_contact").href = _rwObsfuscatedHref;</script>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="../rw_common/themes/Future/js/main.js?rwcache=590609404"></script>
</body>

</html>