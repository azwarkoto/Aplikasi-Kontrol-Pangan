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

    public function getById($id)
    {
        $get = $this->mHarga->get($id);
        foreach ($get as $value) {
            $result = array(
                "id"=> $value->id,
                "id_pasar"=> $value->id_pasar,
                "id_komoditi"=> $value->id_komoditi,
                "harga"=> $value->harga,
                "tanggal"=> $value->tanggal,
            );
        }
        header("Content-Type: application/json; charset=UTF-8");
        echo json_encode($result);
    }

}

/* End of file Harga.php */

?>