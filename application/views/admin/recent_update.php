<html>
<head>
<title>Update Projects</title>
<link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'>
	<style type="text/css">
		#container {
		width:622px;
		height:610px;
		margin:50px auto
		}
		#wrapper {
		width:520px;
		padding:0 50px 20px;
		background:linear-gradient(#fff,#AFEBD8);
		border:1px solid #ccc;
		box-shadow:0 0 5px;
		font-family:'Marcellus',serif;
		float:left;
		margin-top:10px
		}
		#menu {
		float:left;
		width:200px;
		margin-top:-30px
		}
		#detail {
		float:left;
		width:320px;
		margin-top:-27px
		}
		a {
		text-decoration:none;
		color:blue
		}
		a:hover {
		color:red
		}
		li {
		padding:4px 0
		}
		h1 {
		text-align:center;
		font-size:28px
		}
		hr {
		border:0;
		border-bottom:1.5px solid #ccc;
		margin-top:-10px;
		margin-bottom:30px
		}
		#hide {
		display:none
		}
		form {
		margin-top:-40px
		}
		label {
		font-size:17px
		}
		input {
		width:100%;
		padding:8px;
		margin:5px 0 15px;
		border:none;
		box-shadow:0 0 5px
		}
		input#submit {
		margin-top:10px;
		font-size:18px;
		background:linear-gradient(#22abe9 5%,#36caf0 100%);
		border:1px solid #0F799E;
		color:#fff;
		font-weight:700;
		cursor:pointer;
		text-shadow:0 1px 0 #13506D
		}
		input#submit:hover {
		background:linear-gradient(#36caf0 5%,#22abe9 100%)
		}
		p {
		font-size:18px;
		font-weight:700;
		color:#18af0b
		}


	</style>
<style type="text/css">
	span.image i {
		position: relative;
		left: -28px !important;
	}
</style>
</head>

		<body>
		<?php include ('header-admin.php');?>
			<div id="container">
			<div class="col-sm-4 col-md-3 ">
			<section class="admin-content">
				<div class="left-side">
					<ul>
						<li class="current-tab custom-dropdown click-to-hide" data-target="#unit-details"><span><i class="fa fa-camera" aria-hidden="true"></i></span>Projects Upload Section <i class="fa fa-chevron-down" aria-hidden="true"></i></li>	
						<div id="unit-details" class="diplay-none" >
							<li><a class="" href="<?php echo base_url('admincontroller/index');?>"><span></span>Recent Projects Section</a></li>	
							<li><a class="" href="<?php echo base_url('admincontroller/active');?>"><span></span>Active Projects Section</a></li>	
							<li><a class="" href="<?php echo base_url('admincontroller/future');?>"><span></span>Future Projects Section</a></li>		
						</div>
						<li><a href="<?php echo base_url('admincontroller/show_data_id');?>"><span><i class="fa fa-file" aria-hidden="true"></i></span>Update Projects Section</a></li>
						<li><a href="<?php echo base_url('admincontroller/deleteprojects');?>"><span><i class="fa fa-file" aria-hidden="true"></i></span>Delete Projects Section</a></li>
						<li class="custom-dropdown click-to-hide" data-target="#unit-details1"><span><i class="fa fa-plus" aria-hidden="true"></i></span>Upload Services Section<i class="fa fa-chevron-down" aria-hidden="true"></i></li>
							<div id="unit-details1" class="diplay-none" >
								<li><a href="<?php echo base_url('adservicescontroller/index');?>"><span></span>Service Section 1</a></li>
								<li><a href="<?php echo base_url('adservicescontroller/service2');?>"><span></span>Service Section 2</a></li>
								<li><a href="<?php echo base_url('adservicescontroller/service3');?>"><span></span>Service Section 3</a></li>
								<li><a href="<?php echo base_url('adservicescontroller/service4');?>"><span></span>Service Section 4</a></li>
							</div>
						<li><a href="<?php echo base_url('calculatorcontroller/index');?>"><span><i class="fa fa-calculator" aria-hidden="true"></i></span>Calculator Values Section</a></li>
						<li><a href="<?php echo base_url('headerfootercontroller/index');?>"><span><i class="fa fa-calculator" aria-hidden="true"></i></span>Header Footer Content Section</a></li>
						<li><a href="<?php echo base_url('pagesortingcontroller/index');?>"><span><i class="fa fa-file" aria-hidden="true"></i></span>Menus Management Section</a></li>
						<li class="custom-dropdown click-to-hide" data-target="#unit-details2"><span><i class="fa fa-plus" aria-hidden="true"></i></span>Web App Content Section<i class="fa fa-chevron-down" aria-hidden="true"></i></li>	
						<div id="unit-details2" class="diplay-none" >
							<li><a class="" href="<?php echo base_url('admincontroller/webcontent');?>"><span></span>Home Page Content</a></li>	
							<li><a class="" href="<?php echo base_url('admincontroller/aboutus');?>"><span></span>About Us Page Content</a></li>	
							<li><a class="" href="<?php echo base_url('admincontroller/ourprojects');?>"><span></span>Our Projects Page Content</a></li>
							<li><a class="" href="<?php echo base_url('admincontroller/calculatecost');?>"><span></span>Calculate Cost Page Content</a></li><li><a class="" href="<?php echo base_url('admincontroller/ourservices');?>"><span></span>Services Page Content</a></li>	
							<li><a class="" href="<?php echo base_url('admincontroller/contactus');?>"><span></span>Contact Us Page Content</a></li>		
						</div>
						<li><a href="<?php echo base_url('admincontroller/sendemails');?>"><span><i class="fa fa-file" aria-hidden="true"></i></span>Send Emails Section</a></li>
						<li><a href="<?php echo base_url('admincontroller/create_cat');?>"><span><i class="fa fa-file" aria-hidden="true"></i></span>Emails And Categories Section</a></li>
						<li><a href="<?php echo base_url('admincontroller/read_emails');?>"><span><i class="fa fa-file" aria-hidden="true"></i></span>Read Emails Section</a></li>
						<li><a href="<?php echo base_url('admincontroller/activity_log');?>"><span><i class="fa fa-file" aria-hidden="true"></i></span>Web App Activity Log</a></li>
						<li><a href="<?php echo base_url('create_users_controller/index');?>"><span><i class="fa fa-file" aria-hidden="true"></i></span>Create Admin</a></li>
						<li><a href="<?php echo base_url('create_users_controller/delete_users');?>"><span><i class="fa fa-file" aria-hidden="true"></i></span>Delete Admin</a></li>
					</ul>
				</div>
				</section>
				</div>
							
							<div class="col-sm-8 col-md-9 ">
							<div id="wrapper">
							<h1>Update Projects</h1>
							<br>
							<center>
								<h3>Click On Project Image Or in Project Name For Editing</h3>
							</center>
							<!-- center>
								<label>Important Note :</label><marquee>Upload Image Every Time When You Update Any Thing Realated To Project</marquee>
							</center> -->
							<hr/>
							<div id="menu" >
							<!-- Fetching Names Of All Students From Database -->
							<ol>
							<?php
								foreach($results as $data){
							?>
							<li><a href="<?php echo base_url() . "index.php/admincontroller/editproject/" . $data['id']; ?>">
							<?php echo $data['name']; ?></a></li>
							<a href="<?php echo base_url() . "index.php/admincontroller/editproject/" . $data['id']; ?>">
							<img src="<?php echo base_url('assets/uploads/projects/').$data['imageurl']?>" style="width: 30%;"/>
							<?php
								}
							?>
							<center class="paginat"><?php echo $links; ?></center>
							</ol>
							</div>
					</div>
					</div>
					</div>
					<?php include ('footer-admin.php');?>
					</body>
</html>