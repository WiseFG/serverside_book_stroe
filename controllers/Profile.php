<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

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
		$this->load->view('profile');
	}
	public function select()
	{
		$user=$this->input->post('username');
	
		$this->load->model('ProfileModel');
		$res=$this->ProfileModel->loadInfo($user);
	}
	public function update()
	{
		$username=$this->input->post('username');
		$name=$this->input->post('name');
		$fname=$this->input->post('fname');
		$address=$this->input->post('address');
		$email=$this->input->post('email');
		$tel=$this->input->post('tel');
	
		$this->load->model('ProfileModel');
		$res=$this->ProfileModel->updateInfo($username,$name,$fname,$address,$email,$tel);
	}
}
