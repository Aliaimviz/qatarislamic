<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
	<!--Meta Data For About Us Page Start Here-->
	<?php
		$data = $this->db->get('aboutus-meta');
		$data = $data->result_array();
		foreach($data as $datas) {
   		
    ?>
	    <meta name="description" content="<?php echo $datas['meta_description']?>" />
		<meta name="keywords" content="<?php echo $datas['meta_keywords']?>" />
	<?php
		}
	?>
	<!--Meta Data For About Us Page End Here-->

	<meta name="author" content="team aimviz">
	<meta name="robots" content="index, follow">
	<meta name="revisit-after" content="1 day">
	<link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/favicon.png">
	
    <!--Web Title Data For About Us Page Start Here-->
	<?php
		$title = $this->db->get_where('webapp_title',array('about_us'));
		$title = $title->result_array();
		foreach($title as $webtitle) {
   		
    ?>
	    <title><?php echo $webtitle['about_us'];?></title>
	<?php
		}
	?>
	<!--Web Title Data For About Us Page End Here-->

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
						<a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/img/logo.png" style="margin-top: 15px;"></a>
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
					<div class="row topbar-qi">
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
<section class="main-banner" style="background-image: url('<?php echo base_url();?>assets/img/aboutt-banner.jpg');">
			<div class="container banner-content other-banner-content content-para">
				<div class="col-sm-5 ">
					<div class="col-sm-offset-3 col-sm-9 other-bordereds">
						<h1><?php
    		$data1 = $this->db->get('abouttop');
    		$data1 = $data1->result_array();

   			 foreach($data1 as $data) {
       		 echo  $data['heading'] ;
    			}
			?></h1>
					<!-- 	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
					 --></div>	
				</div>	
				<div class="col-sm-7 no-padding">
					<div class="col-sm-11 banner-content-right">
					<p><?php
    		$data1 = $this->db->get('abouttop');
    		$data1 = $data1->result_array();

   			 foreach($data1 as $data) {
       		 echo  $data['description'] ;
    			}
			?></p>
					</div>	
				</div>	
			</div>	
		</section>
		<!-- section-calulate-content -->
		<section class="content-heading">
			<div class="container">
				<div class="col-sm-12 no-padding text-center">
				
					<h2>
						<?php
				    		$data = $this->db->get('about-mission');
				    		$data = $data->result_array();
							foreach($data as $datas) {
				   			 	echo $datas['heading'];
    						}
						?>
					</h2>
					
					<div class="col-sm-12 no-padding">
					<p><?php
    		$data = $this->db->get('about-mission');
    		$data = $data->result_array();
			foreach($data as $datas) {
   			 	echo $datas['ourmission'];
    			}
			?></p>
					</div>
				</div>
			</div>
		</section>
		<!-- section-calulate-content-eneded -->
		<!-- who-we-area -->
		<section class="col-2-content">
			<div class="container"> 
					<?php
			    		$data = $this->db->get('about-who');
			    		$data = $data->result_array();
						foreach($data as $datas) {
			   		?>
				<h2 class="pink-md-heading text-center"><?php echo $datas['heading'];?></h2>
				<div class="text-center">
					<p><?php echo $datas['whoweare'];?></p>
				</div>
				<?php
					}
				?>
			</div>
		</section>
		<!-- who-we-area-eneded -->
		<section class="our-work about-us-sec-work">
			<div class="container max-height">
						<?php
							$data = $this->db->get('howwork');
							$data = $data->result_array();
							foreach($data as $datas){
   		
    					?>
				<h2 class="lg-heading text-center"><?php echo $datas['mainheading']?></h2>
				<!-- services-1 -->
				<div class="col-sm-6 col-md-3 col-xs-12 col-lg-3">
					<div class="our-work-sub equal-height" style="height: 317px;">
						<span class="services-icon planning"></span>
						
						<h3><?php echo $datas['heading1']?></h3>
						<p><?php echo $datas['planning']?></p>
					</div>
					
				</div>
				<!-- services-1-ended -->
				<!-- services-2 -->
				<div class="col-sm-6 col-md-3 col-xs-12 col-lg-3">
					<div class="our-work-sub equal-height" style="height: 317px;">
						<span class="services-icon estimate"></span>
						<h3><?php echo $datas['heading2']?></h3>
						<p><?php echo $datas['estimation']?></p>
					</div>
					
				</div>
				<!-- services-2-ended -->
				<!-- services-3 -->
				<div class="col-sm-6 col-md-3 col-xs-12 col-lg-3">
					<div class="our-work-sub equal-height" style="height: 317px;">
						<span class="services-icon technical"></span>
						<h3><?php echo $datas['heading3']?></h3>
						<p><?php echo $datas['technical']?></p>
					</div>
					
				</div>
				<!-- services-3-ended -->
				<!-- services-4 -->
				<div class="col-sm-6 col-md-3 col-xs-12 col-lg-3">
					<div class="our-work-sub equal-height" style="height: 317px;">
						<span class="services-icon design"></span>
						<h3><?php echo $datas['heading4']?></h3>
						<p><?php echo $datas['design']?></p>
					</div>
					
				</div>
				<!-- services-4-ended -->

			<?php
			     }
			?>
			</div>
		</section>
		<!-- section-calulate-content-eneded -->
		<!-- our-team -->
		<section class="our-team sec-space">
			<div class="container">
					<?php
						$data = $this->db->get_where('team');
						$data = $data->result_array();
						foreach($data as $datas) {
				   	?>
				<h2 class="lg-heading text-center"><?php echo $datas['mainheading'];?></h2>
				<!-- team-member-1 -->
				<div class="row">
					<div class="col-sm-6 col-md-3 col-xs-12 col-lg-3 team">
					<img src="<?php echo base_url('assets/uploads/team/').$datas['image']?>"/>
					<h4><?php echo $datas['name'];?><br></h4>
					<p><?php echo $datas['description'];?></p>
					</div>	
				<!-- our-team-ended -->
				<!-- team-member-2 -->
					<div class="col-sm-6 col-md-3 col-xs-12 col-lg-3 team">
					<img src="<?php echo base_url('assets/uploads/team/').$datas['image2']?>"/>
					<h4><?php echo $datas['name2'];?><br></h4>
					<p><?php echo $datas['description2'];?></p>
					</div>
				</div>	
				<!-- our-team-ended -->
				<!-- team-member-3 -->
				<div class="row">
					<div class="col-sm-6 col-md-3 col-xs-12 col-lg-3 team">
					<img src="<?php echo base_url('assets/uploads/team/').$datas['image3']?>"/>
					<h4><?php echo $datas['name3'];?><br></h4>
					<p><?php echo $datas['description3'];?></p>
					</div>
				<!-- our-team-ended -->
				<!-- team-member-4 -->
					<div class="col-sm-6 col-md-3 col-xs-12 col-lg-3 team">
					<img src="<?php echo base_url('assets/uploads/team/').$datas['image4']?>"/>
					<h4><?php echo $datas['name4'];?><br></h4>
					<p><?php echo $datas['description4'];?></p>
					</div>
				</div>	
				<!-- our-team-ended -->
				<?php
						}
					?>
			</div>
		</section>
		<!-- calculate-testimonial -->
