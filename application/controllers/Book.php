<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller {

	public function index()
	{
		$this->load->view('book/layout');
	}

	public function template_list()
	{
		$this->load->view('book/list');
	}

	public function template_detail()
	{
		$this->load->view('book/detail');
	}

}

/* End of file Book.php */
/* Location: ./application/controllers/Book.php */