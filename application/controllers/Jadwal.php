<?php
class Jadwal extends CI_Controller{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Jadwal_model');
    }

    public function index()
    {
        $data['Jadwal'] = $this->Jadwal_model->getAllJadwal();
        $this->load->view('View_jadwal', $data);
    }

}