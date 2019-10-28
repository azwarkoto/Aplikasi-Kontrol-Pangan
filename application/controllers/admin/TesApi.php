<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TesApi extends CI_Controller {

	public function index()
	{
			
	}

	function posts()
	{
		$date = date("Y-m-d");

		$this->db->select('table_komoditi.id as id_komoditi , table_komoditi.nama as komoditi,table_pasar.nama as pasar,table_harga.harga');
		$this->db->from('table_harga');
		$this->db->join('table_komoditi', 'table_harga.id_komoditi = table_komoditi.id');
		$this->db->join('table_pasar', 'table_harga.id_pasar = table_pasar.id');
		$this->db->order_by('table_pasar.nama', 'asc');
		$this->db->order_by('table_komoditi.id', 'asc');
		$query = $this->db->get()->result();
		
		$harga = $this->getHargaAverage($query);

		$result = array(
			"result" => "OK",
			"komoditi" => array(
				array(
					"nama" => "asasasa",
					"harga" => array(
						"harga_sekarang" => 100,
						"status" => "naik",
						"margin" => 2
					) 
				),
				array(
					"nama" => "asasasa",
					"harga" => array(
						"harga_sekarang" => 100,
						"status" => "naik",
						"margin" => 2
					) 
				),
				array(
					"nama" => "asasasa",
					"harga" => array(
						"harga_sekarang" => 100,
						"status" => "naik",
						"margin" => 2
					) 
				),
				array(
					"nama" => "asasasa",
					"harga" => array(
						"harga_sekarang" => 100,
						"status" => "naik",
						"margin" => 2
					) 
				)
			)
		);

		header('Content-Type: application/json');
		echo json_encode($result);
	}

	function getHargaAverage($data)
	{
		// $this->db->select('table_komoditi.id');
		// $this->db->from('table_komoditi');
		// $query = $this->db->get();

		// for ($i = 0; $i < count($data); $i++) {
		// 	for ($j = 0; $j < count($query); $j++) {

		// 	}
		// }
		// return $query;
	}
}

/* End of file TesApi.php */
/* Location: ./application/controllers/admin/TesApi.php */