<?php
/**
 * Template Name: Home Page Template
 */  
?>

	
	<div class="col-md-12 dark-background da-hero">
		<div class="col-xs-10 col-lg-4">
			<h1>The Okanagan's Personal Injury Law Experts.</h1>
			<div class="short-underline"></div>
			<p>Injury claims can be time consuming and complex. If you've been injured in any type of accident, our team of experienced lawyers will guide you though making a claim and offer you cost effective legal representation.</p>
			<button class="btn-outline">Request A Consultation</button>
		</div>
		<div>
			<img src="<?= get_template_directory_uri(); ?>/dist/images/group.png" alt="">
		</div>
	</div>

<section id="our-expertise" class="col-xs-12">
	<div class="col-sm-12 col-md-6 white contained-section">
		<h2>Our Expertise</h2>
		<div class="short-underline"></div>
		<p>Since 2002, Davie & Associates have specialized in personal injury law. We practice exclusively in civil (non-criminal) litigation focusing on personal injury, which often includes car accidents and ICBC claims. We've dealt with almost every type of injury and will be glad to explain your options and the claim process during your free consultation.</p>
	</div>
	<div class="col-sm-12 col-md-6 off-white contained-section">
		<h2>Typical Claims</h2>
		<ul class="checkmarked-list">
			<li>ICBC Claims</li>
			<li>Motor vehicle accidents</li>
			<li>Slip and fall accidents</li>
			<li>Pedestrian or cyclist accidents</li>
		</ul>
	</div>
</section>


<section id="common-injuries" class="col-xs-12 contained-section pink dark-background">
	<h2>Common Injuries</h2>
	<div class="short-underline centered"></div>
	<p class="center callout-text">In our 50 years of experience, we’ve represented claims across nearly every type of injury. Some common types of injury include:</p>
	<ul class="arrow-list">
		<div class="col-md-1">&nbsp</div>
		<div class="col-xs-12 col-md-5 col-lg-4">
			<li>Brain injuries</li>
			<li>Orthopedic injuries (fractures)</li>
			<li>Whiplash</li>
			<li>Soft tissue injuries</li>
			<li>Fibromyalgia</li>
		</div>
		<div class="col-md-1">&nbsp</div>
		<div class="col-xs-12 col-md-5 col-lg-4">
			<li>Thoracic outlet syndrome</li>
			<li>Temporomendibular joint disorder</li>
			<li>Headaches</li>
			<li>Post-traumatic stress disorder</li>
			<li>Despression and anxiety</li>
		</div>
	</ul>
</section>


<section id="faq" class="col-xs-12 contained-section dark-background">
	<div class="col-xs-12 col-md-5">
		<h2>Do you have questions?<br>We have the answers.</h2>
		<div class="short-underline"></div>
		<p>Do you have questions about your claim, the process or how we can help you? We have created a series of informative videos to provide you the answer to frequently asked questions. Didn’t find what you were looking for?</p>
		<button class="btn-outline">View More FAQs</button>
	</div>

	<div class="col-md-1">
	</div>
	
	<div class="col-xs-12 col-md-6">
		<div class="youtube-container">
   			<div class="youtube-player" data-id="tRW4GGzMKjs"></div>
   			<div class="youtube-caption">Can you answer my questions?<img id="rightarrow" src="<?= get_template_directory_uri(); ?>/dist/images/rightarrow.png"><img id="leftarrow" src="<?= get_template_directory_uri(); ?>/dist/images/leftarrow.png"></div>
		</div>
	</div>
</section>



<section id="meet-our-team" class="col-xs-12 off-white center contained-section">
	<h2>Meet Our Experienced Team.</h2>
	<p>We are ready to answer any questions you may have about your injury claims.</p>
	<div class="col-xs-12 col-md-4 text-left team-container">
		<img src="<?= get_template_directory_uri(); ?>/dist/images/markdavie.png">
		<ul>
			<li><h3>Mark Davie</h3></li>
			<li><a href=""><p class="icon phone-number">250-493-9100 ext. 2</p></a></li>
			<li><a href=""><p class="icon email">mfd@davielaw.com</p></a></li>
			<li><a href=""><p class="icon about-me">About Me</p></a></li>
		</ul>
	</div>
	<div class="col-xs-12 col-md-4 text-left team-container">
		<img src="<?= get_template_directory_uri(); ?>/dist/images/jasonpoon.png">
		<ul>
			<li><a href=""><h3>Jason Poon</h3></li>
			<li><a href=""><p class="icon phone-number">250-493-9100 ext. 8</p></a></li>
			<li><a href=""><p class="icon email">jason@davielaw.com</p></a></li>
			<li><a href=""><p class="icon about-me">About Me</p></a></li>
		</ul>
	</div>
	<div class="col-xs-12 col-md-4 text-left team-container">
		<img src="<?= get_template_directory_uri();?>/dist/images/rileygoldstone.png">
		<ul>
			<li><h3>Riley Goldstone</h3></li>
			<li><a href=""><p class="icon phone-number">250-493-9100 ext. 106</p></a></li>
			<li><a href=""><p class="icon email">riley@davielaw.com</p></a></li>
			<li><a href=""><p class="icon about-me">About Me</p></a></li>
		</ul>
	</div>
</section>



<section id="contact-us" class="col-xs-12 contained-section dark-background">
	<div class="col-md-4">
		<h2>Contact Us</h2>
		<div class="short-underline"></div>
		<h3>#103-301 Main Street Penticton, BC Canada</h3>
		<a href="#">Directions to office</a>
		<a href="tel:2504929100">Call 250-492-9100</a>
		<a href="mailto:info@davieandassociates.com">Email Us</a>
	</div>
	<div class="col-md-2"></div>
	<div class="col-md-6">
		<div class="form-group contact-form">
			<select class="form-control">
			    <option>General Inquiry</option>
			    <option>Option 2</option>
			    <option>Option 3</option>
			    <option>Option 4</option>
		 	</select>
		 	<input type="text" class="form-control" id="name" placeholder="Name">
		 	<input type="text" class="form-control" id="email-address" placeholder="Email Address">
		 	<input type="text" class="form-control" id="phone-number" placeholder="Phone Number">
			<textarea class="form-control" rows="8" id="message" placeholder="Message"></textarea>
			<input type="submit" class="form-control" value="Send" placeholder="Send">
		</div>
	</div>
</section>























