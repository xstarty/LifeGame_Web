<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<link type="text/css" rel="stylesheet" href="<?php echo base_url("res/style.css"); ?>">
<link type="text/css" rel="stylesheet" href="<?php echo base_url("res/bootstrap/css/bootstrap.css"); ?>"/>
<link type="text/css" rel="stylesheet" href="<?php echo base_url("res/bootstrap/css/bootstrap-responsive.css"); ?>"/>

<link rel="shortcut icon" href="<?php echo base_url("res/favicon.png"); ?>"/>

<title><?php 
	if(isset($pageTitle)){ 
		echo $pageTitle ; 							// 透過變數設定
	} else{ 
		echo $this->lang->line('Title'); 	// 預設標題
	} 
?></title>