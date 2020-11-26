<?php 
 
class Model_kasi extends CI_Model{
    
    public  function tampil_data()
    {
        return  $this->db->get('Jadwal');
    }
    public function hapus_data($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }
}