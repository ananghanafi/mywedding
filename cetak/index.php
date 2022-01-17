<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Wedding" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
	<link rel="icon" type="image/x-icon" href="../images/favicon.png">
	<!-- Animate.css -->
	<link rel="stylesheet" href="../css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="../css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="../css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="../css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="../css/owl.carousel.min.css">
	<link rel="stylesheet" href="../css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="../css/style.css">

	<!-- Modernizr JS -->
	<script src="../js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="../js/respond.min.js"></script>
	<![endif]-->
	<style>
		/* .animate-box{
			background-color: #7CD52D;
		} */
	</style>

	<script src="https://apps.elfsight.com/p/platform.js" defer></script>
	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">



	<div id="fh5co-couple" style="background-image:url(../images/pattern.jpg) !important;">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-3 text-center fh5co-heading animate-box fadeInUp animated-fast">
					<div class="event-wrap animate-box" style="">
						<h2 style='color: #2B4F3A;font-family: "Sacramento", Arial, serif; margin-top:-50px'>Wedding</h2>
						<div class="event-col">
							<i class="icon-clock"></i>
							<span>11.00 WIB</span>
							<span>14:00 WIB</span>
						</div>
						<div class="event-col">
							<i class="icon-calendar"></i>
							<span>Sabtu 22</span>
							<span>Januari, 2022</span>
						</div>
						<p>(Karangploso-Malang)</p>
						<!-- <p><a target="_blank" href="https://www.google.com/maps/place/7%C2%B053'33.7%22S+112%C2%B036'06.8%22E/@-7.8926859,112.5996952,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x8a38bf24f3b9cea7!8m2!3d-7.8926859!4d112.6018839" class="btn btn-default btn-sm">Direction</a></p> -->
					</div>
				</div>
				<div class="col-md-6 col-sm-3 text-center fh5co-heading animate-box">
					<h2>Undangan</h2>
					<!-- <h3>22 Januari di Malang</h3> -->
					<?php 

					if (!empty($_GET['jkt'])) {
						
						
					?>
					<h3 style='font-family: "Work Sans", Arial, sans-serif;'>Nama : <?php echo $_GET['jkt']; ?></h3>
					<h3 style='font-family: "Work Sans", Arial, sans-serif;'>Dari : <?php echo "Jakarta"; ?></h3>
					<?php

					}
					?>
					<?php 

					if (!empty($_GET['mlg'])) {
						
						
					?>
					<h3 style='font-family: "Work Sans", Arial, sans-serif;'>Nama : <?php echo $_GET['mlg']; ?></h3>
					<h3 style='font-family: "Work Sans", Arial, sans-serif;'>Dari : <?php echo "Malang"; ?></h3>
					<?php

					}
					?>
					<!-- <p>Kami mengundang anda di Pernikahan kami</p> -->
					<p id="cetak_nama"></p>
				</div>
				<div class="col-md-3 col-sm-3 text-center fh5co-heading animate-box fadeInUp animated-fast">
					<div class="event-wrap animate-box" style="">
					<h2 style='font-family: "Sacramento", Arial, serif;color: #2B4F3A; margin-top:-50px' >Direction</h2>
					<iframe width="" height="" id="gmap_canvas" src="https://maps.google.com/maps?q=-7.8926944,112.5997002&hl=en&z=14&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
					</div>
				</div>
			</div>

			<div class="couple-wrap animate-box">
				<div class="couple-half">
					<div class="groom">
						<img src="../images/ft2.JPG" alt="groom" class="img-responsive">
					</div>
					<div class="desc-groom">
						<h3>Anang Hanafi</h3>
						<!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</p> -->
					</div>
				</div>
				<p class="heart text-center"><i class="icon-heart2"></i></p>
				<div class="couple-half">
					<div class="bride">
						<img src="../images/ft3.jpeg" alt="groom" class="img-responsive">
					</div>
					<div class="desc-bride">
						<h3>Ayu Witiya Ningrum</h3>
						<!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</p> -->
					</div>
				</div>
			</div>
		</div>
	</div>



	<!-- <div id="fh5co-services" class="fh5co-section-gray">
		<div class="container">
			
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>We Offer Services</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="icon-calendar"></i>
						</span>
						<div class="feature-copy">
							<h3>We Organized Events</h3>
							<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
						</div>
					</div>

					<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="icon-image"></i>
						</span>
						<div class="feature-copy">
							<h3>Photoshoot</h3>
							<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
						</div>
					</div>

					<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="icon-video"></i>
						</span>
						<div class="feature-copy">
							<h3>Video Editing</h3>
							<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
						</div>
					</div>

				</div>

				<div class="col-md-6 animate-box">
					<div class="fh5co-video fh5co-bg" style="background-image: url(images/img_bg_3.jpg); ">
						<a href="https://vimeo.com/channels/staffpicks/93951774" class="popup-vimeo"><i class="icon-video2"></i></a>
						<div class="overlay"></div>
					</div>
				</div>
			</div>

			
		</div>
	</div> -->



	<!-- <div class="elfsight-app-c3c9ec3d-4ec8-4b43-8b48-26e3775564ef"></div> -->
	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="../js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="../js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="../js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="../js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="../js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="../js/jquery.countTo.js"></script>

	<!-- Stellar -->
	<script src="../js/jquery.stellar.min.js"></script>
	<!-- Magnific Popup -->
	<script src="../js/jquery.magnific-popup.min.js"></script>
	<script src="../js/magnific-popup-options.js"></script>

	<!-- // <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.js"></script> -->
	<script src="../js/simplyCountdown.js"></script>
	<!-- Main -->
	<script src="../js/main.js"></script>

	<script>
	var d_temp = new Date(new Date().getTime());
	var d_now = new Date(new Date("Jan 22, 2022 18:00:00").getTime());
	// d_now = convertTZ("2022/01/15 30:10:30 +0000", "Asia/Jakarta") // Tue Apr 20 2012 17:10:30 GMT+0700 (Western Indonesia Time)

	// var d_now = new Date(new Date("Jan 15, 2022 11:02:11 GMT+7").getTime());
	// console.log(d_now.getDate());
	var dist = d_now.getDate()- d_temp.getDate();
	console.log(dist)

    var d = new Date(new Date().getTime() + dist +(24 * 60 * 60 * 1000));
    // var d = new Date(new Date().getTime() + 200 * 120 * 120 * 2000);

	function convertTZ(date, tzString) {
    	return new Date((typeof date === "string" ? new Date(date) : date).toLocaleString("en-US", {timeZone: tzString}));   
	}
    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
	var nama = $("#name").val();
	var phone = $("#phone").val();
	// console.log('nama :>> ', nama);
	function keWA() {
	// console.log('phone :>> ', phone);
		window.open("https://api.whatsapp.com/send/?phone=6285230790796&text="+nama+phone+"&app_absent=0");
	}
	if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        } else {
        }
</script>

	</body>
</html>

