<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">
    
    <!--Meta Data For Contact Us Page Start Here-->
	<?php
		$data = $this->db->get('contactus_meta');
		$data = $data->result_array();
		foreach($data as $datas) {
   		
    ?>
	    <meta name="description" content="<?php echo $datas['meta_description']?>" />
		<meta name="keywords" content="<?php echo $datas['meta_keywords']?>" />
	<?php
		}
	?>
	<!--Meta Data For Contact Us Page End Here-->

	<meta name="author" content="team aimviz">
	<meta name="robots" content="index, follow">
	<meta name="revisit-after" content="1 day">
	<link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/favicon.png">
    
    <!--Web Title Data For Contact US Page Start Here-->
	<?php
		$title = $this->db->get_where('webapp_title',array('contact_us'));
		$title = $title->result_array();
		foreach($title as $webtitle) {
   		
    ?>
	    <title><?php echo $webtitle['contact_us'];?></title>
	<?php
		}
	?>
	<!--Web Title Data For Contact US Page End Here-->

    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
	<!-- 1. Add latest jQuery and fancyBox files -->	
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" /> 
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
    <script
	  src="https://code.jquery.com/jquery-3.2.1.min.js"
	  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
	  crossorigin="anonymous">
	</script>
	<script>
		function clearfields(){
	    document.getElementById("name").value="";
	    document.getElementById("email").value="";
	    document.getElementById("phone").value="";
	    document.getElementById("subject").value="";
	    document.getElementById("message").value="";
	}

		$(function(){
			$('.number-only').keypress(function(e) {
				if(isNaN(this.value+""+String.fromCharCode(e.charCode))) return false;
		  	}).on("cut copy paste",function(e){
		e.preventDefault();
		  	});
		});
	</script>
</head>
	<body>
		
		<!-- header -->
		<header class="main-header">
			<div class="container desktop-nav">
				<div class="col-sm-8 top-nav no-padding">
					<ul>
					<li class="social-icons">
					<?php
    				$fb = $this->db->get('header');
    				$fb = $fb->result_array();
					foreach($fb as $f) {
       		 		echo '<a href="'.$f['fb'].'"><i class="fa fa-facebook" aria-hidden="true"></i></a>';
							}
					?>

					<?php
    				$twitter = $this->db->get('header');
    				$twitter = $twitter->result_array();
					foreach($twitter as $t) {
       		 		echo '<a href="'.$t['twitter'].'"><i class="fa fa-twitter" aria-hidden="true"></i></a>';
							}
					?>
					<?php
    				$instagram = $this->db->get('header'); 
    				$instagram = $instagram->result_array();
					foreach($instagram as $i) {
       		 		echo '<a href="'.$i['insta'].'"><i class="fa fa-instagram" aria-hidden="true"></i></a>';
							}
					?>
					</li>
					
					<?php
    				$email = $this->db->get('header');
    				$email = $email->result_array();
					foreach($email as $e) {
					echo '<li class="custom-header-li"><a href="mailto:'.$e['email'].'"> <span> <i class="fa fa-envelope-open" aria-hidden="true"></i></span>'.$e['email'].'</a></li>';
					}
					?>

					<?php
    				$number = $this->db->get('header');
    				$number = $number->result_array();
    				foreach($number as $n) {
    				echo '<li class="custom-header-li"><a href="tel:'.$n['number'].'"> <span><i class="fa fa-phone" aria-hidden="true"></i></span>'.$n['number'].'</a></li>';
							}
					?>
					
					</ul>
				</div>
				<div class="col-sm-4 top-search">
					<?php echo form_open_multipart('searchcontroller/search') ?>
						<div class="search-group">
							<input type="text" placeholder="Search" name="search">
							<button type="submit" name="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
						</div>
						<a href="#">عربی</a>
					<?php echo form_close();?>
					
				</div>
			</div>
			<!--  desktop-nav -->
			
			<div class="nav-row desktop-nav">
				<div class="container custom-container">
					<div class="col-md-3 col-sm-4 col-xs-8  no-padding tab-center">
						<?php
    						$data = $this->db->get('site_logo');
    						$data = $data->result_array();
    							foreach($data as $datas) {
    					?>	
						<a href="<?php echo base_url();?>">
							<img src="<?php echo base_url('assets/uploads/logo/').$datas['image_path']?>" style="margin-top: 15px;"/>
						</a>
						<?php
							}
						?>	
					</div>
					<div class="col-md-9  no-padding">
						<nav class="navbar navbar-default" role="navigation">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
								</button> <a class="navbar-brand" href="#"></a>
							</div>
							
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<?php
							$menus = $this->db->get('linksorting');
							$this->db->order_by('id', 'ASC');
							$menus = $menus->result_array();
							echo '<ul class="nav navbar-nav">';
							foreach($menus as $menu) {
							echo '<li class="">
							<a href="'.$menu['link'].'">'.$menu['name'].'</a>
							</li>';
							}?>
							</ul>
							</div>
						</nav>
					</div>	
				</div>
			</div>
			<!--  desktop-nav -->
			
			<!--  Mobile-nav -->
			
			<div class="container mobile-nav">
				<div class="col-xs-12 top-nav no-padding">
					<div class="row">
					<ul>
						<div class="col-xs-6 top-bar-align">
					<li class="social-icons">
						
					<?php
    				$fb = $this->db->get('header');
    				$fb = $fb->result_array();
					foreach($fb as $f) {
       		 		echo '<a href="'.$f['fb'].'"><i class="fa fa-facebook" aria-hidden="true"></i></a>';
							}
					?>

					<?php
    				$twitter = $this->db->get('header');
    				$twitter = $twitter->result_array();
					foreach($twitter as $t) {
       		 		echo '<a href="'.$t['twitter'].'"><i class="fa fa-twitter" aria-hidden="true"></i></a>';
							}
					?>
					<?php
    				$instagram = $this->db->get('header'); 
    				$instagram = $instagram->result_array();
					foreach($instagram as $i) {
       		 		echo '<a href="'.$i['insta'].'"><i class="fa fa-instagram" aria-hidden="true"></i></a>';
							}
					?>
					</li>
					</div>
					
						<div class="col-xs-6 top-bar-align landscape-email">
					<?php
    				$email = $this->db->get('header');
    				$email = $email->result_array();
					foreach($email as $e) {
					echo '<li><a href="mailto:'.$e['email'].'"><i class="fa fa-envelope-open" aria-hidden="true"></i>&nbsp&nbsp'.$e['email'].'</a></li>';
					}
					?>
						</div>
					<div class="col-xs-6 top-bar-align landscape-number">
					<?php
    				$number = $this->db->get('header');
    				$number = $number->result_array();
    				foreach($number as $n) {
    				echo '<li><a href="tel:'.$n['number'].'"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp&nbsp'.$n['number'].'</a></li>';
							}
					?>
					</div>

					<div class="col-xs-6 top-bar-align landscape-language">
							<a href="#">عربی</a>
					</div>
					</div>
					</ul>
	
				
				
				<div class="col-xs-12 top-search">
					<div class="no-padding">
						<form action="<?php echo base_url();?>searchcontroller/search" enctype="multipart/form-data" method="post" accept-charset="utf-8">
							<div class="search-group">
								<input type="text" placeholder="Search" name="search">
								<button type="submit" name="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
							</div>
						</form>
					</div>
					
				</div>	
			</div>
			
			<div class="nav-row mobile-nav">
				<div class="container custom-container">
					<div class="col-xs-8 col-md-6  col-sm-5  no-padding tab-center">
						<a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/img/logo.png" style="margin-top: 0px;"></a>
					</div>
					<div class="col-xs-4 col-md-6  col-sm-7 text-right no-right-padding mobile-pading">
						<div id="mySidenav" class="sidenav">

						  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
						<div class="side-nav-logo">
							<a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/img/logo.png"></a>
						</div>

						 <?php
							$menus = $this->db->get('linksorting');
							$this->db->order_by('id', 'ASC');
							$menus = $menus->result_array();
							foreach($menus as $menu) {
							echo '<a href="'.$menu['link'].'">'.$menu['name'].'</a>';
							}?>
						</div>
						<div id="main">
							<span class="nav-button" style="font-size:30px;cursor:pointer" onclick="openNav()"><i class="fa fa-bars" aria-hidden="true"></i></span>
						</div>										
					</div>	
				</div>
			</div>
			<!--  Mobile-nav-ended -->

		</header>	
		<!-- header-ended -->
		<div id="bg-transparent"></div>
<section class="main-banner" style="background-image: url('<?php echo base_url();?>assets/img/contactback.jpg');">
			<div class="container banner-content other-banner-content">
					<div class="col-sm-5 ">
						<div class="col-sm-offset-3 col-sm-9 other-bordereds other-borderede">
							<h1>Contact Us</h1>
						</div>	
					</div>	
			</div>	
		</section>
		<!-- section-meet-up -->
		<section class="meetup sec-space">
			<div class="container contact-form-section-top">
				<div class="col-sm-7 no-padding">
					<div class="col-sm-2 ">
					<span class="msg-icon-img"></span>
					</div>
					<div class="col-sm-8 contact-content">
						<h2 class="pink-md-heading"><?php
    		$data1 = $this->db->get('contacttop');
    		$data1 = $data1->result_array();

   			 foreach($data1 as $data) {
       		 echo  $data['heading'] ;
    			}
			?></h2>
						<p><?php
    		$data1 = $this->db->get('contacttop');
    		$data1 = $data1->result_array();

   			 foreach($data1 as $data) {
       		 echo  $data['description'] ;
    			}
			?></p>
						
						</div>
				</div>
				<div class="col-sm-5 contact-page-form-top no-padding contact-page-form">
				<?php echo form_open_multipart('email/send')?>
							<div class="col-sm-6 form-input-padding-left">
							<div class="form-group">
								<input type="text" class="form-control" name="name" placeholder="Name" required>
							</div>
						</div>	
						<div class="col-sm-6 form-input-padding-right">
							<div class="form-group">
							<input type="email" class="form-control" name="email" placeholder="Email" required>
							</div>
						</div>	
						<div class="col-sm-6 form-input-padding-left">
							<div class="form-group">
								<input style="width: 100%;" type="text" class="form-control number-only" name="phone" placeholder="Phone" pattern="[0-9]{4,}" title="Enter Valide Phone Number in numeric values" required>
							</div>
						</div>
						<div class="col-sm-6 form-input-padding-right">
							<div class="form-group">
								<input type="text" class="form-control" name="subject" placeholder="Subject" required>
							</div>
						</div>	
							<div class="form-group">
								<textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
							</div>
					<button type="submit" name="email/send" class="btn btn-primary" value="email/multisend">Submit</button>
				<?php echo form_close();?>
				</div>
			</div>
		</section>
		<!-- section-meet-up-ended -->

		
		<!-- section-social -->
		<section class="contact-social sec-space">
			<div class="container">
				<div class="col-md-2 col-lg-2 col-sm-2 no-padding">
					<div class="social-box">
						<span class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
						<text>United Street Same building as QIIB (bank) Entrance 2 Office no. 13 </text>
					</div>
				</div>
				<div class="col-md-2 col-lg-2 col-sm-2 no-padding">
					<div class="social-box">
						<span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
						<text>Phone: 40164787</text> 
						<text>Fax: 40164789</text>
					</div>
				</div>
				<div class="col-md-2 col-lg-2 col-sm-2 no-padding">
					<div class="social-box">
						<span class="icon"><i class="fa fa-envelope-open" aria-hidden="true"></i></span>
						<a href="mailto:contactus@qatarislamic.com">contactus@qatarislamic.com</a> 
					</div>
				</div>
				<div class="col-md-2 col-lg-2 col-sm-2 no-padding">
					<div class="social-box common">
						<span class="icon fb"><i class="fa fa-facebook" aria-hidden="true"></i></span>
						<text>5000 Likes</text> 
					</div>
				</div>
				<div class="col-md-2 col-lg-2 col-sm-2 no-padding">
					<div class="social-box common">
						<span class="icon twitter"><i class="fa fa-twitter" aria-hidden="true"></i></span>
						<text>2000 Followers</text>  
					</div>
				</div>
				<div class="col-md-2 col-lg-2 col-sm-2 no-padding">
					<div class="social-box common">
						<span class="icon pin"><i class="fa fa-instagram" aria-hidden="true"></i></span>
						<text>2530 Followers</text>  
					</div>
				</div>
			</div>
		</section>
		<!-- section-social-ended -->


	




