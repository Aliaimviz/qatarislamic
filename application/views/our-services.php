<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <!--Meta Data For Our Services Page Start Here-->
	<?php
		$data = $this->db->get('ourservices_meta');
		$data = $data->result_array();
		foreach($data as $datas) {
   		
    ?>
	    <meta name="description" content="<?php echo $datas['meta_description']?>" />
		<meta name="keywords" content="<?php echo $datas['meta_keywords']?>" />
	<?php
		}
	?>
	<!--Meta Data For Our Services Page End Here-->

	<meta name="author" content="team aimviz">
	<meta name="robots" content="index, follow">
	<meta name="revisit-after" content="1 day">
	<link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/favicon.png">
    
	<!--Web Title Data For Our Services Page Start Here-->
	<?php
		$title = $this->db->get_where('webapp_title',array('our_services'));
		$title = $title->result_array();
		foreach($title as $webtitle) {
   		
    ?>
	    <title><?php echo $webtitle['our_services'];?></title>
	<?php
		}
	?>
	<!--Web Title Data For Our Services Page End Here-->

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
		</body>
		</html>
		<div id="bg-transparent"></div>
<section class="main-banner" style="background-image: url('<?php echo base_url();?>assets/img/our-services-sub-banner.jpg');">
			<?php
	    		$data1 = $this->db->get('servicestop');
	    		$data1 = $data1->result_array();
					foreach($data1 as $data) {
		    ?>
			<div class="container banner-content other-banner-content sub-services-banner">
				<div class="col-sm-5 ">
					<div class="col-sm-offset-3 col-sm-9 other-bordereds" style="margin-top: 36px;">
						<h1><?php echo $data['heading'];?></h1>
					</div>	
				</div>
				<div class="col-sm-7 no-padding">
					<div class="col-sm-11 banner-content-right">
					<p><?php echo $data['description'];?></p>
				</div>
			</div>	
			</div>
			<?php
			}
			?>
	</section>
	<!-- 1-repeat--just-use-pink-class-if-needed -->
	<section class="our-services-content">
			<div class="container">
				<div class="col-sm-9 no-padding">
					<h2 class="pink-md-heading">
			<?php
    		$service1 = $this->db->get('services');
    		$service1 = $service1->result_array();
				foreach($service1 as $service) {
       		?>
       		<h3><?php echo $service['name1']?></h3>
			<h5><?php echo $service['subheading1']?></h5>
			<p><?php echo $service['description1']?></p>
			<?php
				}
			?>			
				</div>
				<div class="col-sm-3 text-center">
					<span class="icon-contract-big"></span>
				</div>
			</div>	
	</section>
	<!-- 2-repeat--just-use-pink-class-if-needed -->
	<section class="our-services-content pink">
			<div class="container">
				<div class="col-sm-3 text-center">
					<span class="icon-building-big"></span>
				</div>
				<div class="col-sm-9 no-padding">
					<h2 class="pink-md-heading">
						<?php
	    		$service2 = $this->db->get('services');
	    		$service2 = $service2->result_array();
					foreach($service2 as $service) {
       		?>
       		<h3><?php echo $service['name2']?></h3>
			<h5><?php echo $service['subheading2']?></h5>
			<p><?php echo $service['description2']?></p>
			<?php
				}
			?>		
				</div>
			</div>	
	</section>
	<!-- 3-repeat--just-use-pink-class-if-needed -->
	<section class="our-services-content">
			<div class="container">
				<div class="col-sm-9 no-padding">
					<h2 class="pink-md-heading">
						<?php
	    		$service3 = $this->db->get('services');
	    		$service3 = $service3->result_array();
					foreach($service3 as $service) {
       		?>
       		<h3><?php echo $service['name3']?></h3>
			<h5><?php echo $service['subheading3']?></h5>
			<p><?php echo $service['description3']?></p>
			<?php
				}
			?>				
				</div>
				<div class="col-sm-3 text-center">
					<span class="icon-selling-big"></span>
				</div>
			</div>	
	</section>
		<!-- 2-repeat--just-use-pink-class-if-needed -->
	<section class="our-services-content pink">
		<div class="container">
			<div class="col-sm-3 text-center">
				<span class="icon-purchase-big"></span>
			</div>
			<div class="col-sm-9 no-padding">
				<h2 class="pink-md-heading">
					<?php
	    		$service3 = $this->db->get('services');
	    		$service3 = $service3->result_array();
					foreach($service3 as $service) {
       		?>
       		<h3><?php echo $service['name4']?></h3>
			<h5><?php echo $service['subheading4']?></h5>
			<p><?php echo $service['description4']?></p>
<?php
				}
			?>			
			</div>
		</div>	
	</section>
