<?php 
include ('header-admin.php');?>
<script type="text/javascript">
  $(function() {
     $("input:myfile").change(function (){
       var fileName = $(this).val();
       $(".filename").html(fileName);
     });
  });
</script>
		<section class="admin-content">
			<div class="container">
				<div class="col-sm-4 col-md-3 left-side">
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

				<div class="col-sm-6  form">
					<h2 class="pink-md-heading">Add Header Footer Values</h2>
					<?php echo form_open_multipart('headerfootercontroller/insert/'); ?>
					<?php
			    		$data = $this->db->get('header');
			    		$data = $data->result_array();
							foreach($data as $datas){
	    			?>
						<div class="form-group">
							<input type="text" class="form-control" name="fb" value="<?php echo $datas['fb']?>">
						</div>
						
						<div class="form-group">
							<input type="text" class="form-control" name="twitter" value="<?php echo $datas['twitter']?>">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="instagram" value="<?php echo $datas['insta']?>">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="email" value="<?php echo $datas['email']?>">
						</div>
						<div class="form-group">
								<input type="text" class="form-control" name="number" value="<?php echo $datas['number']?>">
							</div>
						  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
					<?php
						}
					?> 
					<?php echo form_close();?>

					<br><br><br><br><h2 class="pink-md-heading">Add Copy Right Text For Footer</h2>
					<?php echo form_open_multipart('headerfootercontroller/insert_copyright/'); ?>
						<?php
			    		$data = $this->db->get('footer_copyright');
			    		$data = $data->result_array();
							foreach($data as $datas){
	    			?>
						<div class="form-group">
							<input type="text" class="form-control" name="copytext" value="<?php echo $datas['copy_right']?>">
						</div>
						<button type="submit" name="submit" class="btn btn-primary">Submit</button>
					<?php
						}
					?> 
					<?php echo form_close();?>

					<h2 class="pink-md-heading">Add Web App Pages Title</h2>
						<?php echo form_open_multipart('headerfootercontroller/change_pages_title/'); ?>
					<?php
			    		$data = $this->db->get('webapp_title');
			    		$data = $data->result_array();
							foreach($data as $datas){
	    			?>
						<div class="form-group">
							<input type="text" class="form-control" name="home_title" value="<?php echo $datas['home']?>">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="about_title" value="<?php echo $datas['about_us']?>">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="projects_title" value="<?php echo $datas['our_projects']?>">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="calculate_title" value="<?php echo $datas['calculate_cost']?>">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="services_title" value="<?php echo $datas['our_services']?>">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="contact_title" value="<?php echo $datas['contact_us']?>">
						</div>
						<button type="submit" name="submit" class="btn btn-primary">Submit</button>
					<?php
						}
					?>
					<?php echo form_close();?>

					<h2 class="pink-md-heading">Upload Site Logo</h2>
						<?php echo form_open_multipart('headerfootercontroller/insertlogo/'); ?>
						<?php
				    		$data = $this->db->get('site_logo');
				    		$data = $data->result_array();
								foreach($data as $datas){
	    				?>
						<div class="form-group">
							<input type="file" id="file-upload1" name="myfile" style="display: none;" value="<?php echo $datas['image_path'];?>" required><?php echo $datas['image_path'];?>
							<marquee direction = "right">The logo image should contain 258px width and 76px height</marquee>
							<label for="file-upload1" class="btn form-control file-upload rounded" name="myfile"><span class="image"><i class="fa fa-picture-o" aria-hidden="true" ></i></span>Choose File</label>
						</div>
						<button type="submit" name="submit" class="btn btn-primary">Submit</button>
					<?php
						}
					?>
					<?php echo form_close();?>
				</div>
			</div>
		</section>	
		<!-- header-ended -->

<?php 
include ('footer-admin.php');
?>