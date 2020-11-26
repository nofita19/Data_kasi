<?php 

class Data_kasi extends CI_Controller{

    public function index()
    {
        $data['Jadwal'] = $this->Model_kasi->tampil_data()->result();
        $this->load->view('view_kasi', $data);
    }
    //public function update(){
        //$id=$this->input->post('id');
        //$Nama = $this->input->post('Nama');
        //$NIP = $this->input->post('NIP');
        //$Tanggal = $this->input->post('Tanggal');
        //$Keterangan = $this->input->post('Keterangan');
        //$Seksi = $this->input->post('Seksi');

        //$data = array(
            //'Nama' => $Nama,
            //'NIP' => $NIP,
            //'Tanggal' => $Tanggal,
            //'Keterangan' => $Keterangan,
            //'Seksi' => $Seksi
        //);

        //$where = array(
            //'id' => $id
        //);

        //$this->Model_kasi->update_data($where, $data, 'Jadwal');
        //redirect('Data_Kasi');
    //}
    public function hapus($id){
        $where = array('id'=>$id);
        $this->Model_kasi->hapus_data($where, 'Jadwal');
        redirect('Data_kasi/index');
    }

}