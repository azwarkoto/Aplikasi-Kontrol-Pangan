<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class mHarga extends CI_Model {

    public function save($data){
        $query = $this->db->insert('table_harga', $data);
        return $query;
    }

    public function delete($id){
        $this->db->where('id', $id);
        $query = $this->db->delete('table_harga');
        return $query;
    }

    public function get($id){
        $this->db->where('id', $id);
        $query = $this->db->get('table_harga');
        return $query->result();
    }

    public function getByKomoditi($id)
    {
        $query = $this->db->query('SELECT * FROM table_harga WHERE id_komoditi ='.$id);
        return $query;   
    }

    public function getByKomoditiAndDate($id)
    {
        $query = $this->db->query('SELECT * FROM table_harga WHERE id_komoditi ='.$id.' AND tanggal < CURRENT_DATE()');
        return $query;   
    }

    public function getAll(){
        $this->db->select('table_pasar.nama as pasar, table_komoditi.nama as komoditi, harga, tanggal,table_harga.id as id, table_harga.id_pasar as id_pasar, table_harga.id_komoditi as id_komoditi');
        $this->db->from('table_harga');
        $this->db->join('table_pasar', 'table_pasar.id = table_harga.id_pasar');
        $this->db->join('table_komoditi', 'table_komoditi.id = table_harga.id_komoditi');
        $query = $this->db->get()->result();
        return $query;
    }

    public function edit($id,$data){
        $this->db->where('id', $id);
        $query = $this->db->update('table_harga', $data);
        return $query;
    }

}

/* End of file mHarga.php */

?>