<head>	
	<?php $this->load->view('/inc/_site_head.php'); ?>	
</head>

<div class="container">
	<div class="alert alert-success">
		<?php echo $account; ?><?php echo $this->lang->line('User_RegisterSuccess'); ?>
		<a href="<?php echo site_url("user/login"); ?>"><?php echo $this->lang->line('User_Login'); ?></a>
	</div>
</div>