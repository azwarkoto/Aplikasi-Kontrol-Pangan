<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pasar extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mPasar');
    }
    
    public function index()
    {

        $data = [
            'data' => $this->mPasar->getAll(),
            'pages' => "pasar/index",
        ];
        $this->load->view('admin/layouts/dashboard',$data);
    }

    public function save(){
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $lokasi = $this->input->post('lokasi');
        $data = array("nama" =>$nama,"alamat" => $alamat, "lokasi" => $lokasi);
        
        if ($id == "") {
            $this->mPasar->save($data);   
        }else {
            $this->edit($id, $data);
        }
        
        redirect('admin/pasar','refresh');
    }

    public function delete($id){
        $this->mPasar->delete($id);
        redirect('admin/pasar','refresh');
    }

    public function getById($id)
    {
        $get = $this->mPasar->get($id);
        foreach ($get as $value) {
            $result = array(
                'id' => $value->id,
                'nama' => $value->nama,
                'alamat' => $value->alamat,
                'lokasi' => $value->lokasi
            );
        }
        header("Content-Type: application/json; charset=UTF-8");
        echo json_encode($result);
    }

    public function edit($id,$data){
        $result = $this->mPasar->edit($id,$data);
        redirect('admin/pasar','refresh');
    }

}

/* End of file Pasar.php */

?>