<head>	
	<?php $this->load->view('/inc/head.php'); ?>	
	<link type="text/css" rel="stylesheet" href="<?php echo base_url("res/bootstrap/css/bootstrap.css"); ?>"/>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url("res/bootstrap/css/bootstrap-responsive.css"); ?>"/>
</head>

<body>

<div >
	<table >
		<tr>
			<td width="150px">
				<?php  echo $this->lang->line('Account'); ?>
			</td width="150px">
			<td>
				<input type="text" name="account" />
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $this->lang->line('InputPassword'); ?>
			</td>
			<td>
				<input type="password" name="password" />
			</td>
		</tr>
		<tr>
			<td>
				<?php echo $this->lang->line('RePassword'); ?>
			</td>
			<td>
				<input type="password" name="passwordrt" />
			</td>
		</tr>
		<tr>
			<td></td>
			
			<td colspan="2">
				<input class="btn" type="submit" value="<?php echo $this->lang->line('Submit'); ?>" />
			</td>
		</tr>
	</table>
</div>

</body>