<head>	
	<?php $this->load->view('/inc/_site_head.php'); ?>	
	<?php $this->load->view('inc/_site_header'); ?>
</head>

<body>

<div >
	<form action="<?php echo site_url("/user/registering"); ?>" method="post" >
		<?php  if (isset($errorMessage)){?>
		<div class="alert alert-error">
			<?=$errorMessage?>
		</div>
		<?php }?>
		
		<table >
			<tr>
				<td width="150px">
					<?php echo $this->lang->line('User_Account'); ?>
				</td width="150px">
				<td>
					<?php if(isset($account)){ ?>
					<input type="text" name="account" value="<?php echo htmlspecialchars($account); ?>" />
					<?php }else{ ?>
					<input type="text" name="account" />
					<?php } ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo $this->lang->line('User_InputPassword'); ?>
				</td>
				<td>
					<input type="password" name="password" />
				</td>
			</tr>
			<tr>
				<td>
					<?php echo $this->lang->line('User_RePassword'); ?>
				</td>
				<td>
					<input type="password" name="passwordrt" />
				</td>
			</tr>
			<tr>
				<td></td>
				
				<td colspan="2">
					<input class="btn" type="submit" value="<?php echo $this->lang->line('User_Submit'); ?>" />
				</td>
			</tr>
		</table>
	</form>
</div>


	<?php $this->load->view('inc/_site_footer'); ?>
</body>