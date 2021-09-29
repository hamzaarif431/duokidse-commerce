<?php
    include 'includes/header.php';
    $page = 'home';
?>  
<main>
	<section class="contact-banner">
	<div class="banner--sec">
        <div class="banner-text">
            <h1>contact us</h1>
        </div>
    </div>
	</section>
	<section class="contact-main-content">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-xxl-4">
					<div class="contact-detail-section">
						<i class="fas fa-envelope"></i>
						<h3><strong>Email</strong></h3>
						<p>info@douekids.com</p>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-xxl-4">
						<div class="contact-detail-section">
						<i class="fas fa-phone-alt"></i>
						<h3><strong>phone</strong></h3>
						<p>734-450-2974</p>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-xxl-4">
					<div class="contact-detail-section">
						<i class="fas fa-map-marker-alt"></i>
						<h3><strong>address</strong></h3>
						<p>47610 Grand River #1004 Novi, MI. 48374</p>
					</div>
				</div>

			</div>
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
					<div class="message-contact">
						<h2>Send Us A Message</h2>
						<p>Fill all the required information section below and send us your query</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
					<div class="contact-form">
						<form>
							<div class="form-group">
								<label for="name">Your name</label>
								<input type="text" name="name" class="form-control">
							</div>
							 <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" id="exampleInputEmail1" class="form-control" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
	<label for="sub">Subject</label>
	<input type="text" name="subject" class="form-control">
  </div>
  <div class="form-group">
  	<label for="message">Your message(optional)</label>
  	<textarea class="form-control"></textarea>
  </div>
  <button>submit</button>
						</form>
						 
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
					<div class="contact-map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d215396.70199730498!2d-99.87646263835039!3d32.48409849378491!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86568e19df63a4db%3A0xcc68a22554ff649!2sThe%20Grace%20Museum!5e0!3m2!1sen!2s!4v1625167716046!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					</div>
				</div>
			</div>
		</div>
      </section>
</main>
    <?php
    include 'includes/footer.php';
    $page = 'home';
?>  