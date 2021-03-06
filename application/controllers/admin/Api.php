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
		$this->db->select('table_komoditi.nama as komoditi,table_pasar.nama as pasar,table_harga.harga');
		$this->db->from('table_harga');
		$this->db->join('table_komoditi', 'table_harga.id_komoditi = table_komoditi.id');
		$this->db->join('table_pasar', 'table_harga.id_pasar = table_pasar.id');
		$this->db->order_by('table_pasar.nama', 'asc');
		$query = $this->db->get()->result();
		$result = array(
			"result" => "OK",
			"data" => $query
		);
		header('Content-Type: application/json');
		echo json_encode($result);
	}
}