<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data = [
			'pages' => "blank",
			'data' => array()
		];

		$this->load->view('admin/layouts/dashboard', $data);
	}

}

/* End of file Welcome.php */
/* Location: ./application/controllers/Welcome.php */