<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corona Live</title>

<link rel="shortcut icon" href="https://www.flaticon.com/svg/static/icons/svg/2659/2659980.svg" type="image/x-icon"/>
    <?php include 'links/link.php' ?>
</head>
<body>
<header>
<!-- <nav class="navbar navbar-expand-lg fixed-top nav_style sticky-top p-3 sticky-top "> -->
	<nav class="navbar navbar-expand-md navbar-light fixed-top bg-primary">
  <a class="navbar-brand pl-5" href="">Covid-19</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5">
      <li class="nav-item active">
        <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#update">Updates</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#Symptoms">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#Prevention">Prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact</a>
      </li>
    </ul>
  </div>
</nav>
</header>
<h1 class="text-center">Covid-19</h1><br><br>

<div class="main_header" id="home">
	<div class="row w-100 h-100">
		<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
			<div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
				<!-- <img src="img/corona3.png" width="280" height="300" class=""> -->
				<img src="https://lh3.googleusercontent.com/JYjuwIMZymO_C035DRbplSI2A7uOPZTHL9OpK2eZqXrfqhEDqi7keMKja9WNPlOIEStKxw=s97" width="280" height="300" class="">
			</div>
		</div>
		<div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
			<div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
				<h1 class="rightside">Let's Stay Safe & Fight Togethor Against <br>Cor<span>
					<!-- <img class="coroanim" src="img/0.png" height="150"> -->
					<img class="coroanim" src="https://lh3.googleusercontent.com/SJjskhZCJPB_oZtQptYUjWIWJ9uMai68jkny-bvQroptEqDsjQCeGYl1tr19Ya_jVHV7VJ8=s85" height="150">
				</span>na Virus</h1>
			</div>
		</div>
	</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<section class="coronaupdate mt-30" id="update">
	<br><br><br><br>
	<div class="mb-3">
		<h3 class="text-uppercase d-flex justify-content-around text-center">Covid-19 Updates</h3>
	</div>
	<div class="ksdf align-items-center ksup">
		<div class="text-align-center">
			<h1 class="count">
				<?php

					$dat1 = file_get_contents('https://api.covid19india.org/data.json');
					$coranalive1 = json_decode($dat1, true);
					$statescount = 1;
					$i=0;
					while($i < $statescount){
					  echo $coranalive1['statewise'][$i]['confirmed'] . "";
					  $i++;
					}
				?>
			<br>
			<p class="text-align-center">Total Patients in India<br/><br><a target="_blank" href="IndiaCornona.php" class="text-center justify-content-center btn btn-success">See Details</a></p>
		</h1>
		</div><br>
		<div class="text-align-center">
			<h1 class="count">
				<?php

					$data = file_get_contents('https://api.covid19api.com/summary');
					$coranalive = json_decode($data, true);
					$statescount = 1;
					$i=0;
					while($i < $statescount){
					  echo $coranalive['Global']['TotalConfirmed'] . "";
					  $i++;
					}
				?>
			<p class="text-align-center count">Total cases in world<br/><br><a target="_blank" href="worldcorona.php" class="text-center justify-content-center btn btn-success">See Details</a></p>
			</h1>
		</div>
		<br/>
		<div class="text-align-center count">
			<h1 class="count">
				<?php

					$data = file_get_contents('https://api.covid19api.com/summary');
					$coranalive = json_decode($data, true);
					$statescount = 1;
					$i=0;
					while($i < $statescount){
					  echo $coranalive['Global']['TotalRecovered'] . "";
					  $i++;
					}
				?>
				<br>
			<p class="text-align-center">Total recovered</p>
			</h1>
		</div>
		<br>
		<div class="text-align-center count">
			<h1 class="count">
				<?php

					$data = file_get_contents('https://api.covid19api.com/summary');
					$coranalive = json_decode($data, true);
					$statescount = 1;
					$i=0;
					while($i < $statescount){
					  echo $coranalive['Global']['TotalDeaths'] . "";
					  $i++;
					}
				?>
				<br>
			<p class="text-align-center count">Total Deaths</p>
			</h1>
		</div>	</div>
</section>


<div class="container-fluid sub_section pt-5 pb-5 about" id="aboutid">
	<div class="section_header text-center mb-5 mt-4">
		<h1>About Covid-19</h1>
	</div>
	<div class="row pt-5">
		<div class="col-lg-5 col-md-6 col-12 ml-0">
			<!-- <img src="img/aboutcor2.png" height="400" width="600" class=" img-fluid"> -->
			<img src="https://lh3.googleusercontent.com/5YFECQzP2880KfdWNQ7SLNJOuwD94JAgdagv5QlNYwoTUT9Dwq-UXyd-lptMqhLtJXZUAA=s136" height="400" width="600" class=" img-fluid">
		</div>
		<div class="col-lg-6 col-md-6 col-12">
			<h1>What is Covid-19 (Corona-Virus)</h1>
			<p>Coronavirus disease 2019 (COVID-19) is a contagious disease caused by severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2). The first case was identified in Wuhan, China, in December 2019. It has since spread worldwide, leading to an ongoing pandemic.</p>
			<p>Coronaviruses are a group of related RNA viruses that cause diseases in mammals and birds. In humans and birds, they cause respiratory tract infections that can range from mild to lethal. Mild illnesses in humans include some cases of the common cold (which is also caused by other viruses, predominantly rhinoviruses), while more lethal varieties can cause SARS, MERS, and COVID-19. In cows and pigs they cause diarrhea, while in mice they cause hepatitis and encephalomyelitis.<br/><br><a target="_blank" href="Coronavirus_disease_2019" class="btn btn-primary">Wikipedia</a></p>
		</div>
	</div>
</div>

<div class="container-fluid sub_section pt-5 pb-5" id="Symptoms">
	<div class="section_header text-center mb-5 mt-4">
		<h1>Symptoms</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12"> 
				<figure class="text-center">
					<!-- <img src="img/cough.png" width="120" height="120"> -->
					<img src="https://lh3.googleusercontent.com/PYveJFcIHksVkhW3fCxb1_7i4_ugXvA1ob8ENescuBoPzJ76rLBcb0XC2p0fhAY8tKfwkcI=s85" width="120" height="120">
					<figcaption>Cough</figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12"> 
				<figure class="text-center">
					<!-- <img src="img/fever.jpg" width="120" height="120"> -->
					<img src="https://lh3.googleusercontent.com/Fl7ueJ25PDEnbnHwh4OcXbdLsEfMafq2_R1fels4LiDfNNY6wyf-gZI9IIap-uuY45cp=s85" width="120" height="120">
					<figcaption>Fever</figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12"> 
				<figure class="text-center">
					<!-- <img src="img/breath.png" width="120" height="120"> -->
					<img src="https://lh3.googleusercontent.com/wDZdwNhyUVsjUqhSCiPcDoCvT_uYUJY2d08zHgEapvqEaT6C0ioHmiQ4j4rBT5W5iziKRQ=s85" width="120" height="120">
					<figcaption>Breathing Difficulty</figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12"> 
				<figure class="text-center">
					<!-- <img src="img/tired.png" width="120" height="120"> -->

					<img src="https://lh3.googleusercontent.com/9sQimqVYDsuMUz7LVJU_gOEnXXEObCX3e-fVbP1wLsvApteM-HmbRbl0pQvm8qKJ4iJZSQ=s85" width="120" height="120">
					<figcaption>Tiredness</figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12"> 
				<figure class="text-center">
					<!-- <img src="img/nose.png" width="120" height="120"> -->
					<img src="https://lh3.googleusercontent.com/19b58R4lbBJ-UOsXzoXrZKEQdF1ZFaXGplLkce39_z4Bk7tx-txiyZduWxDqYcY_Qdm_9Q=s85" width="120" height="120">
					<figcaption>Runny Nose</figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12"> 
				<figure class="text-center">
					<!-- <img src="img/cold.png" width="120" height="120"> -->
					<img src="https://lh3.googleusercontent.com/XRyeIwCpRMsptyl6HoLNJ3bUllQtyndKZJXrKuG9Lvkf-Ed1vIAJpV_6gOw0qfEOKrhMfQ=s152" width="120" height="120">
					<figcaption>Cold</figcaption>
				</figure>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid sub_section about pt-5 pb-5" id="Prevention">
	<div class="section_header text-center mb-5 mt-4">
		<h1>6 Steps Prevention Against Coronavirus</h1>
	</div>


	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
							<!-- <img src="img/hand.png" width="120" height="120"> -->
							<img src="https://lh3.googleusercontent.com/LBvAkmfMqP99wZLWj6uSCwjUONc9XKy14ICqzbAa05BsQECeQ223C-9YW3KUsvLE-KEG7Ts=s128" width="120" height="120">
						</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>Wash your hands regularly for 20 seconds, with soap and water or alchohol based hand rub. </p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
							<!-- <img src="img/mask.png" width="120" height="120"> -->
							<img src="https://lh3.googleusercontent.com/C8O86A6JHtHtax0RvvmYTrdFEn13ckOSDEFmdazj0L_HA9E930kZsert84BxWd4ir3DTLg=s85" width="120" height="120">
						</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>Cover your nose and mouth with a disposable tissue or flexed elbow when you cough or sneeze.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
							<!-- <img src="img/distance.png" width="120" height="120"> -->
							<img src="https://lh3.googleusercontent.com/2W2MzGdkEHwDvSg9ffPLrjsG50MXgax_jVbqVknTpYleyc1OjAczT6yRKBHo2TIIxGhA=s85" width="120" height="120">
						</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>Avoid close contact(1 meter or 3 feet) with people who are unwell. </p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
							<!-- <img src="img/home.png" width="120" height="120"> -->
							<img src="https://lh3.googleusercontent.com/zpPIV2H4HUQ-yKxvllF3_jBpLpRxUaQgyjYFPX1fYkuJq5EswUznKvZhcM0lweK5wkHM=s85" width="120" height="120">
						</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>Stay home and self isolate from others in the household if you feel unwell. </p>
					</div>
				</div>
			</div><div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
							<!-- <img src="img/news.png" width="120" height="120"> -->
							<img src="https://lh3.googleusercontent.com/9NA7DSSn_LSh8K4ciPhzDl3afCWkIzqgzCBZWQpLOTaqwOhJ3fYKEJ3dERb2K6uYLf22rEo=s85" width="120" height="120">

						</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>Stay informed by watching news & follow the recommended practices.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
							<!-- <img src="img/medi.png" width="120" height="120"> -->

							<img src="https://lh3.googleusercontent.com/mvmDwBFYEOsk9yY0FmChA6WxA9KOQcOOoYhwMUH9IfDcWjksoWeYLIoaBN77KITk9iN6qg=s95" width="120" height="120">
						</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p>If you have fever cough or difficulty in breathing, seek medical care early.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="container-fluid sub_section pt-5 pb-5" id="contact">
	<div class="section_header text-center mb-5 mt-4">
		<h1>Contact Us</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 col-12">
				<form method="" action="config.php">
					<!-- <form action="mailto:jeet.sks2008@gmail.com"> -->
					<div class="form-group">
				    <label>Name</label>
				    <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="Name" autocomplete="off" required>
				  </div>

				  <div class="form-group">
				    <label>Email</label>
				    <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="E-mail" autocomplete="off" required>
				  </div>

				  <div class="form-group">
				    <label>Mobile Number</label>
				    <input type="Number" class="form-control" name="phone" id="exampleFormControlInput1" placeholder="Phone Number" autocomplete="off" required>
				  </div>
				  	<div class="form-group">
				  	<label>Select Symptoms</label><br>
				  <div class="form-check form-check-inline">
					  <input class="form-check-input custom-checkbox- custom-control-inline" type="checkbox" name="cold" id="inlineCheckbox1" value="Cold">
					  <label class="form-check-label" for="inlineCheckbox1">Cold</label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input custom-checkbox- custom-control-inline" type="checkbox" name="fever" id="inlineCheckbox2" value="Fever">
					  <label class="form-check-label" for="inlineCheckbox2">Fever</label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input custom-checkbox- custom-control-inline" type="checkbox" name="breath" id="inlineCheckbox3" value="Breathing">
					  <label class="form-check-label" for="inlineCheckbox3">Difficulty in Breath</label>
					</div>
					<div class="form-check form-check-inline">
					  <input class="form-check-input custom-checkbox- custom-control-inline" type="checkbox" name="weak" id="inlineCheckbox4" value="Tired">
					  <label class="form-check-label" for="inlineCheckbox4">Feeling weak</label>
					</div>
				</div>
				  <div class="form-group">
				    <label for="exampleFormControlTextarea1">Your Message</label>
				    <textarea class="form-control" placeholder="Your Message..." name="message" id="exampleFormControlTextarea1" rows="3" autocomplete="off" required></textarea>
				  </div>
				  <button type="Submit" name="Submit" class="btn-primary btn">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>

<footer class="mt-5">
	<div class="footer_style text-center text-white container">
		<br>
		<p>Created by Kshitiz Sinha</p>
		<br>
	</div> 
</footer>

<script type="text/javascript" src="coronatab.js"></script>
</body>
</html>


