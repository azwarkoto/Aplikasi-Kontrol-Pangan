<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Komoditi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mKomoditi');
    }
    
    public function index()
    {
        $data = [
            'data' => $this->mKomoditi->getAll(),
            'pages' => "komoditi/index",
        ];
        $this->load->view('admin/layouts/dashboard',$data);
    }

    public function save(){
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');

        $config['upload_path']          = './gambar/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('berkas')){
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('v_upload', $error);
        }else{
            $data = array('upload_data' => $this->upload->data());
            if ($id == "") {
                $komoditi = array(
                    "nama" => $nama,
                    "gambar" =>  $data['upload_data']['full_path']
                );
                $this->mKomoditi->save($komoditi);   
            }else {
                $this->edit($id, $komoditi);
            }
        }

        redirect('admin/komoditi','refresh');
    }

    public function delete($id){
        $this->mKomoditi->delete($id);
        redirect('admin/komoditi','refresh');
    }

    public function edit($id,$data){
        $this->mKomoditi->edit($id,$data);
    }

    public function getById($id)
    {
        $get = $this->mKomoditi->get($id);
        foreach ($get as $value) {
            $result = array(
                'id' => $value->id,
                'nama' => $value->nama
            );
        }
        header("Content-Type: application/json; charset=UTF-8");
        echo json_encode($result);
    }


}

/* End of file Komoditi.php */

?>