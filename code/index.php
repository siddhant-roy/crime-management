<!DOCTYPE HTML>
<html>
	<head>
		<title>Crime Reporting</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
	<form method="post" action="index.php">
			<div id="wrapper">
					<header id="header" class="alt">
						<a href="index.html" class="logo"><strong>CRIME REPORTING</strong> <span>  </span></a>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

					<nav id="menu">
						<ul class="links">
							<li><a href="index.php">Home</a></li>
							<!--<li><a href="login.php">Login</a></li>
							<li><li><a href="generic.html">Generic</a></li>
							<li><a href="elements.html">Result</a></li>-->
						</ul>
						<ul class="actions stacked">
							<li><a href="report.php" class="button primary fit">Report</a></li>
							<li><a href="login.php" class="button fit">Login</a></li>
						</ul>
					</nav>

					<section id="banner" class="major">
						<div class="inner">
							<header class="major">
								<h1>Crime Reporting</h1>
							</header>
							<div class="content">
								<p>The way to the future<br />
								The chance to save lives</p>
								<ul class="actions">
									<li><a href="#one" class="button next scrolly">Get Started</a></li>
								</ul>
							</div>
						</div>
					</section>

					<div id="main">
							<section id="one" class="tiles">
								<article>
									<span class="image">
										<img src="images/pic01.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="index.html" class="link">Crime Reporting System</a></h3>
										<h4>Using PHP and MySQL</h4>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/pic02.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="index.html" class="link">Categories</a></h3>
										<h4>
											<ul style="list-style-type:none;">
												<li><strong>Against IPC</strong></li>
												<li><strong>Against SC</strong></li>
												<li><strong>Against ST</strong></li>
												<li><strong>Against Children</strong></li>
												<li><strong>Against Women</strong></li>
										    </ul>
										</h4>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/pic03.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="index.html" class="link">Features</a></h3>
										<h4>
											1) Report crime<br>
											2) Search based on various factors<br>
											3) Add/Modify criminal data
										</h4>
									</header>
									
								</article>
								<article>
									<span class="image">
										<img src="images/pic04.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="index.html" class="link">Creator</a></h3>
										<h4>
											<ul style="list-style-type:none;">
												<li><strong>Siddhant Roy</strong></li>
												<li><strong>19BCE1181</strong></li>
												<!--<li><strong>Aditi Agarwal</strong></li>
												<li><strong>Shreya Agarwal</strong></li>-->
										    </ul>
										</h4>
									</header>
								</article>
								
							</section>

						<!-- Two -->
							<!--<section id="two">
								<div class="inner">
									<header class="major">
										<h2>Let's begin</h2>
									</header>
									<h3>Choose the category :</h3>
									<select name=”category” id=”category” class=”form-control”>
										<option>--------------------------------------------------------------------------------------<strong>Select Category</strong>----------------------------------------------------------------------------------------</option>
										<option value=”IPC”>IPC</option>
										<option value=”SC”>SC</option>
										<option value=”ST”>ST</option>
										<option value=”Children”>Children</option>
										<option value=”Women”>Women</option>																			
									</select>
									<p>

									</p>
									<h3>Choose the state :</h3>
									<select name=”state” id=”state” class=”form-control”>
										<option>----------------------------------------------------------------------------------------<strong>Select State</strong>----------------------------------------------------------------------------------------</option>
										<option value=”AndhraPradesh”>Andhra Pradesh</option>
										<option value=”AndamanandNicobarIslands”>Andaman and Nicobar Islands</option>
										<option value=”ArunachalPradesh”>Arunachal Pradesh</option>
										<option value=”Assam”>Assam</option>
										<option value=”Bihar”>Bihar</option>
										<option value=”Chandigarh”>Chandigarh</option>
										<option value=”Chhattisgarh”>Chhattisgarh</option>
										<option value=”DadarandNagarHaveli”>Dadar and Nagar Haveli</option>
										<option value=”DamanandDiu”>Daman and Diu</option>
										<option value=”Delhi”>Delhi</option>
										<option value=”Lakshadweep”>Lakshadweep</option>
										<option value=”Puducherry”>Puducherry</option>
										<option value=”Goa”>Goa</option>
										<option value=”Gujarat”>Gujarat</option>
										<option value=”Haryana”>Haryana</option>
										<option value=”HimachalPradesh”>Himachal Pradesh</option>
										<option value=”JammuandKashmir”>Jammu and Kashmir</option>
										<option value=”Jharkhand”>Jharkhand</option>
										<option value=”Karnataka”>Karnataka</option>
										<option value=”Kerala”>Kerala</option>
										<option value=”MadhyaPradesh”>Madhya Pradesh</option>
										<option value=”Maharashtra”>Maharashtra</option>
										<option value=”Manipur”>Manipur</option>
										<option value=”Meghalaya”>Meghalaya</option>
										<option value=”Mizoram”>Mizoram</option>
										<option value=”Nagaland”>Nagaland</option>
										<option value=”Odisha”>Odisha</option>
										<option value=”Punjab”>Punjab</option>
										<option value=”Rajasthan”>Rajasthan</option>
										<option value=”Sikkim”>Sikkim</option>
										<option value=”TamilNadu”>Tamil Nadu</option>
										<option value=”Telangana”>Telangana</option>
										<option value=”Tripura”>Tripura</option>
										<option value=”UttarPradesh”>Uttar Pradesh</option>
										<option value=”Uttarakhand”>Uttarakhand</option>
										<option value=”WestBengal”>West Bengal</option>
									</select>
									<p>

									</p>
									<h3>Choose the crime :</h3>
									<select name=”ipc” id=”ipc” class=”form-control”>
										<option><strong>Select IPC crime</strong></option>
										<option value=”1”>MURDER</option>
										<option value=”2”>RAPE</option>
										<option value=”3”>KIDNAPPING & ABDUCTION</option>
										<option value=”4”>DACOITY</option>
										<option value=”5”>ROBBERY</option>
										<option value=”6”>THEFT</option>
										<option value=”7”>COUNTERFIETING</option>
										<option value=”8”>ARSON</option>
										<option value=”9”>HURT/GREIVOUS HURT</option>
										<option value=”10”>ASSAULT ON WOMEN WITH INTENT TO OUTRAGE HER MODESTY</option>
										<option value=”11”>INSULT TO MODESTY OF WOMEN</option>
										<option value=”12”>CRUELTY BY HUSBAND OR HIS RELATIVES</option>
										<option value=”13”>IMPORTATION OF GIRLS FROM FOREIGN COUNTRIES</option>
										<option value=”14”>OTHER IPC CRIMES</option>
										<option value=”15”>TOTAL IPC CRIMES</option>																		
									</select>
									<p>

									</p>
									<select name=”sc” id=”sc” class=”form-control”>
										<option><strong>Select SC crime</strong></option>
										<option value=”1”>MURDER</option>
										<option value=”2”>RAPE</option>
										<option value=”3”>KIDNAPPING AND ABDUCTION</option>
										<option value=”4”>DACOITY</option>
										<option value=”5”>ROBBERY</option>
										<option value=”6”>ARSON</option>
										<option value=”7”>HURT</option>
										<option value=”8”>PREVENTION OF ATROCITIES (POA) ACT</option>
										<option value=”9”>PROTECTION OF CIVIL RIGHTS (PCR) ACT</option>
										<option value=”10”>OTHER CRIMES AGAINST SCs</option>																			
									</select>
									<p>

									</p>
									<select name=”st” id=”st” class=”form-control”>
										<option><strong>Select SC crime</strong></option>
										<option value=”1”>MURDER</option>
										<option value=”2”>RAPE</option>
										<option value=”3”>KIDNAPPING AND ABDUCTION</option>
										<option value=”4”>DACOITY</option>
										<option value=”5”>ROBBERY</option>
										<option value=”6”>ARSON</option>
										<option value=”7”>HURT</option>
										<option value=”8”>PREVENTION OF ATROCITIES (POA) ACT</option>
										<option value=”9”>PROTECTION OF CIVIL RIGHTS (PCR) ACT</option>
										<option value=”10”>OTHER CRIMES AGAINST STs</option>																			
									</select>
									<p>

									</p>
									<select name=”children” id=”children” class=”form-control”>
										<option><strong>Select Children crime</strong></option>
										<option value=”1”>MURDER</option>
										<option value=”2”>RAPE</option>
										<option value=”3”>KIDNAPPING AND ABDUCTION</option>
										<option value=”4”>FOEITICIDE</option>
										<option value=”5”>ABETMENT OF SUICIDE</option>
										<option value=”6”>EXPOSURE AND ABANDONMENT</option>
										<option value=”7”>PROCURATION OF MINOR GIRLS</option>
										<option value=”8”>BUYING OF GIRLS FOR PROSTITUTION</option>
										<option value=”9”>SELLING OF GIRLS FOR PROSTITUTION</option>
										<option value=”10”>PROHIBITION OF CHILD MARRIAGE ACT</option>
										<option value=”11”>OTHER CRIMES</option>																			
									</select>
									<p>

									</p>
									<select name=”women” id=”women” class=”form-control”>
										<option><strong>Select Women crime</strong></option>
										<option value=”1”>MURDER</option>
										<option value=”2”>RAPE</option>
										<option value=”3”>KIDNAPPING AND ABDUCTION</option>
										<option value=”4”>DOWRY DEATHS</option>
										<option value=”5”>ASAAULT ON WOMEN WITH INTENT TO OUTRAGE HER MODESTY</option>
										<option value=”6”>CRUELTY BY HUSBAND OR HIS RELATIVES</option>
										<option value=”7”>IMPORTATION OF GIRLS</option>																		
									</select>
									<p>

									</p>
									<ul class="actions">
										<li><a class="button next"><input type="submit" value="show result"></a></li>
									</ul>
								</div>
							</section>
							<section id="three">
								<div class="inner">
									<h3>Choose  the region :</h3>
									<select name=”region” id=”region” class=”form-control”>
										<option>----------------------------------------------------------------------------------------<strong>Select Region</strong>----------------------------------------------------------------------------------------</option>
										<option value=”North”>North India</option>
										<option value=”South”>South India</option>
										<option value=”North”>East India</option>
										<option value=”West”>West India</option>
										<option value=”North”>North-East India</option>
										<option value=”North”>East India</option>
										<option value=”North”>Arabian Sea</option>
										<option value=”North”>Bay of Bengal</option>										
									</select>
									<p>

									</p>
									<ul class="actions">
										<li><a  href="index.html" class="button next">Show Result</a></li>
									</ul>
								</div>
							</section>

					</div>-->
					

					<!-- <section id="contact">
						<div class="inner">
							<section>
								<form method="post" action="#">
									<div class="fields">
										<div class="field half">
											<label for="name">Name</label>
											<input type="text" name="name" id="name" />
										</div>
										<div class="field half">
											<label for="email">Email</label>
											<input type="text" name="email" id="email" />
										</div>
										<div class="field">
											<label for="message">Message</label>
											<textarea name="message" id="message" rows="6"></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send Message" class="primary" /></li>
										<li><input type="reset" value="Clear" /></li>
									</ul>
								</form>
							</section>
							<section class="split">
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-envelope"></span>
										<h3>Email</h3>
										<a href="#">xyz@crimereporting.com</a>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-phone"></span>
										<h3>Phone</h3>
										<span>+91 XXXXX XXXXX</span>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-home"></span>
										<h3>Address</h3>
										<span>VIT Chennai<br />
										Tamil Nadu 600127<br />
										India</span>
									</div>
								</section>
							</section>
						</div>
					</section> -->

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<ul class="icons">
								<li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
								<li><a href="#" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
							</ul>
							<ul class="copyright">
								<li>Design: Siddhant Roy</a></li>
							</ul>
						</div>
					</footer>

			</div>
			<!--Siddhant Roy-->


			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
	</body>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7780.061520113013!2d80.15233332368545!3d12.841288813765761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5259af5ab160bb%3A0xddf811fe7206814e!2sVIT%20Academic%20Block%201!5e0!3m2!1sen!2sin!4v1589494524944!5m2!1sen!2sin" width="100%" height="400" frameborder="20" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</html>