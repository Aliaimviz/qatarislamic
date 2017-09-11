<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">
   <!--Meta Data For Calculate Cost Page Start Here-->
	<?php
		$data = $this->db->get('calculatecost_meta');
		$data = $data->result_array();
		foreach($data as $datas) {
   		
    ?>
	    <meta name="description" content="<?php echo $datas['meta_description']?>" />
		<meta name="keywords" content="<?php echo $datas['meta_keywords']?>" />
	<?php
		}
	?>
	<!--Meta Data For Calculate Cost Page End Here-->

	<meta name="author" content="team aimviz">
	<meta name="robots" content="index, follow">
	<meta name="revisit-after" content="1 day">
	<link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/favicon.png">

    <!--Web Title Data For Calculate Cost Page Start Here-->
	<?php
		$title = $this->db->get_where('webapp_title',array('calculate_cost'));
		$title = $title->result_array();
		foreach($title as $webtitle) {
   		
    ?>
	    <title><?php echo $webtitle['calculate_cost'];?></title>
	<?php
		}
	?>
	<!--Web Title Data For Calculate Cost Page End Here-->

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  <script type="text/javascript">
function calculateArea2() {
    var val = $('input[name="turnkey"]:checked').val();
    var valturn = $('input[name="turnkeyvalue"]').val();
    var out = val * valturn;
    $('input[name="output2"]').val(out);
   }

  function GetSelectedVal(ele) {
       $("#typeresult").val($(ele).closest('label').text());
   }

   $(function(){
   $('.number-only').keypress(function(e) {
	if(isNaN(this.value+""+String.fromCharCode(e.charCode))) return false;
  }).on("cut copy paste",function(e){
	e.preventDefault();
  });
});


$(function() {
    $('input[id$=turnkeyvalue]').keyup(function() {
        var txtClone = $(this).val();
        $('input[id$=arearesult]').val(txtClone);
    });
});


$(document).ready(function() {
    $('#submit').click(function(e) {
        var isValid = true;
        $('input[type="text"].required').each(function() {
            if ($.trim($(this).val()) == '') {
                isValid = false;
                $(this).css({
                    "border": "1px solid red",
                    "background": "#FFCECE"
                });
                alert('Error : please click on the required field');
                e.preventDefault();
                window.location='http://site.startupbug.net:6999/qatarislamic/home/calculate_view';
            }
            else {
                $(this).css({
                    "border": "",
                    "background": ""
                });
            }
        });
        if (isValid == false) 
            e.preventDefault();
        
    });
});
		</script>

<style type="text/css">
	button, input, select, textarea {
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
    color: green;
}
</style>
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


<section class="main-banner" style="background-image: url('<?php echo base_url();?>assets/img/calculate-cost-banner.jpg');">
<div class="container banner-content other-banner-content content-para">
<div class="col-sm-6 ">
<div class="col-sm-12 other-bordered">
<h1 style="font-size: 2.5em;"><?php
    		$data1 = $this->db->get('calculatetop');
    		$data1 = $data1->result_array();

   			 foreach($data1 as $data) {
       		 echo  $data['heading'] ;
    			}
			?></h1>
<p><?php
    		$data1 = $this->db->get('calculatetop');
    		$data1 = $data1->result_array();

   			 foreach($data1 as $data) {
       		 echo  $data['description'] ;
    			}
			?></p>
</div>	
</div>		
<div class="col-sm-6 no-padding cost-banner">
<div class="col-sm-12 ">
<h2>ESTIMATED COST CALCULATION</h2>
<div class="form-cal-hidden">
<div class="col-sm-3 no-padding">
		<text>Finishing Types :</text>
		<form name="input" action="" method="POST">
		<div class="form-group">

		<?php $calc = $this->db->get('calculator');
		$calc = $calc->result_array();
		foreach ($calc as $cal) {
		echo '
		<label><input type="radio" text="Turnkey" name="turnkey" id="turnkey" value="'.$cal['skeleton'].'" onchange="GetSelectedVal(this);" class="form-control" checked><span class="custom-radio-space">Skeleton</span></label>
        <label><input type="radio" text="Turn Key" name="turnkey" id="turnkey" value="'.$cal['turnkey'].'" onchange="GetSelectedVal(this);" class="form-control"><span class="custom-radio-space">TurnKey</span></label>';
		}
		?>
		</div>

		</div>
	<div class="col-sm-9 no-padding cost-left-input-padding">
	<form id="myid" name="myid" method="post">
			<div class="col-sm-5 no-padding">
			<text>Total Build Area(m2)</text>
			</div>
			<div class="col-sm-7 no-padding">
			<div class="form-group">
			<input type="text" name="turnkeyvalue" id="turnkeyvalue" value="" class="number-only required" placeholder="Enter The Value" required>
			</div>
		<button style="margin-bottom: 15px;" type="submit" id="submit" class="btn btn-primary hide-data-button main-hide" onClick="calculateArea2(); return false;">Calulate</button><br>
		</div>
	</form> 		
	</div>	
	<section>
			<div class="container">
				<div class="quote-page-form-top no-padding quote-page-form">
				<div class="quote" style="background: #800000;height: 36px;margin-bottom: 15px;"><h3 style="color:white">Quote your Project</h3></div>
					<?php echo form_open_multipart('email/sendEmail') ?>
							<div class="col-sm-6 form-input-padding-left">
								<div class="form-group">
									<input type="text" class="form-control"  name="name" placeholder="Name" required>
								</div>
							</div>	

							<div class="col-sm-6 form-input-padding-right">
								<div class="form-group">
									<input type="email" class="form-control" name="email"   placeholder="Email" required>
								</div>
							</div>	

							<div class="form-group">
								<input type="text" class="form-control number-only" name="phone" placeholder="Phone" pattern="[0-9]{4,}" title="Enter Valide Phone Number in numeric values" required>
							</div>

							<div class="form-group">
								 <input type="file" id="file-upload" name="resume-upload" style="display: none;">
                                <label for="file-upload" class="btn form-control file-upload">Upload a file <span><i class="fa fa-cloud-upload" aria-hidden="true"></i></span></label>
							</div>
							<div class="form-group">
								<textarea class="form-control" rows="6" placeholder="Message" name="message" required></textarea>
							</div>
						  <button type="submit" name="send_email" value="send_email" class="btn btn-primary">SEND</button>
					<?php echo form_close();?>
				</div>
				
			</div>
		</section>		
	</div>
<!-- this-will-be-visible-if-user-fills-the-form -->

<div class="hidebox">
	<div class="row custom-margin-form">
		<div class="col-sm-6 col-xs-6 custom-cost-margin calulates-result">
		<text>Finishing Type</text>
		</div>
		<div class="col-sm-6  col-xs-6 custom-cost-margin calulates-result-generated">
		:<input type="text" value="" class="form-control transparent-field" name="typeresult" id="typeresult" readonly>
		</div>
	</div>

		<div class="row custom-margin-form">
			<div class="col-sm-6 col-xs-6 custom-cost-margin calulates-result">
			<text>Total Build Up Area (m2)</text>
			</div>
			<div class="col-sm-6  col-xs-6 custom-cost-margin calulates-result-generated">
			:<input type="text" value="" class="form-control transparent-field" id="arearesult" name="arearesult" readonly>
			</div>
		</div>

		<div class="row custom-margin-form">
		<div class="col-sm-6 col-xs-6 custom-cost-margin calulates-result">
		<text>Total Cost</text>
		</div>
		<div class="col-sm-6 col-xs-6 custom-cost-margin calulates-result-generated">
		:<input type="label" value="" class="form-control transparent-field" name="output2" readonly>
		</div>
		</div>
		<div class="row custom-margin-form">
		<div class="col-sm-6 col-xs-6 custom-cost-margin calulates-result">
			<button  style="margin-bottom: 15px;" type="submit" class="btn btn-primary hide-data-button" onclick="window.location='http://site.startupbug.net:6999/qatarislamic/home/calculate_view'">Return Back</button>
		</div>
		</div>
		<section>
			<div class="container">
				<div class="quote-page-form-top no-padding quote-page-form">
				<div class="quote" style="background: maroon;height: 36px;margin-bottom: 15px;"><h3 style="color:white">Quote your Project</h3></div>
					<?php echo form_open_multipart('email/sendEmail') ?>
							<div class="col-sm-6 form-input-padding-left">
								<div class="form-group">
									<input type="text" class="form-control"  name="name" placeholder="Name" required>
								</div>
							</div>	

							<div class="col-sm-6 form-input-padding-right">
								<div class="form-group">
									<input type="email" class="form-control" name="email"   placeholder="Email" required>
								</div>
							</div>	

							<div class="form-group">
								<input type="text" class="form-control number-only" name="phone" placeholder="Phone" pattern="[0-9]{4,}" title="Enter Valide Phone Number in numeric values" required>
							</div>

							<div class="form-group">
								 <input type="file" id="file-upload" name="resume-upload" style="display: none;">
                                <label for="file-upload" class="btn form-control file-upload">Upload a file <span><i class="fa fa-cloud-upload" aria-hidden="true"></i></span></label>
							</div>
							<div class="form-group">
								<textarea class="form-control" rows="6" placeholder="Message" name="message" required></textarea>
							</div>
						  <button type="submit" name="send_email" value="send_email" class="btn btn-primary">SEND</button>
					<?php echo form_close();?>
				</div>
				
			</div>
		</section>		

</div>	
	
</form>
<!--- ------------------- -->
</div>	
</div>	
</div>	
</section>
<!-- section-calulate-content -->
<!-- section-calulate-content -->
		
		<!-- section-calulate-content-eneded -->



			<!-- section-for dsktop -->
		<section class="main-cost-3col hidden-xs vissible-sm vissible-md vissible-lg">
			<div class="container max-height">
				<div class="row">
				<!-- repeat-1 -->
				<div class="col-sm-4 text-center cost-3col">
				<?php
		    		$data = $this->db->get('calculatebottom');
		    		$data = $data->result_array();
					foreach($data as $datas){
       			?>
					<span class="tick-mark"></span>
					<h2 class="pink-md-heading equal-height"><?php echo  $data[0]['heading1'];?></h2>
					<p><?php echo  $data[0]['description1'];?></p>
				<?php
				}
				?>	
				</div>
				<div class="col-sm-8"></div>
				</div>
				<!-- repeat-1-ended -->
				<!-- repeat-1-ended -->

				<!-- repeat-1 -->
				<div class="row">
				<div class="col-sm-4 text-center cost-3col">
				<?php
		    		$data = $this->db->get('calculatebottom');
		    		$data = $data->result_array();
					foreach($data as $datas){
       			?>
					<span class="tick-mark"></span>
					<h2 class="pink-md-heading equal-height"><?php echo  $data[0]['heading2'];?></h2>
					<p><?php echo  $data[0]['description2'];?></p>
				<?php
				}
				?>	
				</div>
				<!-- repeat-1-ended -->


				<!-- repeat-2 -->
				<div class="col-sm-4 text-center cost-3col">
				<?php
		    		$data = $this->db->get('calculatebottom');
		    		$data = $data->result_array();
					foreach($data as $datas){
       			?>
					<span class="tick-mark"></span>
					<h2 class="pink-md-heading equal-height"><?php echo  $data[0]['heading3'];?></h2>
					<p><?php echo  $data[0]['description3'];?></p>
				<?php
				}
				?>
				</div>
				<!-- repeat-2-ended -->
				<!-- repeat-3 -->
				<div class="col-sm-4 text-center cost-3col">
				<?php
		    		$data = $this->db->get('calculatebottom');
		    		$data = $data->result_array();
					foreach($data as $datas){
       			?>
					<span class="tick-mark"></span>
					<h2 class="pink-md-heading equal-height"><?php echo  $data[0]['heading4'];?></h2>
					<p><?php echo  $data[0]['description4'];?></p>
				<?php
				}
				?>	
				</div>
				<!-- repeat-3-ended -->
				</div>
			</div>
		</section>




		<!-- section-for mobile -->
		<section class="main-cost-3col vissible-xs hidden-sm hidden-md hidden-lg">
			<div class="container max-height">
				<!-- repeat-1 -->
				<div class="col-sm-4 text-center cost-3col">
				<?php
		    		$data = $this->db->get('calculatebottom');
		    		$data = $data->result_array();
					foreach($data as $datas){
       			?>
					<span class="tick-mark"></span>
					<h2 class="pink-md-heading equal-height"><?php echo  $data[0]['heading1'];?></h2>
					<p><?php echo  $data[0]['description1'];?></p>
				<?php
				}
				?>	
				</div>
				<!-- repeat-1-ended -->

				<!-- repeat-1 -->
				<div class="col-sm-4 text-center cost-3col">
				<?php
		    		$data = $this->db->get('calculatebottom');
		    		$data = $data->result_array();
					foreach($data as $datas){
       			?>
					<span class="tick-mark"></span>
					<h2 class="pink-md-heading equal-height"><?php echo  $data[0]['heading2'];?></h2>
					<p><?php echo  $data[0]['description2'];?></p>
				<?php
				}
				?>	
				</div>
				<!-- repeat-1-ended -->


				<!-- repeat-2 -->
				<div class="col-sm-4 text-center cost-3col">
				<?php
		    		$data = $this->db->get('calculatebottom');
		    		$data = $data->result_array();
					foreach($data as $datas){
       			?>
					<span class="tick-mark"></span>
					<h2 class="pink-md-heading equal-height"><?php echo  $data[0]['heading3'];?></h2>
					<p><?php echo  $data[0]['description3'];?></p>
				<?php
				}
				?>
				</div>
				<!-- repeat-2-ended -->
				<!-- repeat-3 -->
				<div class="col-sm-4 text-center cost-3col">
				<?php
		    		$data = $this->db->get('calculatebottom');
		    		$data = $data->result_array();
					foreach($data as $datas){
       			?>
					<span class="tick-mark"></span>
					<h2 class="pink-md-heading equal-height"><?php echo  $data[0]['heading4'];?></h2>
					<p><?php echo  $data[0]['description4'];?></p>
				<?php
				}
				?>	
				</div>
				<!-- repeat-3-ended -->
			</div>
		</section>
		<!-- section-calulate-content-eneded -->
		<!-- calculate-testimonial -->
		<section class="col-testimonial colored-bg-sec sec-space">
			<div class="container max-height">
				<!-- testimonial-1 -->
				<div class="col-sm-4 text-center">
					<div class="testimonial equal-height">
						<p><?php
    		$data1 = $this->db->get('calculatetestimonial');
    		$data1 = $data1->result_array();

   			 foreach($data1 as $data) {
       		 echo  $data['description1'] ;
    			}
			?>.</p>
					</div>
					<text><?php
    		$data1 = $this->db->get('calculatetestimonial');
    		$data1 = $data1->result_array();

   			 foreach($data1 as $data) {
       		 echo  $data['name1'] ;
    			}
			?></text>
				</div>
				<!-- testimonial-1-ended -->
				<!-- testimonial-2 -->
				<div class="col-sm-4 text-center">
					<div class="testimonial equal-height">
						<p><?php
    		$data1 = $this->db->get('calculatetestimonial');
    		$data1 = $data1->result_array();

   			 foreach($data1 as $data) {
       		 echo  $data['description2'] ;
    			}
			?>.</p>
					</div>
					<text><?php
    		$data1 = $this->db->get('calculatetestimonial');
    		$data1 = $data1->result_array();

   			 foreach($data1 as $data) {
       		 echo  $data['name2'] ;
    			}
			?></text>
				</div>
				<!-- testimonial-2-ended -->
				<!-- testimonial-3 -->
				<div class="col-sm-4 text-center">
					<div class="testimonial equal-height">
						<p><?php
    		$data1 = $this->db->get('calculatetestimonial');
    		$data1 = $data1->result_array();

   			 foreach($data1 as $data) {
       		 echo  $data['description3'] ;
    			}
			?>.</p>
					</div>
					<text><?php
    		$data1 = $this->db->get('calculatetestimonial');
    		$data1 = $data1->result_array();

   			 foreach($data1 as $data) {
       		 echo  $data['name3'] ;
    			}
			?></text>
				</div>
				<!-- testimonial-3-ended -->

			</div>
		</section>
		<!-- calculate-testimonial -->

