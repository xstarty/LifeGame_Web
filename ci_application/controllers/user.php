<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
	public function register()
	{
		if ( ! file_exists(APPPATH.'views/user/register.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}	
		
		$this->load->view('templates/header');
		$this->load->view('user/register');
		$this->load->view('templates/footer');	
	}

	public function login(){			
		if ( ! file_exists(APPPATH.'views/user/login.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}	
				
		$this->load->view('templates/header');
		$this->load->view('user/login');
		$this->load->view('templates/footer');		
	}

	public function registering(){
		$account = $this->input->post("account");
		$password= $this->input->post("password");
		$passwordrt= $this->input->post("passwordrt");
		
		if( trim($password) =="" || trim($account) =="" ){
			$this->load->view('register',Array(
				"errorMessage" => $this->lang->line('AccPwdEmpty') ,
				"account" => $account
			));
			
			return false;
		}
		
		if( $password != $passwordrt ){
			// 如果不一致，我們讀取 register view，
			// 但將 $account 跟錯誤訊息帶入作為處理
			$this->load->view('user/register',Array(
				"errorMessage" => $this->lang->line('RePwdError') ,
				"account" => $account
			));
			
			return false;
		}
		
		$this->load->model("UserModel");
                if($this->UserModel->checkUserExist(trim($account))){ //檢查帳號是否重複
			$this->load->view('user/register',Array(
				"errorMessage" => $this->lang->line('AccountExist') ,
				"account" => $account
			));
			
			return false;
		}
		
		$this->UserModel->insert(trim($account), trim($password));  //完成新增動作
		
		$this->load->view('user/register_success',Array(
				"account" => $account
		));
	}
}