<?php include ('header-admin.php');?>
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
					<!--Add Meta Data Start Here-->
					<h2 class="pink-md-heading">Add Meta Data</h2>
					<?php echo form_open_multipart('meta/insert_aboutmeta/');?>
					<?php
			    		$data = $this->db->get('aboutus-meta');
			    		$data = $data->result_array();
							foreach($data as $datas) {
		    		?>
		    		<marquee>Write "," After Every Keyword</marquee>
					<div class="form-group">
						<textarea class="form-control" rows="6" placeholder="Enter Meta Keywords Here" name="meta_keywords"><?php echo $datas['meta_keywords']?></textarea>
					</div>
					<div class="form-group">
						<textarea class="form-control" rows="6" placeholder="Enter Meta Description Here" name="meta_description" value = "<?=set_value('meta_description');?>"><?php echo $datas['meta_description']?></textarea>
					</div>
					<button type="submit" name="submit" class="btn btn-primary">Submit</button>
					<?php
						}
					?>
					<?php echo form_close();?>
					<!--Add Meta Data Page End Here-->

					<!--OUR MISSION & PHILISOPHY/About Us Page Start Here-->
					<br><br><br><br><br><br><br><br><br><h2 class="pink-md-heading">OUR MISSION & PHILISOPHY/About Us Page</h2>
					<?php echo form_open_multipart('pagesortingcontroller/mission/'); ?>
					<?php
			    		$data = $this->db->get('about-mission');
			    		$data = $data->result_array();
							foreach($data as $datas) {
		    		?>
					<div class="form-group">
						<input type="text" class="form-control" name="heading" placeholder="Enter Heading Here" value="<?php echo $datas['heading']?>">
					</div>
					<div class="form-group">
						<textarea class="form-control" rows="6" placeholder="Enter OUR MISSION & PHILISOPHY/About Us Page Content Here" name="about" value = "<?=set_value('about');?>"><?php echo $datas['ourmission']?></textarea>
					</div>
					<button type="submit" name="submit" class="btn btn-primary">Submit</button>
					<?php
						}
					?>
					<?php echo form_close();?>
					<!--OUR MISSION & PHILISOPHY/About Us Page End Here-->

					<!--WHO WE ARE/About Us Page Start Here-->
					<h2 class="pink-md-heading">WHO WE ARE/About Us Page</h2>
					<?php echo form_open_multipart('pagesortingcontroller/who/');?>
					<?php
			    		$data = $this->db->get('about-who');
			    		$data = $data->result_array();
							foreach($data as $datas) {
		    		?>
					<div class="form-group">
						<input type="text" class="form-control" name="heading" placeholder="Enter Heading Here" value="<?php echo $datas['heading']?>">
					</div>
					<div class="form-group">
						<textarea class="form-control" rows="6" placeholder="Enter WHO WE ARE/About Us Page Content Here" name="who" value="<?=set_value('who');?>"><?php echo $datas['whoweare']?></textarea>
					</div>
					<button type="submit" name="submit" class="btn btn-primary">Submit</button>
					<?php
						}
					?>
					<?php echo form_close();?>
					<!--WHO WE ARE/About Us Page End Here-->

					<!--HOW WE WORK?/About Us Page Start Here-->
					<h2 class="pink-md-heading">HOW WE WORK?/About Us Page</h2>
					<?php echo form_open_multipart('pagesortingcontroller/howwork/');?>
					<?php
			    		$data = $this->db->get('howwork');
			    		$data = $data->result_array();
							foreach($data as $datas) {
		    		?>
					<div class="form-group">
						<input type="text" class="form-control" name="mainheading" placeholder="Enter Main Heading Here" value="<?php echo $datas['mainheading']?>">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="heading1" placeholder="Enter Heading 1 Here" value="<?php echo $datas['heading1']?>">
					</div>
					<div class="form-group">
						<textarea class="form-control" rows="6" placeholder="Enter PLANNING Content Here" name="planning"><?php echo $datas['planning']?></textarea>
					</div>
					<label>Section 2</label>
					<div class="form-group">
						<input type="text" class="form-control" name="heading2" placeholder="Enter Heading 2 Here" value="<?php echo $datas['heading2']?>">
					</div>
					<div class="form-group">
						<textarea class="form-control" rows="6" placeholder="Enter ESTIMATION Content Here" name="estimation"><?php echo $datas['estimation']?></textarea>
					</div>
					<label>Section 3</label>
					<div class="form-group">
						<input type="text" class="form-control" name="heading3" placeholder="Enter Heading 3 Here" value="<?php echo $datas['heading3']?>">
					</div>
					<div class="form-group">
						<textarea class="form-control" rows="6" placeholder="Enter TECHNICAL Content Here" name="technical"><?php echo $datas['technical']?></textarea>
					</div>
					<label>Section 4</label>
					<div class="form-group">
						<input type="text" class="form-control" name="heading4" placeholder="Enter Heading 4 Here" value="<?php echo $datas['heading4']?>">
					</div>
					<div class="form-group">
						<textarea class="form-control" rows="6" placeholder="Enter DESIGN Content Here" name="design"><?php echo $datas['design']?></textarea>
					</div>
					<button type="submit" name="submit" class="btn btn-primary">Submit</button>
					<?php
						}
					?>
					<?php echo form_close();?>
					<!--HOW WE WORK?/About Us Page End Here-->

				 <!--Team Section/About Us Page Start Here-->
					<br><br><br><br><br><br><br><br><br><h2 class="pink-md-heading">Our Team Members/About Us Page</h2>
					<?php echo form_open_multipart('pagesortingcontroller/team/'); ?>
					<?php
			    		$data = $this->db->get('team');
			    		$data = $data->result_array();
							foreach($data as $datas) {
		    		?>
					<!--Main Heading Start Here-->
					<div class="form-group">
						<label>Main Heading :</label><input type="text" class="form-control" name="mainheading" placeholder="Enter Main Heading Of Our Team Section Here" value="<?php echo $datas['mainheading']?>">
					</div>
					<?php
						}
					?>
					<!--Main Heading end Here-->
					<!--Team Member 1/About Us Page Start Here-->
					<h5>Our Team Member 1</h5>
					<?php
			    		$data = $this->db->get('team');
			    		$data = $data->result_array();
							foreach($data as $datas) {
		    		?>
		    		<div class="col-sm-6 form-input-padding-left">
						<div class="form-group">
							<input type="file" id="file-upload1" name="myfile" style="display: none;" value="<?php echo $datas['image']?>"><?php echo $datas['image']?>
							<label for="file-upload1" class="btn form-control file-upload rounded" name="myfile"><span class="image"><i class="fa fa-picture-o" aria-hidden="true" ></i></span>Choose File</label>
							<!-- <label><?php echo $datas['image']?></label> -->
						</div>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="name" placeholder="Enter Team Member 1 Name Here" value="<?php echo $datas['name']?>">
					</div>
					<div class="form-group">
						<textarea class="form-control" rows="6" placeholder="Enter Description Here" name="description"><?php echo $datas['description']?></textarea>
					</div>
					<button type="submit" name="submit" class="btn btn-primary">Update Member</button>
					<?php
						}
					?>
					<?php echo form_close();?>
					<!--Team Member 1/About Us Page End Here-->

					<!--Team Member 2/About Us Page Start Here-->
					<br><br><h5>Our Team Member 2</h5>
					<?php echo form_open_multipart('pagesortingcontroller/team2/'); ?>
					<?php
			    		$data = $this->db->get('team');
			    		$data = $data->result_array();
							foreach($data as $datas) {
		    		?>
		    		<div class="col-sm-6 form-input-padding-left">
						<div class="form-group">
							<input type="file" id="file-upload2" name="myfile2" style="display: none;" value="<?php echo $datas['image2']?>"><?php echo $datas['image2']?>
							<label for="file-upload2" class="btn form-control file-upload rounded" name="myfile2"><span class="image"><i class="fa fa-picture-o" aria-hidden="true" ></i></span>Choose File</label>
							<!-- <label><?php echo $datas['image2']?></label> -->
						</div>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="name" placeholder="Person Name" value="<?php echo $datas['name2']?>">
					</div>
					<div class="form-group">
						<textarea class="form-control" rows="6" placeholder="Enter Description Here" name="description"><?php echo $datas['description2']?></textarea>
					</div>
					<button type="submit" name="submit" class="btn btn-primary">Update Member</button>
					<?php
						}
					?>
					<?php echo form_close();?>
					<!--Team Member 2/About Us Page End Here-->

					<!--Team Member 3/About Us Page Start Here-->
					<br><br><h5>Our Team Member 3</h5>
					<?php echo form_open_multipart('pagesortingcontroller/team3/'); ?>
					<?php
			    		$data = $this->db->get('team');
			    		$data = $data->result_array();
							foreach($data as $datas) {
		    		?>
		    		<div class="col-sm-6 form-input-padding-left">
						<div class="form-group">
							<input type="file" id="file-upload3" name="myfile3" style="display: none;" value="<?php echo $datas['image3']?>"><?php echo $datas['image3']?>
							<label for="file-upload3" class="btn form-control file-upload rounded" name="myfile3"><span class="image"><i class="fa fa-picture-o" aria-hidden="true" ></i></span>Choose File</label>
							<!-- <label><?php echo $datas['image3']?></label> -->
						</div>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="name" placeholder="Person Name" value="<?php echo $datas['name3']?>">
					</div>
					<div class="form-group">
						<textarea class="form-control" rows="6" placeholder="Enter Description Here" name="description"><?php echo $datas['description3']?></textarea>
					</div>
					<button type="submit" name="submit" class="btn btn-primary">Update Member</button>
					<?php
						}
					?>
					<?php echo form_close();?>
					<!--Team Member 3/About Us Page End Here-->

					<!--Team Member 4/About Us Page Start Here-->
					<br><br><h5>Our Team Member 4</h5>
					<?php echo form_open_multipart('pagesortingcontroller/team4/'); ?>
					<?php
			    		$data = $this->db->get('team');
			    		$data = $data->result_array();
							foreach($data as $datas) {
		    		?>
		    		<div class="col-sm-6 form-input-padding-left">
						<div class="form-group">
							<input type="file" id="file-upload4" name="myfile4" style="display: none;" value="<?php echo $datas['image4']?>"><?php echo $datas['image4']?>
							<label for="file-upload4" class="btn form-control file-upload rounded" name="myfile4"><span class="image"><i class="fa fa-picture-o" aria-hidden="true" ></i></span>Choose File</label>
							<!-- <label><?php echo $datas['image4']?></label> -->
						</div>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="name" placeholder="Person Name" value="<?php echo $datas['name4']?>">
					</div>
					<div class="form-group">
						<textarea class="form-control" rows="6" placeholder="Enter Description Here" name="description"><?php echo $datas['description4']?></textarea>
					</div>
					<!--Team Member 4/About Us Page End Here-->
					<button type="submit" name="submit" class="btn btn-primary">Update Member</button>
					<?php
						}
					?>
					<?php echo form_close();?> 
				<!--Team Section/About Us Page End Here-->

					<!--Main Banner of About Us Page Start Here-->
					<br><br><br><br><br><h2 class="pink-md-heading">Main Banner of About Us Page</h2>
					<?php echo form_open_multipart('pagesortingcontroller/aboutmain/');?>
					<?php
			    		$data = $this->db->get('abouttop');
			    		$data = $data->result_array();
							foreach($data as $datas) {
		    		?>
					<div class="form-group">
						<input type="text" class="form-control" name="heading" placeholder="Enter Banner Heading Here" value="<?php echo $datas['heading']?>">
					</div>
					<div class="form-group">
						<textarea class="form-control" rows="6" placeholder="Enter Banner Description Here" name="description"><?php echo $datas['description']?></textarea>
					</div>
					<button type="submit" name="submit" class="btn btn-primary">Submit</button>
					<?php
						}
					?>
					<?php echo form_close();?>
					<!--Main Banner of About Us Page End Here-->
					<!--Bottom Content Of Contact Us Page End Here-->
			</div>
			</div>
		</section>	
		<!-- header-ended -->
<?php include ('footer-admin.php');?>