<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class mHarga extends CI_Model {

    public function save($data){
        $query = $this->db->insert('table_harga', $data);
        return $query;
    }

    public function delete($id){
        $query = $this->db->delete('table_harga');
        return $query;
    }

    public function get($id){
        $this->db->where('id', $id);
        $query = $this->db->get('table_harga');
        return $query->result();
    }

    public function getAll(){
        $query = $this->db->get('table_harga');
        return $query->result();
    }

    public function edit($id,$data){
        $this->db->where('id', $id);
        $query = $this->db->update('table_harga', $data);
        return $query;
    }

}

/* End of file mHarga.php */

?>