<head>	
	<?php $this->load->view('/inc/_site_head.php'); ?>	
	<?php $this->load->view('inc/_site_header'); ?>
</head>

<body>
	<div class="container">
		<div class="content">
			<form action="<?php echo site_url("/user/logining"); ?>"
				method="post"> 
			<?php if(isset($errorMessage)){ ?>
				<div class="alert alert-error"><?php echo $errorMessage; ?></div>
			<?php } ?>
			
			<table>
					<tr >
						<td width="120px">
						<?php echo $this->lang->line('User_Account'); ?>
					</td>
					<?php if(isset($account)){ ?>
						<td><input type="text" name="account"
							value="<?php echo htmlspecialchars($account); ?>" /></td>
					<?php }else{ ?>
						<td><input type="text" name="account" /></td>
					<?php } ?>
				</tr>
					<tr>
						<td>
						<?php echo $this->lang->line('User_InputPassword'); ?> 
					</td>
						<td><input type="password" name="password" /></td>
					</tr>
					<tr>
						<td></td>
						<td align="right"><input type="submit" class="btn"
							value="<?php echo $this->lang->line('User_Submit'); ?>" /></td>
					</tr>
				</table>
			</form>
		</div>
	</div>

	<?php $this->load->view('inc/_site_footer'); ?>
</body>