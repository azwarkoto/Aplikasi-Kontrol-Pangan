<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pasar extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mPasar','pasar');
    }
    
    public function index()
    {

        $data = [
            'pasar' => $this->pasar->getAll(),
            'pages' => "pasar/index",
            'data' => array()
        ];

        // $data['pasar'] = $this->pasar->getAll();
        // echo "halo";
        $this->load->view('admin/layouts/dashboard', $data);
    }

    public function save(){
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $lokasi = $this->input->post('lokasi');
        $data = array("nama" =>$nama,"alamat" => $alamat, "lokasi" => $lokasi);
        $this->pasar->save($data);
    }

    public function delete($id){
        $this->pasar->delete($id);
    }

    public function edit($id){
        $this->pasar->edit($id,$data);
    }

}

/* End of file Pasar.php */

?>