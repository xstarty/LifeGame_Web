<div class="header" align="center">header</div>

<div class="header-menu">
	<div class="content-header">
		<div class="navbar navbar-inverse">
			<div class="navbar-inner">
				<a class="brand" href="<?php echo site_url("/"); ?>"><?php echo $this->lang->line('Title'); ?></a>
				<ul class="nav">
				</ul>

				<!-- login status -->			
				    <?php if($this->session->userdata('is_login')){ ?>
					<ul class="nav pull-right">
					<li><a href="#"><?php echo $this->session->userdata('account'); ?></a></li>
					<li class="divider-vertical"></li>
					<li><a href="<?php echo site_url("user/logout"); ?>"><?php echo $this->lang->line('User_Logout'); ?></a></li>
				</ul>
			        <?php }else{ ?> 
					<ul class="nav pull-right">
					<li><a href="<?php echo site_url("user/register"); ?>"><?php echo $this->lang->line('User_Register'); ?></a></li>
					<li class="divider-vertical"></li>
					<li><a href="<?php echo site_url("user/login"); ?>"><?php echo $this->lang->line('User_Login'); ?></a></li>
				</ul>        
			        <?php } ?>
				  </div>
		</div>
	</div>
</div>
