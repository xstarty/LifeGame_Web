<head>	
	<?php $this->load->view('/inc/head.php'); ?>	
	<link type="text/css" rel="stylesheet" href="<?php echo base_url("res/bootstrap/css/bootstrap.min.css"); ?>"/>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url("res/bootstrap/css/bootstrap-responsive.min.css"); ?>"/>
</head>

<body>
	<div class="container">
		<table class="table table-bordered">
			<tr>
				<td>
					Account
				</td>
				<td>
					<input type="text" name="account" />
				</td>
			</tr>
			<tr>
				<td>
					Password
				</td>
				<td>
					<input type="password" name="password" />
				</td>
			</tr>
			<tr>
				<td>
					Re-type Password
				</td>
				<td>
					<input type="password" name="passwordrt" />
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input class="btn" type="submit" value="送出" />
				</td>
			</tr>
		</table>
	</div>
</body>