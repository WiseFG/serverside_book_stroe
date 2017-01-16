<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('login');
	}
	public function register()
	{
		$form_data = $this->input->post();
		
		 //$username = $this->input->post("reg_user");
		$this->load->model('LoginModel');
		$res=$this->LoginModel->registration($form_data);
		if($res)
		{
			$res=$this->LoginModel->setCart($form_data);
			 redirect('home', 'refresh');	
		}
		else
		{
			redirect('login', 'refresh');	
		}

	}
	function pro_login()
	{
		 
		$this->load->view('includes/process_login.php');		
	}	
	function logout()
	{
	
		$this->load->view('includes/logout.php');		
	}
}
