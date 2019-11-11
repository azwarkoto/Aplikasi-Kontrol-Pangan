<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Harga extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mHarga');
        $this->load->model('mKomoditi');
        $this->load->model('mPasar');
    }
    
    public function index()
    {
        $data = [
            'data' => $this->mHarga->getAll(),
            'pasar' => $this->mPasar->getAll(),
            'komoditi' => $this->mKomoditi->getAll(),
            'pages' => "harga/index"
        ];
        $this->load->view('admin/layouts/dashboard',$data);
    }

    public function save(){
        $pasar = $this->input->post('pasar');
        $komoditi = $this->input->post('komoditi');
        $harga = $this->input->post('harga');
        $data = array(
            "id_pasar" => $pasar,
            "id_komoditi" => $komoditi,
            "harga" => $harga,
            "tanggal" => date("Y-m-d")
        );
        $this->mHarga->save($data);
        redirect('admin/harga','refresh');
    }

    public function delete($id){
        $this->mHarga->delete($id);
        redirect('admin/harga','refresh');
    }

    public function edit($id,$data){
        $this->mHarga->edit($id,$data);
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