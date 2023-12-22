<?php
class Model_buku extends CI_Model {
    function ambil_data()
    {
        $query = $this->db->get('book');
        return $query->result();
    }
    
    function ambil_data_id($id)
    {
        $query = $this->db->get_where('book', array('id' => $id));
        return $query->result();
    }
    function tambah_data($data)
    {
        $this->db->insert('book', $data);
        return $this->db->affected_rows();
    }
    function edit_data($id, $data){
        $this->db->where('id', $id);
        $this->db->update('book', $data);
        return $this->db->affected_rows();
    }
    function hapus_data($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('book');
        return $this->db->affected_rows();
    }
}

?>