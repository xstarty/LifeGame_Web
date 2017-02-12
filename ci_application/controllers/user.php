<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
	public function register()
	{
		if ( ! file_exists(APPPATH.'views/user/register.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}	
				
		$this->load->view('user/register', Array('pageTitle' => $this->lang->line('Title_Register')));		
	}

	public function login(){			
		if ( ! file_exists(APPPATH.'views/user/login.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}	
						
		$this->load->view('user/login');		
	}

	public function registering(){				
		$account = $this->input->post("account");
		$password = $this->input->post("password");
		$passwordrt = $this->input->post("passwordrt");
		
		// 帳密是否為空值
		if( trim($password) == "" || trim($account) == "" || trim($passwordrt) == ""){
			$this->load->view('user/register',Array(
				"errorMessage" => $this->lang->line('User_AccPwdEmpty') ,
				"account" => $account
			));
			
			return false;
		}
		
		// 如果密碼不一致，我們讀取 register view，但將 $account 跟錯誤訊息帶入作為處理
		if( $password != $passwordrt ){
			$this->load->view('user/register',Array(
				"errorMessage" => $this->lang->line('User_RePwdError') ,
				"account" => $account
			));
			
			return false;
		}
		
		// 檢查帳號是否重複
		$this->load->model("UserModel");
                if($this->UserModel->checkUserExist(trim($account))){ 
			$this->load->view('user/register',Array(
				"errorMessage" => $this->lang->line('User_AccountExist') ,
				"account" => $account
			));
			
			return false;
		}
		
		$this->UserModel->insert(trim($account), trim($password));  // 執行新增動作
		
		$this->load->view('user/register_success',Array(
				"account" => $account				
		));	
	}
}