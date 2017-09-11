
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">
    <!--Meta Data For Home Page Start Here-->
	<?php
		$data = $this->db->get('home_meta');
		$data = $data->result_array();
		foreach($data as $datas) {
   		
    ?>
	    <meta name="description" content="<?php echo $datas['meta_description']?>" />
		<meta name="keywords" content="<?php echo $datas['meta_keywords']?>" />
	<?php
		}
	?>
	<!--Meta Data For Home Page End Here-->

	<meta name="author" content="team aimviz">
	<meta name="robots" content="index, follow">
	<meta name="revisit-after" content="1 day">
	<link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/favicon.png">
	<!--Web Title Data For Home Page Start Here-->
	<?php
		$title = $this->db->get_where('webapp_title',array('home'));
		$title = $title->result_array();
		foreach($title as $webtitle) {
   		
    ?>
	    <title><?php echo $webtitle['home'];?></title>
	<?php
		}
	?>
	<!--Web Title Data For Home Page End Here-->
    
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
				<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 top-nav no-padding">
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
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 top-search">
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
<section class="main-banner" style="background-image: url('<?php echo base_url();?>assets/img/home-baner.jpg');">
			<div class="container banner-content">
					<div class="col-sm-5 ">
						
						<div class="col-sm-offset-3 col-sm-9 other-bordereds">
						<?php
							$data = $this->db->get('hometop');
							$data = $data->result_array();
							foreach($data as $datas) {
					   	?>
							<h1><?php echo $datas['heading']?></h1>
						</div>	
					</div>	
				<div class="col-sm-7 no-padding">
					<div class="col-sm-11 banner-content-right">
						<p><?php echo $datas['description']?></p>
						<a class="btn " href="<?php echo base_url('home/calculate_view');?>">get free consultancy</a>
					</div>
				</div>
				<?php 
					}
				?>
			</div>	
		</section>

		<!-- section-our-work-started -->
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
		<!-- section-our-work-ended -->
		<!-- section-projects -->
		<section class="our-projects sec-space">
			<div class="container">
				<div class="col-sm-10 col-sm-offset-1 ">
					<h2 class="lg-heading text-center"><?php
    		$data1 = $this->db->get('projectbottom');
    		$data1 = $data1->result_array();

   			 foreach($data1 as $data) {
       		 echo  $data['heading'] ;
    			}
			?></h2>
					<p><?php
    		$data1 = $this->db->get('projectbottom');
    		$data1 = $data1->result_array();

   			 foreach($data1 as $data) {
       		 echo  $data['description'] ;
    			}
			?></p>
						<button class="btn btn-primary filter-button" data-filter="all">All</button>
						<button class="btn btn-primary filter-button" data-filter="recent">Recent Projects</button>
						<button class="btn btn-primary filter-button" data-filter="active-pro">Active Projects</button>
						<button class="btn btn-primary filter-button" data-filter="future-pro">Future Projects</button>
				</div>
			</div>
		</section>
		<!-- section-projects-ended -->
		<!-- section-projects-details -->

		
		<!-- section-recent-projects-details -->
	<section class="projects-details gallery">
	<?php
		$data = $this->db->order_by('id','DESC');
		$data = $this->db->limit('3');
		$data = $this->db->get_where('gallery',array('project_cat' => 1));
	    $data = $data->result_array();
	    $i = 1;
    		foreach($data as $datas){
    ?>

    <div class="col-sm-4 col-md-3 col-xs-12 col-lg-3 project-details-sub filter recent">
   		<div class="col-sm-12 project-details-sub filter recent">
   			<img src="<?php echo base_url('assets/uploads/projects/').$datas['imageurl']?>"/>
   		</div>

	<div class="project-details-show">	
		<h5><?php echo $datas['name'];?></h5>
		<p><?php $this->load->helper('text');$string = $datas['description'];$string = word_limiter($string, 10);echo $string;?></p>
		<a  href="#inline_demo<?php if($i > 1)echo $i;?>" rel="prettyPhoto[inline]"  class="btn">View Project</a>
		<div class="custom-product-modal max-height" id="inline_demo<?php if($i > 1)echo $i;$i++?>" style="display:none;">
			<div class="col-sm-6  bg-colored no-padding">
				<div class="product-modal-content">
					<h3><?php echo $datas['name'];?></h3>
						<div class="icon-area">
							<span class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span> 
							<h4><?php echo $datas['location'];?></h4>
						</div>
					<p><?php echo $datas['description'];?></p>
				</div>
		<div class="product-modal-arrows"> 
			<text class="previous" href=""><span><i class="fa fa-long-arrow-left" aria-hidden="true"></i></span> Previous</text>
			<text  class="next" href="">Next <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></i></span></text>
		</div>
		</div>

		<div class="col-sm-6 bg-colored flex no-padding product-modal-img">
   			<img src="<?php echo base_url('assets/uploads/projects/').$datas['imageurl']?>"/>
   		</div>
       		</div>
				</div>
			</div>
	<?php
		}
	?>			
<!-- section-active-projects-details -->
	<?php
		$data2 = $this->db->order_by('id','DESC');
		$data2 = $this->db->limit('2');
		$data2 = $this->db->get_where('gallery',array('project_cat' => 2));
		$data2 = $data2->result_array();
			foreach($data2 as $datas2){
	?>
		<div class="col-sm-4 col-md-3 col-xs-12 col-lg-3 project-details-sub filter active-pro">
	   		<div class="col-sm-12 project-details-sub filter active-pro">
	   			<img src="<?php echo base_url('assets/uploads/projects/').$datas2['imageurl']?>"/>
   			</div>

			<div class="project-details-show">	
				<h5><?php echo $datas2['name'];?></h5>
				<p><?php $this->load->helper('text');$string = $datas2['description'];$string = word_limiter($string, 10);echo $string;?></p>	
				<a  href="#inline_demo<?php if($i > 1)echo $i;?>" rel="prettyPhoto[inline]"  class="btn">View Project</a>
					<div class="custom-product-modal max-height" id="inline_demo<?php if($i > 1)echo $i;$i++?>" style="display:none;">
					<div class="col-sm-6  bg-colored no-padding">
					<div class="product-modal-content">
						<h3><?php echo $datas2['name'];?></h3>
							<div class="icon-area">
								<span class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span> 
								<h4><?php echo $datas2['location'];?></h4>
							</div>
						<p><?php echo $datas2['description'];?></p>
					</div>
						<div class="product-modal-arrows"> 
							<text class="previous" href=""><span><i class="fa fa-long-arrow-left" aria-hidden="true"></i></span> Previous</text>
							<text  class="next" href="">Next <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></i></span></text>
						</div>
						</div>
		<div class="col-sm-6 bg-colored flex no-padding product-modal-img">
   			<img src="<?php echo base_url('assets/uploads/projects/').$datas2['imageurl']?>"/>
   		</div>
			</div>
				<!-- the modal-product-3-ended -->
			</div>
		</div>
	<?php
		}
	?>
<!-- section-active-projects--ended -->

	<!-- section-future-projects- -->
	<?php
		$data3 = $this->db->order_by('id','DESC');
		$data3 = $this->db->limit('3');
		$data3 = $this->db->get_where('gallery',array('project_cat' => 3));
		$data3 = $data3->result_array();
			foreach($data3 as $datas3){
	?>
    	<div class="col-sm-4 col-md-3 col-xs-12 col-lg-3 project-details-sub filter future-pro">
	   		<div class="col-sm-12 project-details-sub filter future-pro">
	   			<img src="<?php echo base_url('assets/uploads/projects/').$datas3['imageurl']?>"/>
	   		</div>
		<div class="project-details-show">	
			<h5><?php echo $datas3['name'];?></h5>
			<p><?php $this->load->helper('text');$string = $datas3['description'];$string = word_limiter($string, 10);echo $string;?></p>
			<a  href="#inline_demo<?php if($i > 1)echo $i;?>" rel="prettyPhoto[inline]"  class="btn">View Project</a>
				<div class="custom-product-modal max-height" id="inline_demo<?php if($i > 1)echo $i;$i++?>" style="display:none;">
					<div class="col-sm-6  bg-colored no-padding">
			<div class="product-modal-content">
				<h3>
				<?php echo  $datas3['name'];?>					
				</h3>
						<div class="icon-area">
							<span class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span> 
							<h4><?php echo $datas3['location'];?></h4>
						</div>
				<p><?php echo $datas3['description'];?>	</p>
			</div>
				<div class="product-modal-arrows"> 
					<text class="previous" href=""><span><i class="fa fa-long-arrow-left" aria-hidden="true"></i></span> Previous</text>
					<text  class="next" href="">Next <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></i></span></text>
				</div>
						</div>
			<div class="col-sm-6 bg-colored flex no-padding product-modal-img">
       			<img src="<?php echo base_url('assets/uploads/projects/').$datas3['imageurl']?>"/>
       		</div>
    		</div>
    		</div>
			</div>
	<?php
		}
	?>
<!-- section-future-projects-ended -->
	</section>


		<!-- section-cost-estimate -->
		<section class="our-projects  cost-estimate sec-space">
			<div class="container">
				<div class="col-sm-10 col-sm-offset-1">
					<h2 class="md-heading text-center">calculate estimate your project cost</h2>
					<ul style="list-style: none; padding: 0; margin: 0;">
		<li><p>We can assist you in building your new dream Home. You can use our cost estimator tool to calculate the price estimate.</p></li>
	</ul>
						<a class="btn btn-primary" href="<?php echo base_url('home/calculate_view');?>">Let&rsquo;s Calculate</a>
				</div>
			</div>
		</section>
		<!-- section-cost-estimate-ended -->
		<!-- section-bottom-services -->
		<section class="bottom-services">
			<div class="container">
				<!-- bottom-services-1 -->
				<div class="col-sm-3 col-md-4 col-xs-12 col-lg-3">
					<div class="bottom-services-sub equal-height">
						<span class="services-bottom-icon contract"></span>
		<?php
    		$service1 = $this->db->get('services');
    		$service1 = $service1->result_array();
				foreach($service1 as $service) {
       	?>
       		<h3><?php echo $service['name1']?></h3>
			<h5><?php echo $service['subheading1']?></h5>
			<p><?php
    			$this->load->helper('text');
   			 	$string = $service['description1'];
    			$string = word_limiter($string, 8);
    			echo $string;
    		?></p>
						<a href="<?php echo base_url('home/servicesmen_view');?>" class="btn">Read More<span><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></span></a>
			<?php
				}
			?>
					</div>
				</div>
				<!-- bottom-services-1-ended -->
				<!-- bottom-services-2 -->
				<div class="col-sm-3 col-md-4 col-xs-12 col-lg-3">
					<div class="bottom-services-sub">
						<span class="services-bottom-icon building"></span>
			<?php
	    		$service2 = $this->db->get('services');
	    		$service2 = $service2->result_array();
					foreach($service2 as $service) {
       		?>
       		<h3><?php echo $service['name2']?></h3>
			<h5><?php echo $service['subheading2']?></h5>
			<p><?php
    			$this->load->helper('text');
   			 	$string = $service['description2'];
    			$string = word_limiter($string, 8);
    			echo $string;
    		?></p>
						<a href="<?php echo base_url('home/servicesmen_view');?>" class="btn">Read More<span><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></span></a>
			<?php
				}
			?>
					</div>
				</div>
				<!-- bottom-services-2-ended -->
				<!-- bottom-services-3 -->
				<div class="col-sm-3 col-md-4 col-xs-12 col-lg-3">
					<div class="bottom-services-sub equal-height">
						<span class="services-bottom-icon selling"></span>
						<?php
	    		$service3 = $this->db->get('services');
	    		$service3 = $service3->result_array();
					foreach($service3 as $service) {
       		?>
       		<h3><?php echo $service['name3']?></h3>
			<h5><?php echo $service['subheading3']?></h5>
			<p><?php
    			$this->load->helper('text');
   			 	$string = $service['description3'];
    			$string = word_limiter($string, 8);
    			echo $string;
    		?></p>
						<a href="<?php echo base_url('home/servicesmen_view');?>" class="btn">Read More<span><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></span></a>
			<?php
				}
			?>
					</div>
				</div>
				<!-- bottom-services-3-ended -->
				<!-- bottom-services-4 -->
				<div class="col-sm-3 col-md-4 col-xs-12 col-lg-3">
					<div class="bottom-services-sub equal-height">
						<span class="services-bottom-icon purchase"></span>
						<?php
	    		$service3 = $this->db->get('services');
	    		$service3 = $service3->result_array();
					foreach($service3 as $service) {
       		?>
       		<h3><?php echo $service['name4']?></h3>
			<h5><?php echo $service['subheading4']?></h5>
			<p><?php
    			$this->load->helper('text');
   			 	$string = $service['description4'];
    			$string = word_limiter($string, 8);
    			echo $string;
    		?></p>
						<a href="<?php echo base_url('home/servicesmen_view');?>" class="btn">Read More<span><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></span></a>
			<?php
				}
			?>
					</div>
				</div>
				<!-- bottom-services-4-ended -->
			</div>
		</section>
		<!-- section-bottom-services-ended -->		