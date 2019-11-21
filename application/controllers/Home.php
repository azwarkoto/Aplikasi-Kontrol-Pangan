<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mHarga');
		$this->load->model('mKomoditi');
	}

	public function index()
	{
		$data['pangan'] = $this->loadHarga();
		$this->load->view('admin/pages/home',$data);
	}

	public function loadHarga()
	{
		$result = $this->mKomoditi->getAll();
		foreach ($result as $row) {
			$find = $this->mHarga->getByKomoditi($row->id);
			if ($find->num_rows() != 0) {
				$harga_avg = 0;
				foreach ($find->result_array() as $value) {
					$harga_avg = $harga_avg + $value['harga'];
				}
				$harga_avg /= $find->num_rows();
				$hasil[] = array(
					"row" => "{$find->num_rows()}",
					"id" => $row->id,
					"gambar" => $row->gambar,
					"nama" => $row->nama,
					"harga" => ceil($harga_avg),
					"status" => $this->cekHarga($row->id,$harga_avg)
				);
			}
		}

		// header("Content-Type: application/json; charset=UTF-8");
		// echo json_encode($hasil);

		return $hasil;
	}

	public function cekHarga($id, $harga_avg)
	{
		$status = array();
		$harga_avg2 = 0;
		$find = $this->mHarga->getByKomoditiAndDate($id);
		if ($find->num_rows() != 0) {
			foreach ($find->result_array() as $value) {
				$harga_avg2 = $harga_avg2 + $value['harga'];
			}
			$harga_avg2 /= $find->num_rows();
			if ($harga_avg2 < $harga_avg) {
				$status[] = array(
					'harga' => "turun",
					'beda' => ceil($harga_avg - $harga_avg2)
				);
			}else if ($harga_avg2 > $harga_avg) {
				$status[] = array(
					'harga' => "naik",
					'beda' => ceil($harga_avg2 - $harga_avg)
				);
			}else{
				$status[] = array(
					'harga' => "tetap",
					'beda' => $harga_avg
				);
			}
		}
		return $status;
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */