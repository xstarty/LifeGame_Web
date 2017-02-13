<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class User extends CI_Controller {
	// Register
	public function register() {
		if (! file_exists ( APPPATH . 'views/user/register.php' )) {
			// Whoops, we don't have a page for that!
			show_404 ();
		}
		
		$this->load->view ( 'user/register', Array (
				'pageTitle' => $this->lang->line ( 'Title_Register' ) 
		) );
	}
	public function registering() {
		$account = $this->input->post ( "account" );
		$password = $this->input->post ( "password" );
		$passwordrt = $this->input->post ( "passwordrt" );
		
		// 帳密是否為空值
		if (trim ( $password ) == "" || trim ( $account ) == "" || trim ( $passwordrt ) == "") {
			$this->load->view ( 'user/register', Array (
					"errorMessage" => $this->lang->line ( 'User_AccPwdEmpty' ),
					"account" => $account 
			) );
			
			return false;
		}
		
		// 如果密碼不一致，我們讀取 register view，但將 $account 跟錯誤訊息帶入作為處理
		if ($password != $passwordrt) {
			$this->load->view ( 'user/register', Array (
					"errorMessage" => $this->lang->line ( 'User_RePwdError' ),
					"account" => $account 
			) );
			
			return false;
		}
		
		// 檢查帳號是否重複
		$this->load->model ( "UserModel" );
		if ($this->UserModel->checkUserExist ( trim ( $account ) )) {
			$this->load->view ( 'user/register', Array (
					"errorMessage" => $this->lang->line ( 'User_AccountExist' ),
					"account" => $account 
			) );
			
			return false;
		}
		
		$hash = password_hash ( $password, PASSWORD_BCRYPT );
		$this->UserModel->insert ( trim ( $account ), trim ( $hash ) ); // 執行新增動作
		
		$this->load->view ( 'user/register_success', Array (
				"account" => $account 
		) );
	}
	
	// Login
	public function login() {
		if (! file_exists ( APPPATH . 'views/user/login.php' )) {
			// Whoops, we don't have a page for that!
			show_404 ();
		}
		
		// 已經登入的話直接回首頁
		if ($this->session->userdata ( 'is_login' )) {
			redirect ( site_url ( "/" ) ); // 轉回首頁
			return true;
		}
		
		$this->load->view ( "user/login", Array (
				"pageTitle" => $this->lang->line ( 'Title_Login' ) 
		) );
	}
	public function logining() {
		// 已經登入的話直接回首頁
		if ($this->session->userdata ( 'is_login' )) {
			redirect ( site_url ( "/" ) ); // 轉回首頁
			return true;
		}
		
		$account = trim ( $this->input->post ( "account" ) );
		$password = trim ( $this->input->post ( "password" ) );
		
		$this->load->model ( "UserModel" );
		$user = $this->UserModel->getUser ( $account );
		
		// 判斷帳密是否正確
		$hash = password_hash ( $password, PASSWORD_BCRYPT );
		if ($user == null || ! password_verify ( $password, $user->Password )) {
			$this->load->view ( "user/login", Array (
					"pageTitle" => $this->lang->line ( 'Title_Login' ),
					"account" => $account,
					"errorMessage" => $this->lang->line ( 'User_AccPwdError' ) 
			) );
			return true;
		}
		
		$session ['is_login'] = TRUE;
		$session ['account'] = $user->account;
		$this->session->set_userdata ( $session );
		
		redirect ( site_url ( "/" ) ); // 轉回首頁
	}
	public function logout() {
		$this->session->sess_destroy ();
		redirect ( site_url ( "/" ) ); // 轉回首頁
	}
}