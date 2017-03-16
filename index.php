<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Project Comments -->
		<!-- This website features a small property maintenance company which is local to me. This website is targeting homeowners and small businesses requiring property maintenance either on a as needed or regular basis. -->
		<!-- Original Website: http://www.propertyworkz.ca/about.html -->

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Property Workz - Professional Property Maintenance</title>

		<meta name="description" content="Property maintenance for less. Professional property care for residential and commercial needs covering a range of services.">
		<meta name="keywords" content="Property Maintenance, Grass Cutting, Lawn Mowing, Weed Whipping, Tree Removal, Stump Removal">
		<meta name="author" content="Mathew Seifried">

        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
		<link rel="stylesheet" href="assets/stylesheets/normalize.css">

		<link rel="stylesheet" href="assets/stylesheets/slick/slick.css">
		<link rel="stylesheet" href="assets/stylesheets/slick/slick-theme.css">
		<link rel="stylesheet" href="assets/stylesheets/custom.css">
        <link rel="stylesheet" href="assets/stylesheets/font-awesome/css/font-awesome.min.css">
	</head>

	<body>
		<header>
            <div>
                <div id="mobile-nav-bar" class="mobile-only">
                    <a href="tel:519-943-2206"><i class="fa fa-phone" aria-hidden="true"></i></a>
                    <a href="" id="open-nav-button" title="Open navigation" role="button" aria-pressed="false"><i class="fa fa-bars"></i></a>
                </div>

                <nav id="main-nav" role="navigation">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#work">Our Work</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </nav>
            </div>

            <div>
               <h1>
                   <img src="assets/images/logo.png" alt="Property Workz">
               </h1>
            </div>
		</header>

        <div id="ss-banner-container">
            <div id="slick-slideshow-banner" role="banner">
                <img src="http://placehold.it/350x350">
                <img src="http://placehold.it/350x350">
                <img src="http://placehold.it/350x350">
            </div>

            <a href="#contact">Message Us</a>
        </div>

        <main role="main">
            <section id="about">
                <h2>We Are <span>Property Workz</span></h2>
                <p>Since 2011 we have been providing residential and commercial property care to hundreds of customers across southern Ontario. We provide numerous services to suit your property's needs, whether it is weekly lawn care, tree removal or pressure washing, we will get the job done. We work with your schedule and aim to provide the same high standard of detail to each customer no matter the job.</p>
                <h3>Serving Southern Ontario</h3>
                <ul>
                    <li>Brampton</li>
                    <li>Caledon</li>
                    <li>Erin</li>
                    <li>Georgetown</li>
                    <li>Guelph</li>
                    <li>Orangeville</li>
                </ul>
            </section>

            <section id="services">
                <h2>Services</h2>

                <div class="service-block">
                    <h3>Lawn Care</h3>
                    <p>Scheduled lawn care services to suit your needs. Whether it is twice a week or once every other week we will keep your lawn looking beautiful. Lawn mowing, weed whipping, watering, aerating and rolling are just some of our lawn care services. </p>
                </div>

                <div class="service-block">
                    <h3>Gardening & Landscaping</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>

                <div class="service-block">
                    <h3>Power Washing</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>

                <div class="service-block">
                    <h3>Not What You Were Looking For?</h3>
                    <p>Didn't see what you were looking for in terms of services? Send us a message explaining your needs and we will do our best to get the job done.</p>
                </div>
            </section>
        </main>

        <section id="instafeed-section">
            <h2>See Some of Our Work</h2>
            <small> to view on Instagram</small>

            <div id="instafeed">
            <!-- Populated via JS -->
            </div>
            <small></small>
        </section>

            <section id="testimonials" role="complementary">
                <h2>Testimonials</h2>

                <div id="slick-slideshow-testimonials">
                    <blockquote cite="John Doe" class="testimonial-slider">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br><span>- John Doe</span>
                    </blockquote>

                    <blockquote cite="John Doe" class="testimonial-slider">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br><span>- John Doe</span>
                    </blockquote>

                    <blockquote cite="John Doe" class="testimonial-slider">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br><span>- John Doe</span>
                    </blockquote>
                </div>
            </section>

            <section id="contact">
                <div>
                    <form id="contact-form" action="index" method="post">
                        <h2>Contact Us</h2>
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input id="name" type="text" name="name" required>
                        </div>

                        <div class="form-group">
                            <label for="subject">Subject:</label>
                            <input id="subject" type="text" name="subject" required>
                        </div>

                        <div class="form-group">
                            <label for="message">Message:</label>
                            <textarea id="message" name="message" required></textarea>
                        </div>

                        <div class="form-group">
                            <p class="form-err"></p>
                            <p class="form-message"></p>
                        </div>

                        <div class="form-group">
                            <button id="contact-form-submit" type="submit" name="contact-form-submit">Send</button>
                        </div>
                    </form>

                    <div>
                        <h3>Follow Us Online</h3>
                        <ul>
                            <li><a href="https://www.facebook.com/propertyworkz" title="Property Workz on Facebook"><img src="assets/images/facebook.png" alt=""><span>/propertyworkz</span></a></li>
                            <li><a href="https://www.instagram.com/propertyworkz/" title="Property Workz on Instagram"><img src="assets/images/instagram.png" alt=""><span>@propertyworkz</span></a></li>
                        </ul>
                    </div>
                </div>
            </section>

		<footer role="contentinfo">
            <small>&copy;<?php echo date("Y"); ?> Property Workz</small>
            <small>Website by <a href="www.mathew.codes">Mathew Seifried</a></small>
		</footer>

		<!-- Scripts -->
		<script type="text/javascript" src="assets/javascripts/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="assets/javascripts/slick.min.js"></script>
        <script type="text/javascript" src="assets/javascripts/instafeed.min.js"></script>
		<script type="text/javascript" src="assets/javascripts/custom.js"></script>
	</body>
</html>
