<?php
include "admin/database/connection.php";
?>
<!doctype html>
<html class="no-js" lang="">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>West Asia Group | Tours</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- favicon
		============================================ -->		
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
		
		<!-- Google Fonts
		============================================ -->		
       
	   
		<!-- Bootstrap CSS
		============================================ -->		
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Bootstrap CSS
		============================================ -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- owl.carousel CSS
		============================================ -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/owl.transitions.css">
		<!-- jquery-ui CSS
		============================================ -->
        <link rel="stylesheet" href="css/jquery-ui.css">
		<!-- meanmenu CSS
		============================================ -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
		<!-- animate CSS
		============================================ -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- normalize CSS
		============================================ -->
        <link rel="stylesheet" href="css/normalize.css">
		<!-- Flat Icon CSS
		============================================ -->
        <link rel="stylesheet" href="css/flaticon.css">

		<!-- lightsldier CSS
		============================================ -->
        <link rel="stylesheet" href="css/lightslider.css">
		
		<!-- nivo slider CSS
		============================================ -->
		<link rel="stylesheet" href="lib/custom-slider/css/nivo-slider.css" type="text/css" />
		<link rel="stylesheet" href="lib/custom-slider/css/preview.css" type="text/css" media="screen" />
		<!-- main CSS
		============================================ -->
        <link rel="stylesheet" href="css/main.css">
		<!-- Fancybox CSS
		============================================ -->
        <link rel="stylesheet" href="lib/fancybox/jquery.fancybox.css">
		<!-- style CSS
		============================================ -->
        <link rel="stylesheet" href="style.css">
		<!-- responsive CSS
		============================================ -->
        <link rel="stylesheet" href="css/responsive.css">
		<!-- modernizr JS
		============================================ -->		
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body class="room-page">
       
		<!-- Header Area Start Here -->
        <?php include("includes/nav.php"); ?>
        <!-- Header Area End Here -->
        <!-- bennar Section Start Here-->
		<div class="header-bennar-area">
			<div class="bennar-content">				
				<h2>All Tour</h2>
				<p>Where do you want to go?</p>
			</div>
		</div>
		<!-- bennar Section End Here-->
		<!-- Breadcump Area Start Here -->
		<div class="breadcumb-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="breadcumb">
							<ul>
								<li> <a href="index.php"><i class="fa fa-home"></i>Home</a> </li>
								<li><a href="room1.html"><i class="fa fa-angle-right"></i>Tour</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Breadcump Area End Here -->
		<!-- Room Three Version area start here -->
		<div class="room-verstion-three-area">
			<div class="container">
				<div class="row">
					  <?php
					   $query=$conn->from('main_tour');
					   $tour=$query->fetchAll();

					   		foreach ($tour as $key) 
					   		{
					   			?>
					   		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
								<div class="single-rooms-version-three-area">
									<div class="feature-images">
										<a href="single_tour.php?id=<?=$key['t_id']?>"><img src="admin/upload/<?=$key['tour_image']?>" alt="images"></a>
									</div>
									<h2><a href="single_tour.php?id=<?=$key['t_id']?>"><?=$key['tour_name']?></a></h2>
									<p><?=$key['tour_caption']?> </p>
									<div class="veiw-room"><a href="single_tour.php?id=<?=$key['t_id']?>">View Tour</a></div>
								</div>
							</div>
					
					   			<?php
					   		}

					  ?>
					
				</div>
			</div>
		</div>
		<!-- Room Three Version area end here -->
		<?php include("includes/general.php"); ?>
		<!-- Footer area start here -->
		<?php include("includes/footer.php"); ?>
		<!-- Footer area End here -->

		<!-- Modal -->
		<div class="modal fade" id="myModal" role="dialog">
		  <div class="modal-dialog">    
		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button> 
		        <h4 class="modal-title">Booking Room</h4>         
		      </div>
		      <div class="modal-body">
		        <form>
		        	<fieldset>
		        	<div class="col-sm-12">
		        		<div class="form-group">
		        		  <label class="required"><em>*</em>Select Room</label>
		        		  <div class="input-box">
		        		    <select title="State/Province" class="validate-select required-entry">
		        		      <option value="1">Single Room</option>
		        		      <option value="2">Double Room</option>
		        		      <option value="3">Deluxe Single Room</option>
		        		      <option value="3">Deluxe Double Room</option>
		        		    </select>
		        		  </div>
		        		</div>
		        	</div>
		        	<div class="col-sm-6">
		        		<div class="form-group">
		        			<label class="required"><em>*</em>Check In Date</label>
		        			<input type="text" class="form-control" placeholder="Check In Date*">
		        		</div>
		        	</div>
		        	<div class="col-sm-6">
		        		<div class="form-group">
		        			<label class="required"><em>*</em>Check Out Date</label>
		        			<input type="text" class="form-control" placeholder="Check Out Date*">
		        		</div>
		        	</div>
		        	<div class="col-sm-6">
		        		<div class="form-group">
		        			<label class="required"><em>*</em>Your Name</label>
		        			<input type="text" class="form-control" placeholder="Your Name*">
		        		</div>
		        	</div>
		        	<div class="col-sm-6">
		        		<div class="form-group">
		        			<label class="required"><em>*</em>Number of Person</label>
		        			<input type="text" class="form-control" placeholder="Number of Person*">
		        		</div>
		        	</div>
		        	<div class="col-sm-6">
		        		<div class="form-group">
		        			<label class="required"><em>*</em>Your Mail</label>
		        			<input type="text" class="form-control" placeholder="Your Mail*">
		        		</div>
		        	</div>
		        	<div class="col-sm-6">
		        		<div class="form-group">
		        			<label class="required"><em>*</em>Your Phone</label>
		        			<input type="text" class="form-control" placeholder="Your Phone*">
		        		</div>
		        	</div>
		        	<div class="col-sm-12">
		        		<div class="form-group">
		        			<label class="required">Your Message</label>
		        			<textarea cols="70" rows="10" class="textarea form-control" placeholder="Your Message"></textarea>
		        		</div>
		        	</div>
		        	<div class="col-sm-12">
		        		<div class="form-group btn-send">
		        			<a href="#" class="btn-send" >Book Now </a>
		        		</div>
		        	</div>
		        	</fieldset>
		        </form>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div>      
		  </div>
		</div>
		<!-- jquery
		============================================ -->		
        <script src="js/vendor/jquery-1.11.3.min.js"></script>
		<!-- bootstrap JS
		============================================ -->		
        <script src="js/bootstrap.min.js"></script>
		<!-- wow JS
		============================================ -->
		<!-- Nivo slider js
		============================================ --> 		
		<script src="lib/custom-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
		<script src="lib/custom-slider/home.js" type="text/javascript"></script>		
		<!-- meanmenu JS
		============================================ -->		
        <script src="js/jquery.meanmenu.js"></script>
		<!-- Lightslider JS
		============================================ -->		
        <script src="js/lightslider.js"></script>
		<!-- owl.carousel JS
		============================================ -->		
        <script src="js/owl.carousel.min.js"></script>   
		<!-- Google Map js -->
        <script src="https://maps.googleapis.com/maps/api/js"></script>
	        <script>
	        function initialize() {
	        var mapOptions = {
	        zoom: 15,
	        scrollwheel: false,
	        center: new google.maps.LatLng(-37.81618, 144.95692)
	        };

	        var map = new google.maps.Map(document.getElementById('googleMap'),
	          mapOptions);


	        var marker = new google.maps.Marker({
	        position: map.getCenter(),
	        animation:google.maps.Animation.BOUNCE,
	        icon: 'img/map-marker.png',
	        map: map
	        });

	        }

	        google.maps.event.addDomListener(window, 'load', initialize);
	        </script>		
		<!-- wow js -->
        <script src="js/wow.js"></script>	
		<!-- scrollUp JS
		============================================ -->		
        <script src="js/jquery.scrollUp.min.js"></script>
		<!-- fancybox JS
		============================================ -->		
        <script src="lib/fancybox/jquery.fancybox.pack.js"></script>
		<!-- plugins JS
		============================================ -->		
        <script src="js/plugins.js"></script>
		<!-- main JS
		============================================ -->		
        <script src="js/main.js"></script>
    </body>

<!-- Mirrored from demo.themelocation.com/discover/room4.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Mar 2018 17:13:20 GMT -->
</html>
