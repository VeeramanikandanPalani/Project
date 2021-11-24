<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Registration</title>
	
	<?php include('header.php');?>
</head>
<body>
<div class="container-fluid">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">		  		  
				
				<li class="nav-item">
					<a class="nav-link" href="#" >Create Task</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#" >Create Project</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#" >Login</a>
				</li>
			</ul>
		</div>
	</nav>
</div>
<div class="container">
	<div class="row">
		<div class="col-3 mt-4">			
		<?php if(!$this->session->userdata('username')):?>
		<h2>Not logged in?</h2>
			<h4 class="text-primary">Login Here</h4>
				<?php
					echo form_open('Home/login', ['id' => 'frmUsers']);					
					echo form_label('User Id', 'user_id');
					echo form_input(['name' => 'user_id','class'=>'form-control ']);					
					echo form_label('Password', 'password');
					echo form_input(['type' => 'password', 'name' => 'password','class'=>' form-control']);					
					echo form_submit('btnSubmit', 'Login',['class'=>'btn btn-primary mt-2']);					
					echo form_close();
				endif;
				?>
				<?php if($this->session->userdata('username')):?>
					<h4 class="text-primary">Welcome <?php echo $this->session->userdata('username');?></h4>
					<?php
						echo form_open('Home/logout', ['id' => 'frmUsers']);										
						echo form_submit('btnSubmit', 'Logout',['class'=>'btn btn-primary mt-2']);					
						echo form_close();
					endif;
					?>
<?php 
	if($this->session->flashdata('login_failed')):
		echo "<p class='text-danger mt-3'>".$this->session->flashdata('login_failed')."</p>";
	endif;
?>

		</div>
		<div class="col-6 mt-4">
			<h2 class="text-center">Project List</h2>
			<li class="list-group-item">First Project</li>
			<li class="list-group-item">Second Project</li>
			<li class="list-group-item">ThirdProject</li>
		</div>	
		<div class="col-2 mt-4">
			<li class="list-group-item">Create Project</li>
			<li class="list-group-item">View Project</li>
			<li class="list-group-item">Edit Project</li>
			<li class="list-group-item">Delete Project</li>			
		</div>			
	</div>
</div>
</body>
</html>