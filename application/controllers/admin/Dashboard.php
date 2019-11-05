<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
    {
        $data = [
            'pages' => "dashboard/index",
        ];
        $this->load->view('admin/layouts/dashboard',$data);
    }

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/admin/Dashboard.php */