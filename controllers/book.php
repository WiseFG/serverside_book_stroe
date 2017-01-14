<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller {

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
		$this->load->view('shop');
	}
	public function loadBookGeneral($offset)
	{
		//$book=$this->input->post('name');
	
		$this->load->model('bookModel');
		$res=$this->bookModel->loadBookGeneral($offset);
	}
	public function add()
	{
		$name=$this->input->post('name');
		$writer=$this->input->post('writer');
		$publishedDate=$this->input->post('publishedDate');
		$publisher=$this->input->post('publisher');
		$description=$this->input->post('description');
		$price=$this->input->post('price');
		$count=$this->input->post('count');
		$photo=$this->input->post('photo');
		$category=$this->input->post('category');
	
		$this->load->model('bookModel');
		$res=$this->bookModel->add($name, $writer, $publishedDate, $publisher, $description, $price, $count, $photo, $category );
	}
}
