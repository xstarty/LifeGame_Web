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
}