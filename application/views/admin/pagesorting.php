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
						<h2 class="pink-md-heading">Add Header Menus Here</h2>
						<?php echo form_open_multipart('pagesortingcontroller/insert/'); ?>
						<marquee>Add Only 6 Menus,And Size OF The Menu Name Should Be Same As Currently Menus Name</marquee>
						<div class="form-group">
							<input type="text" class="form-control" name="name" placeholder="Page Name.."  value = "<?=set_value('name');?>" required>
						</div>
						
						<div class="form-group">
							<input type="text" class="form-control" name="link" placeholder="Page Link.."  value = "<?=set_value('link)');?>" required>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="order" placeholder="Page Order.."  value = "<?=set_value('order');?>" required>
						</div>
						<button type="submit" name="submit" class="btn btn-primary">Modify Header Page Sorting</button>
					<?php echo form_close();?>


			<table class="table table-striped">
				<h2 class="pink-md-heading">Delete Header Menus Below</h2>
				  	<thead>
				      <tr>
				        <th>Menu Link</th>
				        <th>Menu Name</th>
				        <th>Menu Order</th>
				        <th>Menu Action</th>
				      </tr>
				    </thead>
    
					<?php
						$hmenus = $this->db->get('linksorting');
		    			$hmenus = $hmenus->result_array();
					foreach($hmenus as $rows) {
					echo '
			<tbody>
		      	<tr>
			        <td>'.$rows['link'].'</td>
			        <td>'.$rows['name'].'</td>
			        <td>'.$rows['id'].'</td>
			        <td><a type="submit" href="'.base_url().'pagesortingcontroller/deleteDB1/'.$rows['id'].' "class="btn btn-primary">Delete</a></td>
			    </tr>
			</tbody>';	
			}
				?>
			</table>

					<h2 class="pink-md-heading">Add Footer Menus Here</h2>
					<?php echo form_open_multipart('pagesortingcontroller/footer/'); ?>
					<marquee>Add Only 5 Menus,And Size OF The Menu Name Should Be Same As Currently Menus Name</marquee>
					<div class="form-group">
							<input type="text" class="form-control" name="name" placeholder="Page Name.."  value = "<?=set_value('name');?>">
						</div>
						
						<div class="form-group">
							<input type="text" class="form-control" name="link" placeholder="Page Link.."  value = "<?=set_value('link)');?>">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="order" placeholder="Page Order.."  value = "<?=set_value('order');?>">
						</div>
						<button type="submit" name="submit" class="btn btn-primary">Modify Footer Page Sorting</button>
					<?php echo form_close();?>

					<table class="table table-striped">
					<h2 class="pink-md-heading">Delete Footer Menus Below</h2>
				  	<thead>
				      <tr>
				        <th>Menu Link</th>
				        <th>Menu Name</th>
				        <th>Menu Order</th>
				        <th>Menu Action</th>
				      </tr>
				    </thead>
    
					<?php
						$fmenus = $this->db->get('linksortingfooter');
		    			$fmenus = $fmenus->result_array();
					foreach($fmenus as $rows) {
					echo '
			<tbody>
		      	<tr>
			        <td>'.$rows['link'].'</td>
			        <td>'.$rows['name'].'</td>
			        <td>'.$rows['id'].'</td>
			        <td><a type="submit" href="'.base_url().'pagesortingcontroller/deleteDB2/'.$rows['id'].' "class="btn btn-primary">Delete</a></td>
			    </tr>
			</tbody>';	
			}
				?>
			</table>

			</div>
			</div>
		</section>	
		<!-- header-ended -->
<?php include ('footer-admin.php');?>