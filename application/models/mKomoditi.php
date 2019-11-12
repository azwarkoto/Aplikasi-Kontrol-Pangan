<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class mKomoditi extends CI_Model {
    
    public function save($nama){
        $query = $this->db->insert('table_komoditi', $nama);
        return $query;
    }

    public function delete($id){
        $this->db->where('id', $id);
        $query = $this->db->delete('table_komoditi');
        return $query;
    }

    public function get($id){
        $this->db->where('id', $id);
        $query = $this->db->get('table_komoditi');
        return $query->result();
    }

    public function getAll(){
        $query = $this->db->get('table_komoditi');
        return $query->result();
    }

    public function getJoinHarga()
    {
        $this->db->select('table_komoditi.id as id_komoditi,nama');
        $this->db->from('table_komoditi');
        $this->db->join('table_harga', 'table_komoditi.id = table_harga.id_komoditi');
        $result = $this->db->get();
        return $result->result();
    }

    public function edit($id,$data){
        $this->db->where('id', $id);
        $query = $this->db->update('table_komoditi', $data);
        return $query;
    }
}

/* End of file Komoditi.php */

?>