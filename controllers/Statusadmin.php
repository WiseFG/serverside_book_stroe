<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statusadmin extends CI_Controller {

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
		$this->load->view('statusadmin');
	}
	public function loadInvoiceID()
	{
		$this->load->model('StatusadminModel');
		$res=$this->StatusadminModel->loadInvoiceID();
	}

	public function loadInfo()
	{
		$invoiceID=$this->input->post('invoiceID');

		$this->load->model('StatusadminModel');
		$res=$this->StatusadminModel->loadInfo($invoiceID);
	}
	public function update()
	{
		$place=$this->input->post('place');
		$status=$this->input->post('status');
		
	
		$this->load->model('StatusadminModel');
		$res=$this->StatusadminModel->updateInfo($place,$status);
	}
}
