<?php 
include ('header-admin.php');?>
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

				
				<div class="col-sm-8  form">
				<h2 class="pink-md-heading">Create Categories</h2>
					<?php echo form_open_multipart('email/create_cat')?>
						<div class="col-sm-6 form-input-padding-right pp">
							<div class="form-group">
								<input type="text" class="form-control" name="make_cat" placeholder="Write Cat Name" required><br>
							</div>
						</div>
						<button type="submit" name="submit" class="btn btn-primary">Create</button>		
					<?php echo form_close();?>
					
					<br><br><br><br><h2 class="pink-md-headingg" style="color: #ca0044;">Select email to add in category</h2>
					<?php echo form_open_multipart('email/insertcheckdata')?>
					<div class="add-frm-adt">
					<div class="form-group">
						<div class="col-sm-6 form-input-padding-left">
							<select class="form-control" name="select_cat">
	            				<?php 
	            				$data = $this->db->get('email_category');
								$data = $data->result_array();
									foreach($data as $rows){ 
						              	echo '
						              	<option name="selectcategory" value="'.$rows['id'].'">
						              	'.$rows['cat_name'].'
						              	</option>';
				            	}
	            				?>
	            			</select>
	            		</div>
            		</div>
            		
            		<div class="form-group">
						<button type="submit" name="submit" class="btn btn-primary">Add In Category</button>	
            		</div>
            		</div>

            	<!--Section Read Email Start HEre-->
            	<table class="table table-striped">
					<thead>
				      <tr>
				        <th class="td-select-email">Select Email</th>
				        <th class="td-email">User Email</th>
				        <th class="td-name">User Name</th>
				        <!-- <th>Send Email Via Gmail</th> -->
				      </tr>
				    </thead>
    
					<?php
						$data = $this->db->get('email');
		    			$data = $data->result_array();
					foreach($data as $rows) {
					echo '
			<tbody>
		      	<tr>
		      		<td class="td-select-email"><input type="checkbox" name="selectemail[]" value="'.$rows['id'].'"></td>
		      		<td class="td-email">'.$rows['email'].'</td>
			        <td class="td-name">'.$rows['name'].'</td>
			    </tr>
			</tbody>';	
			}
				?>
				<!-- <td><button type="submit" name="submit" class="btn btn-primary" onclick="myFunction()">Send Email Via Gmail</button></td> -->
			</table>	
			<?php echo form_close();?>
			<!--Section Read Email Start HEre-->	


				</div>
			</div>
	</section>	
		<!-- header-ended -->
<?php 
include ('footer-admin.php');
?>