<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . '/Inc/IncludeGlobal.php');

	/*
	$lang = $_GET['lang'];
	$_SESSION['lang'] = $lang;
	setcookie('lang', $lang, time() + $SessionTime);	
	
	if(isset($_SESSION['lang'])){ 		// 如果在SESSION中發現有語系值
		$lang = $_SESSION['lang']; 		// 設置SESSION
	}elseif(isset($_COOKIE['lang'])){ 	// 如果在COOKIE中發現有語系值
		$lang = $_COOKIE['lang']; 		// 設置cookie
	}else{
		$lang = 'tw';  					// 預設成tw中文
	}
	*/
	
	$cookieexpiry = (time() + $SessionTime);
	setcookie("lang", 'tw', $cookieexpiry, '/');
	
	$lang = $_COOKIE['lang'];
	
	/* 載入語系檔案 */	
	require_once($_SERVER['DOCUMENT_ROOT'] . '/Languages/Lang-' . $lang . '.php');
?>