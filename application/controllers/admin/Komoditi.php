<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Komoditi extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mKomoditi','komoditi');
    }
    
    public function index()
    {
        $data = [
            'data' => '',
            'pages' => "komoditi/index",
        ];
        $this->load->view('admin/layouts/dashboard',$data);
    }

    public function save(){
        $nama = $this->input->post('nama');
        $data = array("nama" =>$nama);
        $this->komoditi->save($data);
    }

    public function delete($id){
        $this->komoditi->delete($id);
    }

    public function edit($id){
        $this->komoditi->edit($id,$data);
    }

}

/* End of file Komoditi.php */

?>