<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Harga extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mHarga');
    }
    
    public function index()
    {
        $data = [
            'data' => $this->mHarga->getAll(),
            'pages' => "harga/index",
        ];
        $this->load->view('admin/layouts/dashboard',$data);
    }

    public function save(){
        $nama = $this->input->post('nama');
        $data = array("nama" =>$nama);
        $this->harga->save($data);
    }

    public function delete($id){
        $this->harga->delete($id);
    }

    public function edit($id){
        $this->harga->edit($id,$data);
    }

}

/* End of file Harga.php */

?>