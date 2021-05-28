<?php
 require 'Amos1/home.php';
?>
<title>
	Start Here | UAV Coach
</title>
<style>
@media only screen and (max-width: 640px){
.home_content-block p {
    margin-bottom: 15px;
}

.home_content-block span {
    font-size: 30px;
}
.home_content-block h2{
font-size: 20px;
line-height: 26px;
}
.home_content-block h4{
	font-size: 20px;	
}
.home_content-block p{
	margin-bottom: 15px;
}
.row .col button{
	font-size: 14px;
    padding: 4px;
}
.img1 img{
	padding-top: 100px;
	margin-top:50px;
}
}
.home_content-block h2{
	color:indigo;
	padding-top: 22px;
	letter-spacing: 3.2px;
	margin-bottom: 15px;
	line-height: 36px;
}
.home_content-block h4{
font-family: "Montserrat-Regular", sans-serif;
    margin-bottom: 16px;
    color: #318570;
    font-size: 24px;
}


.row .col button:hover
{
	background-color:#09cac7;
	color:white; 
}

.col button.active{
	background-color:#09cac7; 
}

.start-top__content h1 {
    font-size: 60px;
    color: #ffffff;
    font-family: "Montserrat-Regular", sans-serif;
    margin-top: -330px;
    text-transform: none;
}
.start-top__content h2 {
    font-size: 40px;
    color: #09cac7;
    font-family: "Montserrat-Regular", sans-serif;
    margin-bottom: 55px;
    text-transform: none;
}
@media only screen and (max-width:640px){
	.start-top__content h1{
    font-size:30px;
}
.start-top__content h2 {
    font-size: 20px;
    margin-bottom: 20px;
}
}
.home_content-block span {
    font-size: 60px;
    display: inline-block;
    color: #b2c0cb;
}
.home_content-block p {
    font-size: 16px;
    color: #949494;
    margin-bottom: 26px;
    line-height: 20px;
    font-family: "Open Sans", sans-serif;
}

</style>
<div class="container-fluid-sm">
<img src="img/starthere1.jpg" class="responsive">
<div class="start-top__content">
<h1 class="text-center">Welcome To UAV Coach</h1>
<h2 class="text-center">You guide to all things drone.</h2>
<div class ="container-sm mt-4">
<div class="row">
	<div class="col col-md-6 text-center pt-5">
		<pre><a href="#p1"><button id="hide"class="btn btn-outline-light text-light" style="font-family: 'Montserrat-Regular', sans-serif;"><strong>I  FLY  DRONES  FOR  FUN</strong></button></a></pre>
	</div>
	<div class="col col-md-6 pt-5">
		<pre><a href="#p2"><button id="show" class="btn btn-outline-light text-light" style="font-family: 'Montserrat-Regular', sans-serif;"><strong>I  FLY  DRONES  FOR  FUN</strong></button></a></pre>
	</div>
</div>	
</div>
</div>
</div>


<div class="container-sm mt-5 pt-5 home_content-block">
	<div id="p1">	
		<div class="row"data-aos="flip-right">
			<div class="col-md-6 img1">
				<img src="img/know the rules.png" class="float-right">
			</div>
			<div class="col-md-6">
				<span>01</span>
				<h2>Know the rules</h2>
				<h4>Be a safe, responsible, and law-abiding drone pilot.</h4>
				<p>Rules and drone regulations are fast-evolving. Stay up-to-date on how and where you’re legally allowed to fly and other important rules in your country.</p>
				<a class="custom-button" href="https://uavcoach.com/drone-laws/"><button class="btn btn-success text-light">List of Drone Laws</button></a>
			</div>
		</div>


		<br>
		<p class="text-center">_______________________</p>
		<br>



		<div class="row" data-aos="flip-left">
			<div class="col-md-6 text-right">
				<span class="text-right">02</span>
				<h2>Find the right<br>
				drone for you</h2>
				<h4>Browse popular models and match to your budget and needs.</h4>
				<p>Juggernaut drone manufacturers like DJI keep launching new products with impressive features. We keep an updated list of the latest camera drone models to help you match the right model to your budget and specific needs.</p>
				<a class="custom-button" href="https://uavcoach.com/drone-with-camera/"><button class="btn btn-success text-light">Top Camera Drones</button></a>
			</div>
			<div class="col-md-6">
				<img src="img/pc.png">
			</div>
		</div>

		<br>
		<p class="text-center">_______________________</p>
		<br>


		<div class="row" data-aos="flip-right">
			<div class="col-md-6">
				<img src="img/learn to fily.png" class="float-right">
			</div>
			<div class="col-md-6">
				<span>03</span>
				<h2>Learn to fly</h2>
				<h4>Stay in control of your drone.</h4>
				<p>Never flown before? Learn about basic flight controls, how to follow a pre-flight checklist, and practice key flight patterns to master multirotor proficiency and to avoid costly crashes.
				</p>
				<a class="custom-button" href="https://uavcoach.com/drone-training/"><button class="btn btn-success text-light">Drone Flight 
				Training</button></a>
			</div>
		</div>
	</div>

		<br>
		<p class="text-center">_______________________</p>
		<br>
	<div id="p2">
		<div class="row" data-aos="flip-left">
			<div class="col-md-6 text-right">
				<span class="text-right">04</span>
				<h2>Get certified in the U.S.</h2>
				<h4>Become an FAA Part 107-certified drone pilot.</h4>
				<p >To fly commercially in the U.S., you need to obtain a Remote Pilot Certificate by passing a written exam from the FAA. Find out if you’re eligible, how to study, where to take the test and everything else you need to know..</p>
				<a class="custom-button" href="https://uavcoach.com/drone-certification/"><button class="btn btn-success text-light">FAA Drone Certification Guide</button></a>
			</div>
			<div class="col-md-6">
				<img src="img/certified.png">
			</div>
		</div>

		<br>
		<p class="text-center">_______________________</p>
		<br>

		<div class="row" data-aos="flip-right">
			<div class="col-md-6">
				<img src="img/getinsureance.png" class="float-right">
			</div>
			<div class="col-md-6">
				<span>05</span>
				<h2>Get insurance</h2>
				<h4>Protect yourself and your drone</h4>
				<p>Do you need drone insurance? Get our comprehensive guide on liability and hull insurance, what it covers, pricing quotes, and much more.</p>
				<a class="custom-button" href="https://uavcoach.com/drone-insurance-guide/"><button class="btn btn-success text-light">Drone Insurance Guide</button></a>
			</div>
		</div>
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$("#p2").hide();
  $("#hide").click(function(){
    $("#p2").hide();
  });
  $("#show").click(function(){
    $("#p2").show();
  });
});
</script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <?php
 require 'Amos1/footer.php';
?>