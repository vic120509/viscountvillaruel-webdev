<!DOCTYPE html>
<html lang = "en">
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<title>I AM A WEB DEV</title>
		<link rel="stylesheet" type="text/css"href="style.css">
		<script src="js/jquery-3.5.1.min.js"></script>
</head>
<body>
	<nav class ="navbar">
		<div class="max-width">
			<div class="logo"><a href="#">I AM WEB<span>DEV</span></a></div>
		
		<ul class="menu">
			<li><a href="#about">About</a></li>
			<li><a href="#services">Services</a></li>
			<li><a href="#skills">Skills</a></li>
			<li><a href="#contact">Contact</a></li>
		</ul>
			<div class="menu-button">
				<img src="images/menu-burger.png">
			</div>
		</div>
	</nav>
	<!--Home Section-->
	<section class="home" id="home">
		<div class="max-width">
			<div class="home-content">
				<div class="text-1">Building You</div>
				<div class="text-2">Great Websites</div>
				<div class="text-3">That Sell</div>
				<a href="#">Learn More</a>
			</div>
		</div>
	</section>
	<!--About Section-->
	<section class="about" id="about">
		<div class="max-width">
		<h1 class="title">About</h1>
			<div class="about-content">
				<div class="column left">
				<img src="images/profile.JPG" alt="Man">
				</div>
					<div class="column right">
						<h2 class="text">We are ready to serve you.</h2>
		<p>we are so excited to inform you that <strong>I AM WEB DEV 2022</strong> are now ready to serve you, from the <b>design layout</b> to deploying your website online.
		We are specialize in <i>creating websites</i> that defines your brand and showcase your <em>company products and services on the internet</em>.</p>
					</div>
			</div>
	 	</div>
	</section>
	<!--services Section-->
	<section class="services" id="services">
		<div class="max-width">
		<h2 class="title">Our Services</h2>
			<div class="services-content">
				<div class="card">
					<div class="box">
						<img src="images/html5-brands.svg">
						<div class="text">HTML5</div>
							<p>We also provide Advertising Assistance just in case you need one as well as Web App Designs.</p>
					</div>
				</div>
				<div class="card">
					<div class="box">
						<img src="images/css3-brands.svg">
						<div class="text">CSS3</div>
							<p>We also provide Advertising Assistance just in case you need one as well as Web App Designs.</p>
					</div>
				</div>
				<div class="card">
					<div class="box">
						<img src="images/js-square-brands.svg">
						<div class="text">Javascript</div>
							<p>We also provide Advertising Assistance just in case you need one as well as Web App Designs.</p>
					</div>
				</div>
			</div>
		</div>	
	</section>
	<!--skills Section-->
        <section class="skills" id="skills">
				<div class="max-width">
					<h2 class="title">Skills</h2>
				
					<div class="skills-content">
						<div class="column left">
						<div class="text">Our Team Creative Skills & Development Experience</div>
						<p> Our team expertise majors in Web Development using HTML, 
						CSS, Javascript, PHP and MYSQL which are the primary languages that power the internet.
						We will make sure that your website is up to date and user friendly with simple interface easy to 
						navigate.</p>
						
						<a href="#">Read More</a>
						</div>
				 		<div class="column right">
					 		<div class="bar">
								<div class="info">
									<span>HTML5</span>
									<span>85%</span>
								</div>
								<div class="line html"></div>
							</div>
				 		
					 		<div class="bar">
								<div class="info">
									<span>CSS3</span>
									<span>95%</span>
								</div>
								<div class="line css"></div>
							</div>
							<div class="bar">
								<div class="info">
									<span>JavaScript</span>
									<span>95%</span>
								</div>
								<div class="line js"></div>
							</div>
							<div class="bar">
								<div class="info">
									<span>PHP</span>
									<span>95%</span>
								</div>
								<div class="line php"></div>
							</div>
							<div class="bar">
								<div class="info">
									<span>MYSQL</span>
									<span>95%</span>
								</div>
								<div class="line mysql"></div>
							</div>
						</div > 
					</div>
				</div>
	</section>
	<!--Contact Section-->
	<section class="contact" id="contact">
		<div class="max-width">
			<h2 class="title">Contact Us</h2>
			<div class="contact-content">
				<div class="column left">
					<div class="text">Get in touch today</div>
					<p>Putting a website is a really hard these days.But don't worry, we got you covered 
					All we need is some information about your business and we'll started right away.</p>
					
					<div class="icons">
						<div class="row">
							<img src="images/address-book-solid.svg">
							<div class="info">
								<div class="head">Company Name</div>
								<div class="sub-title">IAM WEBDEV CORP.</div>
							</div>
						</div>
						<div class="row">
							<img src="images/map-marked-alt-solid.svg">
							<div class="info">
								<div class="head">Address</div>
								<div class="sub-title">Manila,Philippines</div>
							</div>
						</div>
						<div class="row">
							<img src="images/envelope-open-text-solid.svg">
							<div class="info">
								<div class="head">Email Us</div>
								<div class="sub-title">villaruelviscount@gmail.com</div>
							</div>
						</div>
					</div>		
				</div>
				<div class="column right">
					<div class="text">Message Us</div>
						<hr>

					        <?php
                     
                            $message= "";
                            if(isset($_GET['error'])){

                               $message='Please fill int the blank';
                               echo '<div class="alert-danger">'.$message.'</div>';
                            }
                            if(isset($_GET['success'])){

                                $message='your message has been sent';
                                echo '<div class="alert-success">'.$message.'</div>';
                            }
					        ?>
					


						</hr>
					<form action="process.php">
						<div class="fields">
							<div class="field name">
								<input type="text" placeholder="Name" required="required">
							</div>
							<div class="field email">
								<input type="email" placeholder="Email" required="required">
							</div>
						</div>
						<div class="field">
							<input type="subject" placeholder="Subject" required>
						</div>
						<div class="field textarea">
							<textarea cols="30" rows="10" placeholder="Message" required></textarea>
						</div>
						<div class="button">
						<button type="submit">Send Message</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

<footer>
	<p>Developed by <span><a href="https://www.google.com/search?q=web+developer&rlz=1C1GCEA_enPH1033PH1033&oq=wevdev&aqs=chrome.1.69i57j0i10i433i512j0i10i433i457i512j0i402j0i10i512l6.12593j0j15&sourceid=chrome&ie=UTF-8" target="_blank">viscount villaruel</a></span> | &copy;2022 All Rights Reserved</p>
</footer>
<script src="js/scripts.js"></script>
</body>
</html>