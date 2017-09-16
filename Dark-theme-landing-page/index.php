<!DOCTYPE html>
	<html>
		<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		
		<title>Template</title>
			
		<link href="css/custom.css" rel="stylesheet" type="text/css" />
		
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="js/custom.js" type="text/javascript"></script>	
	<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="js/jquery.validate.min.js"></script>
		<script type="text/javascript">
		$(document).ready(function() {
				
			// jQuery Validation
			$("#signup").validate({
				// if valid, post data via AJAX
				submitHandler: function(form) {
					$.post("subscribe.php", { fname: $("#fname").val(), lname: $("#lname").val(), email: $("#email").val(), wname: $("#wname").val() }, function(data) {
						$('#response').html(data);
					});
				
					
				},
				// all fields are required
				rules: {
					fname: {
						required: true
					},
					lname: {
						required: true
					},
					email: {
						required: true,
						email: true
					},
					wname: {
						required: true
					}
				}
			});
			
				});

		$(document).ready(function() {
			//Second form
		$("#signup2").validate({
				// if valid, post data via AJAX
				submitHandler: function(form) {
				//	alert($("#ffname").val());
					$.post("subscribe.php", { fname: $("#ffname").val(), lname: $("#llname").val(), email: $("#eemail").val(), wname: $("#wwname").val() }, function(data) {
						$('#response2').html(data);
					});
				
					
				},
				// all fields are required
				rules: {
					fname: {
						required: true
					},
					lname: {
						required: true
					},
					email: {
						required: true,
						email: true
					},
					wname: {
						required: true
					}
				}
			});
		
		
		
		
		});
		
	</script>
		
		</head>
		
		<body>	
			<header>
				<div class="navbar-wrap">
					<div class="navbar-left">
						<div class="navbar-logo"></div>
					</div>
					
					<div class="navbar-right">
						<div class="navbar-sub-right">
							<ul class="flag">
								<img  src="img/Australia.png" />
							</ul>
						</div>
					</div>
				</div>
			</header>
		
		
			<div class="main-landing-wrapper">
				<div class="main-container">
						<h1 class="main-container-title">MONETIZE <i>YOUR</i> INFLUENCE</h1>
						<form class="formee news-letter-form" id="signup" action="subscribe.php" method="post">
							
							<div class="input-fields">
								<input 	required="" class="email-field 	  ng-invalid-required" name="email" id="email"  placeholder="Email Address" ng-required="true" type="email"		>
								<input 	required="" class="username-field ng-invalid-required" name="fname" id="fname" 	placeholder="First Name"  	ng-required="true" type="text"		>
								<input  required="" class="lastname-field ng-invalid-required" name="lname" id="lname"  placeholder="Last Name"   	ng-required="true" type="text"		>	
								<input  required="" class="web-field	  ng-invalid-required" name="wname" id="wname"  placeholder="Website"  		ng-required="true" type="text"	>	

								<button class="right inputnew sign-up-button text-scope" type="submit"  ng-click="signup()" translate="" >Sign Up</button>														

							</div>
						</form>
						<div id="response"></div>
						
					<div class="actions-information text-scope">Already have an account? <a href="#" translate="" class="scope" >Log in here</a></div>
					
					<div class="legal-requirements text-scope" ng-bind-html="legalMessage">By entering your email address, you are agreeing to our 
						<a href="#" target="_blank" >Terms of Service</a>, 
						<a href="#" target="_blank">Privacy Policy</a>, and to receive emails from POPSUGAR Inc. (owner and operator of ShopStyle Collective).
					</div>
					
						
				</div>
				
				<div>
					<div class="text-banner">
						<div class="column-1"> 
							<div class="money">
								<h3 class="heading3">SHOPSTYLE.IT</h3>
								<p class="text-scope">With ShopStyle.it, Instagrammers who “‘like”’ your photos will receive a shoppable email detailing your full look.</p>
							</div>
						</div>
		
						<div class="column-1">
							<div class="brand">
								<h3 class="heading3">SOCIAL MEDIA</h3>
								<p class="text-scope">Post your favorite products to Facebook, Pinterest, and Twitter. Get paid when your followers shop.</p>
							</div>
						</div>
						
						<div class="column-1">
							<div class="revenue">
								<h3 class="heading3">BLOG YOUR STYLE</h3>
								<p class="text-scope">Produce and publish custom content with our specialized tools — optimized for every CMS, even video players.</p>
							</div>
						</div>
						
					</div>
					
					<div class="text-blogging">
						<div class="blog-main-holder">
							<h2 class="heading2 heading2-color">PARTNER WITH THOUSANDS OF BRANDS</h2>
							<p class="text-scope">Harness the power of ShopStyle and take advantage of competitive affiliate rates with your favorite brands and retailers.</p>
							<div class="blog-tools">
								<div><img src="img/widget.jpg"></div>
								<div><img src="img/api.jpg"></div>
								<div><img src="img/LinkStar.jpg"></div>
							</div>
						</div>
					</div>
					
					<div class="dashboard-main-holder">
						<div class="dashboard">
							<h2 class="heading2">ANALYTICS</h2>
							<p class="text-scope"> Use helpful tools like LinkIt, customizable widgets, and video-tagging technology to engage your audience and build shoppable content.</p>
							<table>
								<tr>
									<td>
										<img class="responsive-images" src="img/stats.png"/>
									</td>
									
									<td>
										<img class="responsive-images" src="img/pie.jpg"/>
										<p>Track performance, earned revenue, and highest-converting products through your own dashboard.</p>
									</td>
								</tr>
							</table>
						</div>
					</div>
					
					<div class="sign-in-bottom">
						<form class="formee news-letter-form" id="signup2" action="subscribe.php" method="post">
							
							<div class="input-fields">
								<input 	required="" class="email-field 	  ng-invalid-required" name="email" id="eemail"  placeholder="Email Address" ng-required="true" type="email"		>
								<input 	required="" class="username-field ng-invalid-required" name="fname" id="ffname" 	placeholder="First Name"  	ng-required="true" type="text"		>
								<input  required="" class="lastname-field ng-invalid-required" name="lname" id="llname"  placeholder="Last Name"   	ng-required="true" type="text"		>	
								<input  required="" class="web-field	  ng-invalid-required" name="wname" id="wwname"  placeholder="Website"  		ng-required="true" type="text"	>	
									
								<button class="right inputnew sign-up-button text-scope" type="submit"  ng-click="signup()" translate="" >Sign Up</button>														

							</div>
						</form>
						<div id="response2"></div>
					</div>
				</div>			
			</div>
			
			<footer class="footer-fullscreen text-scope">
			
			<a class="text-scope" href="#" translate="">API</a> 
			<a class="text-scope" href="#" translate="">Help &amp; FAQ</a>
			<a class="text-scope" href="#" translate="">Privacy</a>
			<a class="text-scope" href="#" translate="">Contact</a>
			<a class="text-scope" href="#" translate="">Terms</a> 
			
			
			</footer>
			



						


		</body>
	
	
	</html>