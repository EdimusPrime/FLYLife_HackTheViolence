<?php /* Template Name: App Landing Page */ ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FLY Life App</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Permanent+Marker|Poppins:300,400,700,900" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/landingPageCSS/style.css">
</head>
<body>
	<div class="header col-md-12 yapiskan">
			<div class="nav_logo  col-md-4">
				<img src="http://theflylife.org/wp-content/uploads/2017/02/FLYLife-White-Mini-1.png">
			</div>

			<div class="nav_tabs col-md-5">
				<a href="http://theflylife.org/"><p>HOME</p></a>
				<a href="http://theflylife.org/about/"><p>ABOUT</p></a>
				<a href="http://theflylife.org/team/"><p>TEAM</p></a>
				<a href="http://theflylife.org/curriculum/"><p>CURRICULUM</p></a>
				<a href="http://theflylife.org/app"><p>APP</p></a>
				<a href="http://theflylife.org/videos/"><p>VIDEOS</p></a>
				<a href="http://theflylife.org/album/flylife/"><p>PHOTOS</p></a>
				<a href="http://theflylife.org/donate/"><p>DONATE</p></a>
				<a href="http://theflylife.org/contact/"><p>CONTACT</p></a>
			</div>
	</div>

	<div class="main">

		<div class="my-container app">
			<div class="my-container app_text col-md-12">

				<h1 id="fly_title">FLY Life App</h1>

			</div>

		</div>
	</div>

	<div class="my-container features" id="features">

		<div class="features_pics col-md-6">
			<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/landingImages/carousel-ish.png">
		</div>

		<div class="features_text col-md-6">		
			<h1>FLY Life App </h1>
			<h3 >Being a girl today can be difficult. The challenges don’t stop at school or home. The FLY Life App is here to help make things easier with instant-messaging mentorship, inspirational posts, and so much more.</h3>
		
		</div>
	</div>

	<div class="fly" id="break">
		<img src="http://flymusiq.com/wp-content/uploads/2016/04/Fly-Girls-Rock-1.0x.png">
	</div>

	<div class="main my-container features features_list">


			<div class="features_pics col-md-6">
				<img class="img-responsive " src="<?php echo get_stylesheet_directory_uri(); ?>/images/landingImages/carousel-ish2.png">
			</div>

			<div class="features_list_items col-md-6">

					<li>100% Free 
					<li>Message trained mentors </li>
					<li>Inspirational posts </li>
					<li>Safe, online community  </li>
					<li>Access to emergency contacts</li>

			</div>
			
	</div>

	<div class="fly" id="break">
		<img src="http://theflylife.org/wp-content/uploads/2016/03/F.L.Y.-Graphic-1.1x.png">
	</div>

	<div class="my-container contact col-md-12 text-center">

		<h1 class="call_text">Check us out</h1>
			<h3 class="sign_up">Sign up to be one of the first to know when the FLY Life App launches </h3>

		<div class="download_app img-responsive col-md-10">

			<!-- Download Now Images -->
			<!-- <a target="_blank" href="https://www.apple.com/ios/app-store/"><img class="appleStore" src="http://pluspng.com/img-png/download-on-app-store-png-with-without-wifi-or-data-2000.png" height="70px" width="200px"></a> -->


			<!-- Comming Soon Images -->
			<a target="_blank" href="https://www.apple.com/ios/app-store/"><img class="appleStore" src="https://sirvo.com/wp-content/uploads/2016/12/comingsoon_apple.png" height="70px" width="200px"></a>

			<!-- Download Now Images -->
			<!-- <a target="_blank" href="https://play.google.com/store/apps?hl=en"><img class="androidStore" src="http://tulischools.com/img/icons/androidappstore.png" height="70px" width="200px"></a> -->


			<!-- Comming Soon Images -->
			<a target="_blank" href="https://play.google.com/store/apps?hl=en"><img class="androidStore" src="http://ogunfolabi.org/icons/coming_soon.png" height="70px" width="200px"></a>
		</div>

				<div class="container box">
					<div class="col-md-8">
    					<div class="form-area">  
        					<form role="form">
        						<br style="clear:both">
                 
    								<div class="form-group">
										<input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
									</div>

									<div class="form-group">
										<input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
									</div>

									<div class="form-group">
										<input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" required>
									</div>

									<label for="position">I am Interested in...</label>
				    				<select id="position" name="position">
      									<option value="flygirl">Being a Flygirl</option>
      									<option value="mentor">Being a Mentor</option>
      									<option value="sponsor">Being a Sponsor</option>
      									<option value="app">App Update</option>
      									<option value="info">More Info</option>
      									<option value="other">Other </option>
				    				</select>

                    				<div class="form-group">
                    					<textarea class="form-control" type="textarea" id="message" placeholder="Any further questions?" rows="7"></textarea>
                    				</div>
            
        							<button type="button" id="submit myBtn" name="submit" class="btn pull-right">Submit</button>
        					</form>
    					</div>
					</div>
				</div>
			</div>
	</div>

	<div class="footer">

		<div>

			<div class="foot-content clearfix">
				<div id="text-2" class="widget widget_text">
					<h3 class="title">
						<span>FLY Life</span>
					</h3>			
						<div class="textwidget">
							<p>FLY Life Inc. is a 501(c)(3) organization with a mission to empower girls to be FLY inside out. We do this by providing curriculum, conferences, and mentorship for girls ages 8 to 18 in the areas of identity, character, and purpose.</p>
						</div>
				</div>

				<div id="text-5" class="widget widget_text">
					<h3 class="title">
						<span>FLY Life Chapters</span>
					</h3>			
					<div class="textwidget">

						FLY Life Inc. has developed an intensive after-school program curriculum aimed at helping young women attending schools in low-income areas improve their chances for success through the development of resiliency and leadership skills.
					</div>
				</div>

				<div id="text-6" class="widget widget_text">
					<h3 class="title">
						<span>FLY Life Conference</span>
					</h3>			

					<div class="textwidget">

						Our annual Fly Life Girls’ Conference creates an environment that uplifts and inspires through workshops, performances and guest speakers. With an average of 400 young ladies in attendance, our goal is to empower high school aged youth to be fly inside and out.
					</div>
				</div>
			</div>

		</div>

		<div class="f-links">
			<div class="socials circles white white_hover">
				<a target="_blank" href="http://facebook.com/flylifeorg" class="a13_soc-facebook fa fa-facebook" > <img id="facebook" src="https://cdn3.iconfinder.com/data/icons/free-social-icons/67/facebook_circle_gray-512.png" height="30px" width="30px">
				</a>
				<a target="_blank" href="http://instagram.com/flylifeorg" class="a13_soc-instagram fa fa-instagram"> <img id="ig" src="https://cdn3.iconfinder.com/data/icons/free-social-icons/67/instagram_circle_gray-512.png" height="30px" width="30px">
				</a>
				<a target="_blank" href="http://twitter.com/flylifeorg" class="a13_soc-twitter fa fa-twitter"> <img id="twitter" src="https://ususa.usu.edu/images/twitter-icon.png" height="30px" width="30px">
				</a>	
			</div>
		</div>

	</div> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/landingPageJS/index.js"></script>
</body>
</html>