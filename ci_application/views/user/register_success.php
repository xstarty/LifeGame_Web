<head>	
	<?php $this->load->view('/inc/head.php'); ?>	
	<link type="text/css" rel="stylesheet" href="<?php echo base_url("res/bootstrap/css/bootstrap.css"); ?>"/>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url("res/bootstrap/css/bootstrap-responsive.css"); ?>"/>
</head>

<div class="container">
	<div class="alert alert-success">
		<?=$account?><?php echo $this->lang->line('RegisterSuccess'); ?>
		<a href="<?=site_url("user/login")?>"><?php echo $this->lang->line('Login'); ?></a>
	</div>
</div>