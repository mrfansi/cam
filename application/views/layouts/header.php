<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $judul ?></title>
	<?php
		echo $deskripsi;
		echo $keywords;
		echo $this->layout->print_includes();
	?>
</head>
<body>
	<!-- START NAV -->
	<nav class="navbar is-white">
		<div class="container">
			<div class="navbar-brand">
			    <a class="navbar-item" href="<?php echo base_url(); ?>">
			      	<img src="<?php echo base_url('assets/img/login-hamster-large.png'); ?>" width="28" height="28">
			    </a>
			    <div class="navbar-burger burger" data-target="navMenu">
			      	<span></span>
			    	<span></span>
			    	<span></span>
			    </div>
			</div>
			<div id="navMenu" class="navbar-menu">
			    <div class="navbar-start">
			    	<a class="navbar-item" href="<?php echo base_url('home'); ?>">
			        	Home
			      	</a>
			      	<a class="navbar-item" href="<?php echo base_url('manage/pop'); ?>">
			        	POP
			      	</a>

			      	<a class="navbar-item" href="<?php echo base_url('manage/backbone'); ?>">
			        	Backbone
			      	</a>
			      	<a class="navbar-item" href="<?php echo base_url('manage/vlan'); ?>">
			        	VLAN
			      	</a>
			      	<a class="navbar-item" href="<?php echo base_url('manage/switch'); ?>">
			        	Switch
			      	</a>
			      	<a class="navbar-item" href="<?php echo base_url('manage/router'); ?>">
			        	Router
			      	</a>

			      	<div class="navbar-item has-dropdown is-hoverable">
			      		<a class="navbar-link" href="#">
			      			Upload Script	
			      		</a>
			      		<div class="navbar-dropdown is-boxed">
			      			<a class="navbar-item" href="<?php echo base_url('script/mikrotik'); ?>">Mikrotik</a>
					      	<a class="navbar-item" href="<?php echo base_url('script/cisco'); ?>">Cisco Switch Catalyst</a>
					    </div>
			      	</div>

			      	<a class="navbar-item" href="<?php echo base_url('systemlog'); ?>">
			        	Log
			      	</a>
			    </div>

			    <div class="navbar-end">
			    	<p class="navbar-item">Halo, <?php echo $_SESSION['user_id']; ?></p>
			    	<a class="navbar-item" href="<?php echo base_url('auth/logout'); ?>">
			        	Keluar
			      	</a>
			    </div>
			</div>
		</div>
	</nav>

