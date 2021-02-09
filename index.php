<!DOCTYPE html>

<?php 
 
if(isset($_GET['submit'])){
    $to = "jonathan.lutumba@csotut.co.za"; // this is your Email address 
    $from = $_GET['email']; // this is the sender's Email address
    $name = $_GET['name'];
    $cell = $_GET['cell'];
    $message = "Name : " . $name . " Cell Number : " . $cell . " Email : ". $from;
    
    $headers = "Invitation confirmation From:" . $from;
    
    mail($to,$subject,$message,$headers);
    
   
    } 
?>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Rachel & Owen</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/photoswipe.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/default-skin/default-skin.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/photoswipe.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/photoswipe-ui-default.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Alex+Brush|Roboto&display=swap" rel="stylesheet">
  
  <style>
  
	/* Please ❤ this if you like it! */

	@import url("https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&subset=devanagari,latin-ext");

	/* #Primary
	================================================== */

	body {
	  font-family: "Poppins", sans-serif;
	  font-size: 16px;
	  line-height: 24px;
	  font-weight: 400;
	  color: #212112;
	  background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/1462889/pat-back.svg"); 
	  background-position: center;
	  background-repeat: repeat;
	  background-size: 7%;
	  background-color: #fff;
	  overflow-x: hidden;
	  transition: all 200ms linear;
	}
	::selection {
	  color: #fff;
	  background-color: #8167a9;
	}
	::-moz-selection {
	  color: #fff;
	  background-color: #8167a9;
	}

	/* #Navigation
	================================================== */

	.start-header {
	  opacity: 1;
	  transform: translateY(0);
	  padding: 20px 0;
	  box-shadow: 0 10px 30px 0 rgba(138, 155, 165, 0.15);
	  -webkit-transition: all 0.3s ease-out;
	  transition: all 0.3s ease-out;
	}
	.start-header.scroll-on {
	  box-shadow: 0 5px 10px 0 rgba(138, 155, 165, 0.15);
	  padding: 10px 0;
	  -webkit-transition: all 0.3s ease-out;
	  transition: all 0.3s ease-out;
	}
	.start-header.scroll-on .navbar-brand img {
	  height: 24px;
	  -webkit-transition: all 0.3s ease-out;
	  transition: all 0.3s ease-out;
	}
	.navigation-wrap {
	  position: absolute;
	  width: 100%;
	  
	  z-index: 1000;
	  -webkit-transition: all 0.3s ease-out;
	  transition: all 0.3s ease-out;
	}
	.navbar {
	  padding: 0;
	}
	.navbar-brand img {
	  height: 28px;
	  width: auto;
	  display: block;
	  filter: brightness(10%);
	  -webkit-transition: all 0.3s ease-out;
	  transition: all 0.3s ease-out;
	}
	.navbar-toggler {
	  float: center;
	  border: none;
	}
	.navbar-toggler:active,
	.navbar-toggler:focus {
	  outline: none;
	}
	.navbar-light .navbar-toggler-icon {
	  width: 24px;
	  height: 17px;
	  background-image: none;
	  position: relative;
	  border-bottom: 1px solid #000;
	  transition: all 300ms linear;
	}
	.navbar-light .navbar-toggler-icon:after,
	.navbar-light .navbar-toggler-icon:before {
	  width: 24px;
	  position: absolute;
	  height: 1px;
	  background-color: #000;
	  top: 0;
	  left: 0;
	  content: "";
	  z-index: 2;
	  transition: all 300ms linear;
	}
	.navbar-light .navbar-toggler-icon:after {
	  top: 8px;
	}
	.navbar-toggler[aria-expanded="true"] .navbar-toggler-icon:after {
	  transform: rotate(45deg);
	}
	.navbar-toggler[aria-expanded="true"] .navbar-toggler-icon:before {
	  transform: translateY(8px) rotate(-45deg);
	}
	.navbar-toggler[aria-expanded="true"] .navbar-toggler-icon {
	  border-color: transparent;
	}
	.nav-link {
	  color: #212121 !important;
	  font-weight: 500;
	  transition: all 200ms linear;
	}
	.nav-item:hover .nav-link {
	  color: #8167a9 !important;
	}
	.nav-item.active .nav-link {
	  color: #777 !important;
	}
	.nav-link {
	  position: relative;
	  padding: 5px 0 !important;
	  display: inline-block;
	}
	.nav-item:after {
	  position: absolute;
	  bottom: -5px;
	  left: 0;
	  width: 100%;
	  height: 2px;
	  content: "";
	  background-color: #8167a9;
	  opacity: 0;
	  transition: all 200ms linear;
	}
	.nav-item:hover:after {
	  bottom: 0;
	  opacity: 1;
	}
	.nav-item.active:hover:after {
	  opacity: 0;
	}
	.nav-item {
	  position: relative;
	  transition: all 200ms linear;
	}

	/* #Primary style
	================================================== */

	.bg-light {
	  background-color: #fff !important;
	  transition: all 200ms linear;
	}
	.section {
	  position: relative;
	  width: 100%;
	  display: block;
	}
	.full-height {
	  height: 100vh;
	}
	.over-hide {
	  overflow: hidden;
	}
	.absolute-center {
	  position: absolute;
	  top: 50%;
	  left: 0;
	  width: 100%;
	  margin-top: 40px;
	  transform: translateY(-50%);
	  z-index: 20;
	}
	h1 {
	  font-size: 48px;
	  line-height: 1.2;
	  font-weight: 700;
	  color: #212112;
	  text-align: center;
	}
	p {
	  text-align: center;
	  margin: 0;
	  padding-top: 10px;
	  opacity: 1;
	  transform: translate(0);
	  transition: all 300ms linear;
	  transition-delay: 1700ms;
	}
	body.hero-anime p {
	  opacity: 0;
	  transform: translateY(40px);
	  transition-delay: 1700ms;
	}
	h1 span {
	  display: inline-block;
	  transition: all 300ms linear;
	  opacity: 1;
	  transform: translate(0);
	}
	body.hero-anime h1 span:nth-child(1) {
	  opacity: 0;
	  transform: translateY(-20px);
	}
	body.hero-anime h1 span:nth-child(2) {
	  opacity: 0;
	  transform: translateY(-30px);
	}
	body.hero-anime h1 span:nth-child(3) {
	  opacity: 0;
	  transform: translateY(-50px);
	}
	body.hero-anime h1 span:nth-child(4) {
	  opacity: 0;
	  transform: translateY(-10px);
	}
	body.hero-anime h1 span:nth-child(5) {
	  opacity: 0;
	  transform: translateY(-50px);
	}
	body.hero-anime h1 span:nth-child(6) {
	  opacity: 0;
	  transform: translateY(-20px);
	}
	body.hero-anime h1 span:nth-child(7) {
	  opacity: 0;
	  transform: translateY(-40px);
	}
	body.hero-anime h1 span:nth-child(8) {
	  opacity: 0;
	  transform: translateY(-10px);
	}
	body.hero-anime h1 span:nth-child(9) {
	  opacity: 0;
	  transform: translateY(-30px);
	}
	body.hero-anime h1 span:nth-child(10) {
	  opacity: 0;
	  transform: translateY(-20px);
	}
	h1 span:nth-child(1) {
	  transition-delay: 1000ms;
	}
	h1 span:nth-child(2) {
	  transition-delay: 700ms;
	}
	h1 span:nth-child(3) {
	  transition-delay: 900ms;
	}
	h1 span:nth-child(4) {
	  transition-delay: 800ms;
	}
	h1 span:nth-child(5) {
	  transition-delay: 1000ms;
	}
	h1 span:nth-child(6) {
	  transition-delay: 700ms;
	}
	h1 span:nth-child(7) {
	  transition-delay: 900ms;
	}
	h1 span:nth-child(8) {
	  transition-delay: 800ms;
	}
	h1 span:nth-child(9) {
	  transition-delay: 600ms;
	}
	h1 span:nth-child(10) {
	  transition-delay: 700ms;
	}
	body.hero-anime h1 span:nth-child(11) {
	  opacity: 0;
	  transform: translateY(30px);
	}
	body.hero-anime h1 span:nth-child(12) {
	  opacity: 0;
	  transform: translateY(50px);
	}
	body.hero-anime h1 span:nth-child(13) {
	  opacity: 0;
	  transform: translateY(20px);
	}
	body.hero-anime h1 span:nth-child(14) {
	  opacity: 0;
	  transform: translateY(30px);
	}
	body.hero-anime h1 span:nth-child(15) {
	  opacity: 0;
	  transform: translateY(50px);
	}
	h1 span:nth-child(11) {
	  transition-delay: 1300ms;
	}
	h1 span:nth-child(12) {
	  transition-delay: 1500ms;
	}
	h1 span:nth-child(13) {
	  transition-delay: 1400ms;
	}
	h1 span:nth-child(14) {
	  transition-delay: 1200ms;
	}
	h1 span:nth-child(15) {
	  transition-delay: 1450ms;
	}
	#switch,
	#circle {
	  cursor: pointer;
	  -webkit-transition: all 300ms linear;
	  transition: all 300ms linear;
	}
	#switch {
	  width: 60px;
	  height: 8px;
	  border: 2px solid #8167a9;
	  border-radius: 27px;
	  background: #000;
	  position: relative;
	  display: block;
	  margin: 0 auto;
	  text-align: center;
	  opacity: 1;
	  transform: translate(0);
	  transition: all 300ms linear;
	  transition-delay: 1900ms;
	}
	body.hero-anime #switch {
	  opacity: 0;
	  transform: translateY(40px);
	  transition-delay: 1900ms;
	}
	#circle {
	  position: absolute;
	  top: -11px;
	  left: -13px;
	  width: 26px;
	  height: 26px;
	  border-radius: 50%;
	  background: #000;
	}
	.switched {
	  border-color: #000 !important;
	  background: #8167a9 !important;
	}
	.switched #circle {
	  left: 43px;
	  box-shadow: 0 4px 4px rgba(26, 53, 71, 0.25), 0 0 0 1px rgba(26, 53, 71, 0.07);
	  background: #fff;
	}
	.nav-item .dropdown-menu {
	  transform: translate3d(0, 10px, 0);
	  visibility: hidden;
	  opacity: 0;
	  max-height: 0;
	  display: block;
	  padding: 0;
	  margin: 0;
	  transition: all 200ms linear;
	}
	.nav-item.show .dropdown-menu {
	  opacity: 1;
	  visibility: visible;
	  max-height: 999px;
	  transform: translate3d(0, 0px, 0);
	}
	.dropdown-menu {
	  padding: 10px !important;
	  margin: 0;
	  font-size: 13px;
	  letter-spacing: 1px;
	  color: #212121;
	  background-color: #fcfaff;
	  border: none;
	  border-radius: 3px;
	  box-shadow: 0 5px 10px 0 rgba(138, 155, 165, 0.15);
	  transition: all 200ms linear;
	}
	.dropdown-toggle::after {
	  display: none;
	}

	.dropdown-item {
	  padding: 3px 15px;
	  color: #212121;
	  border-radius: 2px;
	  transition: all 200ms linear;
	}
	.dropdown-item:hover,
	.dropdown-item:focus {
	  color: #fff;
	  background-color: rgba(129, 103, 169, 0.6);
	}

	body.dark {
	  color: #fff;
	  background-color: #1f2029;
	}
	body.dark .navbar-brand img {
	  filter: brightness(100%);
	}
	body.dark h1 {
	  color: #fff;
	}
	body.dark h1 span {
	  transition-delay: 0ms !important;
	}
	body.dark p {
	  color: #fff;
	  transition-delay: 0ms !important;
	}
	body.dark .bg-light {
	  background-color: #14151a !important;
	}
	body.dark .start-header {
	  box-shadow: 0 10px 30px 0 rgba(0, 0, 0, 0.15);
	}
	body.dark .start-header.scroll-on {
	  box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.15);
	}
	body.dark .nav-link {
	  color: #fff !important;
	}
	body.dark .nav-item.active .nav-link {
	  color: #999 !important;
	}
	body.dark .dropdown-menu {
	  color: #fff;
	  background-color: #1f2029;
	  box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.25);
	}
	body.dark .dropdown-item {
	  color: #fff;
	}
	body.dark .navbar-light .navbar-toggler-icon {
	  border-bottom: 1px solid #fff;
	}
	body.dark .navbar-light .navbar-toggler-icon:after,
	body.dark .navbar-light .navbar-toggler-icon:before {
	  background-color: #fff;
	}
	body.dark .navbar-toggler[aria-expanded="true"] .navbar-toggler-icon {
	  border-color: transparent;
	}

	/* #Media
	================================================== */

	@media (max-width: 767px) {
	  h1 {
		font-size: 38px;
	  }
	  .nav-item:after {
		display: none;
	  }
	  .nav-item::before {
		position: absolute;
		display: block;
		top: 15px;
		left: 0;
		width: 11px;
		height: 1px;
		content: "";
		border: none;
		background-color: #000;
		vertical-align: 0;
	  }
	  .dropdown-toggle::after {
		position: absolute;
		display: block;
		top: 10px;
		left: -23px;
		width: 1px;
		height: 11px;
		content: "";
		border: none;
		background-color: #000;
		vertical-align: 0;
		transition: all 200ms linear;
	  }
	  .dropdown-toggle[aria-expanded="true"]::after {
		transform: rotate(90deg);
		opacity: 0;
	  }
	  .dropdown-menu {
		padding: 0 !important;
		background-color: transparent;
		box-shadow: none;
		transition: all 200ms linear;
	  }
	  .dropdown-toggle[aria-expanded="true"] + .dropdown-menu {
		margin-top: 10px !important;
		margin-bottom: 20px !important;
	  }
	  body.dark .nav-item::before {
		background-color: #fff;
	  }
	  body.dark .dropdown-toggle::after {
		background-color: #fff;
	  }
	  body.dark .dropdown-menu {
		background-color: transparent;
		box-shadow: none;
	  }
	}

	/* #Link to page
	================================================== */

	.logo {
	  position: absolute;
	  bottom: 30px;
	  right: 30px;
	  display: block;
	  z-index: 100;
	  transition: all 250ms linear;
	}
	.logo img {
	  height: 26px;
	  width: auto;
	  display: block;
	  filter: brightness(10%);
	  transition: all 250ms linear;
	}
	body.dark .logo img {
	  filter: brightness(100%);
	}
	
	.navbar .navbar-nav {
    float: center;
}

.navbar .navbar-collapse {
    text-align: center;
}

.one1{

background: url('img/banner1.jpeg');
   /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
/*
.one{

background-image: url('img/banner-main.png'); 
background-color: #0c0c0c; background-size: cover; 
background-position:center; 
background-repeat: no-repeat;
z-index: -3;
}
section{

	height: 100%;
}
*/
:root {
    --font-cursive: 'Alex Brush', cursive;
    --font-normal: 'Roboto', sans-serif;
}
#titulo-banner {
    position: relative;
    font-size: 100px;
    font-family: var(--font-cursive) !important;
    font-weight: bold;
    color: #000;
	
  /*background: linear-gradient(90deg, rgba(2,130,1,1) 0%, rgba(4,45,245,1) 100%);*/
  background: linear-gradient(90deg, rgba(2,130,1,1) 0%, rgba(167,119,177,1) 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
 
}

.story-img{
    width: 75%;
    padding: 40px 0;
}

.story-text{
    padding: 5% 5%;
}



.form-control {
  display: block;
  width: 100%;
  height: 35px;
  padding: 6px 12px;
  font-size: 14px;
  line-height: 1.5;
  color: #eee;
  background-image: none;
  border: 1px solid #36333d;
  border-radius: 4px;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
}

.form-control:focus {
  color: #222;
  background-color: #ccc;
  box-shadow: none;
}

textarea {
  resize: none;
}

.btn-primary {
    color: #000;
    border-color: #000;
	background-color: #fff
}

.contact-extra{
	margin-left: 25px;
	color: grey;
	font-size: 15px;
}

/*  ....................Section 2: DATE.................... */

.feb{
    border-right: 2px solid black;
    height: 200px;
    padding-top: 50px;
}

.feb1{
    padding-top: 45px;
}

.rol{
    margin: 5% 7%;
}

.story-img{
    width: 75%;
    padding: 40px 0;
}

.story-text{
    padding: 5% 5%;
}

@media (max-width: 767px) {
	.feb{
        border-right: 0px solid black;
        height: 200px;
        padding-top: 50px;
    }
}

.gallery {
  display: none;
}
.boys{
	color : #028201;
}
.girl{
	color : #a777b1;
}

footer{
	background: #000;
	color : #fff;
}
  </style>
  
</head>

<body class="hero-anime" id="home">

	<section class="one text-center">
		<img src="img/banner-main2.png" class="img-fluid" alt="Responsive image">
        <h1 id="titulo-banner">Rachel & Owen</h1>
    </section>
  <div class="navigation-wrap bg-light start-header start-style">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="navbar navbar-expand-md navbar-light">

            

            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto py-4 py-md-0">
                
                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                  <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                  <a class="nav-link" href="#story">Our Story</a>
                </li>
                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                  <a class="nav-link" href="#event">Event details</a>
                </li>
			
              </ul>
            </div>

          </nav>
        </div>
      </div>
    </div>
  </div>
  <section class="date">
  <br><br><br><br>
        <div class="container-fluid">
            <div class="row rol">
                    <div class="col-md-6 feb">
                    <h2 class="text-center">
                        FEBRUARY 27th, 2021 <br> 13 h 00'
                    </h2>
                 </div>
                <div class="col-md-6">
                    <h2 class="text-center feb1">
                        PRETORIA <br>
                        SOUTH AFRICA
                    </h2>
                </div>
            </div>
        </div>
    </section>
  <section class="story" id="story">
  
        <div class="container">
            <h1 id="titulo-banner" class="text-center">
                Our Story
            </h1>
            <div class="row">
                <div class="col-md-6">
                   <center> <img class="story-img rounded text-center" src="img/us-2.jpeg" alt=""></center>
					
                </div>
                <div class="col-md-6">
					<p class="text-faded wow fadeIn text-justify" data-wow-delay=".2s">We met for the first time on campus in September 2013 through our mutual friend Jean Beni. 
					Fast forward to January 2015, I was late for my test, rushing to the bus stop to catch the bus and there was a long queue. 
					I then saw Rachel and asked her if i could jump in the queue in front of her as I was late for my test. she obviously agreed. </p>
					
					<p class="text-faded wow fadeIn text-justify" data-wow-delay=".4s">I asked for her numbers from Jean Beni to thank her for helping me that day as I didn't see her on campus much.</p>
					
					<p class="text-faded wow fadeIn text-justify" data-wow-delay=".6s">In February 2015, I asked her out and she said she just wanted us to be friends.</p>
					
					<p class="text-faded wow fadeIn text-justify" data-wow-delay=".8s">The 01 August 2015, she finally accepted my proposal!!. I was very happy that "La fille au gros classeur bleu" was now mine and  that’s how our journey began.</p>
					
					<p class="text-faded wow fadeIn text-justify" data-wow-delay=".10s">We have grown to know each other, planning for our future and realized that we couldn't live without each other. </p>
					
					<p class="text-faded wow fadeIn text-justify" data-wow-delay=".10s">On the  01 March 2020, I finally proposed to her and here we are today!! </p>
					
					<p class="text-faded wow fadeIn text-justify" data-wow-delay=".10s">I thank God who has brought us this far and I  looking forward to a great and amazing journey with you my love <br><br>- Owen </p>
                 </div>
				 <center> <a id="gallery-1"><img class="story-img rounded text-center"  style="width:25%" src="img/gallery-icon.png" alt=""></a></center>
            </div>
        </div>
    </section>

	<section class="team">
	<br><br>
        <div class="container">
            <h1  id="titulo-banner" class="text-center">
                Meet The Bridesmaids
            </h1>
			<br><br>
            <div class="row text-center">

			  <div class="col-lg-3 col-md-6 mb-4">
				<div class="card h-100">
				  <img class="card-img-top" src="img/final/eliane.png" alt="">
				  <div class="card-body">
					<h5 class="card-title girl">Eliane MUKEMBE</h5>
					
				  </div>
				  
				</div>
			  </div>

			  <div class="col-lg-3 col-md-6 mb-4">
				<div class="card h-100">
				  <img class="card-img-top" src="img/final/gracia.png" alt="">
				  <div class="card-body">
					<h5 class="card-title girl">Gracia NKONGOLO</h5>
					
				  </div>
				  
				</div>
			  </div>

			  <div class="col-lg-3 col-md-6 mb-4">
				<div class="card h-100">
				  <img class="card-img-top" src="img/final/glodie.png" alt="">
				  <div class="card-body">
				  
					<h5 class="card-title girl">Glodie PITA</h5>
					
				  </div>
				  
				</div>
			  </div>

			  <div class="col-lg-3 col-md-6 mb-4">
				<div class="card h-100">
				  <img class="card-img-top" src="img/final/glette.png" alt="">
				  <div class="card-body">
				  
					<h5 class="card-title girl">Glete TSHIONZA</h5>
					
				  </div>
				  
				</div>
			  </div>

			</div>
        </div>
    </section>
	<section class="team">
	<br><br>
        <div class="container">
            <h1 id="titulo-banner" class="text-center">
                Meet The Groomsmen
            </h1>
			<br><br>
            <div class="row text-center">

			  <div class="col-lg-3 col-md-6 mb-4">
				<div class="card h-100">
				  <img class="card-img-top" src="img/final/mica.png" alt="">
				  <div class="card-body">
					<h5 class="card-title boys">Michael KAHAMBWE</h5>
					
				  </div>
				  
				</div>
			  </div>

			  <div class="col-lg-3 col-md-6 mb-4">
				<div class="card h-100">
				  <img class="card-img-top" src="img/final/sidney.png" alt="">
				  <div class="card-body">
					<h5 class="card-title boys">Sydney KASONGO</h5>
				  </div>
				  
				</div>
			  </div>

			  <div class="col-lg-3 col-md-6 mb-4">
				<div class="card h-100">
				  <img class="card-img-top" src="img/final/terry.png" alt="">
				  <div class="card-body">
					<h5 class="card-title boys">Terry KASONGO</h5>
					
				  </div>
				  
				</div>
			  </div>

			  <div class="col-lg-3 col-md-6 mb-4">
				<div class="card h-100">
				  <img class="card-img-top" src="img/final/isaac.png" alt="">
				  <div class="card-body">
					<h5 class="card-title boys">Isaac ILUNGA</h5>
					
				  </div>
				  
				</div>
			  </div>

			</div>
        </div>
    </section>
	
	<section class="event" id ="event">
	  <br><br><br><br>
			<div class="container">
				<h1 id="titulo-banner" class="text-center">
					R.S.V.P.
				</h1>
				<div class="row">
					<div class="col-md-6">
					   <br>
					   <a target="_blank" href="https://www.google.co.za/maps/dir//Velmor%C3%A9+Hotel+%26+Spa,+96+Main+Road,+Mooiplaats+355-Jr,+Erasmia,+0183/@-25.8231592,28.0708791,17z/data=!4m9!4m8!1m0!1m5!1m1!1s0x1e957cb89c560243:0x9f91245aa16eacd0!2m2!1d28.0730678!2d-25.823164!3e0">
						<p class="text-faded">
						  <img class="img " style="width:20px;" src="img/iconmonstr-location-pin-thin.svg" alt="Office Number" > <b>Venue</b>
							  <p class="text-faded contact-extra">
								<b>96 Main Road (M26), Erasmia, Centurion <br>Velmore Hotel and Spa</b>
							</p>
						</p>
						</a>
						<br>
						
						<p class="text-faded">
						  <img class="img " style="width:20px;" src="img/call-outline.svg" alt="Office Number" > <b> +27 71 440 2540</b>
						   
						</p>
						<p class="text-faded ">
							<img class="img " style="width:20px;" src="img/iconmonstr-clock-thin.svg" alt="Time" > <b> 27 Saturday 2021 @ 1H00 PM</b>
						</p>
						
						
					</div>
					<div class="col-lg-6 text-center">
					<p class="text-faded">
						  <img class="img " style="width:50px;" src="img/mail-outline.svg" alt="Email" > 
						</p>
					
					<p class="text-faded wow fadeIn text-center" data-wow-delay=".5s"><b>Remember to confirm your presence by filling the form below</b></p>
					<br>
                    <form class="contact-form row" method="get">
                        <div class="col-md-12">
                            <label></label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Fullname" required>
                        </div>
						<div class="col-md-12">
                            <label></label>
                            <input type="text" class="form-control" id="cell" name="cell" placeholder="Contact Number" required>
                        </div>
                        <div class="col-md-12">
                            <label></label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                        </div>
						
                        
                        <div class="col-md-4 col-md-offset-4">
                            <label></label>
                            <button type="submit" name= "submit" data-toggle="modal" data-target="#alertModal" class="btn btn-primary btn-block btn-lg">I will be there <i class="ion-android-arrow-forward"></i></button>
                        </div>
                    </form>
                </div>
					 
				</div>
			</div>
			<br><br><br>
	</section>
<div class="gallery-1 gallery" itemscope="" itemtype="http://schema.org/ImageGallery">
  <figure itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
    <a href="img/gallery/1.jpeg" itemprop="contentUrl" data-size="1200x1600">
    </a>
  </figure>
  <figure itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
    <a href="img/gallery/2.jpeg" itemprop="contentUrl" data-size="1600x1200">
    </a>
  </figure>
  <figure itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
    <a href="img/gallery/3.jpeg" itemprop="contentUrl" data-size="1600x900">
    </a>
  </figure>
  <figure itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
    <a href="img/gallery/4.jpeg" itemprop="contentUrl" data-size="1066x1600">
    </a>
  </figure>
  <figure itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
    <a href="img/gallery/5.jpeg" itemprop="contentUrl" data-size="1200x1600">
    </a>
  </figure>
  <figure itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
    <a href="img/gallery/6.jpeg" itemprop="contentUrl" data-size="1600x1200">
    </a>
  </figure>
  <figure itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
    <a href="img/gallery/7.jpeg" itemprop="contentUrl" data-size="720x1600">
    </a>
  </figure>
  <figure itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
    <a href="img/gallery/8.jpeg" itemprop="contentUrl" data-size="720x1600">
    </a>
  </figure>
  <figure itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
    <a href="img/gallery/9.jpeg" itemprop="contentUrl" data-size="1280x853">
    </a>
  </figure>
  <figure itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
    <a href="img/gallery/10.jpeg" itemprop="contentUrl" data-size="1280x853">
    </a>
  </figure>
  <figure itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
    <a href="img/gallery/11.jpeg" itemprop="contentUrl" data-size="1280x853">
    </a>
  </figure>
  <figure itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
    <a href="img/gallery/12.jpeg" itemprop="contentUrl" data-size="853x1280">
    </a>
  </figure>
  <figure itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
    <a href="img/gallery/13.jpeg" itemprop="contentUrl" data-size="853x1280">
    </a>
  </figure>
  <figure itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
    <a href="img/gallery/14.jpeg" itemprop="contentUrl" data-size="1200x1600">
    </a>
  </figure>
  <figure itemprop="associatedMedia" itemscope="" itemtype="http://schema.org/ImageObject">
    <a href="img/gallery/15.jpeg" itemprop="contentUrl" data-size="1280x853">
    </a>
  </figure>
</div>	
	<!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

  <!-- Background of PhotoSwipe. 
         It's a separate element, as animating opacity is faster than rgba(). -->
  <div class="pswp__bg"></div>

  <!-- Slides wrapper with overflow:hidden. -->
  <div class="pswp__scroll-wrap">

    <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
    <div class="pswp__container">
      <!-- don't modify these 3 pswp__item elements, data is added later on -->
      <div class="pswp__item"></div>
      <div class="pswp__item"></div>
      <div class="pswp__item"></div>
    </div>

    <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
    <div class="pswp__ui pswp__ui--hidden">

      <div class="pswp__top-bar">

        <!--  Controls are self-explanatory. Order can be changed. -->

        <div class="pswp__counter"></div>

        <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

        <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

        <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

        <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
        <!-- element will get class pswp__preloader--active when preloader is running -->
        <div class="pswp__preloader">
          <div class="pswp__preloader__icn">
            <div class="pswp__preloader__cut">
              <div class="pswp__preloader__donut"></div>
            </div>
          </div>
        </div>
      </div>

      <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
        <div class="pswp__share-tooltip"></div>
      </div>

      <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
      </button>

      <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
      </button>

      <div class="pswp__caption">
        <div class="pswp__caption__center"></div>
      </div>

    </div>

  </div>

</div>
<!-- Modal -->
<?php if(isset($_GET['submit'])){ echo '
<div id="myModal" class="modal fade" role="dialog" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog">

    <!-- Modal content-->
     <div class="modal-content">
      
      <div class="modal-body">
	  <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="row">
          <img src="img/thanks.jpg" class="img-responsive" />
        </div> 
      </div>
      <div class="modal-footer">
		 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
     </div>

  </div>
</div>
';} ?>
	<script>
	if(typeof window.history.pushState == 'function') {
        window.history.pushState({}, "Hide", "http://rachel-owen.github.io/");
    }

	var openPhotoSwipe = function () {
  var parseThumbnailElements = function (el) {
    var thumbElements = el.childNodes,
      numNodes = thumbElements.length,
      items = [],
      figureEl,
      linkEl,
      size,
      item;

    for (var i = 0; i < numNodes; i++) {
      figureEl = thumbElements[i]; // <figure> element

      // include only element nodes
      if (figureEl.nodeType !== 1) {
        continue;
      }

      linkEl = figureEl.children[0]; // <a> element

      size = linkEl.getAttribute("data-size").split("x");

      // create slide object
      item = {
        src: linkEl.getAttribute("href"),
        w: parseInt(size[0], 10),
        h: parseInt(size[1], 10)
      };

      if (figureEl.children.length > 1) {
        // <figcaption> content
        item.title = figureEl.children[1].innerHTML;
      }

      if (linkEl.children.length > 0) {
        // <img> thumbnail element, retrieving thumbnail url
        item.msrc = linkEl.children[0].getAttribute("src");
      }

      item.el = figureEl; // save link to element for getThumbBoundsFn
      items.push(item);
    }

    return items;
  };

  var pswpElement = document.querySelectorAll(".pswp")[0],
    gallery,
    options,
    items;

  var galleryElements = document.querySelectorAll(
    "." + this.getAttribute("id")
  )[0];
  items = parseThumbnailElements(galleryElements);

  // define options (if needed)
  var options = {
    index: 0 // start at first slide
  };

  var gallery = new PhotoSwipe(
    pswpElement,
    PhotoSwipeUI_Default,
    items,
    options
  );
  gallery.init();
};

document.addEventListener("DOMContentLoaded", function () {
  document.getElementById("gallery-1").onclick = openPhotoSwipe;
});

			/* Please ❤ this if you like it! */

			(function ($) {
			  "use strict";

			  $(function () {
				var header = $(".start-style");
				$(window).scroll(function () {
				  var scroll = $(window).scrollTop();

				  if (scroll >= 10) {
					header.removeClass("start-style").addClass("scroll-on");
				  } else {
					header.removeClass("scroll-on").addClass("start-style");
				  }
				});
			  });

			  //Animation

			  $(document).ready(function () {
				$("body.hero-anime").removeClass("hero-anime");
			  });

			  //Menu On Hover

			  $("body").on("mouseenter mouseleave", ".nav-item", function (e) {
				if ($(window).width() > 750) {
				  var _d = $(e.target).closest(".nav-item");
				  _d.addClass("show");
				  setTimeout(function () {
					_d[_d.is(":hover") ? "addClass" : "removeClass"]("show");
				  }, 1);
				}
			  });

			  //Switch light/dark

			  $("#switch").on("click", function () {
				if ($("body").hasClass("dark")) {
				  $("body").removeClass("dark");
				  $("#switch").removeClass("switched");
				} else {
				  $("body").addClass("dark");
				  $("#switch").addClass("switched");
				}
			  });
			})(jQuery);

	</script>
</body>
<footer class="text-center">
  <a href="#myPage" class="up-arrow" id="scroll-top" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Copyrights ©2021 </p>
</footer>
</html>
