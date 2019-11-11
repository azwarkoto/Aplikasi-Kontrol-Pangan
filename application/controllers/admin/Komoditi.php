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
        $data = array("nama" =>$nama);

        if ($id == "") {
            $this->mKomoditi->save($data);   
        }else {
            $this->edit($id, $data);
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