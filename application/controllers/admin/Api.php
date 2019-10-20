<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mHarga','harga');
		$this->load->model('mKomoditi','komoditi');
		$this->load->model('mPasar','pasar');
	}

	function posts()
	{
		$this->db->select('table_komoditi.nama,table_pasar.nama,table_harga.harga,table_komoditi.gambar');
		$this->db->from('table_harga');
		$this->db->join('table_komoditi', 'table_harga.id_komoditi = table_komoditi.id');
		$this->db->join('table_pasar', 'table_harga.id_pasar = table_pasar.id');
		$query = $this->db->get()->result();

		$result = array(
			"result" => "OK",
			"data" => $query
		);
		echo json_encode($result);
	}

}

/* End of file Api.php */
/* Location: ./application/controllers/Api.php */